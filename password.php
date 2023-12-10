<?php

    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $old_password = $_POST['old_password'] ?? '';
        $new_password = $_POST['new_password'] ?? '';
        $confirm_new_password = $_POST['confirm_new_password'] ?? '';

        $errors = [];

        if(empty($old_password)){
            $errors['old_password'] = 'Сіз old_password жазбадыңыз';
        }else{
            if(md5($old_password) != $_SESSION['user']['password']){
                $errors['old_password'] = "Old password isn't valid";
            }
        }

        if(empty($new_password)){
            $errors['new_password'] = 'Сіз пароль жазбадыңыз';
        }else{
            if (strlen($new_password) < 6){
                $errors['new_password'] = 'at least 6 characters including a number, a lowercase and uppercase letter';
            }else{
                if(preg_match("#^[A-Za-z0-9]+$#",$new_password)){
                    $first = false;
                    $second = false;
                    $third = false;
                    foreach(str_split($new_password) as $a){
                        if(preg_match("#^[A-Z]+$#",$a) && $first == false) $first = true;
                        if(preg_match("#^[a-z]+$#",$a) && $second == false) $second = true;
                        if(preg_match("#^[0-9]+$#",$a) && $third == false) $third = true;
                        if($first && $second && $third) break;
                    }
                    if(!$first || !$second || !$third){
                        $errors['new_password'] = "the password must consist of a number,a lowercase and uppercase letter";
                    }
                }else{
                    $errors['new_password'] = 'Өзге символдар бар';
                }
            }
        }

        if(empty($confirm_new_password)){
            $errors['confirm_new_password'] = 'Сіз confirm_new_password жазбадыңыз';
        }else{
            if($confirm_new_password != $new_password){
                $errors['confirm_new_password'] = 'Passwords does not match';
            }
        }
        

        if($errors){
            $_SESSION['status'] = 'error';
            $_SESSION['errors'] = $errors;
            header("Location: changePassword.php");
        }else{
            require_once 'common/connect.php';
            $isChanged = changePassword($new_password, $_SESSION['user']['id']);

            if($isChanged){
                $_SESSION['status'] = 'success';
                $_SESSION['message'] = 'You have changed';
                $_SESSION['user']['password'] = md5($new_password);
                header("Location: profile.php");
            }else{
                $_SESSION['status'] = 'mainError';
                $_SESSION['message'] = 'Your old password was entered incorrectly. Please enter it again.';
                header("Location: loginform.php");
            }
        }
    }

?>