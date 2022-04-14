<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Advaya Shaale </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/icon.png">
    <!-- Google font (font-family: 'Lobster', Open+Sans;) -->
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="style.css">

    <!-- Cusom css -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer js -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Add your site or application content here -->

    <!-- <div class="fakeloader"></div> -->

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">

        <!-- Header -->
        <?php include_once 'header.php';?>
        <!-- //Header -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Contact Us</h2>
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="index.php">Home</a>
                                    <span class="brd-separetor"><img src="images/icons/brad.png" alt="separator images"></span>
                                    <span class="breadcrumb-item active">Contact Us</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <section class="page__contact bg--white section-padding--lg">
            <div class="container">
                <div class="row">
                    <!-- Start Single Address -->
                    <div class="col-md-6 col-sm-6 col-12 col-lg-4">
                        <div class="address location">
                            <div class="ct__icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="address__inner">
                                <h2>Our Location</h2>

                                <ul>
                                    <li>1C Main, 5th Cross,<br>Kasturinagar, Bangalore 560043</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Address -->
                    <!-- Start Single Address -->
                    <div class="col-md-6 col-sm-6 col-12 col-lg-4 xs-mt-60">
                        <div class="address phone">
                            <div class="ct__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="address__inner">
                                <h2>Phone Number</h2>

                                <ul>
                                    <li><a href="tell:+919513353577">+91 9513353577</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Address -->
                    <!-- Start Single Address -->
                    <div class="col-md-6 col-sm-6 col-12 col-lg-4 md-mt-60 sm-mt-60">
                        <div class="address email">
                            <div class="ct__icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="address__inner">
                                <h2>E-mail Address</h2>

                                <ul>
                                    <li><a href="mailto:admissions@advayashaale.org"><b>For Admissions: </b>admissions@advayashaale.org</a></li>
                                    <li><a href="mailto:conatct@advayashaale.org"><b>For Openings: </b>contact@advayashaale.org</a></li>
                                    <li><a href="mailto:info@advayashaale.org"><b>Other Queries: </b>info@advayashaale.org</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Address -->
                </div>
            </div>
        </section>
        <div class="contact__map">
            <div class="container-fluid">

                <div class="google__map">
                    <div id="googleMap"></div>
                </div>


            </div>
        </div>
        <!-- Start Contact Form -->
        <section class="contact__box section-padding--lg bg-image--27">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <div class="section__title text-center">
                            <h2 class="title__line">Feel Free To write Us</h2>

                        </div>
                    </div>
                </div>
                <div class="row mt--80">
                    <div class="col-lg-12">
                        <div class="contact-form-wrap">
                            <form id="contact-form" action="mali1.php" method="post">
                                <div class="single-contact-form name">
                                    <input type="text" name="name" placeholder="Your Name*">
                                    <input type="email" name="email" placeholder="Mail*">
                                </div>
                                <div class="single-contact-form subject">
                                    <input type="text" name="subject" placeholder="Subject*">
                                </div>
                                <div class="single-contact-form message">
                                    <textarea name="message" placeholder="Type your message here.."></textarea>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" class="dcare__btn">submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="form-output">
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Form -->
        <!-- Footer Area -->
        <?php include_once 'footer.php';?>

    <!-- //Footer Area -->


    </div>
    <!-- //Main wrapper -->

    <!-- JS Files -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(23.7286, 90.3854), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{
                    "featureType": "all",
                    "elementType": "all",
                    "stylers": [{
                        "invert_lightness": true
                    }, {
                        "saturation": 10
                    }, {
                        "lightness": 30
                    }, {
                        "gamma": 0.5
                    }, {
                        "hue": "#435158"
                    }]
                }, {
                    "featureType": "administrative.province",
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "hue": "#ff00d0"
                    }]
                }]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(13.005572, 77.6556999999999),
                map: map,
                title: 'Dcare!',
                icon: 'images/icons/map.png',
                animation: google.maps.Animation.BOUNCE

            });
        }
    </script>



    <script src="js/plugins.js"></script>
    <script src="js/active.js"></script>
</body>

</html>