<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <?php 
      $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>
       <!-- Favicon -->
       <link rel="icon" type="image/png" href="img/favicon.png">
    <!-- Google Web Fonts -->
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <meta property="og:type" content="<?php echo htmlspecialchars($page_title); ?>" />
  

    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>" />
    <meta property="og:site_name" content="<?php echo htmlspecialchars($page_title); ?>" />
    <meta property="og:url" content="<?php echo htmlspecialchars($actual_link); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>" />
    <meta property="og:image" content="favicon.jpg" />
    <meta property="og:image:secure_url" content="favicon.jpg" />
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">

    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">

    <link rel="canonical" href="<?=$actual_link;?>"  />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1561206607727251');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1561206607727251&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GXT9MJTMNS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GXT9MJTMNS');
</script>
</head>
<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">

            <small class="me-2"><i class="fa fa-envelope me-2"></i><a class="text-light"
                    href="mailto:sagar.pawar@srpbizex.com">sagar.pawar@srpbizex.com</a></small>
            <small><i class="fab fa-whatsapp ms-4"></i> +91 9167773829</small>
            <small><i class="fa fa-phone-alt ms-4"></i> +91 9823532788</small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Follow us:</small>
            <a class="text-white-50 ms-3"
                href="https://www.facebook.com/people/SRP-BizExcell-Pvt-Ltd/100086703877917/"><i
                    class="fab fa-facebook-f"></i></a>
            <a class="text-white-50 ms-3" href="https://www.linkedin.com/in/sagar-pawar-0bb85610/"><i
                    class="fab fa-linkedin-in"></i></a>

        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
            <img src="img/srplogo.png" alt="srp Bizexxcell" height="60px">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="vision.php" class="nav-item nav-link">Vision</a>
                <div class="nav-item dropdown">

                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Services</a>
                    <div class="dropdown-menu m-0 p-2 dropnav">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <center>
                                    <img src="img/ser.png" alt="service" class="mt-md-3">
                                </center>
                                <p class="text-md-center">We provide end to end service solution</p>
                            </div>
                            <div class="col-md-8 col-12">
                                <ul>
                                    <li>

                                        <a href="service.php" class="dropdown-item servicedrop">Business Transformation
                                        </a>
                                    </li>
                                    <li>
                                        <a href="training.php" class="dropdown-item servicedrop">Trainings & Development
                                        </a>
                                    </li>
                                    <li>
                                        <a href="customerexperience.php" class="dropdown-item servicedrop">Customer
                                            Experience Enhancement </a>
                                    </li>
                                    <li>
                                        <a href="changemanagement.php" class="dropdown-item servicedrop">Change
                                            Management </a>
                                    </li>
                                    <li>
                                        <a href="businessanalysis.php" class="dropdown-item servicedrop">Business
                                        Analysis</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <a href="customers.php" class="nav-item nav-link">Customers</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>

        </div>
    </nav>
</div>
<!-- Navbar End -->

<body>