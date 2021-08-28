<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Dashboard</title>
    <style>
        body {
            background-image: url("assets/img/background.jpg");
            /* Full height */
            height: 100%;
            margin-top: 0;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 500px;
            position: relative;
            margin: auto;
        }

        .button1 {
            font-family: 'Segoe UI';
            font-size: 12px;
            font-style: normal;
            font-variant: normal;
            font-weight: 500px;
            line-height: 26.4px;
            background-color: #ffffff;
            border: none;
            color: #313131;
            padding: 5px 40px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 20px 10px 20px 20px;
            border-radius: 12px;
        }

        .button2 {
            font-family: 'Segoe UI';
            font-size: 12px;
            font-style: normal;
            font-variant: normal;
            font-weight: 500px;
            line-height: 26.4px;
            background-color: #F17425;
            border: none;
            color: #ffffff;
            padding: 5px 40px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 20px 10px 20px 20px;
            border-radius: 12px;
        }

        .button3 {
            font-family: 'Segoe UI';
            font-size: 12px;
            font-style: normal;
            font-variant: normal;
            font-weight: 500px;
            line-height: 26.4px;
            background-color: #F17425;
            border: none;
            color: #ffffff;
            padding: 5px 40px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 0px 0px 20px 0px;
            border-radius: 12px;
        }

        .button4 {
            font-family: 'Segoe UI';
            font-size: 14px;
            font-style: normal;
            font-variant: normal;
            font-weight: 800px;
            line-height: 26.4px;
            background-color: #F17425;
            border: none;
            color: #ffffff;
            padding: 5px 40px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 0px 0px 20px 0px;
        }

        .button5 {
            font-family: 'Arial';
            font-style: normal;
            font-variant: normal;
            font-weight: 700px;
            line-height: 26px;
            background-color: #ffffff;
            border: none;
            color: #F17425;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            float: right;
            text-decoration: bold;
        }

        .ratak1 {
            text-align: justify;
            font-family: 'Segoe UI';
            color: black;
            width: 60%;
            font-size: 12px;
            font-weight: 300px;

            /* text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4); */
        }

        .ratak2 {
            position: absolute;
            right: 15px;
            text-align: justify;
            font-family: 'Segoe UI';
            color: white;
            font-size: 12px;
            width: 60%;
            font-weight: 300px;
        }

        /* text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4); */
        .ratak3 {
            text-align: justify;
            font-family: 'Segoe UI';
            color: black;
            width: 60%;
            font-size: 14px;
        }

        .ratak4 {
            text-align: center;
            font-family: 'Segoe UI';
            color: black;
            font-size: 15px;
        }

        .ratak5 {
            text-align: justify;
            font-family: 'Segoe UI';
            color: black;
            font-size: 14px;
        }

        .about-con1 {
            position: center;
            background-color: #F17425;
        }

        .card input[type="email"] {
            display: inline-block;
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        input {
            display: block;
            width: 100%;
            height: 36px;
            padding: 6px 14px;
            font-size: 14px;
            line-height: 1.57142857;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #cfd3cc;
            border-radius: 2px;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            margin: 0;
        }

        .btn {
            display: block;
            padding: 6px 14px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: normal;
            line-height: 1.57142857;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            background-clip: padding-box;
            border: 1px solid transparent;
            border-radius: 2px;
            background: #F17425;
            color: #fff;
        }

        .pull-right {
            float: right;
        }

        .s-margin-left {
            margin-left: 10px;
        }

        .con3 {
            margin-bottom: 100px;
            margin-top: 100px;
        }

        .any {
            margin-left: 100px;
        }

        .modal-backdrop {
            background-color: rgba(0, 0, 0, .0001) !important;
        }

        .card-body {
            border-radius: 10px;
            border: black;
            width: 450px;
            height: 70px;
            box-shadow: 0px 4px 4px 4px rgba(0, 0, 0, 0.2);
            margin-bottom: 10px;
        }

        .sulit {
            height: 100px;
            text-align: center;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .card-body-baru {
            text-align: center;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            border-radius: 10px;
            border: black;
            width: 700px;
            height: 200px;
            box-shadow: 0px 4px 4px 4px rgba(0, 0, 0, 0.2);
        }

        .col-baru {
            text-align: center;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            height: 100%;
            float: left;
        }

        .modal {
            overflow: auto;
            top: -100%;
            opacity: 0;
            transition: top 0.4s, opacity 0.4s;
        }

        .modal.show {
            top: 0;
            opacity: 1;
        }

        .modal-content {
            border-radius: 10px;
            position: absolute;
            left: 50%;
        }

        .w3-animate-right {
            position: relative;
            animation: animateright 0.4s
        }

        @keyframes animateright {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }
    </style>
</head>

<body>
    <div class="container" style="padding-left: 70px">
        <div class="col">
            <h1 class="display-4" style="font-family: Segoe UI; font-size: 50px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; color: #FFFFFF; margin-top : 180px; margin-bottom : 30px;">
                What Is HelpDesk?</h1>
            <p class="lead" style="font-family: Segoe UI; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 500; line-height: 26.4px; color: #FFFFFF; width : 60%; margin-bottom: 5   px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <button class="button button1">Read More</button>
        <button class="button button2">Get Started</button>
    </div>

    <div class="col">
        <h1 class="display-4" style="font-family: Segoe UI; font-size: 40px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; color: black; margin-top : 180px; margin-bottom : 50px; text-align : center;">
            What Are We?</h1>
    </div>
    <div class="container">
        <div class="row footer">
            <div class="col-md text-right">
                <div class="gam1">
                    <img src="assets/img/whatt.png" width="350px" height="275px" style="border-radius:5px;">
                </div>
            </div>
            <div class="col-md">
                <p class='ratak3' style="font-size: 15px;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <button class="button button3">Read More</button>
            </div>
        </div>
    </div>
    <div class="col">
        <h1 class="display-4" style="font-family: Segoe UI; font-size: 40px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; color: black; margin-top : 50px; margin-bottom : 50px; text-align : center;">
            Why HelpDesk?
        </h1>
        <div class="gam2">
            <center><img src="assets/img/flowchart.jpg"></center>
        </div>
    </div>
    <div class="col">
        <h1 class="display-4" style="font-family: Segoe UI; font-size: 40px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; color: black; margin-top : 50px; margin-bottom : 50px; text-align : center;">
            What Are We Offering?</h1>
    </div>

    <div class="about-con2 ">
        <div class="container">
            <div class="row footer">
                <div class="col-md text-right">
                    <img src="assets/img/gam1.jpeg" width="350px" height="270px">
                </div>
                <div class="col-md">
                    <h2 style="font-family: Segoe UI; font-size: 25px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; color: black; margin-top : 30px ">01 Create Requests Tickets</h2>
                    <p class='ratak1' style="font-size: 13px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="about-con1">
        <div class="container">
            <div class="row footer">
                <div class="col-md text-right">
                    <h2 style="font-family: Segoe UI; font-size: 25px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; color: white; margin-top: 30px;">02 Create Inquiry Tickets</h2>
                    <p class='ratak2' style="font-size: 13px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="col-md">
                    <img src="assets/img/gam2.jpeg" width="350px" height="270px">
                </div>

            </div>
        </div>
    </div>

    <div class="about-con2 ">
        <div class="container">
            <div class="row footer">
                <div class="col-md text-right">
                    <img src="assets/img/gam3.jpeg" width="350px" height="270px">
                </div>
                <div class="col-md">
                    <h2 style="font-family: Segoe UI; font-size: 25px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; color: black; margin-top: 30px;">03 Knowledge Base</h2>
                    <p class='ratak1' style="font-size: 13px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>

            </div>
        </div>
    </div>


    <div class="about-con1">
        <div class="container">
            <div class="row footer">
                <div class="col-md text-right">
                    <h2 style="font-family: Segoe UI; font-size: 25px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; color: white; margin-top: 30px;">04 Knowledge</h2>
                    <p class='ratak2' style="font-size: 13px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="col-md">
                    <img src="assets/img/gam4.jpeg" width="350px" height="270px">
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md any">
                <h2 style="font-family: Segoe UI; font-size: 25px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; color: black; margin-top: 30px;">Any Question?</h2>
                <p class='ratak5' style="font-size: 15px;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Insert Text Here."></textarea>
                </div>
                <button class="button button3">Submit</button>
            </div>
            <div class="col-md text-center">
                <div class="gam1">
                    <img src="assets/img/area.jpeg" width="320px" height="275px" style="border-radius:10px;">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="gam1">
                    <img src="assets/img/faq.jpeg" width="400px" height="330x" style="float : right;">
                </div>
            </div>
            <div class="col-md">
                <h2 style="font-family: Segoe UI; font-size: 25px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; color: black; margin-top: 30px; margin-bottom : 30px;">Frequently Asked Question</h2>
                <!-- Button trigger modal -->
                <div class="row-baru">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md sulit">
                                <p>1. How to use our services.</p>
                            </div>
                            <div class="col-md sulit">
                                <button type="button" class="button button5" data-toggle="modal" data-target="#exampleModal" id="myBtn2">
                                    +
                                </button>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog  w3-animate-right" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-baru">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md sulit">
                                    <p>2. How to use our services.</p>
                                </div>
                                <div class="col-md sulit">
                                    <button type="button" class="button button5" data-toggle="modal" data-target="#exampleModal" id="myBtn2">
                                        +
                                    </button>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog  w3-animate-right" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-baru">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md sulit">
                                        <p>3. How to use our services.</p>
                                    </div>
                                    <div class="col-md sulit">
                                        <button type="button" class="button button5" data-toggle="modal" data-target="#exampleModal" id="myBtn2">
                                            +
                                        </button>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog  w3-animate-right" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container con3">
                <center>
                    <div class="card-body-baru text-center ">
                        <div class="row">
                            <div class="col">
                                <div class="gam1">
                                    <img src="assets/img/email.png" width="230px" height="200px">
                                </div>
                            </div>
                            <div class="col" style="margin-right:40px;">
                                <h2 style="font-family: Segoe UI; font-size: 25px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; color: black; margin-top: 30px;">Enter Your E-mail!</h2>
                                <p class='ratak4' style="font-size: 15px;">
                                    Subscribe for Exclusive Bonuses, Free Tips, and News.
                                </p>
                                <div class="form-group">
                                    <button class="pull-right btn btn-lg btn-primary s-margin-bottom s-margin-left" type="submit">Subscribe</button>
                                    <div style="overflow: hidden;">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <!-- Modal untuk cek login -->
    <center>
        <div class="modal fade" id="cek_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <p style="font-size: 15px;"><strong>Please Login To Use Our Services!</strong></p>
                        <a class="button button2" href="<?= site_url('loginC') ?>">LOG IN</a>
                    </div>
                </div>
            </div>
        </div>
    </center>

    <script>
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.classList.remove('show');
            }
        }
        $(document).ready(function() {
            $("#myBtn2").click(function() {
                $("#myModal").modal({
                    backdrop: false
                });
            });
        });
    </script>
</body>

</html>