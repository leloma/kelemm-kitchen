
<!DOCTYPE html>
<html>
    <head>
    <title>Register Page</title>
    <link rel="stylesheet" href="../css/register.css?1422585377"> 
</head>
    <body>
    <h3>REGISTRATION</h3>

        <div class="container">
            <div class="form-box">

            
                <form class="input-group" method="post" action="process_register.php">
                    <input type="text" name="f_name" class="input-field" placeholder="First Name" required>
                    <input type="text" name="l_name" class="input-field" placeholder="Last Name" required>
                    <input type="text" name="email" class="input-field" placeholder="Email" required>
                    <input type="text" name="phone_number" class="input-field" placeholder="Phone Number" required>
                    <input type="text" name="address" class="input-field" placeholder="Address" required>
                    <input type="text" name="username" class="input-field" placeholder="Username" required>
                    <input type="password" name="password" class="input-field" placeholder="Password" required>
                    <button type="submit" class="register-btn">Register</button>


                </form>
            </div>
        </div>
        


    </body>
</html>

