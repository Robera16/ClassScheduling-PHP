<?php
    $tblName = "PhyY2";
    $check = "CsY3";
    $dept_id=2;
    $year=2;             

    $WholeDmt=array();
    $conn3 = mysqli_connect("localhost", "root", "", "schedule")or die("unable to create connection");
    $query="SELECT * FROM $tblName";
    $resultSet=mysqli_query($conn3, $query);
    while($row=mysqli_fetch_assoc($resultSet)){
        array_push($WholeDmt, array($row['day_id'], $row['mt_id']));
    }

    $courseID=array();
    $LectureHour=array();
    $instructors=array();

    $conn1 = mysqli_connect("localhost", "root", "", "data")or die("unable to create connection");
    $selectQuery="SELECT * FROM dept_year_course WHERE dept_id=$dept_id AND year=$year";
    $resultSetQ=mysqli_query($conn1, $selectQuery);

    while($rows=mysqli_fetch_assoc($resultSetQ)){
        array_push($courseID, $rows['course_id']);
        $cid=$rows['course_id'];
        $selectQuery2="SELECT * FROM courses WHERE ID=$cid";
        $resultSet2=mysqli_query($conn1, $selectQuery2);
        $row=mysqli_fetch_assoc($resultSet2);
        array_push($LectureHour, $row['Credit_Hour']);

        $selectQuery3="SELECT * FROM course_instructor WHERE course_id=$cid";
        $resultSet3=mysqli_query($conn1, $selectQuery3);
        $subInstructor=array();
        while($rows2=mysqli_fetch_assoc($resultSet3)){
            array_push($subInstructor, $rows2['instructor_id']);
        }
        array_push($instructors, $subInstructor);
    }

    while(sizeof($courseID)){
        $CLIndex=rand(0,sizeof($courseID)-1);
        $coId=$courseID[$CLIndex];//course   -remove
        $Lh=$LectureHour[$CLIndex];//lectureHour   -remove
        $instructorsID=$instructors[$CLIndex];//available instructor(array)  -remove
        $selectedInstructorIndex=rand(0, sizeof($instructorsID)-1);
        $insID=$instructorsID[$selectedInstructorIndex];//selected instructor
        if($Lh==2){
            LH2($coId, $Lh, $insID, $tblName, $WholeDmt);
        }elseif($Lh==3){
            LH2($coId, $Lh, $insID, $tblName, $WholeDmt);
            LH1($coId, $Lh, $insID, $tblName, $WholeDmt);
        }elseif($Lh==4){
            LH2($coId, $Lh, $insID, $tblName, $WholeDmt);
            LH2($coId, $Lh, $insID, $tblName, $WholeDmt);
        }
        unset($courseID[$CLIndex]);
        unset($LectureHour[$CLIndex]);
        unset($instructors[$CLIndex]);
        $courseID=array_values($courseID);
        $LectureHour=array_values($LectureHour);
        $instructors=array_values($instructors);
    }

    function LH1($coId, $Lh, $insID, $tblName, &$WholeDmt){//1 meetingTime
        $WholeDmtCopy=$WholeDmt;
        generate1($coId, $Lh, $insID, $tblName, $WholeDmtCopy);//day and meetingTime
    }
    function LH2($coId, $Lh, $insID, $tblName, &$WholeDmt){//2 meetingTime
        $WholeDmtCopy2=$WholeDmt;
        generate2($coId, $Lh, $insID, $tblName, $WholeDmtCopy2);//day and meetingTime
    }
    function generate1($coId, $Lh, $insID, $tblName, &$WholeDmtCopy){//generate day and meetingTime
        $WholeDmtCopy=array_values($WholeDmtCopy);
        $eachDmtIndex=rand(0, sizeof($WholeDmtCopy)-1);//randomly select dayMeetingTime(one cell in table)
        $subArr=$WholeDmtCopy[$eachDmtIndex];
        $sDay=$subArr[0];
        $sMt=$subArr[1];
        check1($WholeDmtCopy, $eachDmtIndex, $sDay, $sMt, $coId, $insID, $tblName, $Lh);
    }
    function check1(&$WholeDmtCopy, $eachDmtIndex, $sDay, $sMt, $coId, $insID, $tblName, $Lh){
       
        $conn2 = mysqli_connect("localhost", "root", "", "schedule")or die("unable to create connection");
        $query="SELECT * FROM $tblName where day_id=$sDay AND mt_id=$sMt";
        $resultSet=mysqli_query($conn2, $query);
        $row=mysqli_fetch_assoc($resultSet);
        if ($row['c_id']!=NULL){//not hold
            unset($WholeDmtCopy[$eachDmtIndex]);
            generate1($coId, $Lh, $insID, $tblName, $WholeDmtCopy); 
        }
        else{
            $query3="SELECT * FROM $tblName where day_id=$sDay";
            $resultSet3=mysqli_query($conn2, $query3);
            $checker=0;
            while($row=mysqli_fetch_assoc($resultSet3)){//not at the same day with LH1/LH2
                if ($row['c_id']==$coId){
                    unset($WholeDmtCopy[$eachDmtIndex]);
                    generate1($coId, $Lh, $insID, $tblName, $WholeDmtCopy);
                    break;
                }
                $checker+=1;
            }
            if($checker==8){//
                $query4="SELECT * FROM $check where day_id=$sDay AND mt_id=$sMt";
                $resultSet4=mysqli_query($conn2, $query4);
                $row=mysqli_fetch_assoc($resultSet4);
                if ($row['instructor_id']==$insID){
                    unset($WholeDmtCopy[$eachDmtIndex]);
                    generate1($coId, $Lh, $insID, $tblName, $WholeDmtCopy);
                        
                }else{
                        set1($coId, $Lh, $insID, $tblName, $WholeDmtCopy, $eachDmtIndex, $sDay, $sMt);
                }
            }
        }
    }
    function set1($coId, $Lh, $insID, $tblName, $WholeDmtCopy, $eachDmtIndex, $sDay, $sMt){
        $conn2 = mysqli_connect("localhost", "root", "", "schedule")or die("unable to create connection");
        $query5="UPDATE $tblName SET c_id=$coId, instructor_id=$insID where day_id=$sDay AND mt_id=$sMt";
        mysqli_query($conn2, $query5);
    }

    function generate2($coId, $Lh, $insID, $tblName, &$WholeDmtCopy){//generate day and meetingTime
        $WholeDmtCopy=array_values($WholeDmtCopy);
        $eachDmtIndex=rand(0, sizeof($WholeDmtCopy)-1);//randomly select dayMeetingTime(one cell in table)
        $subArr=$WholeDmtCopy[$eachDmtIndex];
        $sDay=$subArr[0];
        $sMt=$subArr[1];
        check2($WholeDmtCopy, $eachDmtIndex, $sDay, $sMt, $coId, $insID, $tblName, $Lh);
    }
    function check2(&$WholeDmtCopy, $eachDmtIndex, $sDay, $sMt, $coId, $insID, $tblName, $Lh){

        $conn2 = mysqli_connect("localhost", "root", "", "schedule")or die("unable to create connection");
        if($sMt==4 or $sMt==8){
            unset($WholeDmtCopy[$eachDmtIndex]);
            generate2($coId, $Lh, $insID, $tblName, $WholeDmtCopy);
        }
        else{
            $query="SELECT * FROM $tblName where day_id=$sDay AND mt_id=$sMt";//not hold
            $resultSet=mysqli_query($conn2, $query);
            $row=mysqli_fetch_assoc($resultSet);
            if($row['c_id']!=NULL){
                unset($WholeDmtCopy[$eachDmtIndex]);
                generate2($coId, $Lh, $insID, $tblName, $WholeDmtCopy);
            }else{
                $query2="SELECT * FROM $tblName where day_id=$sDay AND mt_id=$sMt+1";//not hold
                $resultSet2=mysqli_query($conn2, $query2);
                $row=mysqli_fetch_assoc($resultSet2);
                if($row['c_id']!=NULL){
                    unset($WholeDmtCopy[$eachDmtIndex]);
                    generate2($coId, $Lh, $insID, $tblName, $WholeDmtCopy);
                }
                else{
                    $query3="SELECT * FROM $tblName where day_id=$sDay";
                    $resultSet3=mysqli_query($conn2, $query3);
                    $checker=0;
                    while($row=mysqli_fetch_assoc($resultSet3)){//not at the same day with LH1/LH2
                        if ($row['c_id']==$coId){
                            unset($WholeDmtCopy[$eachDmtIndex]);
                            generate2($coId, $Lh, $insID, $tblName, $WholeDmtCopy);
                            break;
                        }
                        $checker+=1;
                    }
                    if($checker==8){//
                        $query4="SELECT * FROM $check where day_id=$sDay AND mt_id=$sMt";//not same instructor at the sameTime(day, meetingTime) in other department
                        $resultSet4=mysqli_query($conn2, $query4);
                        $row=mysqli_fetch_assoc($resultSet4);
                        if ($row['instructor_id']==$insID){
                            unset($WholeDmtCopy[$eachDmtIndex]);
                            generate2($coId, $Lh, $insID, $tblName, $WholeDmtCopy);
                                
                        }else{
                            $query4="SELECT * FROM $check where day_id=$sDay AND mt_id=$sMt+1";//not same instructor at the sameTime(day, meetingTime) in other department
                            $resultSet4=mysqli_query($conn2, $query4);
                            $row=mysqli_fetch_assoc($resultSet4);
                            if ($row['instructor_id']==$insID){
                                unset($WholeDmtCopy[$eachDmtIndex]);
                                generate2($coId, $Lh, $insID, $tblName, $WholeDmtCopy);
                            }else{
                                set2($coId, $Lh, $insID, $tblName, $WholeDmtCopy, $eachDmtIndex, $sDay, $sMt);
                            }
                        }
                    }
                }
            }
        }
    }
    function set2($coId, $Lh, $insID, $tblName, $WholeDmtCopy, $eachDmtIndex, $sDay, $sMt){
        $conn2 = mysqli_connect("localhost", "root", "", "schedule")or die("unable to create connection");
        $query5="UPDATE $tblName SET c_id=$coId, instructor_id=$insID where day_id=$sDay AND mt_id=$sMt";
        mysqli_query($conn2, $query5);
        $query6="UPDATE $tblName SET c_id=$coId, instructor_id=$insID where day_id=$sDay AND mt_id=$sMt+1";
        mysqli_query($conn2, $query6);
    }
?>


