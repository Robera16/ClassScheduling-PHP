<!-- <?php
    // $conn = mysqli_connect("localhost", "root", "", "data")or die("unable to create connection");
    
    // $sql = "SHOW TABLES FROM data";
    // $result = mysqli_query($conn,$sql);

    // while ($row = mysqli_fetch_row($result)) {
    //     echo "Table: {$row[0]}\n";
    //     echo "<br>";
    //     if($row[0]=="meetingtimes")
    //         break;
    // }



    // $deptInsert = "INSERT INTO departments(Name) VALUES('Computer Science');";
    // $deptInsert = "INSERT INTO departments(ID, Name) VALUES(2, 'Physics');";
    // mysqli_query($conn, $deptInsert) or die("error entering dept record");

    // $dayInsert = "INSERT INTO days(day) VALUES('Monday');";
    // $dayInsert .= "INSERT INTO days(day) VALUES('Tuesday');";
    // $dayInsert .= "INSERT INTO days(day) VALUES('Wednesday');";
    // $dayInsert .= "INSERT INTO days(day) VALUES('Thursday');";
    // $dayInsert .= "INSERT INTO days(day) VALUES('Friday');";

    // mysqli_multi_query($conn, $dayInsert) or die("error entering days ")

    // $timeInsert = "INSERT INTO meetingTimes(Time) VALUES('2:00-3:00');";
    // $timeInsert .= "INSERT INTO meetingTimes(Time) VALUES('3:00-4:00');";
    // $timeInsert .= "INSERT INTO meetingTimes(Time) VALUES('4:00-5:00');";
    // $timeInsert .= "INSERT INTO meetingTimes(Time) VALUES('5:00-6:00');";
    // $timeInsert .= "INSERT INTO meetingTimes(Time) VALUES('7:30-8:30');";
    // $timeInsert .= "INSERT INTO meetingTimes(Time) VALUES('8:30-9:30');";
    // $timeInsert .= "INSERT INTO meetingTimes(Time) VALUES('9:30-10:30');";
    // $timeInsert .= "INSERT INTO meetingTimes(Time) VALUES('10:30-11:30');";

    // mysqli_multi_query($conn, $timeInsert) or die("error entering time")

    // $courseInsert = "INSERT INTO Courses(Code, Name, Credit_Hour) VALUES('CoSc3052', 'Advanced Database',  3);";
    // $courseInsert .= "INSERT INTO Courses(Code, Name, Credit_Hour) VALUES('CoSc2023', 'Advanced Programming',  4);";
    // $courseInsert .= "INSERT INTO Courses(Code, Name, Credit_Hour) VALUES('CoSc3071', 'Software Engineering',  3);";
    // $courseInsert .= "INSERT INTO Courses(Code, Name, Credit_Hour) VALUES('CoSc3091', 'Internet Programming',  4);";
    // $courseInsert .= "INSERT INTO Courses(Code, Name, Credit_Hour) VALUES('CoSc4151', 'Windows Programming',  3);";

    // $courseInsert .= "INSERT INTO Courses(Code, Name, Credit_Hour) VALUES('phys3023', 'Experimental Physics',  2);";
    // $courseInsert .= "INSERT INTO Courses(Code, Name, Credit_Hour) VALUES('phys3041', 'Classical Mechanics',  3);";
    // $courseInsert .= "INSERT INTO Courses(Code, Name, Credit_Hour) VALUES('phys3071', 'Modern Physics',  4);";
    // $courseInsert .= "INSERT INTO Courses(Code, Name,  Credit_Hour) VALUES('phys3072', 'Quantum Mechanics',  3);";
    // $courseInsert .= "INSERT INTO Courses(Code, Name,  Credit_Hour) VALUES('phys3022', 'Modern Optics',  3);";
    

    //  $dycInsert = "INSERT INTO dept_year_course(dept_id, year, course_id, studNo) VALUES(1, 3, 1, 42);";
    // $dycInsert .= "INSERT INTO dept_year_course(dept_id, year, course_id, studNo) VALUES(1, 3, 2, 42);";
    // $dycInsert .= "INSERT INTO dept_year_course(dept_id, year, course_id, studNo) VALUES(1, 3, 3, 42);";
    // $dycInsert .= "INSERT INTO dept_year_course(dept_id, year, course_id, studNo) VALUES(1, 3, 4, 42);";
    // $dycInsert .= "INSERT INTO dept_year_course(dept_id, year, course_id, studNo) VALUES(1, 3, 5, 42);";

    // $dycInsert .= "INSERT INTO dept_year_course(dept_id, year, course_id, studNo) VALUES(2, 2, 6, 15);";
    // $dycInsert .= "INSERT INTO dept_year_course(dept_id, year, course_id, studNo) VALUES(2, 2, 7, 15);";
    // $dycInsert .= "INSERT INTO dept_year_course(dept_id, year, course_id, studNo) VALUES(2, 2, 8, 15);";
    // $dycInsert .= "INSERT INTO dept_year_course(dept_id, year, course_id, studNo) VALUES(2, 2, 9, 15);";
    // $dycInsert .= "INSERT INTO dept_year_course(dept_id, year, course_id, studNo) VALUES(2, 2, 3, 15);";
    // $dycInsert .= "INSERT INTO dept_year_course(dept_id, year, course_id, studNo) VALUES(2, 2, 4, 15);";

    // mysqli_multi_query($conn, $dycInsert) or die("error entering dyc");

    //  mysqli_multi_query($conn, $courseInsert) or die("error entering course")

    // $instructorInsert = "INSERT INTO instructors(Name) VALUES('Dr. A');";
    // $instructorInsert .= "INSERT INTO instructors(Name) VALUES('Dr. B');";
    // $instructorInsert .= "INSERT INTO instructors(Name) VALUES('Dr. C');";
    // $instructorInsert .= "INSERT INTO instructors(Name) VALUES('Dr. D');";
    // $instructorInsert .= "INSERT INTO instructors(Name) VALUES('Dr. E');";
    // $instructorInsert .= "INSERT INTO instructors(Name) VALUES('Dr. F');";
    // $instructorInsert .= "INSERT INTO instructors(Name) VALUES('Dr. G');";
    // $instructorInsert .= "INSERT INTO instructors(Name) VALUES('Dr. H');";
    // $instructorInsert .= "INSERT INTO instructors(Name) VALUES('Dr. I');";


    // mysqli_multi_query($conn, $instructorInsert) or die("error entering instructor")

    // $yearInsert = "INSERT INTO dept_year(dept_id, year) VALUES(1, 4);";
    // $yearInsert .= "INSERT INTO dept_year(dept_id, year) VALUES(2, 3);";

    // mysqli_multi_query($conn, $yearInsert) or die("error entering year");

   
?> -->

<!-- INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (1,1);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (1,2);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (1,3);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (1,4);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (1,5);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (1,6);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (1,7);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (1,8);

INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (2,1);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (2,2);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (2,3);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (2,4);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (2,5);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (2,6);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (2,7);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (2,8);

INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (3,1);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (3,2);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (3,3);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (3,4);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (3,5);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (3,6);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (3,7);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (3,8);

INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (4,1);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (4,2);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (4,3);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (4,4);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (4,5);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (4,6);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (4,7);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (4,8);

INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (5,1);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (5,2);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (5,3);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (5,4);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (5,5);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (5,6);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (5,7);
INSERT INTO `phyy2`(`day_id`, `mt_id`) VALUES (5,8); -->