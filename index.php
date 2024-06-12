<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="login.css">
    <!--Box-Icons-->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <div class="container" id="signUp" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form  method="post" action="register.php">
            <div class="input-group">
                <i class='bx bxs-user'></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class='bx bxs-user'></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class='bx bxs-envelope'></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
            <i class='bx bx-phone'></i>
                <input type="text" name="phone" id="phone" placeholder="Phone" required>
                <label for="phone">Phone</label>
            </div>
            <div class="input-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" name="password" id="password" placeholder="password" required>
                <label for="password">Password</label>
            </div>
            <div class="input-group">
            <i class='bx bxs-map' ></i>
                <input type="text" name="address" id="address" placeholder=" Full Address" required>
                <label for="address">Full Address</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>
        <div class="links">
            <p>Already Have An Account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>


    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form  method="post" action="index1.php">
            <div class="input-group">
                <i class='bx bxs-envelope'></i>
                <input type="email" name="email" id="email" placeholder="E-mail" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" name="password" id="password" placeholder="password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="sigIn">
        </form>
        <div class="links">
            <p>Don't have account Yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>