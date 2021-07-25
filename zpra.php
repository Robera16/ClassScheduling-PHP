<?php

    $arr1=array("abebe", "beso");
    $arr2=array("bela");
    $arr=array();
    array_push($arr, $arr1, $arr2);
    // array_push($arr, $arr2);

    for($i=0; $i<sizeof($arr); $i++){
        foreach($arr[$i] as $val){
            echo $val, " ";
        }
        echo "<br>";
    }
    // $i=1;
    // while($i){
    //     if($i==3){
    //         break;
    //     }
    //     echo $i,"<br>";
    //     $i+=1;
    // }


    // $arr=array(1,2,3,4,5);

    // $conn2 = mysqli_connect("localhost", "root", "", "schedule")or die("unable to create connection");
    // $query="SELECT * FROM csy3 where day_id=1 AND mt_id=1";
    // $resultSet=mysqli_query($conn2, $query);
    // //while($row=mysqli_fetch_assoc($resultSet)){//not hold
    //     $row=mysqli_fetch_assoc($resultSet);
    //     if ($row['c_id']!=NULL){
    //         echo "not Null";//generate()
    //         //break
    //     }
    // //}

    // $query2="SELECT * FROM csy3 where day_id=1";
    // $resultSet2=mysqli_query($conn2, $query2);
    // while($row=mysqli_fetch_assoc($resultSet2)){//not at the same day with LH2
    //     if ($row['c_id']==$coId){
    //         echo "not Null";//generate()
    //         //break
    //     }
    // }

    // $query3="SELECT * FROM PhyY2 where day_id=1 AND mt_id=1";
    // $resultSet3=mysqli_query($conn2, $query3);
    // if ($row['instructor_id']==$insID){
    //     echo "not Null";//generate()
    //         //break
    // }


    // // FOR LH2
    // $conn2 = mysqli_connect("localhost", "root", "", "schedule")or die("unable to create connection");
    // if($smt_id==4 or $smt_id==8){
    //     generate();
    // }
    // else{
    //     $query="SELECT * FROM csy3 where day_id=1 AND mt_id=1";
    //     $resultSet=mysqli_query($conn2, $query);
    //     $row=mysqli_fetch_assoc($resultSet);
    //     // echo "day_id: ",$row['day_id'], "mt_id: ",$row['mt_id']; echo "<br>";
    //     if($row['c_id']!=NULL){
    //         generate();
    //     }else{
    //         $query2="SELECT * FROM csy3 where day_id=1 AND mt_id=1+1";
    //         $resultSet2=mysqli_query($conn2, $query2);
    //         $row=mysqli_fetch_assoc($resultSet2);
    //         if($row['c_id']!=NULL){
    //             generate();
    //         }
    //         else{
    //             $query3="SELECT * FROM csy3 where day_id=1";
    //             $resultSet3=mysqli_query($conn2, $query3);
    //             $checker=0;
    //             while($row=mysqli_fetch_assoc($resultSet3)){//not at the same day with LH1/LH2
    //                 if ($row['c_id']==$coId){
    //                     generate();
    //                     break;
    //                 }
    //                 $checker+=1;
    //             }
    //             if($checker==8){//
    //                 $query4="SELECT * FROM PhyY2 where day_id=1 AND mt_id=1";
    //                 $resultSet4=mysqli_query($conn2, $query4);
    //                 if ($row['instructor_id']==$insID){
    //                     generate();
                            
    //                 }else{
    //                     $query4="SELECT * FROM PhyY2 where day_id=1 AND mt_id=1+1";
    //                     $resultSet4=mysqli_query($conn2, $query4);
    //                     if ($row['instructor_id']==$insID){
    //                         generate();
    //                     }else{
    //                         set();
    //                     }
    //                 }
    //             }
    //         }
    //         // echo "day_id: ",$row['day_id'], "mt_id: ",$row['mt_id'];
    //     }
    // }


    

    // $i=0;
    // while(sizeof($arr)){
    //    print_r($arr);
    //    echo "<br>";
    //    unset($arr[$i]);
    //    $i+=1;
      
    // }
//     $cid=1;
//     $Lh=2;
//    if(true){
//        LH2($arr,$cid,$Lh);
//    }
//     function LH2($arr, $cid, $Lh){
//         print_r($arr);
//         echo "<br>$cid";
//         echo "<br>$Lh";
//     }
    // $num=2;
    // if(true){
    //     fun($num);
    // }
    // function fun($num){
    //     echo $num;
    // }
?>