<?php 
    require('config.php');
            $student_id = $_POST['stuid'];
            $co_id = $_POST['coid']; 
            $co_name = $_POST['coname'];
            $co_sem = $_POST['cosem'];
            $co_inst = $_POST['coinst'];
            $co_class = $_POST['classroom'];
            $co_time = $_POST['cotime'];
            
            
         
            $sql = "INSERT INTO 
            stucourse(stu_id, sco_id, sco_name, sco_sem, sco_instructor, sco_classroom, sco_time)
             VALUES ('{$student_id}','{$co_id}', '{$co_name}' , '{$co_sem}' , '{$co_inst}' , '{$co_class}' , '{$co_time}') ";
            $result2 = mysqli_query ($conn, $sql) or die("Query Unsuccessfu.");

            header("Location: http://localhost/AumClassproject/courseinfo.php");
            
            mysqli_close($conn2);
?>