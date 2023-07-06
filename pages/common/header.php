<header class="header">
    <div class="navbar-brand">
        <a href="index.php" class="navbar-link">
            <div class="navbar-logo">
                <img src="assets/img/serhan.jpg" alt="">
            </div>
            <div class="navbar-title">
                <h1>Serhan Bakır</h1>
                <p>Junior Web Developer</p>
            </div>
        </a>
    </div>
    <nav class="nav">
        <div class="nav-inner">
            <ul class="navbar">
                <li class="navbar-item">
                    <a class="<?php if (basename($_SERVER['PHP_SELF']) == 'blog.php') echo 'active'; ?>" href="blog.php">Blog</a>
                </li>
                <li class="navbar-item">
                    <a class="<?php if (basename($_SERVER['PHP_SELF']) == 'equipment.php') echo 'active'; ?>" href="equipment.php">Ekipmanlar</a>
                </li>
                <li class="navbar-item">
                    <a class="<?php if (basename($_SERVER['PHP_SELF']) == 'bookmarks.php') echo 'active'; ?>" href="bookmarks.php">Yer İmleri</a>
                </li>
                <li class="navbar-item">
                    <a class="<?php if (basename($_SERVER['PHP_SELF']) == 'moments.php') echo 'active'; ?>" href="moments.php">Anlar</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="toggle">
        <i class="fa-solid fa-bars"></i>
    </div>
</header>