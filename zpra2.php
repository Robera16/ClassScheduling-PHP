<?php
    // $conn2 = mysqli_connect("localhost", "root", "", "schedule")or die("unable to create connection");
    // $query="SELECT * FROM csy3 where day_id=1 AND mt_id=1";
    // $resultSet=mysqli_query($conn2, $query);
    // $row=mysqli_fetch_assoc($resultSet);
    // // echo "day_id: ",$row['day_id'], "mt_id: ",$row['mt_id']; echo "<br>";
    // $query="SELECT * FROM csy3 where day_id=1+1 AND mt_id=1+1";
    // $resultSet=mysqli_query($conn2, $query);
    // $row=mysqli_fetch_assoc($resultSet);
    // echo "day_id: ",$row['day_id'], "mt_id: ",$row['mt_id'];

    // $WholeDmt=array();
    // $conn2 = mysqli_connect("localhost", "root", "", "schedule")or die("unable to create connection");
    // $query="SELECT * FROM csy3";
    // $resultSet=mysqli_query($conn2, $query);
    // while($row=mysqli_fetch_assoc($resultSet)){
    //     array_push($WholeDmt, array($row['day_id'], $row['mt_id']));
    // }
    // print_r($WholeDmt);

    // $WholeDmt=array(1,2,3,4,5);
    // if(true){
    //     check($WholeDmt);
    //     print_r($WholeDmt);
    // }
    // function check(&$WholeDmt){
    //     // print_r($arr);
    //     // $arr=&$arr;
    //     $WholeDmtCopy=$WholeDmt;
    //     // unset($arr[2]);
    //     // print_r($arr);
    //     // echo " inCheck<br>";
    //     check2(1, $WholeDmtCopy);

    // }
    // function check2($a, &$WholeDmtCopy){
    //     unset($WholeDmtCopy[3]);
    //     print_r($WholeDmtCopy);
    //     echo " inCheck2<br>";
    // }
    // $conn2 = mysqli_connect("localhost", "root", "", "schedule")or die("unable to create connection");
    // $query4="SELECT * FROM PhyY2 where day_id=1 AND mt_id=1";
    // $resultSet4=mysqli_query($conn2, $query4);
    // $row=mysqli_fetch_assoc($resultSet4);
    // $insID=1;
    // if ($row['instructor_id']==$insID){
    //     echo "true";
    // }

    // $arr=array(array(1,1),array(1,2));
    // // print_r($arr);
    // $eachDmtIndex=rand(0, sizeof($arr)-1);//randomly select dayMeetingTime
    // $subArr=$arr[$eachDmtIndex];
    // $sDay=$subArr[0];
    // $sMt=$subArr[1];
    // print_r($subArr);
    // echo "<br>";
    // echo $sDay, " ",$sMt;
    

    // $arr=array(1,2,3,4,5);
    // if(true){
    //     check($arr);
    //     print_r($arr);
    // }
    // function check(&$arr){
    //     // print_r($arr);
    //     $arr12=$arr;
    //     unset($arr12[2]);
    //     print_r($arr12);
    //     echo "<br>";
    // }
    // $counter=1;
    // while($counter<=8){
    //     $query="SELECT * FROM csy3 WHERE mt_id=$counter";
    //     $resultSet=mysqli_query($conn2, $query);
       
    //     while($rows=mysqli_fetch_assoc($resultSet)){
    //         if($rows['c_id']==NULL){
    //             array_push($p1Array, "FREE");
    //         }else{
    //             array_push($p1Array, $rows['c_id']);
    //         }
    //     }
    //     $counter+=1;
    // }

    // foreach($p8Array as $val){
    //     echo $val, " ";
    // }
    // echo "<br>";
    // foreach($p1Array as $val){
    //     echo $val, " ";
    // }

    // $test=array(1,2);
    // array_push($test, "FREE");
    // array_push($test, 3);
    
    // foreach($test as $val){
    //     echo $val, " ";
    // }

?>