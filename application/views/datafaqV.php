<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />


    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <style>
        .content .sidebar {
            background: #313131;
            float: left;
            width: 250px;
            height: 100%;
        }

        .content .isicontent {
            float: left;
            /* padding : 8px; */
            margin-right: 0px;
            margin-left: 5px;
            margin-top: 10px;
            margin-bottom: 15px;
            height: 100%;
            width: 81%;
            background-color: white;
            box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
            /* border-radius: 20px; */
        }

        .content .isicontent .navigasi {
            float: right;

        }

        #cardbody {
            margin: 10px;
        }

        .row .col-sm-8 p {
            color: black;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }

        .isi .header h3 {
            font-weight: bold;
        }

        .row .button .btn {
            background: #F17425;
            color: white;
            margin-left: 15px;
        }

        .row .button .search {
            float: right;
            margin-left: 400px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
            width: 300px;
            height: 330px;
            margin: 15px;
        }

        .card-title a,
        i {
            float: right;
            margin: 5px;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }
    </style>
    <title><?= $title ?></title>
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
            <div class="header">
                <h3> Data FAQ</h3>
            </div>
            <hr>
            <div class="row">
                <div class="button">
                    <a href="<?php base_url() ?>datafaqC/addDataFAQ"><button class="btn"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</button></a>
                    <button class="btn"><i class="fa fa-cog"></i> Change Data Request</button>
                    <button class="btn"><i class="fa fa-filter" aria-hidden="true"></i> Filter</button>
                    <div class="search">
                        <input type="password" id="inputPassword2" placeholder="Insert Text Here">
                        <button class="btn"> Search</button>
                    </div>
                </div>
            </div>
            <div class="row" id="cardbody">
                <?php $i = 0 ?>
                <?php foreach ($faq as $f) : ?>
                    <?php $i++ ?>
                    <div class="card">
                        <div class="card-title">
                            <a href="#editdetail" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                            <ul class="collapse list-unstyled" id="editdetail">
                                <li>
                                    <a href="#">Details</a>
                                </li>
                                <li>
                                    <a href="#">Edit</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="assets/img/icon faq.png" alt="Admin" width="150">
                                <div class="mt-3">
                                    <h5>FAQ <?= $i ?></h5>
                                    <h5><?= $f['id_pertanyaan'] ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <!-- <div class="card">
                    <div class="card-title">
                        <a href="#editdetail" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                        <ul class="collapse list-unstyled" id="editdetail">
                            <li>
                                <a href="#">Details</a>
                            </li>
                            <li>
                                <a href="#">Edit</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="assets/img/icon faq.png" alt="Admin" width="150">
                            <div class="mt-3">
                                <h5>FAQ 2</h5>
                                <h5>ID Pertanyaan</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-title">
                        <a href="#editdetail" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                        <ul class="collapse list-unstyled" id="editdetail">
                            <li>
                                <a href="#">Details</a>
                            </li>
                            <li>
                                <a href="#">Edit</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="assets/img/icon faq.png" alt="Admin" width="150">
                            <div class="mt-3">
                                <h5>FAQ 3</h5>
                                <h5>ID Pertanyaan</h5>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="card">
                        <div class="card-title"> -->
                <!-- <a href="#editdetail" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                            <ul class="collapse list-unstyled" id="editdetail">
                                <li>
                                    <a href="#">Details</a>
                                </li>
                                <li>
                                    <a href="#">Edit</a>
                                </li>
                            </ul> -->
                <!-- </div> -->
                <!-- <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="assets/img/iconagent.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h5></h5>
                                <h5></h5>                
                            </div>
                        </div>
                    </div> -->
                <!-- </div>
                <div class="card"> -->
                <!-- <div class="card-title">
                        <a href="#editdetail" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                        <ul class="collapse list-unstyled" id="editdetail">
                            <li>
                                <a href="#">Details</a>
                            </li>
                            <li>
                                <a href="#">Edit</a>
                            </li>
                        </ul> -->
                <!-- </div>  -->
                <!-- <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="assets/img/iconpegawai.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h5>Pegawai 5</h5>
                                    <h5>Jabatan</h5>                
                                </div>
                            </div>
                        </div> -->
                <!-- </div> -->
            </div>
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