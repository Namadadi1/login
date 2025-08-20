<?php
// This file contains helper functions used throughout the application

function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validatePhoneNumber($phone) {
    return preg_match('/^[0-9]{10,15}$/', $phone);
}

function validatePassword($password) {
    return strlen($password) >= 6; // Example: minimum 6 characters
}

function redirect($url) {
    header("Location: $url");
    exit();
}
?>