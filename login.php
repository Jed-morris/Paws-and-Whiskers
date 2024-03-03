<?php 
    require "./model/homepage.php";
    if (isset($_SESSION["id"])) {
        header("Location: index.php");
    }
?>
<div class="form-container">
    <div id="liveAlertPlaceholder"></div>
    <form name="logForm" class="login-form" id="loginForm">
        <!--<img id="exit" class="mb-4" src="logo.png" alt=""> -->
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating mt-3">
            <input type="hidden" id="login" name="login">
            <input type="email" class="form-control" id="userEmail" placeholder="name@example.com" name="loginEmail">
            <label for="userEmail">Email address</label>
            </div>
            <div class="form-floating mt-3">
            <input type="password" class="form-control" id="userPassword" placeholder="Password" name="loginPassword">
            <label for="userPassword">Password</label>
        </div>
        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Remember me
            </label>
            <a href="#" class="forget-pw">Forgot Password?</a>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit" id="onLogin">Sign in</button>
        <div class="login-signup">Don't have an account? <a href="#" id="signUp">Sign Up</a></div>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
    </form>
    <form name="regForm" class="signup-form" id="signupForm">
        <!--<img class="mb-4" src="logo.png" alt="">-->
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

        <div class="form-floating mt-3">
            <input type="hidden" id="register" name="register">
            <input type="text" class="form-control" id="floatingFname" name="floatingFname" placeholder="">
            <label for="floatingFname">First Name</label>
        </div>
        <div class="form-floating mt-3">
            <input type="text" class="form-control" id="floatingLname" name="floatingLname" placeholder="">
            <label for="floatingLname">Last Name</label>
        </div>
        <div class="form-floating mt-3">
            <input type="number" class="form-control" id="floatingNumber" name="floatingNumber" placeholder="">
            <label for="floatingNumber">Phone</label>
        </div>
        <div class="form-floating mt-3">
            <input type="text" class="form-control" id="floatingUsername" name="floatingUsername" placeholder="">
            <label for="floatingUsername">Username</label>
        </div>
        <div class="form-floating mt-3">
            <input type="email" class="form-control" id="floatingEmail" name="floatingEmail" placeholder="name@example.com">
            <label for="floatingEmail">Email address</label>
            <p id="dupAlert" class="invalid"></p>
        </div>
        <div class="form-floating mt-3">
            <input type="password" class="form-control" id="floatingPwd" name="floatingPwd" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
            <label for="floatingPwd">Create Password</label>
            <div id="message">
                <p>Password must contain the following:</p>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div>
        </div>
        <div class="form-floating mt-3">
            <input type="password" class="form-control" id="floatingCPassword" name="floatingCPassword" placeholder="Password">
            <label for="floatingCPassword">Confirm Password</label>
            <p id="matchAlert" class="invalid"></p>
        </div>

        <button class="btn btn-primary w-100 py-2 mt-3" type="submit" id="onRegister">Register</button>
        <div class="login-signup">Already have an account? <a href="#" id="logIn">Login</a></div>
    </form>
</div>