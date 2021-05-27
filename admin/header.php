    <link rel="shortcut icon" type="image/x-icon" href="../account/assets/images/favicon.ico">

    <link rel="stylesheet" href="assets/css/dashliteee8b.css?ver=1.8.0">
    <link id="skin-default" rel="stylesheet" href="assets/css/themeee8b.css?ver=1.8.0">

    <!-- BEGIN: jQuery CSS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Add icon library for loader -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <!-- Noty -->
    <script src="https://cdn.jsdelivr.net/npm/noty@3.2.0-beta/lib/noty.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/noty@3.2.0-beta/lib/noty.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/noty@3.2.0-beta/lib/themes/nest.css">

    <!-- croppie -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js" integrity="sha512-vUJTqeDCu0MKkOhuI83/MEX5HSNPW+Lw46BA775bAWIp1Zwgz3qggia/t2EnSGB9GoS2Ln6npDmbJTdNhHy1Yw==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css" integrity="sha512-zxBiDORGDEAYDdKLuYU9X/JaJo/DPzE42UubfBw9yg8Qvb2YRRIQ8v4KsGHOx2H1/+sdSXyXxLXv5r7tHc9ygg==" crossorigin="anonymous" />

    <!-- bring crop -->
    <link rel="stylesheet" href="assets/plugins/croppie/croppie.min.css" />

    <style>
        .avatar {
            float: left;
            height: 35px;
            position: relative;
            object-fit: cover;
            width: 35px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;

            -webkit-box-shadow: 0 0 0 3px #fff, 0 0 0 4px #999, 0 2px 5px 4px rgba(0, 0, 0, .2);
            -moz-box-shadow: 0 0 0 3px #fff, 0 0 0 4px #999, 0 2px 5px 4px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 3px #fff, 0 0 0 4px #999, 0 2px 5px 4px rgba(0, 0, 0, .2);
        }

        /* cover-spin start */

        .post-wrapper {
            position: relative;
        }

        .loading-overlay {
            display: none;
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 2;
            background: rgba(255, 255, 255, 0.7);
        }

        .overlay-content {
            position: absolute;
            transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            top: 50%;
            left: 0;
            right: 0;
            text-align: center;
            color: #555;
        }

        #cover-spin {
            position: fixed;
            width: 100%;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            /* background-color: rgba(255, 255, 255, 0.7); */
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 9999;
            display: none;
        }

        @-webkit-keyframes spin {
            from {
                -webkit-transform: rotate(0deg);
            }

            to {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        #cover-spin::after {
            content: '';
            display: block;
            position: absolute;
            left: 48%;
            top: 40%;
            width: 40px;
            height: 40px;
            border-style: solid;
            border-color: black;
            border-top-color: transparent;
            border-width: 4px;
            border-radius: 50%;
            -webkit-animation: spin .8s linear infinite;
            animation: spin .8s linear infinite;
        }

        /* cover-spin end */

        </style>

</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
<div id="cover-spin"></div>
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-header nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand"><a href="../" class="logo-link nk-sidebar-logo">
                        <img class="logo-small logo-img logo-img-small" src="../assets/images/npontu.png" srcset="../assets/images/npontu.png 2x" alt="logo-small">
                    </a></div>
                    <div class="nk-menu-trigger mr-n2"><a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
                            data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a><a href="#"
                            class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                            data-target="sidebarMenu">
                    </a></div>
                </div>
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Navigation</h6>
                                </li>
                                <li class="nk-menu-item"><a href="users" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                    <span class="nk-menu-text">User Management</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-wrap ">
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1"><a href="#"
                                    class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                                        class="icon ni ni-menu"></em></a></div>
                            <div class="nk-header-brand d-xl-none"><a href="index-2.html" class="logo-link">
                                </a></div>

                            <div class="nk-header-tools">

                                <script>
                                    function signOut() {
                                        localStorage.removeItem("adminData");
                                        window.location.replace("account/auth-login");

                                        var auth2 = gapi.auth2.getAuthInstance();
                                        auth2.signOut().then(function() {
                                            console.log('User signed out.');
                                        });
                                    }
                                </script>

                        <div class="dropdown user-dropdown" id="loggedInUserDropdown" style="margin-left: 227px;"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="user-toggle">
                                    <div class="user-name dropdown-indicator d-none d-sm-block">Administrator</div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1" style="min-width: 18rem !important;">
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="#" onclick="signOut();"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                            </div>
                        </div>
                    </div>
                </div>

                <script>

                function tokenIsRequired() {
                    new Noty({
                        type: 'error',
                        layout: 'topRight',
                        theme: 'nest',
                        text: '❕ Your token has expired. Redirecting...',
                        timeout: '2000',
                        progressBar: true,
                        closeWith: ['click', 'button'],
                        killer: true,
                        callbacks: {
                            onClick: function() {
                                signOut();
                            },
                            onClose: function() {
                                signOut();
                            }
                        },
                    }).show();
                }

                </script>