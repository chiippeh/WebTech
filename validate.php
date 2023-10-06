<?php
    function sanitiseInput($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    function validateAlphabet($input) {
        $errors = [];

        if (!(preg_match('/^[a-zA-Z]+$/', $input))) {
            $errors[] = "User name can only contain alphanumeric characters";
        }
        return $errors;
    }

    function validatePassword($input) {
        $errors = [];
    
        $uppercase = preg_match('/[A-Z]/', $input);
        if (!$uppercase) {
            $errors[] = "Password must contain at least one uppercase letter.";
        }
    
        $lowercase = preg_match('/[a-z]/', $input);
        if (!$lowercase) {
            $errors[] = "Password must contain at least one lowercase letter.";
        }
    
        $number = preg_match('/[0-9]/', $input);
        if (!$number) {
            $errors[] = "Password must contain at least one number.";
        }
    
        $specialChars = preg_match('/[^a-zA-Z0-9]/', $input);
        if (!$specialChars) {
            $errors[] = "Password must contain at least one special character.";
        }
    
        if (strlen($input) < 8) {
            $errors[] = "Password must be at least 8 characters long.";
        }
    
        return $errors;
    }
    
?>