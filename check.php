<?php
   session_start();
   $account1 = "chair";
   $password1 = "123";
   $account2 = "reviewer";
   $password2 = "234";
   $account3 = "author";
   $password3 = "345";
     $account = $_POST["acc"];
     $password = $_POST["pwd"];
     $thechar = $_POST["cch"];
if (isset($account) && isset($password)) 
    {$date = strtotime("+ 7 days", time());
    if 
    ($account == $account1 && $password == $password1 && $thechar == "chair") 
    {
    echo "sign in";
    $_SESSION["char"] = "chair";
    setcookie("login", $account1, $date);
header("Location:chair.php");
    } elseif 
    ($account == $account2 && $password == $password2 && $thechar == "reviewer") {
     $_SESSION["char"] = "reviewer";
    setcookie("login", $account2, $date);
header("Location:reviewer.php");
    } elseif 
    ($account == $account3 && $password == $password3 && $thechar == "author") {
    $_SESSION["char"] = "author";
    setcookie("login", $account3, $date);
header("Location:author.php");
    } else 
    {header("Location:./fail.php");
    }}?>