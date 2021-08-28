<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>SignUp | Helpdesk</title>
    <style>
        body {
            background-image: url(assets/img/loog.png);
            height: 100%;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            margin: auto;
        }

        a {
            font-family: 'Segoe UI';
            color: #F17425;
            text-decoration: underline;
        }

        h3 {
            text-align: center;
            padding-bottom: 10px;
            font-family: "Segoe UI";
            font-size: 30px;
            font-style: normal;
            font-variant: normal;
            font-weight: 700;
            color: black;
        }

        p {
            font-size: 18;
            color: #8E93A3;
            padding-top: 10px;
        }

        .card {
            background-color: white;
            margin-right: 700px;
            padding-left: 100px;
            padding-right: 100px;
            padding-top: 30px;
            padding-bottom: 100px
        }

        .card input[type="text"] {
            height: 40px;
            width: 100%;
            outline-color: #8E93A3;
            border-color: black;
            background-color: #F8F8F8;
            border-radius: 35px;
            margin-bottom: 35px;
            padding: 0px 0px 0px 30px;
            font-family: "Segoe UI";
            font-size: 14px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            color: black;
        }

        .card input[type="password"] {
            height: 40px;
            width: 100%;
            outline-color: #8E93A3;
            border-color: black;
            background-color: #F8F8F8;
            border-radius: 35px;
            padding: 0px 0px 0px 30px;
            font-family: "Segoe UI";
            font-size: 14px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            color: black;
        }

        .card input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            width: 55%;
            background-color: #F17425;
            color: white;
            border-radius: 35px;
            margin-top: 35px;
        }

        .card input[type="submit"]:hover {
            cursor: pointer;
            opacity: 0.8;
        }

        .wallpaper {
            width: 100%;
            height: 100%;
            background-position: absolute;
        }

        h4 {
            font-family: "Segoe UI";
            font-size: 14px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            color: black;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="card">
        <?php
        if ($this->session->flashdata('error') != '') {
            echo '<div class="alert alert-danger" role="alert">';
            echo $this->session->flashdata('error');
            echo '</div>';
        }
        ?>
        <form method="POST" action="<?php echo base_url(); ?>SignupC/proses">
            <h3>WELCOME TO</h3>
            <center><img src="assets/img/logohelp1.png" width="130" height="50"></center>
            <h4>
                <center>Please Signup Before Login</center>
            </h4>
            <div class="col-sm-6">
                <input type="text" id="firstname" name="firstname" placeholder="First Name">
            </div>
            <div class="col-sm-6">
                <input type="text" id="lastname" name="lastname" placeholder="Last Name">
            </div>
            <div class="col-sm-12">
                <input type="text" id="username" name="username" placeholder="Username">
                <input type="text" id="email" name="email" placeholder="E-Mail">
                <input type="text" id="password" name="password" placeholder="Password">
                <input type="text" id="re_password" name="re_password" placeholder="ReType Password">
            </div>

            <!-- <div class="container"> -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-check mb-2">
                        <center>
                            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                            <label class="form-check-label" for="autoSizingCheck" style="font-weight:normal;">
                                I Agree with <strong style="color: #F17425">Privacy</strong> and <strong style="color: #F17425">Policy</strong>
                            </label>
                        </center>
                    </div>
                </div>
            </div>
            <!-- </div> -->
            <center><input type="submit" name="signup" value="SIGN UP"></center>
            <center>
                <br>

                <br>
                <h4>Already have an account? <a href=<?= site_url('loginC') ?>><u style="font-weight:bold">Login Now.</u></a></h4>
            </center>
            <!-- <center><h4>Or</h4></center>
                    <center><h4>Continue with Google Account</h4></center>
                    <div class="row">
                            <div class="col-md-12"> <a class="btn btn-lg btn-google btn-block text-uppercase btn-outline" href="#"><img src="assets/img/Icon Google.png" style="width: 40px;"></a> </div>
                    </div> <br> -->
        </form>
    </div>

</body>

</html>