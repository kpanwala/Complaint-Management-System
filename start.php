<?php
  session_start();
  
  $id=$_SESSION["id"];

  $servername = "localhost";
  $username = "root";
  $password = "12345";
  $db="stpro";

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    function img($fl_extn,$fl_temp){
        $file_path='userimages/'.substr(md5(time()),0,10).'.'.$fl_extn;
        move_uploaded_file($fl_temp,$file_path);
        $_SESSION["image"]=$file_path;
    }

    if(isset($_SESSION["id"]))
    {
        $designation=$department=$name=$id="";
        $id=$_SESSION["id"];
        $department=$_SESSION["department"];
        $designation=$_SESSION["designation"];
        $name=$_SESSION["name"];
        $us=$_SESSION["uname"];
        $pass=$_SESSION["pass"];
    }
    else{
        header("location:login.php");
    }

    if($_SESSION["image"]!=""){
        $image=$_SESSION["image"];
    }

?>