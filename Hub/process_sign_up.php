<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('dbConn.php');

//Sanitize input
$suf_email = filter_input(INPUT_POST, 'myEmail', FILTER_SANITIZE_EMAIL);
$suf_pass1 = filter_input(INPUT_POST, 'pass1', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$suf_pass2 = filter_input(INPUT_POST, 'pass1', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

// Validate form data
if ((filter_var($suf_email, FILTER_VALIDATE_EMAIL) === false) or ( strlen($suf_pass1) < 8) or ( strcmp($suf_pass1, $suf_pass2) != 0)) {
    header("Location: http://devicehub.azurewebsites.net/Hub/getStarted.php?i=error"); /* Redirect browser */
    exit();
}

try {
    $conn = dbConn::getConnection();
    $stmt = $conn->prepare("SELECT id, email, password_hash FROM USER WHERE email=:email");
    $stmt->bindValue(':email', $suf_email);
    $stmt->execute();
    $result = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

//if the email is already in db
if (!empty($result)) {
    //email is taken
    header("Location: http://devicehub.azurewebsites.net/Hub/getStarted.php?i=email_exists"); /* Redirect browser */
    exit();
}

//encrypt pass and store user info in db
$options = array('cost' => 11);
$hash = password_hash($suf_pass1, PASSWORD_BCRYPT, $options);


try {
    $stmt = $conn->prepare("INSERT INTO USER (id, email, password_hash) 
    VALUES (:null, :email, :hash)");
    $stmt->bindValue(':null', null, PDO::PARAM_INT);
    $stmt->bindValue(':email', $suf_email, PDO::PARAM_STR);
    $stmt->bindValue(':hash', $hash, PDO::PARAM_STR);
    $stmt->execute();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;

header("Location: http://devicehub.azurewebsites.net/Hub/home.php"); /* Redirect browser */
exit();