<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login form page</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style >
   .note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #6600ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}
</style>
	<?php require_once 'common/inhead.php'; ?>
</head>
<body>

	<?php session_start(); ?>

	<?php
	$hasErrors = false; 
	if(isset($_SESSION['status']) && $_SESSION['status'] == 'error')
		$hasErrors = true;
	?>

	<div class="centerForm">
		<?php if(isset($_SESSION['status']) && $_SESSION['status'] == 'success'): ?>
			<div class="success">
				<?= $_SESSION['message'] ?>
			</div>
		<?php endif; ?>

		<?php if(isset($_SESSION['status']) && $_SESSION['status'] == 'mainError'): ?>
			<div class="mainError">
				<?= $_SESSION['message'] ?>
				<i class="fa-regular fa-circle-xmark" onclick="this.parentElement.remove()"></i>
			</div>
		<?php endif; ?>
		<div class="form-content">
		<div class="note">
                    <p>Login page</p>	
            </div>	<br><br>

		<form action="login.php" method="POST">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control" placeholder="Your email *">
				<?php if($hasErrors && isset($_SESSION['errors']['email'])): ?>
					<p class="inputError"><?= $_SESSION['errors']['email'] ?></p>
				<?php endif; ?>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control" placeholder="Your password *">
				<?php if($hasErrors && isset($_SESSION['errors']['password'])): ?>
					<p class="inputError"><?= $_SESSION['errors']['password'] ?></p>
				<?php endif; ?>
			</div>
			<div class="form-group">
				<input type="checkbox" name="remember" value="yes"> Remember me
			</div>
			<button type="submit" class="btnSubmit">Login</button>
			 <p>Not a member? <a href="registerForm.php">Register</a></p>
		</form>
		</div>
	</div>

	<?php

	unset($_SESSION['status']);
	unset($_SESSION['errors']);
	unset($_SESSION['message']);

	?>
</body>
</html>