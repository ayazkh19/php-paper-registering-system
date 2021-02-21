<?php
//TODO add student login and register mechanism here
if(!isset($_POST['submit'])){
    die('isset error');
}else{
    $action = $_POST['action'];
    if ($action === 'login'){
        die();
    }else if($action === 'register'){
        die();
    }else{
        die('action error');
    }
}