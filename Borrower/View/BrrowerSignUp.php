<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
          border: none;
        }
        </style>
    <title>SignUp</title>
</head>

<body>
    <div>
        <form action="#" method="post">
        <h2 align="center"><b><u>Sign Up!</u></b></h2>
    	<br>
        <table align="center">
              <tr>
                  <td> <label for="fname">First Name:</label></td>
                  <td> <input type="text" id="fname" name="fname" placeholder="Enter your first name" >
                  </td>
              </tr>

              <tr>
                  <td> <label for="lname">Last Name:</label></td>
                  <td> <input type="text" id="lname" name="lname" placeholder="Enter your last name" >
                  </td>
              </tr>

              <tr>
                  <td> <label for="uname">Username:</label></td>
                  <td> <input type="text" id="uname" name="uname" placeholder="Choose unique username" >
                  </td>
              </tr>

              <tr>
                  <td> <label for="pass">Password:</label></td>
                  <td> <input type="Password" id="pass" name="pass" placeholder="Enter password" >
                  </td>
              </tr>

              <tr>
                  <td> <label for="cpass">Confirm Password:</label></td>
                  <td> <input type="Password" id="cpass" name="cpass" placeholder="Enter password again" >
                  </td>
              </tr>

              <tr>
                  <td> <label for="age">Age:</label></td>
                  <td> <input type="number" id="age" name="age" min="1" placeholder="Enter your age" >
                  </td>
              </tr>

              <tr>
                  <td> <label for="gender">Gender:</label></td>
                  <td> <input type="radio" id="male" name="gender" value="Male">Male
                       <input type="radio" id="female" name="gender" value="Female">Female
                       <input type="radio" id="others" name="gender" value="Others">Others
                  </td>
              </tr>

              <tr>
                  <td> <label for="mobileNo">Mobie No:</label></td>
                  <td> <input type="number" id="mobileNo" name="mobileNo" min="0" max="99999999999" placeholder="Enter your mobile no" >
                  </td>
              </tr>

              <tr>
                  <td> <label for="email">E-mail:</label></td>
                  <td> <input type="text" id="email" name="email" placeholder="Enter your e-mail" >
                  </td>
              </tr>

              <tr>
                  <td> <label for="image">Please choose a file:</label></td>
                  <td> <input type="file" id="image" name="image">
                  </td>
              </tr>

              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>

              <tr>
                <td></td>
                <td >
                    <input type="submit" name="signUp"  value="Signup">
                    <input type="reset" name="Reset">
                </td>
              </tr>

              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>

              <tr>
                <td colspan="2" align="center">
                <a href="AdminLogin.php">Back</a>
                </td>
              </tr>


    	
    </div>
</body>
</html>
