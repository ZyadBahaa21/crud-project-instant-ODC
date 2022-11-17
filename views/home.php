<?php require_once '../core/config.php'; ?>
<?php require_once PATH . 'views/inc/header.php'; ?>
<?php require_once PATH . 'core/connection.php'; ?>
<?php if(session_status() === PHP_SESSION_NONE) session_start(); ?>

<?php
if(isset($_SESSION['logged'])) {
?>

<style>
        #h {
            margin-top: 40px;
            border: 2px solid black;
            padding: 80px;
            background-color: aquamarine;
            text-align: center;
        }
    </style>
<h1 id = "h" class="my-2 text-center">Home Page</h1>

<?php 

} else {
    header("Location:" . URL . "views/auth/login.php");
    exit;
}
?>

<?php require_once PATH . 'views/inc/footer.php'; ?>