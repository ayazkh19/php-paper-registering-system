<?php
if(!isset($_POST['submit'])){
    die('isset error');
}else{
    $action = $_POST['action'];
    if ($action === 'login'){

    }else if($action === 'register'){

    }else{
        die('action error');
    }
}