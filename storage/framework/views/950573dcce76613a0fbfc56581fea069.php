<!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/proty/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Dec 2024 13:44:04 GMT -->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8" />
    <!--[if IE ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><![endif]-->
    <title>ConfiMart - Real Estate HTML Template</title>

    <meta name="description"
        content="Propty is a website specializing in buying and renting properties, connecting buyers and tenants with trusted property owners. With an easy-to-use interface and detailed information, Propty offers a fast and convenient property search experience.">

    <meta name="keywords"
        content=" RealEstate, RealEstate, Buy, Rent, Homes, Apartment, Listings, Sale, Rental, Housing">

    <meta name="author" content="themesflat.com" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/sib-styles.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css" />

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="/assets/icons/icomoon/style.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="/assets/icons/favicon.svg" />
    <link rel="apple-touch-icon-precomposed" href="/assets/icons/favicon.svg" />
</head>

<body class="popup-loader">
    <!-- wrapper -->
    <div id="wrapper">

        <!-- .preload -->
        <div id="loading">
            <div id="loading-center">
                <div class="loader-container">
                    <div class="wrap-loader">
                        <div class="loader">
                        </div>
                        <div class="icon">
                            <img src="/assets/images/logo/loading.png" alt="logo_icon">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.preload -->

        <!-- .header -->
        <header id="header-main" class="header header-fixed">
            <div class="header-inner">
                <div class="tf-container xl">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-inner-wrap">
                                <div class="header-logo">
                                    <a href="index.html" class="site-logo">
                                        <img id="logo_header" alt="" src="/assets/images/logo/logo%402x.png">
                                    </a>
                                </div>
                                <nav class="main-menu">
                                    <ul class="navigation ">
                                        <li class="has-child current-menu"><a href="<?php echo e(route('welcome')); ?>">Home</a>

                                        </li>
                                        <li class="has-child style-2"><a href="#">Listing</a>
                                            <ul class="submenu">


                                                <li>
                                                    <a href="#">Listing Details</a>
                                                    <ul class="submenu2">
                                                        <li><a href="<?php echo e(route('property.list')); ?>">Property Details</a>
                                                        </li>

                                                        <li><a href="<?php echo e(route('testimonial')); ?>">Testimonial</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-child"><a href="#">Pages</a>
                                            <ul class="submenu">


                                                <li><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child "><a href="#">Signup/Login</a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                                                <li><a href="<?php echo e(route('login')); ?>">Login</a></li>


                                            </ul>
                                        </li>

                                    </ul>
                                </nav>
                                <div class="header-right">
                                    <div class="phone-number">
                                        <div class="/assets/icons">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.875 5.625C1.875 12.5283 7.47167 18.125 14.375 18.125H16.25C16.7473 18.125 17.2242 17.9275 17.5758 17.5758C17.9275 17.2242 18.125 16.7473 18.125 16.25V15.1067C18.125 14.6767 17.8325 14.3017 17.415 14.1975L13.7292 13.2758C13.3625 13.1842 12.9775 13.3217 12.7517 13.6233L11.9433 14.7008C11.7083 15.0142 11.3025 15.1525 10.935 15.0175C9.57073 14.5159 8.33179 13.7238 7.30398 12.696C6.27618 11.6682 5.48406 10.4293 4.9825 9.065C4.8475 8.6975 4.98583 8.29167 5.29917 8.05667L6.37667 7.24833C6.67917 7.0225 6.81583 6.63667 6.72417 6.27083L5.8025 2.585C5.75178 2.38225 5.63477 2.20225 5.47004 2.07361C5.30532 1.94498 5.10234 1.87507 4.89333 1.875H3.75C3.25272 1.875 2.77581 2.07254 2.42417 2.42417C2.07254 2.77581 1.875 3.25272 1.875 3.75V5.625Z"
                                                    stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                        </div>
                                        <p>+234 09131181075</p>
                                    </div>
                                    <div class="box-user tf-action-btns">
                                        <div class="user ">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.749 6C15.749 6.99456 15.3539 7.94839 14.6507 8.65165C13.9474 9.35491 12.9936 9.75 11.999 9.75C11.0044 9.75 10.0506 9.35491 9.34735 8.65165C8.64409 7.94839 8.249 6.99456 8.249 6C8.249 5.00544 8.64409 4.05161 9.34735 3.34835C10.0506 2.64509 11.0044 2.25 11.999 2.25C12.9936 2.25 13.9474 2.64509 14.6507 3.34835C15.3539 4.05161 15.749 5.00544 15.749 6ZM4.5 20.118C4.53213 18.1504 5.33634 16.2742 6.73918 14.894C8.14202 13.5139 10.0311 12.7405 11.999 12.7405C13.9669 12.7405 15.856 13.5139 17.2588 14.894C18.6617 16.2742 19.4659 18.1504 19.498 20.118C17.1454 21.1968 14.5871 21.7535 11.999 21.75C9.323 21.75 6.783 21.166 4.5 20.118Z"
                                                    stroke="#2C2E33" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="name">
                                            Themesflat
                                            <i class="icon-CaretDown"></i>
                                        </div>
                                        <div class=" menu-user">
                                            <a class="dropdown-item" href="<?php echo e(route('dashboard')); ?> ">
                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.5 2.5H3.33333C2.8731 2.5 2.5 2.8731 2.5 3.33333V9.16667C2.5 9.6269 2.8731 10 3.33333 10H7.5C7.96024 10 8.33333 9.6269 8.33333 9.16667V3.33333C8.33333 2.8731 7.96024 2.5 7.5 2.5Z"
                                                        stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M16.668 2.5H12.5013C12.0411 2.5 11.668 2.8731 11.668 3.33333V5.83333C11.668 6.29357 12.0411 6.66667 12.5013 6.66667H16.668C17.1282 6.66667 17.5013 6.29357 17.5013 5.83333V3.33333C17.5013 2.8731 17.1282 2.5 16.668 2.5Z"
                                                        stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M16.668 10H12.5013C12.0411 10 11.668 10.3731 11.668 10.8333V16.6667C11.668 17.1269 12.0411 17.5 12.5013 17.5H16.668C17.1282 17.5 17.5013 17.1269 17.5013 16.6667V10.8333C17.5013 10.3731 17.1282 10 16.668 10Z"
                                                        stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M7.5 13.3334H3.33333C2.8731 13.3334 2.5 13.7065 2.5 14.1667V16.6667C2.5 17.1269 2.8731 17.5 3.33333 17.5H7.5C7.96024 17.5 8.33333 17.1269 8.33333 16.6667V14.1667C8.33333 13.7065 7.96024 13.3334 7.5 13.3334Z"
                                                        stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                Dashboards</a>
                                            <a class="dropdown-item" href="<?php echo e(route('admin.property.review')); ?> ">
                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.5 12.5C17.5 12.942 17.3244 13.366 17.0118 13.6785C16.6993 13.9911 16.2754 14.1667 15.8333 14.1667H5.83333L2.5 17.5V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V12.5Z"
                                                        stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M6.66797 9.99996C7.11 9.99996 7.53392 9.82436 7.84648 9.5118C8.15904 9.19924 8.33464 8.77532 8.33464 8.33329V6.66663H6.66797"
                                                        stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M11.668 9.99996C12.11 9.99996 12.5339 9.82436 12.8465 9.5118C13.159 9.19924 13.3346 8.77532 13.3346 8.33329V6.66663H11.668"
                                                        stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                Reviews</a>
                                            <a class="dropdown-item" href="<?php echo e(route('property.view')); ?> ">
                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.082 18.3333H14.9987C15.4407 18.3333 15.8646 18.1577 16.1772 17.8451C16.4898 17.5326 16.6654 17.1087 16.6654 16.6666V5.83329L12.4987 1.66663H4.9987C4.55667 1.66663 4.13275 1.84222 3.82019 2.15478C3.50763 2.46734 3.33203 2.89127 3.33203 3.33329V6.66663"
                                                        stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M11.668 1.66663V4.99996C11.668 5.44199 11.8436 5.86591 12.1561 6.17847C12.4687 6.49103 12.8926 6.66663 13.3346 6.66663H16.668"
                                                        stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M2.49828 10.9167C2.24146 11.0649 2.02884 11.279 1.88235 11.5368C1.73587 11.7946 1.66082 12.0868 1.66494 12.3833V15.0833C1.65529 15.3802 1.72514 15.6742 1.86726 15.935C2.00937 16.1958 2.2186 16.4139 2.47328 16.5667L4.99828 18.0833C5.25385 18.2356 5.5455 18.3166 5.84297 18.3181C6.14044 18.3195 6.43288 18.2414 6.68994 18.0917L9.16494 16.5833C9.42176 16.4351 9.63438 16.221 9.78087 15.9632C9.92735 15.7054 10.0024 15.4132 9.99828 15.1167V12.4167C10.0079 12.1198 9.93808 11.8258 9.79596 11.565C9.65385 11.3042 9.44462 11.0861 9.18994 10.9333L6.66494 9.41666C6.40937 9.26442 6.11771 9.18337 5.82025 9.1819C5.52278 9.18044 5.23033 9.25862 4.97328 9.40832L2.49828 10.9167Z"
                                                        stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M5.83203 14.1666V18.3333" stroke="#A8ABAE"
                                                        stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M9.7513 11.8334L5.83464 14.1667L1.91797 11.8334"
                                                        stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                My properties
                                            </a>
                                            <a class="dropdown-item " href="<?php echo e(route('admin.property.add')); ?>">
                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M14.9987 4.16663L12.987 2.15496C12.6745 1.84238 12.2507 1.66672 11.8087 1.66663H4.9987C4.55667 1.66663 4.13275 1.84222 3.82019 2.15478C3.50763 2.46734 3.33203 2.89127 3.33203 3.33329V16.6666C3.33203 17.1087 3.50763 17.5326 3.82019 17.8451C4.13275 18.1577 4.55667 18.3333 4.9987 18.3333H14.9987C15.4407 18.3333 15.8646 18.1577 16.1772 17.8451C16.4898 17.5326 16.6654 17.1087 16.6654 16.6666"
                                                        stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M17.8168 10.5217C18.1487 10.1897 18.3352 9.73947 18.3352 9.27C18.3352 8.80054 18.1487 8.3503 17.8168 8.01834C17.4848 7.68637 17.0346 7.49988 16.5651 7.49988C16.0956 7.49988 15.6454 7.68637 15.3134 8.01834L11.9718 11.3617C11.7736 11.5597 11.6286 11.8044 11.5501 12.0733L10.8526 14.465C10.8317 14.5367 10.8304 14.6127 10.849 14.6851C10.8675 14.7574 10.9052 14.8235 10.958 14.8763C11.0108 14.9291 11.0768 14.9668 11.1492 14.9853C11.2216 15.0038 11.2976 15.0026 11.3693 14.9817L13.7609 14.2842C14.0298 14.2057 14.2746 14.0606 14.4726 13.8625L17.8168 10.5217Z"
                                                        stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6.66797 15H7.5013" stroke="#A8ABAE" stroke-width="1.4"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Add property</a>
                                            <div class="dropdown-item ">
                                                <svg width="20" height="20" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.749 6C15.749 6.99456 15.3539 7.94839 14.6507 8.65165C13.9474 9.35491 12.9936 9.75 11.999 9.75C11.0044 9.75 10.0506 9.35491 9.34735 8.65165C8.64409 7.94839 8.249 6.99456 8.249 6C8.249 5.00544 8.64409 4.05161 9.34735 3.34835C10.0506 2.64509 11.0044 2.25 11.999 2.25C12.9936 2.25 13.9474 2.64509 14.6507 3.34835C15.3539 4.05161 15.749 5.00544 15.749 6ZM4.5 20.118C4.53213 18.1504 5.33634 16.2742 6.73918 14.894C8.14202 13.5139 10.0311 12.7405 11.999 12.7405C13.9669 12.7405 15.856 13.5139 17.2588 14.894C18.6617 16.2742 19.4659 18.1504 19.498 20.118C17.1454 21.1968 14.5871 21.7535 11.999 21.75C9.323 21.75 6.783 21.166 4.5 20.118Z"
                                                        stroke="#A8ABAE" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <div class="d-flex wrap-login">
                                                    <a href="#modalLogin" data-bs-toggle="modal">
                                                        login</a>
                                                    <span>/</span>
                                                    <a href="#modalRegister" data-bs-toggle="modal">
                                                        register </a>
                                                </div>
                                            </div>
                                            <a class="dropdown-item" href="index.html">
                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.5 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H7.5"
                                                        stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M13.332 14.1667L17.4987 10L13.332 5.83337"
                                                        stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.5 10H7.5" stroke="#A8ABAE" stroke-width="1.4"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Logout</a>
                                        </div>
                                    </div>
                                    <div class="btn-add">
                                        <a class="tf-btn style-border pd-23" href="add-property.html">Add property</a>
                                    </div>
                                    <div class="mobile-button" data-bs-toggle="offcanvas"
                                        data-bs-target="#menu-mobile" aria-controls="menu-mobile">
                                        <i class="icon-menu"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <?php echo e($slot); ?>


        <footer id="footer">
            <div class="tf-container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-top">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img id="logo_footer" src="/assets/images/logo/logo-2%402x.png"
                                        alt="logo-footer">
                                </a>
                            </div>
                            <div class="footer-contact">
                                <div class="contact-item">
                                    <div class="/assets/icons">
                                        <svg width="48" height="49" viewBox="0 0 48 49" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M43.9989 34.34V40.34C44.0012 40.897 43.8871 41.4483 43.6639 41.9586C43.4408 42.469 43.1135 42.9271 42.703 43.3037C42.2926 43.6802 41.808 43.9669 41.2804 44.1454C40.7527 44.3238 40.1936 44.3901 39.6389 44.34C33.4846 43.6712 27.5729 41.5682 22.3789 38.2C17.5465 35.1293 13.4496 31.0323 10.3789 26.2C6.99885 20.9824 4.89538 15.0419 4.23889 8.85995C4.18891 8.30688 4.25464 7.74947 4.43189 7.2232C4.60914 6.69693 4.89403 6.21333 5.26842 5.80319C5.64281 5.39306 6.0985 5.06537 6.60647 4.84099C7.11444 4.61662 7.66357 4.50047 8.21889 4.49995H14.2189C15.1895 4.4904 16.1305 4.83411 16.8664 5.46702C17.6024 6.09992 18.083 6.97884 18.2189 7.93995C18.4721 9.86008 18.9418 11.7454 19.6189 13.5599C19.888 14.2758 19.9462 15.0538 19.7867 15.8017C19.6272 16.5496 19.2566 17.2362 18.7189 17.78L16.1789 20.3199C19.026 25.327 23.1718 29.4728 28.1789 32.32L30.7189 29.78C31.2627 29.2422 31.9492 28.8716 32.6971 28.7121C33.4451 28.5526 34.223 28.6109 34.9389 28.8799C36.7534 29.5571 38.6388 30.0267 40.5589 30.28C41.5304 30.417 42.4177 30.9064 43.052 31.6549C43.6862 32.4035 44.0232 33.3591 43.9989 34.34Z"
                                                stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <div class="title text-1">
                                            Call us
                                        </div>
                                        <h6>
                                            <a href="#"> (603) 555-0123</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <div class="/assets/icons">
                                        <svg width="48" height="49" viewBox="0 0 48 49" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M40 8.5H8C5.79086 8.5 4 10.2909 4 12.5V36.5C4 38.7091 5.79086 40.5 8 40.5H40C42.2091 40.5 44 38.7091 44 36.5V12.5C44 10.2909 42.2091 8.5 40 8.5Z"
                                                stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M44 14.5L26.06 25.9C25.4425 26.2869 24.7286 26.492 24 26.492C23.2714 26.492 22.5575 26.2869 21.94 25.9L4 14.5"
                                                stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <div class="title text-1">
                                            Nee live help
                                        </div>
                                        <h6 class="fw-4">
                                            <a href="#">
                                                nsirim61@gmail.com
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-main">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-menu-list footer-col-block style-2">
                                    <h5 class="title lh-30 title-desktop">About us</h5>
                                    <h5 class="title lh-30 title-mobile">About us</h5>
                                    <ul class="tf-collapse-content">
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="service-details.html">Why choose us?</a></li>
                                        <li><a href="#">Customer reviews</a></li>
                                        <li><a href="agents.html">Our team</a></li>
                                        <li><a href="career.html">Careers with realty</a></li>
                                        <li><a href="career.html">Work with us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-menu-list footer-col-block">
                                    <h5 class="title lh-30 title-desktop">Popular house</h5>
                                    <h5 class="title lh-30 title-mobile">Popular house</h5>
                                    <ul class="tf-collapse-content">
                                        <li><a href="property-gird.html">#Penthouses</a></li>
                                        <li><a href="property-gird.html">#Villa</a></li>
                                        <li><a href="property-gird.html">#Smart home</a></li>
                                        <li><a href="property-gird.html">#Apartments</a></li>
                                        <li><a href="property-gird.html">#Office</a></li>
                                        <li><a href="property-gird.html">#Bungalow</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-menu-list footer-col-block style-2">
                                    <h5 class="title lh-30 title-desktop">Quick links</h5>
                                    <h5 class="title lh-30 title-mobile">Quick links</h5>
                                    <ul class="tf-collapse-content">
                                        <li><a href="#">Terms of use</a></li>
                                        <li><a href="#">Privacy policy</a></li>
                                        <li><a href="#">Our services</a></li>
                                        <li><a href="contact.html">Contact support</a></li>
                                        <li><a href="#">Pricing plans</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-menu-list newsletter ">
                                    <h5 class="title lh-30 ">Newsletter</h5>
                                    <div class="sib-form">
                                        <div id="sib-form-container" class="sib-form-container">
                                            <div id="error-message" class="sib-form-message-panel">
                                                <div
                                                    class="sib-form-message-panel__text sib-form-message-panel__text--center">
                                                    <svg viewBox="0 0 512 512"
                                                        class="sib-icon sib-notification__icon">
                                                        <path
                                                            d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z" />
                                                    </svg>
                                                    <span class="sib-form-message-panel__inner-text">
                                                        Your subscription could not be saved. Please try again.
                                                    </span>
                                                </div>
                                            </div>
                                            <div id="success-message" class="sib-form-message-panel">
                                                <div
                                                    class="sib-form-message-panel__text sib-form-message-panel__text--center">
                                                    <svg viewBox="0 0 512 512"
                                                        class="sib-icon sib-notification__icon">
                                                        <path
                                                            d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" />
                                                    </svg>
                                                    <span class="sib-form-message-panel__inner-text">
                                                        Your subscription has been successful.
                                                    </span>
                                                </div>
                                            </div>
                                            <div id="sib-container"
                                                class="sib-container--large sib-container--vertical">
                                                <form id="sib-form" method="POST"
                                                    action="https://3c02c1a1.sibforms.com/serve/MUIFABjeOIIJNMRgQ-0Mb1bjkLdsnuanXhO94qzsHBwAVG3reSaZ5DIq2ozIM0_PBl7b_lcysdmopwilW1dcjaAmtOu_es-dny_hZggPsstdEuk75SIQ1B7K-NuFEN5hBn9HqJ2SFLbleb-PnrNQY1dGLy7gXPmMlWJfT2Jfc2MeVJg4Ufeezo6UlJhAZwbC5nZ8aV9PghzVQVkE"
                                                    data-type="subscription">
                                                    <div class="sib-form-block">
                                                        <div class="sib-text-form-block">
                                                            <p class="text-1">Sign up to receive the latest articles
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="sib-input sib-form-block">
                                                        <div class="form__entry entry_block">
                                                            <div class="form__label-row ">
                                                                <fieldset class="entry__field">
                                                                    <input class="input input-nl" type="text"
                                                                        id="EMAIL" name="EMAIL"
                                                                        autocomplete="off"
                                                                        placeholder="Your email address"
                                                                        data-required="true" required />
                                                                </fieldset>
                                                            </div>
                                                            <label class="  entry__error entry__error--primary">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="sib-optin sib-form-block">
                                                        <div class="form__entry entry_mcq">
                                                            <div class="form__label-row ">
                                                                <div class="checkbox-item ">
                                                                    <label>
                                                                        <span class="text-2 text-color-default">I have
                                                                            read and agree to
                                                                            the terms &
                                                                            conditions</span>
                                                                        <input type="checkbox" class="input_replaced"
                                                                            value="1" id="OPT_IN"
                                                                            name="OPT_IN">
                                                                        <span class="btn-checkbox"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <label class="entry__error entry__error--primary">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="sib-form-block">
                                                        <button
                                                            class="sib-form-block__button sib-form-block__button-with-loader tf-btn bg-color-primary w-full"
                                                            form="sib-form" type="submit">
                                                            <svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon"
                                                                viewBox="0 0 512 512">
                                                                <path
                                                                    d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z" />
                                                            </svg>
                                                            SUBSCRIBE
                                                        </button>
                                                    </div>
                                            </div>
                                            <input type="text" name="email_address_check" value=""
                                                class="input--hidden">
                                            <input type="hidden" name="locale" value="en">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="footer-bottom">
                        <p>Copyright © 2024 <span class="fw-7">CONFIMART - REAL ESTATE</span> . Designed & Developed by
                            <a href="#">Themesflat</a>
                        </p>
                        <div class="wrap-social">
                            <div class="text-3  fw-6 text-white">Follow us</div>
                            <ul class="tf-social ">
                                <li>
                                    <a href="#">
                                        <i class="icon-fb"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-X"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-linked"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-ins"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </footer> <!-- /#Footer -->

    </div> <!-- /.wrapper -->


    <!-- .login -->
    <div class="modal modal-account fade" id="modalLogin">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="flat-account">
                    <div class="banner-account">
                        <img src="/assets/images/section/banner-login.jpg" alt="banner">
                    </div>
                    <form class="form-account">
                        <div class="title-box">
                            <h4>Login</h4>
                            <span class="close-modal icon-close" data-bs-dismiss="modal"></span>
                        </div>
                        <div class="box">
                            <fieldset class="box-fieldset">
                                <label for="nameAccount">Account</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4869 14.0435C12.9628 13.3497 12.2848 12.787 11.5063 12.3998C10.7277 12.0126 9.86989 11.8115 9.00038 11.8123C8.13086 11.8115 7.27304 12.0126 6.49449 12.3998C5.71594 12.787 5.03793 13.3497 4.51388 14.0435M13.4869 14.0435C14.5095 13.1339 15.2307 11.9349 15.5563 10.6056C15.8818 9.27625 15.7956 7.87934 15.309 6.60014C14.8224 5.32093 13.9584 4.21986 12.8317 3.44295C11.7049 2.66604 10.3686 2.25 9 2.25C7.63137 2.25 6.29508 2.66604 5.16833 3.44295C4.04158 4.21986 3.17762 5.32093 2.69103 6.60014C2.20443 7.87934 2.11819 9.27625 2.44374 10.6056C2.76929 11.9349 3.49125 13.1339 4.51388 14.0435M13.4869 14.0435C12.2524 15.1447 10.6546 15.7521 9.00038 15.7498C7.3459 15.7523 5.74855 15.1448 4.51388 14.0435M11.2504 7.31228C11.2504 7.90902 11.0133 8.48131 10.5914 8.90327C10.1694 9.32523 9.59711 9.56228 9.00038 9.56228C8.40364 9.56228 7.83134 9.32523 7.40939 8.90327C6.98743 8.48131 6.75038 7.90902 6.75038 7.31228C6.75038 6.71554 6.98743 6.14325 7.40939 5.72129C7.83134 5.29933 8.40364 5.06228 9.00038 5.06228C9.59711 5.06228 10.1694 5.29933 10.5914 5.72129C11.0133 6.14325 11.2504 6.71554 11.2504 7.31228Z"
                                            stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <input type="text" class="form-control" id="nameAccount"
                                        placeholder="Your name">
                                </div>
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="pass">Password</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z"
                                            stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <input type="text" class="form-control" id="pass"
                                        placeholder="Your password">
                                </div>
                                <div class="text-forgot text-end"><a href="#">Forgot password</a></div>

                            </fieldset>
                        </div>
                        <div class="box box-btn">
                            <a href="dashboard.html" class="tf-btn bg-color-primary w-100">Login</a>
                            <div class="text text-center">Don’t you have an account? <a href="#modalRegister"
                                    data-bs-toggle="modal" class="text-color-primary">Register</a></div>
                        </div>
                        <p class="box text-center caption-2">or login with</p>
                        <div class="group-btn">
                            <a href="#" class="btn-social">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2478_11334)">
                                        <path
                                            d="M4.93242 12.0863L4.23625 14.6852L1.69176 14.739C0.931328 13.3286 0.5 11.7149 0.5 10C0.5 8.34179 0.903281 6.77804 1.61812 5.40112H1.61867L3.88398 5.81644L4.87633 8.06815C4.66863 8.67366 4.55543 9.32366 4.55543 10C4.55551 10.7341 4.68848 11.4374 4.93242 12.0863Z"
                                            fill="#FBBB00" />
                                        <path
                                            d="M20.3242 8.1319C20.439 8.73682 20.4989 9.36155 20.4989 10C20.4989 10.716 20.4236 11.4143 20.2802 12.088C19.7934 14.3803 18.5214 16.3819 16.7594 17.7984L16.7588 17.7978L13.9055 17.6522L13.5017 15.1314C14.6709 14.4456 15.5847 13.3726 16.066 12.088H10.7188V8.1319H20.3242Z"
                                            fill="#518EF8" />
                                        <path
                                            d="M16.7595 17.7978L16.7601 17.7984C15.0464 19.1758 12.8694 20 10.4996 20C6.69141 20 3.38043 17.8715 1.69141 14.739L4.93207 12.0863C5.77656 14.3401 7.95074 15.9445 10.4996 15.9445C11.5952 15.9445 12.6216 15.6484 13.5024 15.1313L16.7595 17.7978Z"
                                            fill="#28B446" />
                                        <path
                                            d="M16.882 2.30219L13.6425 4.95437C12.7309 4.38461 11.6534 4.05547 10.4991 4.05547C7.89246 4.05547 5.67762 5.73348 4.87543 8.06812L1.61773 5.40109H1.61719C3.28148 2.1923 6.63422 0 10.4991 0C12.9254 0 15.1502 0.864297 16.882 2.30219Z"
                                            fill="#F14336" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2478_11334">
                                            <rect width="20" height="20" fill="white"
                                                transform="translate(0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                Google
                            </a>
                            <a href="#" class="btn-social">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.5 10C20.5 14.9914 16.843 19.1285 12.0625 19.8785V12.8906H14.3926L14.8359 10H12.0625V8.12422C12.0625 7.3332 12.45 6.5625 13.6922 6.5625H14.9531V4.10156C14.9531 4.10156 13.8086 3.90625 12.7145 3.90625C10.4305 3.90625 8.9375 5.29063 8.9375 7.79688V10H6.39844V12.8906H8.9375V19.8785C4.15703 19.1285 0.5 14.9914 0.5 10C0.5 4.47734 4.97734 0 10.5 0C16.0227 0 20.5 4.47734 20.5 10Z"
                                        fill="#1877F2" />
                                    <path
                                        d="M14.3926 12.8906L14.8359 10H12.0625V8.12418C12.0625 7.33336 12.4499 6.5625 13.6921 6.5625H14.9531V4.10156C14.9531 4.10156 13.8088 3.90625 12.7146 3.90625C10.4304 3.90625 8.9375 5.29063 8.9375 7.79688V10H6.39844V12.8906H8.9375V19.8785C9.44664 19.9584 9.96844 20 10.5 20C11.0316 20 11.5534 19.9584 12.0625 19.8785V12.8906H14.3926Z"
                                        fill="white" />
                                </svg>
                                Facebook
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- /.login -->

    <!-- register -->
    <div class="modal modal-account fade" id="modalRegister">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="flat-account">
                    <div class="banner-account">
                        <img src="/assets/images/section/banner-register.jpg" alt="banner">
                    </div>
                    <form class="form-account">
                        <div class="title-box">
                            <h4>Register</h4>
                            <span class="close-modal icon-close" data-bs-dismiss="modal"></span>
                        </div>
                        <div class="box">
                            <fieldset class="box-fieldset">
                                <label for="username">User name</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4869 14.0435C12.9628 13.3497 12.2848 12.787 11.5063 12.3998C10.7277 12.0126 9.86989 11.8115 9.00038 11.8123C8.13086 11.8115 7.27304 12.0126 6.49449 12.3998C5.71594 12.787 5.03793 13.3497 4.51388 14.0435M13.4869 14.0435C14.5095 13.1339 15.2307 11.9349 15.5563 10.6056C15.8818 9.27625 15.7956 7.87934 15.309 6.60014C14.8224 5.32093 13.9584 4.21986 12.8317 3.44295C11.7049 2.66604 10.3686 2.25 9 2.25C7.63137 2.25 6.29508 2.66604 5.16833 3.44295C4.04158 4.21986 3.17762 5.32093 2.69103 6.60014C2.20443 7.87934 2.11819 9.27625 2.44374 10.6056C2.76929 11.9349 3.49125 13.1339 4.51388 14.0435M13.4869 14.0435C12.2524 15.1447 10.6546 15.7521 9.00038 15.7498C7.3459 15.7523 5.74855 15.1448 4.51388 14.0435M11.2504 7.31228C11.2504 7.90902 11.0133 8.48131 10.5914 8.90327C10.1694 9.32523 9.59711 9.56228 9.00038 9.56228C8.40364 9.56228 7.83134 9.32523 7.40939 8.90327C6.98743 8.48131 6.75038 7.90902 6.75038 7.31228C6.75038 6.71554 6.98743 6.14325 7.40939 5.72129C7.83134 5.29933 8.40364 5.06228 9.00038 5.06228C9.59711 5.06228 10.1694 5.29933 10.5914 5.72129C11.0133 6.14325 11.2504 6.71554 11.2504 7.31228Z"
                                            stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <input type="text" class="form-control" id="username"
                                        placeholder="User name">
                                </div>
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="email">Email address</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.3125 5.0625V12.9375C16.3125 13.3851 16.1347 13.8143 15.8182 14.1307C15.5018 14.4472 15.0726 14.625 14.625 14.625H3.375C2.92745 14.625 2.49822 14.4472 2.18176 14.1307C1.86529 13.8143 1.6875 13.3851 1.6875 12.9375V5.0625M16.3125 5.0625C16.3125 4.61495 16.1347 4.18573 15.8182 3.86926C15.5018 3.55279 15.0726 3.375 14.625 3.375H3.375C2.92745 3.375 2.49822 3.55279 2.18176 3.86926C1.86529 4.18573 1.6875 4.61495 1.6875 5.0625M16.3125 5.0625V5.24475C16.3125 5.53286 16.2388 5.81618 16.0983 6.06772C15.9578 6.31926 15.7553 6.53065 15.51 6.68175L9.885 10.143C9.61891 10.3069 9.31252 10.3937 9 10.3937C8.68748 10.3937 8.38109 10.3069 8.115 10.143L2.49 6.6825C2.24469 6.5314 2.04215 6.32001 1.90168 6.06847C1.7612 5.81693 1.68747 5.53361 1.6875 5.2455V5.0625"
                                            stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <input type="text" class="form-control" id="email"
                                        placeholder="Email address">
                                </div>

                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="pass">Password</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z"
                                            stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <input type="password" class="form-control" id="pass"
                                        placeholder="Your password">
                                </div>
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="confirm">Confirm password</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z"
                                            stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <input type="password" class="form-control" id="confirm"
                                        placeholder="Confirm password">
                                </div>
                            </fieldset>
                        </div>
                        <div class="box box-btn">
                            <a href="dashboard.html" class="tf-btn bg-color-primary w-full">Sign Up</a>
                            <div class="text text-center">Don’t you have an account? <a href="#modalLogin"
                                    data-bs-toggle="modal" class="text-color-primary">Sign In</a></div>
                        </div>
                        <p class="box text-center caption-2">or login with</p>
                        <div class="group-btn">
                            <a href="#" class="btn-social">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2478_12036)">
                                        <path
                                            d="M4.93242 12.0863L4.23625 14.6852L1.69176 14.739C0.931328 13.3286 0.5 11.7149 0.5 10C0.5 8.34179 0.903281 6.77804 1.61812 5.40112H1.61867L3.88398 5.81644L4.87633 8.06815C4.66863 8.67366 4.55543 9.32366 4.55543 10C4.55551 10.7341 4.68848 11.4374 4.93242 12.0863Z"
                                            fill="#FBBB00" />
                                        <path
                                            d="M20.3242 8.1319C20.439 8.73682 20.4989 9.36155 20.4989 10C20.4989 10.716 20.4236 11.4143 20.2802 12.088C19.7934 14.3803 18.5214 16.3819 16.7594 17.7984L16.7588 17.7978L13.9055 17.6522L13.5017 15.1314C14.6709 14.4456 15.5847 13.3726 16.066 12.088H10.7188V8.1319H20.3242Z"
                                            fill="#518EF8" />
                                        <path
                                            d="M16.7595 17.7978L16.7601 17.7984C15.0464 19.1758 12.8694 20 10.4996 20C6.69141 20 3.38043 17.8715 1.69141 14.739L4.93207 12.0863C5.77656 14.3401 7.95074 15.9445 10.4996 15.9445C11.5952 15.9445 12.6216 15.6484 13.5024 15.1313L16.7595 17.7978Z"
                                            fill="#28B446" />
                                        <path
                                            d="M16.882 2.30219L13.6425 4.95437C12.7309 4.38461 11.6534 4.05547 10.4991 4.05547C7.89246 4.05547 5.67762 5.73348 4.87543 8.06812L1.61773 5.40109H1.61719C3.28148 2.1923 6.63422 0 10.4991 0C12.9254 0 15.1502 0.864297 16.882 2.30219Z"
                                            fill="#F14336" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2478_12036">
                                            <rect width="20" height="20" fill="white"
                                                transform="translate(0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                Google
                            </a>
                            <a href="#" class="btn-social">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2478_12044)">
                                        <path
                                            d="M20.5 10C20.5 14.9914 16.843 19.1285 12.0625 19.8785V12.8906H14.3926L14.8359 10H12.0625V8.12422C12.0625 7.3332 12.45 6.5625 13.6922 6.5625H14.9531V4.10156C14.9531 4.10156 13.8086 3.90625 12.7145 3.90625C10.4305 3.90625 8.9375 5.29063 8.9375 7.79688V10H6.39844V12.8906H8.9375V19.8785C4.15703 19.1285 0.5 14.9914 0.5 10C0.5 4.47734 4.97734 0 10.5 0C16.0227 0 20.5 4.47734 20.5 10Z"
                                            fill="#1877F2" />
                                        <path
                                            d="M14.3926 12.8906L14.8359 10H12.0625V8.12418C12.0625 7.33336 12.4499 6.5625 13.6921 6.5625H14.9531V4.10156C14.9531 4.10156 13.8088 3.90625 12.7146 3.90625C10.4304 3.90625 8.9375 5.29063 8.9375 7.79688V10H6.39844V12.8906H8.9375V19.8785C9.44664 19.9584 9.96844 20 10.5 20C11.0316 20 11.5534 19.9584 12.0625 19.8785V12.8906H14.3926Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2478_12044">
                                            <rect width="20" height="20" fill="white"
                                                transform="translate(0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                Facebook
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- register -->

    <!-- mobile-nav -->
    <div class="offcanvas offcanvas-start mobile-nav-wrap " tabindex="-1" id="menu-mobile"
        aria-labelledby="menu-mobile">
        <div class="offcanvas-header top-nav-mobile">
            <div class="offcanvas-title">
                <a href="index.html"><img src="/assets/images/logo/logo%402x.png" alt=""></a>
            </div>
            <div data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="icon-close"></i>
            </div>
        </div>
        <div class="offcanvas-body inner-mobile-nav">
            <div class="mb-body">
                <ul id="menu-mobile-menu">
                    <li class="menu-item menu-item-has-children-mobile current-menu-item">
                        <a href="#dropdown-menu-one" class="item-menu-mobile collapsed" data-bs-toggle="collapse"
                            aria-expanded="true" aria-controls="dropdown-menu-one">
                            Home
                        </a>
                        <div id="dropdown-menu-one" class="collapse" data-bs-parent="#menu-mobile-menu">
                            <ul class="sub-mobile ">
                                <li class="menu-item current-item"><a href="index.html">Home Page 01</a></li>
                                <li class="menu-item"><a href="home02.html">Home Page 02</a></li>
                                <li class="menu-item"><a href="home03.html">Home Page 03</a></li>
                                <li class="menu-item"><a href="home04.html">Home Page 04</a></li>
                                <li class="menu-item"><a href="home05.html">Home Page 05</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item menu-item-has-children-mobile">
                        <a href="#dropdown-menu-two" class="item-menu-mobile collapsed" data-bs-toggle="collapse"
                            aria-expanded="true" aria-controls="dropdown-menu-two">
                            Listing
                        </a>

                    </li>
                    <li class="menu-item menu-item-has-children-mobile">
                        <a href="#dropdown-menu-four" class="item-menu-mobile collapsed" data-bs-toggle="collapse"
                            aria-expanded="true" aria-controls="dropdown-menu-four">
                            Pages
                        </a>
                        <div id="dropdown-menu-four" class="collapse" data-bs-parent="#menu-mobile-menu">
                            <ul class="sub-mobile">
                                <li class="menu-item menu-item-has-children-mobile-2">
                                    <a href="#sub-agents" class="item-menu-mobile  collapsed"
                                        data-bs-toggle="collapse" aria-expanded="true"
                                        aria-controls="sub-agents">Agents</a>
                                    <div id="sub-agents" class="collapse" data-bs-parent="#dropdown-menu-four">
                                        <ul class="sub-mobile">
                                            <li class="menu-item ">
                                                <a href="agents.html" class="item-menu-mobile "> Agents</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="agents-details.html" class="item-menu-mobile "> Agnet
                                                    Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile-2">
                                    <a href="#sub-agency" class="item-menu-mobile  collapsed"
                                        data-bs-toggle="collapse" aria-expanded="true"
                                        aria-controls="sub-agency">Agencies</a>
                                    <div id="sub-agency" class="collapse" data-bs-parent="#dropdown-menu-four">
                                        <ul class="sub-mobile">
                                            <li class="menu-item ">
                                                <a href="agency-grid.html" class="item-menu-mobile ">Agencies Grid</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="agency-list.html" class="item-menu-mobile "> Agencies
                                                    List</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="agency-details.html" class="item-menu-mobile "> Agencies
                                                    Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="menu-item"><a href="dashboard.html">Dashboard</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item menu-item-has-children-mobile">
                        <a href="#dropdown-menu-five" class="item-menu-mobile collapsed" data-bs-toggle="collapse"
                            aria-expanded="true" aria-controls="dropdown-menu-five">
                            Blogs
                        </a>
                        <div id="dropdown-menu-five" class="collapse" data-bs-parent="#menu-mobile-menu">
                            <ul class="sub-mobile ">

                                <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
                                <li class="menu-item"><a href="blog-details.html">Blog Details </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item ">
                        <a href="contact.html" class="tem-menu-mobile "> Contact</a>
                    </li>
                </ul>
                <div class="support">
                    <a href="#" class="text-need"> Need help?</a>
                    <ul class="mb-info">
                        <li>Call Us Now: <span class="number">1-555-678-8882</span></li>
                        <li>Support 24/7: <a href="#">nsirim61@gmail.com</a></li>
                        <li>
                            <div class="wrap-social">
                                <p>Follow us:</p>
                                <ul class="tf-social  style-2">
                                    <li>
                                        <a href="#">
                                            <i class="icon-fb"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-X"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-linked"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-ins"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- /mobile-nav -->

    <!-- .prograss -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div> <!-- /.prograss -->

    <!-- Javascript -->
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/js/lazysize.min.js"></script>
    <script type="text/javascript" src="/assets/js/rangle-slider.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="/assets/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="/assets/js/swiper.js"></script>
    <script type="text/javascript" src="/assets/js/simpleParallaxVanilla.umd.js"></script>
    <script type="text/javascript" src="/assets/js/wow.min.js"></script>
    <script type="text/javascript" src="/assets/js/Splitetext.js"></script>
    <script type="text/javascript" src="/assets/js/gsap.min.js"></script>
    <script type="text/javascript" src="/assets/js/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="/assets/js/main.js"></script>
    <script defer src="../../../sibforms.com/forms/end-form/build/main.js"></script>
    <!-- /Javascript -->

</body> -->



<!-- Mirrored from themesflat.co/html/proty/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Dec 2024 13:48:53 GMT -->

</html>
<?php /**PATH C:\Users\HP\Desktop\PROJECTS\chief-pro\resources\views/layouts/guest.blade.php ENDPATH**/ ?>