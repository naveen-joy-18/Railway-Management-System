<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Railways - Your Journey Begins Here</title>
    <link rel="shortcut icon" href="images/favicon.png">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> <!-- Your custom CSS file -->
    <style>
        .carousel-item img {
            max-height: 500px; /* Increase main image size */
            object-fit: cover;
            margin: 0 auto; /* Center align the images */
        }
			.slick-slider {
    margin-left: auto; /* Align content towards the right */
}

        .slick-slide img {
            width: 300px; /* Adjust image width */
            height: 300px; /* Adjust image height */
            border-radius: 10px; /* Add border radius for shape */
            object-fit: cover;
            cursor: pointer;
        }

        .slick-prev, .slick-next {
            z-index: 1;
            position: fixed; /* Fix the position of arrows */
            top: calc(50% - 20px); /* Center vertically */
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 50%;
            font-size: 20px;
            line-height: 36px;
            text-align: center;
            color: #007bff;
        }

        .slick-prev {
            left: 10px; /* Adjust left position */
        }

        .slick-next {
            right: 10px; /* Adjust right position */
        }

        .slick-prev:hover, .slick-next:hover {
            background-color: rgba(0, 123, 255, 0.7);
            color: #fff;
        }

        .slick-prev:focus, .slick-next:focus {
            outline: none;
        }

        .slick-dots {
            bottom: -30px;
            display: flex !important;
            justify-content: center;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .slick-dots li {
            margin: 0 5px;
        }

        .slick-dots button {
            font-size: 0;
            line-height: 0;
            display: block;
            width: 15px;
            height: 15px;
            padding: 0;
            border: none;
            background-color: #ccc;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .slick-dots button:hover {
            background-color: #007bff;
        }

        .slick-dots button:focus {
            outline: none;
        }

        .slick-dots button.slick-active {
            background-color: #007bff;
        }

        .news-section {
            padding: 50px 0;
        }

        .news-section .section-title {
            margin-bottom: 30px;
        }

        .news-section p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
		.logo {
    margin: 0 auto; /* Center align the logo */
    text-align: center; /* Center align the content inside the div */
		}	
    </style>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Indian Railways</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="train.php">Find Train</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservation.php">Reservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
               <!-- <li class="nav-item">
                    <a class="nav-link" href="booking.php">Booking History</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Signup</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="header">
    <div class="container text-center">
        <div class="logo">
		<img src="logo.png" alt="Indian Railways Logo" class="img-fluid" style="width: 200px; height: 200px;">
        </div>
        <div class="header-content">
         <h1 class="display-4"><b>WELCOME TO INDIAN RAILWAYS</b></h1>
            <p class="lead">Your Journey Begins Here</p>
        </div>
    </div>
</header>

<!-- Carousel -->
<section class="carousel-container">
    <div class="slick-slider">
        <div><img src="7.jpg" alt="Slide 1"></div>
        <div><img src="8.jpg" alt="Slide 2"></div>
        <div><img src="9.jpg" alt="Slide 3"></div>
        <div><img src="10.jpg" alt="Slide 4"></div>
		<div><img src="6.jpg" alt="Slide 5"></div>
        <!-- Add more slides as needed -->
    </div>
</section>

<!-- News Section -->
<section class="news-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h2 class="section-title">Latest News</h2>
                <div id="news-slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p>There is no proposal to extend to mail/express and superfast trains the flexi-fares currently applicable only to Rajdhani, Shatabdi and Duronto trains, said Railways Minister Suresh Prabhu.</p>
                        </div>
                        <div class="carousel-item">
                            <p>The Railway ministry has posted the rate list on its Twitter account while asking people to lodge a complaint if they are overcharged.</p>
                        </div>
                        <!-- Add more news items as needed -->
                    </div>
                    <a class="carousel-control-prev" href="#news-slider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#news-slider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="text-left">&copy; 2024 Indian Railways</p>
            </div>
            <div class="col-md-6">
                <p class="text-right">@CREW</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.slick-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 3, /* Show three images at a time */
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev">&#10094;</button>',
            nextArrow: '<button type="button" class="slick-next">&#10095;</button>',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1 /* Show one image at a time on smaller screens */
                    }
                }
            ]
        });
    });
</script>
</body>
</html>
