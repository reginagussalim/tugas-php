<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Regina's</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <?php require_once 'connect.php'; ?>
</head>

<body>
    <header class="header">
        <a href="#" class="logo" style="color: white;">Regina</a>
        <nav class="navbar" style="color: white;">
            <a href="#home" style="color: white;">HOME</a>
            <a href="#gallery" style="color: white;">GALLERY</a>
            <a href="#blog" style="color: white;">BLOG</a>
        </nav>
    </header>
    <div class="background-image">
        <div class="content-home">
            <div class="hallo">
                <h1>Hi, I'm Regina</h1>
            </div>
            <div class="paragraf-home">
                <p>
                    Hi everyone... my name is Regina. I am a second-year student in the computer engineering program.
                    I really like spicy food. I also enjoy watching sad romance films.
                    Some programming languages that I know are C++ and Python. I am now interested in learning the
                    Tailwind framework to help improve my skills in frontend development.
                </p>
            </div>
        </div>
    </div>

    <div id="gallery" class="gallery">
        <div class="gallery-title">
            <h2>Gallery</h2>
        </div>
        <div class="container-image">
            <div class="image-box">
                <img src="asset/foto1.jpg" alt="Image 1">
            </div>
            <div class="image-box">
                <img src="asset/foto2.jpg" alt="Image 2">
            </div>
            <div class="image-box">
                <img src="asset/foto3.jpg" alt="Image 3">
            </div>
            <div class="image-box">
                <img src="asset/foto4.jpg" alt="Image 4">
            </div>
            <div class="image-box">
                <img src="asset/foto5.jpg" alt="Image 5">
            </div>
            <div class="image-box">
                <img src="asset/foto6.jpg" alt="Image 6">
            </div>
        </div>
    </div>

    <div id="blog" class="blog">
        <div class="blog-title">
            <h2>Blog</h2>
        </div>

        <div class="container-blog">
            <?php
                while($blogdetails = $result->fetch_assoc()) {
            ?>
                <div class="post">
                <div class="header-post">
                    <img src="<?php echo $blogdetails['blog_img']; ?>"
                        alt="<?php echo $blogdetails['img_text']; ?>">
                </div>
                <div class="body-post">
                    <h3 class="body-post-title">
                        <a href="<?php echo $blogdetails['blog_link']; ?>">
                            <?php echo $blogdetails['title']; ?>
                        </a>
                    </h3>
                    <p class="body-post-content">
                        <a href="<?php echo $blogdetails['blog_link']; ?>">
                            <?php echo $blogdetails['content']; ?>
                        </a>
                    </p>
                </div>
            </div>
            <?php
                }
            ?>

        </div>
    </div>

    <div class="footer">
        <div class="footer-title">
            <h2>Regina</h2>
        </div>
        <div class="social">
            <a href="https://www.instagram.com/reginagussalim?igsh=MWs2ZnZiZmZwNm5iaw=="><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/reginaagussalim"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/reginagussalim"><i class="fab fa-github"></i></a>
            <a href="https://wa.me/6287752276768"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
</body>

</html>