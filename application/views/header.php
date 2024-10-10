<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eres.dexignzone.com/codeigniter/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Sep 2024 10:37:32 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Title -->
    <title>Srushti Hospital Dashboard</title>



    <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="<?php echo base_url(); ?>assets/img/logo.png">


    <link href="<?php echo base_url(); ?>assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet"
        type="text/css" />

    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css"
        rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>

    <!--*******************
        Preloader end
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
    Nav header start
***********************************-->
        <div class="nav-header">
            <a href="index-2.html" class="brand-logo">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" style="height:60px;width:120px;">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Dashboard </div>
                    </div>

                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link bell dz-theme-mode" href="javascript:void(0);">
                            <i id="icon-light" class="fas fa-sun"></i>
                            <i id="icon-dark" class="fas fa-moon"></i>

                        </a>
                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link d-flex align-items-center dropdown-toggle" href="javascript:;" role="button"
                            id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo base_url(); ?>assets/images/profile/12.png" width="40" alt=""
                                class="profile-image me-2">
                            <div class="header-info d-flex flex-column">
                                <span class="text-muted">Hello,</span>
                                <strong class="text-dark">Roberto</strong>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li>
                                <a href="app_profile.html" class="dropdown-item ai-icon">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                        width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span class="ms-2">Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="page_login.html" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                        width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    <span class="ms-2">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
    Header end 
***********************************-->





    <!--**********************************
    Sidebar start
***********************************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="index-2.html">Dashboard Light</a></li>
                        <li><a href="index_2.html">Dashboard Dark</a></li>
                        <li><a href="<?php echo base_url(); ?>admin/patient">Patient</a></li>
                        <li><a href="<?php echo base_url(); ?>admin/patientdetail">Patient Details</a></li>
                        <li><a href="<?php echo base_url(); ?>admin/doctor">Doctor</a></li>
                        <li><a href="<?php echo base_url(); ?>admin/doctordetail">Doctor Detail</a></li>
                        <li><a href="<?php echo base_url(); ?>admin/testimonials">Testimonials</a></li>
                    </ul>
                </li>
                <a href="<?php echo base_url(); ?>appointment" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-menu"></i>
                    <span class="nav-text">Appointment</span>
                </a>
                </li>
            </ul>
            <div class="copyright">
                <p class="fs-14 font-w200"><strong class="font-w400">Srushti Hospital Admin Dashboard</strong> © 2023
                    All Rights Reserved</p>
                <p class="fs-12">Made with <span class="heart"></span> by God Particles</p>
            </div>
        </div>
    </div>

    <?php $this->load->view($viewpage); ?>


    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">God
                    Particles</a> 2024</p>
        </div>
    </div>



    <!--**********************************
    Footer end
***********************************-->


    <script> var base_url = 'index.html';</script>
    <script src="<?php echo base_url(); ?>assets/vendor/global/global.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>


    <script src="<?php echo base_url(); ?>assets/vendor/chart.js/chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/owl-carousel/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/apexchart/apexchart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dashboard/dashboard-1.js"></script>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/deznav-init.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/js/styleSwitcher.js"></script> -->
    <script>
        function assignedDoctor() {

            /*  testimonial one function by = owl.carousel.js */
            jQuery('.assigned-doctor').owlCarousel({
                loop: false,
                margin: 30,
                nav: true,
                autoplaySpeed: 3000,
                navSpeed: 3000,
                paginationSpeed: 3000,
                slideSpeed: 3000,
                smartSpeed: 3000,
                autoplay: false,
                rtl: true,
                dots: false,
                navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    767: {
                        items: 3
                    },
                    991: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    },
                    1600: {
                        items: 4
                    },
                    1920: {
                        items: 5
                    }
                }
            })
        }

        jQuery(window).on('load', function () {
            setTimeout(function () {
                assignedDoctor();
            }, 1000);
        });

    </script>

</body>