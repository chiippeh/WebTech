<?php
    function sanitiseInput($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    function validateAlphabet($input) {
        $errors = [];

        if (!(preg_match('/[a-zA-Z]/', $input))) {
            $errors[] = "Name should only contain letters from the alphabet.";
        }

        if (strlen($input) > 20) {
            $errors[] = "Name must be no longer than 20 characters long.";
        }
    
        return $errors;
    }

    function validateUsername($input) {
        $errors = [];

        if (!(preg_match('/^g\d{2}[a-zA-Z]\d{4}$/', $input))) {
            $errors[] = "Format: g[year][surname-initial][4-digits] eg: g21j4308";
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