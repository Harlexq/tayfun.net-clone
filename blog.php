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

        <div class="blog">
            <div class="blog-inner">
                <div class="blog-title">
                    <h2 class="h2-title">Blog</h2>
                </div>
                <div class="blog-content">
                    <div class="blog-article">
                        <p class="blog-history">Nisan, 2023</p>
                        <a href="#" class="blog-item">
                            <p>Fast, composable, unstyled command menu for React — ⌘K</p>
                        </a>
                    </div>
                    <div class="blog-article">
                        <p class="blog-history">Şubat, 2023</p>
                        <a href="#" class="blog-item">
                            <p>Vite Absolute Path</p>
                        </a>
                    </div>
                    <div class="blog-article">
                        <p class="blog-history">Ocak, 2023</p>
                        <a href="#" class="blog-item">
                            <p>value vs. valueAsNumber</p>
                        </a>
                        <a href="#" class="blog-item">
                            <p>JavaScript print Olayları</p>
                        </a>
                        <a href="#" class="blog-item">
                            <p>TailwindCSS :has() Kullanımı</p>
                        </a>
                        <a href="#" class="blog-item">
                            <p>30 yaşındayım</p>
                        </a>
                        <a href="#" class="blog-item">
                            <p>CSS :where(), :is() ve :has() Sözde Sınıfları</p>
                        </a>
                        <a href="#" class="blog-item">
                            <p>Sekmeler Arası Senkranizasyon (BroadcastChannel API)</p>
                        </a>
                        <a href="#" class="blog-item">
                            <p>Print için CSS</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php
    include('pages/common/footer.php');
    ?>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>