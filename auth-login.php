<?php include('connection.php'); ?>

<!DOCTYPE html>
<html lang="zxx" class="js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="shortcut icon" href="../images/favicon.png">
    <title>npontu choir | Login</title>
    <link rel="stylesheet" href="assets/css/dashlite7d4c.css?ver=1.7.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link id="skin-default" rel="stylesheet" href="assets/css/theme7d4c.css?ver=1.7.0">

    <!-- BEGIN: jQuery CSS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Add icon library for loader -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Noty -->
    <script src="https://cdn.jsdelivr.net/npm/noty@3.2.0-beta/lib/noty.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/noty@3.2.0-beta/lib/noty.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/noty@3.2.0-beta/lib/themes/nest.css">

    <!-- Google platform library -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://apis.google.com/js/api:client.js"></script>

</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-md">

                        <div id="cover-spin"></div>

                        <?php include('leftSidebar.php'); ?>

                        <div style="position: relative; width: 100%; min-height: 100%;" class="nk-block-area nk-block-area-column bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a></div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Sign In</h5>
                                    </div>
                                </div>
                                <form onsubmit="event.preventDefault(); loginFunction();" method="POST" id="authLoginForm">

                                    <div class="form-group">
                                        <div class="form-label-group"><label class="form-label" for="default-01">Email</label></div>
                                        <input id="email" name="email" type="email" class="form-control form-control-lg" id="default-01" placeholder="Enter your email address" required>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-label-group"><label class="form-label" for="password" id="passwordLabel">Password</label><a class="link link-primary link-sm" tabindex="-1" href="#">Forgot password?</a></div>
                                        <div class="form-control-wrap"><a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password"><em class="passcode-icon icon-show icon ni ni-eye"></em><em class="passcode-icon icon-hide icon ni ni-eye-off"></em></a>
                                            <input id="password" name="password" type="password" class="form-control form-control-lg" placeholder="Enter your password" required></div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" id="loginBtn" class="btn btn-lg btn-primary btn-block">Sign In</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 pt-4"> New on our platform? <a href="index"><strong>Create an account</strong></a>
                                </div>
                                <div style="position: fixed; bottom: 0; color: white; text-align: center;">
                                    <div class="card-note"><em class="icon ni ni-info-fill"></em>
                                        <ul class="nav nav-sm">
                                            <li class="nav-item"><a class="text-muted nav-link" href="#">Terms &
                                                    Condition</a></li>
                                            <li class="nav-item"><a class="text-muted nav-link" href="#">Privacy
                                                    Policy</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bundle7d4c.js?ver=1.7.0"></script>
    <script src="assets/js/scripts7d4c.js?ver=1.7.0"></script>
    <script src="assets/js/demo-settings7d4c.js?ver=1.7.0"></script>

    <script>
    
        function invalidEmailOTPToast(message) {
            new Noty({
                type: 'error',
                layout: 'topRight',
                theme: 'nest',
                text: '❕ ' + message,
                timeout: '2000',
                progressBar: true,
                closeWith: ['click', 'button'],
                killer: true,
            }).show();
        }

        function resendEmailOTPToast() {
            new Noty({
                type: 'success',
                layout: 'topRight',
                theme: 'nest',
                text: '❕ OTP has been sent to your email',
                timeout: '2000',
                progressBar: true,
                closeWith: ['click', 'button'],
                killer: true,
            }).show();
        }

        function resendPhoneOTPToast() {
            new Noty({
                type: 'success',
                layout: 'topRight',
                theme: 'nest',
                text: '❕ OTP has been sent to your mobile device',
                timeout: '2000',
                progressBar: true,
                closeWith: ['click', 'button'],
                killer: true,
            }).show();
        }

        function loginIssueToast() {
            new Noty({
                type: 'error',
                layout: 'topRight',
                theme: 'nest',
                text: '❕ ',
                timeout: '2000',
                progressBar: true,
                closeWith: ['click', 'button'],
                killer: true,
            }).show();
        }

        function weEncounteredAnIssueToast(message) {
            new Noty({
                type: 'error',
                layout: 'topRight',
                theme: 'nest',
                text: '❕ ' + message,
                timeout: '2000',
                progressBar: true,
                closeWith: ['click', 'button'],
                killer: true,
            }).show();
        }

        function ajaxErrorToast() {
            new Noty({
                type: 'error',
                layout: 'topRight',
                theme: 'nest',
                text: '❕ We encountered an issue, please try again',
                timeout: '2000',
                progressBar: true,
                closeWith: ['click', 'button'],
                killer: true,
            }).show();
        }

        function loginFunction() {

            document.getElementById("loginBtn").disabled = true;
            document.getElementById("loginBtn").innerHTML = '<i class="fa fa-spinner fa-spin fa-lg"></i>';
            let theEmail = document.getElementById("theEmail").value;
            theEmail = document.getElementById("email").value;
            let thePhone = document.getElementById("thePhone").value;
            thePhone = document.getElementById("email").value;

            let authLoginForm = $("#authLoginForm").serialize();
            $.ajax({
                url: '<?php echo $findme ?>' + "api/auth/admin/login",
                data: authLoginForm,
                dataType: "json",
                success: function(response) {
                    if (response.success == false) {
                        weEncounteredAnIssueToast(response.message);
                        document.getElementById("loginBtn").disabled = false;
                        document.getElementById("loginBtn").innerHTML = 'Sign in';
                    } else if (response.message == "two factor email") {
                        document.getElementById("theEmail").value = document.getElementById("email").value;
                        $('#twoFactorEmailModal').modal('show');
                    } else if (response.message == "two factor phone") {
                        document.getElementById("theEmail").value = document.getElementById("email").value;
                        $('#twoFactorPhoneModal').modal('show');
                    } else {
                        $('#cover-spin').hide(0)
                        var come = JSON.stringify(response.data);
                        sessionStorage.setItem("access_token_admin", response.access_token);
                        localStorage.setItem("adminData", come);
                        let adminDataIn = localStorage.getItem("adminData");
                        let adminData = jQuery.parseJSON(adminDataIn);
                        localStorage.setItem("adminUuid", adminData["uuid"]);
                        window.location.replace("../dashboard");
                    }
                },
                error: function(xhr, textStatus, error) {
                    // console.log(xhr.responseText);
                    // console.log(xhr.statusText);
                    // console.log(textStatus);
                    // console.log(error);
                    if(xhr.status >= 400){
                        ajaxErrorToast();
                    }
                    document.getElementById("loginBtn").disabled = false;
                    document.getElementById("loginBtn").innerHTML = 'Sign In';
                }
            });
        }
    </script>

</html>