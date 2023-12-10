<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
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
    <?php
        session_start();
        $hasErrors = false;
        if(isset($_SESSION['status ']) && $_SESSION['status'] == 'error') $hasErrors = true;
    ?>

    <div class="centerForm">
        <form action="password.php" method="POST">

        <!-- <label class="form_label">Change password</label> -->

            <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 'mainError'): ?>
                <div class="mainError">
                    <?= $_SESSION[ 'message'] ?>
                </div>
            <?php endif; ?>
            <div class="form-content">
                <div class="note">
                    <p>Change password</p>   
            </div>  <br><br>
            <div class="form-group">
                <input type="password" name="old_password" id="old_password" class="form-control" placeholder="old password* ">
                <?php if(isset($_SESSION['errors']['old_password'])): ?>
                    <div class="error"><?=$_SESSION['errors']['old_password']?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <input type="password" name="new_password" id="new_password" class="form-control" placeholder="new password *">
                <?php if(isset($_SESSION['errors']['new_password'])): ?>
                    <div class="error"><?=$_SESSION['errors']['new_password']?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <input type="password" name="confirm_new_password" id="confirm_new_password" class="form-control" placeholder="confirm new password *">
                <?php if(isset($_SESSION['errors']['confirm_new_password'])): ?>
                    <div class="error"><?=$_SESSION['errors']['confirm_new_password']?></div>
                <?php endif; ?>
            </div>

            <div class="button_register">
                <button type="submit" class="btnSubmit">Update password</button>
            </div>

            <div class="button_register">
                <p>
                    <a href="loginform.php">Forgot your password?</a>
                    <a href="profile.php">Out</a>
                </p>
            </div>

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