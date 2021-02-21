<?php
include_once "./inc/header.php";
require_once './inc/connection.php';
require_once './inc/initialize.php';

//TODO need some user input handling
if(array_key_exists('action', $_GET)){
    if(isset($_GET['action']) && !empty($_GET['action'])){
        $action = $_GET['action'];
    }else{
        die('ERROR: value action error');
    }
}else{
    die('ERROR: key error');
}
//if ($login === true && $register === true || $login === false && $register === false){
//    die('error');
//}
?>
<?php
    if($action === 'register'){?>
        <h1 class="h5">Signup Now</h1>
        <p class="lead">student Signup page</p>
        <form action="resp/student.php" method="post">
            <input type="hidden" name="action" value="<?php echo 'register'; ?>">
            <div class="d-flex flex-column w-25">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" autocomplete="off">
            </div>
            <div class="d-flex flex-column w-25 mt-3">
                <label for="email">email</label>
                <input type="email" id="email" name="email" autocomplete="off">
            </div>
            <div class="d-flex flex-column w-25 mt-3">
                <label for="pwd">password</label>
                <input type="password" id="pwd" name="pwd" autocomplete="off">
            </div>
            <button class="btn btn-secondary mt-2" type="submit" name="submit">Submit</button>
        </form>
    <?php }else if($action === 'login'){?>
        <h1 class="h5">Login Now</h1>
        <p class="lead">student login page</p>
        <form action="resp/student.php" method="post">
            <input type="hidden" name="action" value="<?php echo 'login'; ?>">
            <div class="d-flex flex-column w-25 mt-3">
                <label for="email">email/username</label>
                <input type="email" id="email" name="email" autocomplete="off">
            </div>
            <div class="d-flex flex-column w-25 mt-3">
                <label for="pwd">password</label>
                <input type="password" id="pwd" name="pwd" autocomplete="off">
            </div>
            <button class="btn btn-secondary mt-2" type="submit" name="submit">Submit</button>
        </form>
    <?php }else{
        die('ERROR: some error');
    }
?>


<?php include_once "./inc/footer.php";
?>