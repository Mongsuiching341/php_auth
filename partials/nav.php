<?php
$cookieName = $_COOKIE['username'] ?? 'Guest';
?>
<nav>
    <div class="logo">mong.</div>
    <div class="links">
        <a class="link" href="<?= isset($_SESSION['login']) ? './index.php?logout=true' : './login.php' ?>"><?= isset($_SESSION['login']) ? "Log out" . "(" . $cookieName . ")" : 'Log In' ?></a>
        <?php if (!isset($_SESSION['login'])) : ?>
            <a class="link" href="./index.php">Sign up</a>
        <?php endif; ?>
        <?php if (isset($_SESSION['login'])) : ?>
            <a href="./dashboard.php" class="link">Dashboard</a>
        <?php endif; ?>
        <!-- <a class="link big" href="#">Add task</a> -->

    </div>
</nav>