<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="/css/main.css" media="screen, projection, print">
  <link rel="stylesheet" type="text/css" href="/css/jquery.bxslider.css" media="screen, projection, print">
  <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
  <div class = "wrapper">
    <div class = "maincontent">
      <div class="container">
        <?php require_once '_chunks/header.php'; ?>
        <?php if($is_slider): ?>
          <?php require_once '_chunks/slider.php'; ?>
        <?php endif; ?>
        <?php require_once '_chunks/menu.php'; ?>
        <?php if($is_photo_slider): ?>
          <?php require_once '_chunks/slider-photo.php'; ?>
         <?php endif; ?>
        <div class="content_area main_page">
          <div class="content_area_right">
            <?php require_once '_chunks/left_navbar.php'; ?>
          </div>
          <div class="content_area_left">
            <div class="features">
              <?php include 'application/views/'.$content_view; ?>
              <?php if($is_right_sidebar): ?>
                <?php require_once '_chunks/right_sidebar.php'; ?>
              <?php endif; ?>
            </div>
          </div>
         </div>


            <section class="carousel">
                <div class="carousel_wrap">
                    <ul>
                        <li>
                            <a href="#" class="carousel_img_wrap">
                                <img src="/images/content/logo1.jpg" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="carousel_img_wrap">
                                <img src="/images/content/logo2.jpg" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="carousel_img_wrap">
                                <img src="/images/content/logo3.jpg" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="carousel_img_wrap">
                                <img src="/images/content/logo1.jpg" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="carousel_img_wrap">
                                <img src="/images/content/logo2.jpg" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="carousel_img_wrap">
                                <img src="/images/content/logo3.jpg" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="carousel_img_wrap">
                                <img src="/images/content/logo1.jpg" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="carousel_img_wrap">
                                <img src="/images/content/logo2.jpg" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="carousel_img_wrap">
                                <img src="/images/content/logo3.jpg" alt=""/>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="carousel_controls">
                    <a href="#" class="carousel_control_left"></a>
                    <a href="#" class="carousel_control_right"></a>
                </div>
            </section>
        </div> <!-- container -->
    </div> <!-- maincontent -->
    <div class = "empty"></div>
</div> <!-- wrapper -->

<!-- FOOTER HERE -->

<div class = "container">
    <footer role = "contentinfo">
        <div class="footer_main_logo">
            <p>
                <span>
                    &copy; 2015 ООО «Лофтскулл». Все права защищены
                </span>
            </p>
        </div>
    </footer>
</div>
<?php require_once '_chunks/footer.php'; ?>