<?php
function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';
    $charLength = strlen($characters) - 1;
    
    for ($i = 0; $i < $length; $i++) {
        $randomChar = $characters[rand(0, $charLength)];
        $password .= $randomChar;
    }
    
    return $password;
}

$password = generatePassword(12);
echo "Generated Password: $password\n";
?>