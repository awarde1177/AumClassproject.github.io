
<?php
  
     


  $conn = mysqli_connect("localhost","root","","student") or  die("Connection Failed");

    $stud_id = mysqli_real_escape_string($conn, $_POST['studentid']);
    $stud_password = ($_POST['studentpassword']);

    function login($stud_id, $stud_password) {
      $conn = mysqli_connect("localhost","root","","student") or  die("Connection Failed");
    
      $sql = "SELECT sid FROM stu_info WHERE sid = '{$stud_id}' AND spassword = '{$stud_password}'";
    
      $result = mysqli_query ($conn, $sql) or die("Query Unsuccessful.");
  
      if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_assoc($result)){
              session_start();
              $_SESSION["stud_id"] = $row ['sid']; 
              $_SESSION["stud_name"] = $row ['firstname']; 
  
              header("location: http://localhost/AumClassproject/");
              
          }
  
      }else {
          echo "error: id and password are not match";
      }
  }

    login($stud_id, $stud_password);


  ?>


