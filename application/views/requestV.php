<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Website HelpDesk</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <!-- <link rel="stylesheet" href="style.css"> -->

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        .content .sidebar {
            background: #313131;
            float: left;
            width: 250px;
            height: 100%;
        }

        .content .isicontent {

            float: left;
            margin-right: 0px;
            margin-left: 5px;
            margin-top: 10px;
            margin-bottom: 15px;
            height: 100%;
            width: 81%;
            background-color: white;
            box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
            border-radius: 20px;
        }

        .content .isicontent .navigasi {
            float: right;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }

            #sidebar.active {
                margin-left: 0;
            }
        }

        body {
            font-family: 'Segoe UI';
            background: #fafafa;
        }

        h2 {
            font-family: 'Segoe UI';
            font-size: 30px;
            font-weight: 400;
            line-height: 1.7em;
            color: #999;
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

        p {
            font-family: 'Segoe UI';
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #313131;
        }

        .files input {
            padding: 120px 0px 85px 35%;
            text-align: center !important;
            margin: 0;
            width: 100% !important;
        }

        .file input-button {
            color: black;
        }

        .files {
            position: relative
        }

        .files:after {
            pointer-events: none;
            position: absolute;
            top: 60px;
            left: 0;
            width: 50px;
            right: 0;
            height: 56px;
            content: "";
            background-image: url(assets/img/paper-clip.png);
            display: block;
            margin: 0 auto;
            background-size: 100%;
            background-repeat: no-repeat;
        }

        .color input {
            background-color: #f1f1f1;
        }

        .files:before {
            position: absolute;
            bottom: 10px;
            left: 0;
            pointer-events: none;
            width: 100%;
            right: 0;
            height: 57px;
            content: " drag & drop files. ";
            display: block;
            margin: 0 auto;
            color: #313131;
            font-weight: 600;
            text-transform: capitalize;
            text-align: center;
        }

        .form-row {
            margin: 0px;
        }

        .form-row-baru {
            margin: 0px;
            text-align: center;
        }

        .form-control {
            margin-right: 100px;
        }

        .form-row-asli {
            margin: 0px;
            width: 100%;
            margin-right: 700px;
        }

        .card {
            background-color: white;
        }

        /* #content-wrapper {
        text-align : center;
        margin: 20px 20px 20px 20px;
    } */
        .card-baru {
            text-align: center;
            margin: 0px 50px 50px 50px;
            padding: 35px 20px 35px 20px;
            border: 1px solid #F17425;
            border-radius: 5px;
        }

        h3 {
            margin-left: 50px;
            text-align: justify;
            font-family: 'Segoe UI';
            color: black;
            font-size: 18px;
        }

        .form {
            text-align: justify;
        }
    </style>
</head>


<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <div class="content">
        <div class="sidebar">
            <?php $this->load->view("/templates/sidebar.php") ?>
            <!-- Sidebar -->
        </div>
        <div class="isicontent">
            <div class="navigasi">
                <div class="row">
                    <div class="col-sm-8">
                        <p>Welcome, <?= $login['nama'] ?> ! <br />
                            <?= $login['email'] ?> <br />
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/img/iconuser.png" alt="" class="img-rounded img-responsive" style="width: 45px;" />
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="isi">
            <form class="form-row">
                <div class="row">
                    <h3>Ticket Information.</h3>
                    <div class="card-baru">
                        <div class="form-row">
                            <div class="form">
                                <div class="form-row">
                                    <div class="form-group col-md-6 jarak">
                                        <label for="name">Name</label>
                                        <input type="name" class="form-control" id="name" placeholder="Insert Text Here...">
                                    </div>
                                    <div class="form-group col-md-6 jarak">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Insert Text Here...">
                                    </div>
                                </div>
                            </div>
                            <div class="form">
                                <div class="form-row">
                                    <div class="form-group col-md-4 jarak">
                                        <label for="phonenumber">Phone Number</label>
                                        <input type="phonenumber" class="form-control" id="phonenumber" placeholder="Insert Text Here...">
                                    </div>
                                    <div class="form-group col-md-4 jarak">
                                        <label for="reqtype">Select Request Type</label>
                                        <select id="reqtype" class="form-control">
                                            <option>Incident</option>
                                            <option>Problem</option>
                                            <option>Service</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 jarak">
                                        <label for="agents">Select Agents</label>
                                        <select id="agents" class="form-control">
                                            <option>Support Business Units</option>
                                            <option>Technical Support</option>
                                            <option>Application Support</option>
                                            <option>Independent Support</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form">
                    <h3>Add a Message.</h3>
                    <div class="card-baru">
                        <div class="form-row">
                            <div class="form">
                                <div class="form-row-asli">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="subject" class="form-control" id="subject" placeholder="Insert Text Here...">
                                    </div>
                                </div>
                                <div class="form-row-asli">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" id="message" placeholder="Insert Text Here..." rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3>Attachment.</h3>
                    <br>
                    <div class="row">
                        <div class="card-baru">
                            <div class="form-row-baru">
                                <div class="form-group files">
                                    <input type="file" class="form-control" multiple="">
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row" style="float : right; margin-right : 50px;">
                                <button type="submit" class="button button3">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        var a = $('.sidebar'); // class box .konten
        var b = $('.isi'); // class box .sidebar-kiri
        // Dapatkan nilai tinggi dengan outerHeight(); / Height();
        var getSidebarHeight = a.outerHeight();
        var getIsiHeight = b.outerHeight();
        // Cek jika konten lebih tinggi dari sidebar
        if (getSidebarHeight > getIsiHeight) {
            b.css('min-height', getSidebarHeight);
        }
        // cek  jika sidebar lebih tinggi dari konten
        if (getIsiHeight > getSidebarHeight) {
            a.css('min-height', getIsiHeight);
        }
    </script>
</body>

</html>