<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('dbConn.php');

//Sanitize input
$sif_email = filter_input(INPUT_POST, 'myEmail', FILTER_SANITIZE_EMAIL);
$sif_pass1 = filter_input(INPUT_POST, 'pass1', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

if ((filter_var($sif_email, FILTER_VALIDATE_EMAIL) === false) or ( strlen($sif_pass1) < 8)) {
    header("Location: http://devicehub.azurewebsites.net/Hub/index.php?i=error"); /* Redirect browser */
    exit();
}

try {
    $conn = dbConn::getConnection();
    $stmt = $conn->prepare("SELECT email, password_hash FROM USER WHERE email=:email");
    $stmt->bindValue(':email', $sif_email);
    $stmt->execute();
    $result = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if (empty($result)) {
    //email not valid
    header("Location: http://devicehub.azurewebsites.net/Hub/index.php?i=error"); /* Redirect browser */
    exit();
}

if (password_verify($sif_pass1, $result[0][1])) {
    session_start();
    $_SESSION["email"] = $sif_email;
    header("Location: http://devicehub.azurewebsites.net/Hub/home.php"); /* Redirect browser */
    exit();
} else {
    header("Location: http://devicehub.azurewebsites.net/Hub/index.php?i=error"); /* Redirect browser */
    exit();
}


