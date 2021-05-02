<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up | Sign In</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="box">

        <div class="grid1">
            <br>

            <h3 style=" text-align: center;"> <u> Sign In</u></h3>
            <br><br>

            <form action="signin.php" method="POST" style="text-align: center;">

                <div class="row">
                    <div class="col-35">
                        <label>Student ID</label>
                    </div>
                    <div class="col-65">
                    <input type="text" name="studentid" placeholder="Student ID" required />
                    </div>
                </div>
                <br>
                
                <div class="row">
                    <div class="col-35">
                        <label>Password</label>
                    </div>
                    <div class="col-65">
                    <input type="password" name="studentpassword" placeholder="Password" required />
                    </div>
                </div>
                <br>
                <div class="row" >
                    <input type="submit" value="Login" name="login" onclick="up()" >
                </div>
            </form> 
        </div>
        <!-- ---------------------------------------------------------- -->

        <div class="grid2">
            <div class="container">
                <h3 style="text-align: center;"> <u> Sign Up </u></h3>
                <form action="signup.php" method="POST" id="addForm">

                    <div class="row">
                    <div class="col-25">
                        <label>First Name</label>
                    </div>
                    <div class="col-75">
                    <input type="text" name="fname" placeholder="First Name"  required/>
  
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-25">
                        <label>Last Name</label>
                    </div>
                    <div class="col-75">
                    <input type="text" name="lname" placeholder="Last Name"  required/>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-25">
                        <label>Gender</label>
                    </div>
                    <div class="col-75">
                    <select class="input-field" name="st_gender" required>     
                        <option class="input-field" value="Gender" > Select Gender</option>
                        <option class="input-field" value="male">Male</option>
                        <option class="input-field" value="female">Female</option>
                    </select>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Student Id</label>
                        </div>
                        <div class="col-75">
                       
                            <input type="text" name="st_id" placeholder="Student ID" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Email</label>
                        </div>
                        <div class="col-75">
                       
                            <input type="email" name="st_email" placeholder="Email" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Password</label>
                        </div>
                        <div class="col-75">
                        <input type="password" name="st_password" placeholder="Password" />
                
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Confirm Password</label>
                        </div>
                        <div class="col-75">
                        <input type="password" name="confirm_password" placeholder="Confirm Password" /> 
                        </div>
                    </div>

                    
                    <div class="row">
                  
                    <input type="submit" value="Sign Up" id="submit" >
                    </div>

                </form>
                
            </div> 
              
           
        </div>
       
        
    </div>



    


    

</body>
</html>