<?php 


  $conn = mysqli_connect("localhost","root","","student") or  die("Connection Failed");


  $f_name = $_POST['fname']; 
  $l_name = $_POST['lname']; 
  $stu_gender = $_POST['st_gender'];
  $stu_id = $_POST['st_id'];
  $stu_email = $_POST['st_email'];
  $stu_password = $_POST['st_password'];
  $stu_cpassword = $_POST['confirm_password'];

  function register($f_name, $l_name,  $stu_gender, $stu_id, $stu_email, $stu_password, $stu_cpassword) {

    $conn = mysqli_connect("localhost","root","","student") or  die("Connection Failed");


    if($stu_password==$stu_cpassword){

        $conn = mysqli_connect("localhost","root","","student") or  die("Connection Failed"); 
        
        $sql = "INSERT INTO stu_info(firstname,lastname,sgender, sid, semail , spassword )
        VALUES ('{$f_name}','{$l_name}','{$stu_gender}', '{$stu_id}','{$stu_email}','{$stu_password}') ";
        
        $result = mysqli_query ($conn, $sql) or die("Query Unsuccessful for signup.");
        
        echo '<script type="text/JavaScript"> 
              alert("sign up successfull");
                  </script>';

        echo "<a href='http://localhost/AumClassproject/login/index.php'>click here to login</a>";

        // header("Location: http://localhost/AumClassproject/login/index.php");

     
        
        mysqli_close($conn);

          }else{
            echo "Error: Password should be match";
          }

}

  register($f_name,$l_name, $stu_gender,$stu_id, $stu_email, $stu_password, $stu_cpassword);

?>