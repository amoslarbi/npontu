<?php include('connection.php'); ?>

<!DOCTYPE html>
<html lang="zxx" class="js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>npontu choir | Register</title>
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
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5"><a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a></div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Sign Up</h5>
                                    </div>
                                </div>

                                <div id="log"></div>

                                <form onsubmit="event.preventDefault(); submitFunction();" method="POST" id="authRegisterForm">

                                    <input style="display: none" name="account_status" id="account_status" value="Pending"></input>
                                    <input style="display: none" name="avatar" id="avatar" value="https://otobook-api.azurewebsites.net/consumers/uploads/images/default-image.png"></input>

                                    <div class="row">
                                        <div class="col-6 form-group">
                                            <div class="form-label-group"><label class="form-label" for="default-01">First name
                                                </label>
                                            </div>
                                            <input id="firstName" name="firstName" type="text" class="form-control form-control-lg" placeholder="Enter first name" required>
                                        </div>

                                        <div class="col-6 form-group">
                                            <div class="form-label-group"><label class="form-label" for="default-01">Other names
                                                </label>
                                            </div>
                                            <input id="otherNames" name="otherNames" type="text" class="form-control form-control-lg" placeholder="Enter other names" required>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-label-group"><label class="form-label" for="default-01">Email</label>
                                        </div>
                                        <input id="email" name="email" type="email" class="form-control form-control-lg" placeholder="Enter your email address" required>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-label-group"><label class="form-label" for="password" id="passwordLabel">Password</label></div>
                                        <div class="form-control-wrap"><a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password"><em class="passcode-icon icon-show icon ni ni-eye"></em><em class="passcode-icon icon-hide icon ni ni-eye-off"></em></a>
                                            <input name="password" type="password" class="form-control form-control-lg" id="password" placeholder="Enter your password" required></div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" id="signUpBtn" class="btn btn-lg btn-light btn-block" disabled>Sign up</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 pt-4"> Already have an account? <a href="auth-login"><strong>Sign in instead</strong></a>
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

        function userAlreadyExistToast() {
            new Noty({
            type: 'error',
            layout: 'topRight',
            theme: 'nest',
            text: '❕ A consumer with this email already exist',
            timeout: '2000',
            progressBar: true,
            closeWith: ['click', 'button'],
            killer: true,
            }).show();
        }

        function weEncounteredAnIssueToast() {
            new Noty({
            type: 'error',
            layout: 'topRight',
            theme: 'nest',
            text: '❕ We Encountered an Issue, please try again',
            timeout: '2000',
            progressBar: true,
            closeWith: ['click', 'button'],
            killer: true,
            }).show();
        }

        function googleSignInErrorToast() {
            new Noty({
            type: 'error',
            layout: 'topRight',
            theme: 'nest',
            text: '❕ Unable to Sign up, please try again',
            timeout: '2000',
            progressBar: true,
            closeWith: ['click', 'button'],
            killer: true,
            }).show();
        }

        // Password code start

        var myInput = document.getElementById("password");
        // var myInputRe = document.getElementById("confirmPassword");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");
        // Confirm Password starts here

        // Password starts here
        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
            $('#passwordLabel').html('<span id="letter" style="color: red; class="color-7 text-bold-600">Lowercase</span> &#8226; ' +
                '<span id="capital" style="color: red; class="color-7 text-bold-600">Uppercase</span> &#8226; ' +
                '<span id="number" style="color: red; class="color-7 text-bold-600">Number</span> &#8226; ' +
                '<span id="length" style="color: red; class="color-7 text-bold-600">8 characters</span>');

            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                document.getElementById("letter").style.color = "#4CAF50";
            } else {
                document.getElementById("letter").style.color = "#ff0000";
            }
            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                document.getElementById("capital").style.color = "#4CAF50";
            } else {
                document.getElementById("capital").style.color = "#ff0000";
            }
            // Validate numbers
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                document.getElementById("number").style.color = "#4CAF50";
            } else {
                document.getElementById("number").style.color = "#ff0000";
            }
            // Validate length
            if (myInput.value.length >= 8) {
                document.getElementById("length").style.color = "#4CAF50";
            } else {
                document.getElementById("length").style.color = "#ff0000";
            }
            if (myInput.value.match(lowerCaseLetters) && myInput.value.match(upperCaseLetters) &&
                myInput.value.match(numbers) && myInput.value.length >= 8) {
                document.getElementById("signUpBtn").disabled = false;
                document.getElementById("signUpBtn").classList.remove("btn-light");
                document.getElementById("signUpBtn").classList.add("btn-primary");
            }
            else{
                document.getElementById("signUpBtn").disabled = true;
                document.getElementById("signUpBtn").classList.remove("btn-primary");
                document.getElementById("signUpBtn").classList.add("btn-light");
            }
        }
        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
            $('#passwordLabel').html('Password');

            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                document.getElementById("letter").style.color = "#4CAF50";
            } else {
                document.getElementById("letter").style.color = "#ff0000";
            }
            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                document.getElementById("capital").style.color = "#4CAF50";
            } else {
                document.getElementById("capital").style.color = "#ff0000";
            }
            // Validate numbers
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                document.getElementById("number").style.color = "#4CAF50";
            } else {
                document.getElementById("number").style.color = "#ff0000";
            }
            // Validate length
            if (myInput.value.length >= 8) {
                document.getElementById("length").style.color = "#4CAF50";
            } else {
                document.getElementById("length").style.color = "#ff0000";
            }
            if (myInput.value.match(lowerCaseLetters) && myInput.value.match(upperCaseLetters) &&
                myInput.value.match(numbers) && myInput.value.length >= 8) {
                document.getElementById("signUpBtn").disabled = false;
                document.getElementById("signUpBtn").classList.remove("btn-light");
                document.getElementById("signUpBtn").classList.add("btn-primary");
            }
            else{
                document.getElementById("signUpBtn").disabled = true;
                document.getElementById("signUpBtn").classList.remove("btn-primary");
                document.getElementById("signUpBtn").classList.add("btn-light");
            }
        }
        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                document.getElementById("letter").style.color = "#4CAF50";
            } else {
                document.getElementById("letter").style.color = "#ff0000";
            }
            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                document.getElementById("capital").style.color = "#4CAF50";
            } else {
                document.getElementById("capital").style.color = "#ff0000";
            }
            // Validate numbers
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                document.getElementById("number").style.color = "#4CAF50";
            } else {
                document.getElementById("number").style.color = "#ff0000";
            }
            // Validate length
            if (myInput.value.length >= 8) {
                document.getElementById("length").style.color = "#4CAF50";
            } else {
                document.getElementById("length").style.color = "#ff0000";
            }
            if (myInput.value.match(lowerCaseLetters) && myInput.value.match(upperCaseLetters) &&
                myInput.value.match(numbers) && myInput.value.length >= 8) {
                document.getElementById("signUpBtn").disabled = false;
                document.getElementById("signUpBtn").classList.remove("btn-light");
                document.getElementById("signUpBtn").classList.add("btn-primary");
                // document.getElementById("confirmPassword").disabled = false;
            }
            else{
                document.getElementById("signUpBtn").disabled = true;
                document.getElementById("signUpBtn").classList.remove("btn-primary");
                document.getElementById("signUpBtn").classList.add("btn-light");
            }
        }

        // Password code end

        function submitFunction() {

            document.getElementById("signUpBtn").disabled = true;
            document.getElementById("signUpBtn").innerHTML = '<i class="fa fa-spinner fa-spin fa-lg"></i>';

            let authRegisterFormData = $("#authRegisterForm").serialize();
            $.ajax({
                url: '<?php echo $findme ?>' + "api/auth/register",
                method: "POST",
                data: authRegisterFormData,
                dataType: "json",
                success: function(data) {
                    if (data.message == "already") {
                        userAlreadyExistToast()
                        document.getElementById("signUpBtn").disabled = false;
                        document.getElementById("signUpBtn").innerHTML = 'Sign up';
                    }
                    else{
                        window.location.replace("alert");
                    }
                },
                error: function(xhr, textStatus, error) {
                    // console.log(xhr.responseText);
                    // console.log(xhr.statusText);
                    // console.log(textStatus);
                    // console.log(error);
                    weEncounteredAnIssueToast()
                    document.getElementById("signUpBtn").disabled = false;
                    document.getElementById("signUpBtn").innerHTML = 'Sign up';
                }
            });
        }
    </script>

</html>