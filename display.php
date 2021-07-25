<html>
<head>
</head>
<body>
<?php
    $dep = "PhyY2";
    $conn1 = mysqli_connect("localhost", "root", "", "schedule")or die("unable to create connection");
    $conn2 = mysqli_connect("localhost", "root", "", "data")or die("unable to create connection");
    $schedule=array();
    // $dayArray=array("Period", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
    $p1Array=array("2:00 - 3:00");//push all meetingTime1 of every day
    $p2Array=array("3:00 - 4:00");
    $p3Array=array("4:00 - 5:00");
    $p4Array=array("5:00 - 6:00");
    $p5Array=array("7:30 - 8:30");
    $p6Array=array("8:30 - 9:30");
    $p7Array=array("9:30 - 10:30");
    $p8Array=array("10:30 -11:30");

   
    // array_push($schedule, $dayArray, $p1Array, $p2Array, $p3Array, $p4Array, $p5Array, $p6Array, $p7Array, $p8Array);
    array_push($schedule, $p1Array, $p2Array, $p3Array, $p4Array, $p5Array, $p6Array, $p7Array, $p8Array);
    

    for($i=1; $i<=sizeof($schedule); $i++){
        // array_push($schedule[$i],
        $query="SELECT * FROM $dep WHERE mt_id=$i";
        $resultSet=mysqli_query($conn1, $query);
        while($rows=mysqli_fetch_assoc($resultSet)){
            if($rows['c_id']==NULL){
                array_push($schedule[$i-1], "");
            }else{
                $course_id=$rows['c_id'];
                $query2="SELECT Name FROM courses WHERE ID=$course_id";
                $resultSet2=mysqli_query($conn2, $query2);
                $row=mysqli_fetch_assoc($resultSet2);
                array_push($schedule[$i-1], $row['Name']);
            }
        }
    }
    
    // for($i=0; $i<sizeof($schedule); $i++){
    //     foreach($schedule[$i] as $val){
    //         echo $val, " ";
    //     }
    //     echo "<br>";
    // }
?>
<table border="1px solid black" cellspacing=0 cellpadding=6>
    <tr>
        <th>Period</th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
    </tr>
<?php
     for($i=0; $i<sizeof($schedule); $i++){
        //  for($j=0; $j<sizeof($schedule[$i]); $j++){
?>
    <tr>
        <td><?php echo $schedule[$i][0]?></td>
        <td><?php echo $schedule[$i][1]?></td>
        <td><?php echo $schedule[$i][2]?></td>
        <td><?php echo $schedule[$i][3]?></td>
        <td><?php echo $schedule[$i][4]?></td>
        <td><?php echo $schedule[$i][5]?></td>
    </tr>
<?php
        //  }
    }
?>
<table>
<a href="">Regenerate</a>
</body>
</html>

