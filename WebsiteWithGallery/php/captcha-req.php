<!doctype html>
<html lang="en">
<html>
<head>
	<title>Captcha is required!</title>
	<title>Base Template</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Other Meta Tags -->
    <meta name="keywords" content="" /> 

    <!-- Custom Style Sheet -->
    <link rel="stylesheet" type="text/css" href="/css/custom.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-icons.min.css" />
    <!-- Bootstrap JS-->
    <script src="/js/bootstrap.bundle.min.js" defer></script>
    <!-- reCaptcha -->
    <!--script src="https://www.google.com/recaptcha/api.js" async defer></script-->
</head>
<body>
	<!--?php $previous = $_SERVER['HTTP_REFERER']; header( "refresh:3;url=$previous#contact"); ?-->

	<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark py-2 sticky-top bg-dark">
        <div class="container">
            <picture class="navbar-brand p-3">
                <source srcset="/img/stock_logo.webp" type="image/webp">
                <source srcset="/img/stock_logo.png" type="image/png">
                <a href="#"><img class="img-fluid" width="135" height="95" src="/img/stock_logo.png" alt="Logo"></a>
            </picture>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/index.html#about" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="/index.html#contact" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="/gallery.html" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">Drop Down Menu</a>
                        <div class="dropdown-menu">
                            <a href="/with_side_nav.html" class="dropdown-item">Dropdown 00</a>
                            <a href="/with_side_nav.html" class="dropdown-item">Dropdown 01</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

		<section class="p-5" id="thank_you">
            <div class="container">
                <div class="d-md-flex align-items-center justify-content-between">
                    <h1 class="text-danger">Captcha is required!</h1>
                </div>               
            </div>


</body>
</html>