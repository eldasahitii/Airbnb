<?php
session_start();
include_once 'Database.php';
include_once 'user.php';
include_once 'userRepository.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);
    
    
   
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($user->Login($email, $password)){
      
      header("Location: Home.php");
        exit;
           } else {
             echo "Invalid login credentials!";
          }
    }
    

//     $userRepository = new UserRepository($connection);
//     $userData = $userRepository->getUserByEmail($email);

//     if ($userData) {
     
//       $hashedPassword = $userData['password'];
  
    
//       if (password_verify($password, $hashedPassword)) {
//           $_SESSION['user_id'] = $userData['id'];
//           header("Location: Home.php");
//           exit;
//       } else {
//           echo "Invalid login credentials!";
//       }
//   } else {
//       echo "User not found!";
//   }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-page">
          
            <form class="login-form" id="login-form" method="POST">
                <h1>Log In</h1>
              <label for="email">Email address:</label><br>
              <input type="email" id="email" name="email" placeholder="testest@test.com">
                

              <label for="password">Password:</label><br>
              <input type="password" id="password" name="password" >
             
                <button type="submit" id="btn-login">Log In</button>
               
                  <p>First time here?<a href="Sign-in.php"> Sign In</a></p>

            </form> 
    </div>


    <script>
    document.addEventListener("DOMContentLoaded",
      function (){
        const btnSubmit=document.getElementById('btn-login');
        const validate=(event) =>{
          event.preventDefault();
          const emailaddress=document.getElementById('email');
          const passwordi=document.getElementById('password');
          
          if(emailaddress.value.trim()===""){
            alert("Please enter your Email.");
            emailaddress.focus();
            return false;
          }
          const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,})$/;
          if(!emailRegex.test(emailaddress.value.trim())){
        alert("Please enter a valid Email.");
        emailaddress.focus();
        return false; 
      }
      if(emailaddress.value.trim() !==emailaddress.value.trim().toLowerCase()){
        alert("Email must be in lowercase!")
        emailaddress.focus();
        return false;
      }

          if(passwordi.value.trim()===""){
            alert("Please enter your password.");
            passwordi.focus();
            return false;
          }
          if(passwordi.value.trim().length<8){
            alert("Your password must be at least 8 characters long.");
            passwordi.focus();
            return false;
          }
          alert("Log In completed successfully!");
          document.getElementById('login-form').submit();
        };
        btnSubmit.addEventListener("click",validate);
      
      });
    
      
      
    </script>






    
</body>
</html>