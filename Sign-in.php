

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="signin-page">    
        <div class="Signin-form">
            <h1>Sign In</h1>
            <form method="POST" id="signin-form" action="">
                <label for="firstname">Name:</label><br>
                <input type="text" id="name" name="name" maxlength="8"><br>

                <label for="surname">Surname:</label><br>
                <input type="text" id="surname" name="surname"><br>

                <label for="email1">Email:</label><br>
                <input type="email" id="email" name="email"><br>

                <label for="pass">Password:</label><br>
                <input type="password" id="password" name="password" minlength="4" required>
               
                <button type="submit" id="submit">Submit</button>


            </form>
        </div>
    </div> 
    
    <script>
        document.addEventListener("DOMContentLoaded",function() { 
            const submit = document.getElementById('submit');
            const validate=(event) => {
                event.preventDefault();

                const emriInput = document.getElementById('name');
                const mbiemriInput = document.getElementById('surname');
                const emailInput = document.getElementById('email');
                const passwordInput = document.getElementById('password');
                // const confirmPasswordInput = document.getElementById('confirmP');

                if(emriInput.value.trim() === "") {
                    alert("Please enter your name.");
                    emriInput.focus();
                    return false;
                }
                if(mbiemriInput.value.trim() === ""){
                    alert("Enter your last name.");
                    mbiemriInput.focus();
                    return false;
                }
                if(emailInput.value.trim() === ""){
                    alert("Enter your Email.");
                    emailInput.focus();
                    return false;
                }
    //             const phoneRegex = /^\+?[0-9]{10,15}$/; 
    // if (telephoneInput.value.trim() === "") {
    //   alert("Please enter your phone number.");
    //   telephoneInput.focus();
    //   return false;
    // } else if (!phoneRegex.test(telephoneInput.value.trim())) {
    //   alert("Please enter a valid phone number.");
    //   telephoneInput.focus();
    //   return false;
    // }
                const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                if (!emailRegex.test(emailInput.value.trim())){
                    alert("Please enter a valid Email.");
                    emailInput.focus();
                    return false;
                }
                    if(emailInput.value.trim() !== emailInput.value.trim().toLowerCase()) {
                        alert("Email must be on lowercase only.");
                        emailInput.focus();
                        return false;
                    }
                    if(passwordInput.value.trim() === ""){
                        alert("Enter a password.");
                        passwordInput.focus();
                        return false;
                    }
                    if(passwordInput.value.trim().length < 8){
                        alert("Your password must be at least 8 characters long.");
                        passwordInput.focus();
                        return false;
                    }
                    // if (passwordInput.value.trim() !== confirmPasswordInput.value.trim()) {
                    // alert("Passwords do not match.");
                    // confirmPasswordInput.focus();
                    // return false;
                    // }
                    alert("Sign In completed successfully!");
          document.getElementById('signin-form').submit();
        };
        submit.addEventListener("click",validate);
      }); 

    </script>

   
</body>
</html>