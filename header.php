<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
?>
<header>
    <h1>HireNest</h1>
    <nav>
        <a href="index.php">Home</a>
        <?php if(isset($_SESSION['user'])){ ?>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        <?php } else { ?>
            <a href="login.php">Login</a>
        <?php } ?>
    </nav>
</header>