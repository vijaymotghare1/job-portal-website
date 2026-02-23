<?php
session_start();
include("jobs.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>HireNest</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php include("header.php"); ?>

<div class="main-content <?php echo isset($_SESSION['user']) ? '' : 'blur'; ?>">

<section class="search-bar">
    <input type="text" id="searchInput" placeholder="Search job...">
    <select id="sortSelect">
        <option value="">Sort By</option>
        <option value="title">Title</option>
        <option value="location">Location</option>
    </select>
</section>

<section class="job-container" id="jobContainer">
<?php foreach($jobs as $job){ ?>
    <div class="job-card" data-title="<?php echo $job['title']; ?>" data-location="<?php echo $job['location']; ?>">
        <h3><?php echo $job['title']; ?></h3>
        <p><?php echo $job['company']; ?></p>
        <p><?php echo $job['location']; ?></p>
        <p><?php echo $job['salary']; ?></p>
        <a href="apply.php?id=<?php echo $job['id']; ?>" class="btn">Apply</a>
    </div>
<?php } ?>
</section>

</div>

<?php if(!isset($_SESSION['user'])){ ?>
<div class="login-modal">
    <div class="login-box">
        <h2>Login</h2>
        <form method="post" action="login.php">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</div>
<?php } ?>

<script src="script.js"></script>
</body>
</html>