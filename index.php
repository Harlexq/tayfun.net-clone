<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serhan Bakır</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>


    <div class="container">
        <?php
        include('pages/common/header.php');
        ?>
        <section class="about">
            <div class="about-inner">
                <div class="about-info">
                    <h2>Web Günceme,<br>Hoşgeldin!</h2>
                    <p>Bu sitede sadece kodlamadan değil, günlük hayatımdan, hobilerimden, sevdiğim ya da sevmediğim şeylerden, yaşadığım olaylardan, dinlediğim müziklerden, iyi kötü keşfettiğim her şeyden bahsediyorum.</p>
                </div>
                <div class="about-social">
                    <a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-github"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </section>

        <section class="post">
            <div class="post-inner">
                <div class="post-title">
                    <h2>Son Yazdıklarım</h2>
                </div>
                <div class="post-content">
                    <a href="#" class="post-item">
                        <h3>CRA Uygulamarınızı Vite'e Geçirin!</h3>
                        <p><i class="fa-regular fa-calendar"></i> 13 Nisan 2023</p>
                    </a>
                    <a href="#" class="post-item">
                        <h3>Vite Absolute Path</h3>
                        <p><i class="fa-regular fa-calendar"></i> 07 Şubat 2023</p>
                    </a>
                    <a href="#" class="post-item">
                        <h3>value vs. valueAsNumber</h3>
                        <p><i class="fa-regular fa-calendar"></i> 15 Ocak 2023</p>
                    </a>
                    <a href="#" class="post-item">
                        <h3>JavaScript print Olayları</h3>
                        <p><i class="fa-regular fa-calendar"></i> 15 Ocak 2023</p>
                    </a>
                </div>
            </div>
        </section>

        <section class="bookmarks">
            <div class="bookmarks-inner">
                <div class="bookmarks-title">
                    <h2>Yer İmleri</h2>
                </div>
                <div class="bookmarks-content">
                    <a href="#" class="bookmarks-item">
                        <p>Fast, composable, unstyled command menu for React — ⌘K</p>
                    </a>
                    <a href="#" class="bookmarks-item">
                        <p>Durves - Design Pattern Tool</p>
                    </a>
                    <a href="#" class="bookmarks-item">
                        <p>Next.js 13: complete guide to Server Components and the App Directory</p>
                    </a>
                    <a href="#" class="bookmarks-item">
                        <p>Mesh Gradients Generator by MagicPattern</p>
                    </a>
                </div>
                <div class="bookmarks-links">
                    <a href="#">Tüm Linkler</a>
                </div>
            </div>
        </section>
    </div>

    <?php
    include('pages/common/footer.php');
    ?>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>