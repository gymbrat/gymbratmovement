<?php 
ob_start();
// include header.php file
include("header.php");
?>

<body>
<?php 
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields!</p>";
        }
        else if($_GET["error"] == "invaliduid"){
            echo "<p>Choose a proper username!</p>";
        }
        else if($_GET["error"] == "invalidemail"){
            echo "<p>Enter a valid email</p>";
        }
        else if($_GET["error"] == "passwordunmatch"){
            echo "<p>Passwords do not match.</p>";
        }
        else if($_GET["error"] == "stmtfail"){
            echo "<p>Something went wrong. Please try again.</p>";
        }
        else if($_GET["error"] == "usernametaken"){
            echo "<p>Username is taken</p>";
        }
        
    }
?>

<section>
    <div class="signup-form py-5">
        <div class="d-flex justify-content-center h-100">
        <div class="card">
			<div class="card-header">
                <h3>Sign Up</h3>
                <p class="links">Please fill in this form to create an account!</p>
                <hr>
            </div>
            <div class="card-body">
                <form action="includes/signup.inc.php" method="post">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
							<span class="input-group-text">First Name</span>
						</div>
                        <input type="text" class="form-control" name="firstname" required="required">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
							<span class="input-group-text">Last Name</span>
						</div>
                        <input type="text" class="form-control" name="lastname" required="required">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
							<span class="input-group-text">Username</span>
						</div>
                        <input type="text" class="form-control" name="username" required="required">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
							<span class="input-group-text">Email</span>
						</div>
                        <input type="email" class="form-control" name="email" required="required">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
							<span class="input-group-text">Password</span>
						</div>
                        <input type="password" class="form-control" name="password" required="required">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
							<span class="input-group-text">Confirm Password</span>
						</div>
                        <input type="password" class="form-control" name="confirm_password" required="required">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" required="required">
                        <label class="form-check-label links">I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Sign Up" class="btn float-right login_btn">
                    </div>
                </form>
            </div>      
            <div class="text-center links">Already have an account? <a href="login.php">Login here</a></div>
        </div>
    </div>
    </div>
</section>

<!-- <section>
	<div class="container py-5">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Sign In</h3>
					<div class="d-flex justify-content-end social_icon">
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
					</div>
				</div>
				<div class="card-body">
					<form action="includes/login.inc.php" method="post">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control" placeholder="username">			
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control" placeholder="password">
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn float-right login_btn">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Don't have an account?<a href="signup.php">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
    </div>
</section> -->
    

</body>

<?php 
include('footer.php')
 ?>

<style>
    /* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

#main-site{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 70vh;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
margin-top: auto;
margin-bottom: auto;
width: 500px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 170px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>