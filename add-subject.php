<?php
include_once "./inc/header.php";
require_once './inc/connection.php';
require_once './inc/initialize.php';
//TODO add authentication later via session
?>

<h1 class="h4">Add Subject here (admin area)</h1>
<p class="lead">This page is for admin to add subjects to system</p>
<form action="resp/response.php" method="post">
    <div class="d-flex flex-column w-25">
        <label for="subject">Subject Name</label>
        <input type="text" id="subject" name="subject" autocomplete="off">
    </div>
    <div class="d-flex flex-column w-25 mt-3">
        <label for="code">Subject Code</label>
        <input type="text" id="code" name="code" autocomplete="off">
    </div>
    <div class="d-flex flex-column w-25 mt-3">
        <label for="instructor">Instructor</label>
        <input type="text" id="instructor" name="instructor" autocomplete="off">
    </div>
    <div class="d-flex flex-column w-25 mt-3">
        <label for="instructor-email">Instructor Email</label>
        <input type="text" id="instructor-email" name="instructor-email" autocomplete="off">
    </div>
    <div class="d-flex flex-column w-25 mt-3">
        <label for="ch">Credit Hour</label>
        <input type="text" id="ch" name="ch" autocomplete="off">
    </div>
    <button class="btn btn-secondary mt-2" type="submit" name="submit">Submit</button>
</form>

<?php include_once "./inc/footer.php"; ?>
