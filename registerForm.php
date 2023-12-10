<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register form page</title>
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
			<div class="form-content">
			<div class="note">
                    <p>Registration page</p>	
            </div>	<br><br>
					<form action="register.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Your Name *">
							<?php if($hasErrors && isset($_SESSION['errors']['name'])): ?>
								<p class="inputError"><?= $_SESSION['errors']['name'] ?></p>
							<?php endif; ?>
						</div>
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
							<label for="confirm_password">Confirm password</label>
							<input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm password *">
							<?php if($hasErrors && isset($_SESSION['errors']['confirm_password'])): ?>
								<p class="inputError"><?= $_SESSION['errors']['confirm_password'] ?></p>
							<?php endif; ?>
						</div>



						<div class="form-group">
							<label for="avatar"> User Avatar</label>
							<input type="file" name="avatar" id="avatar" class="form-control">
							<?php if($hasErrors && isset($_SESSION['errors']['avatar'])): ?>
								<p class="inputError"><?= $_SESSION['errors']['avatar'] ?></p>
							<?php endif; ?>
						</div>
						<button type="submit" class="btnSubmit">Register</button>
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