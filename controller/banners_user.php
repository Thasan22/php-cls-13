<?php
session_start();
include "../database/env.php";
$heading = $_REQUEST["heading"];
$details = $_REQUEST["details"];
$btn_title = $_REQUEST["btn_title"];
$btn_url = $_REQUEST["btn_url"];
$video_url = $_REQUEST["video_url"];

// VALIDATION
$errors = [];


if(empty($heading)){
    $errors['heading'] = "Your Banner Title is missing!!";
}
 if(empty($details)){
    $errors['details'] = "Your Banner Detail is missing!!";
}
 if(empty($btn_title)){
    $errors['btn_title'] = "Your Banner Button Title is missing!!";
}
 if(empty($btn_url)){
    $errors['btn_url'] = "Your Banner Button Link is missing!!";
}
 if(empty($video_url)){
    $errors['video_url'] = "Your Banner Video Link is missing!!";
}

if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header('location: ../backend/add_banner.php');
} 