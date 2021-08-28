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

        .button2 {
            font-family: 'Segoe UI';
            font-size: 12px;
            font-style: normal;
            font-variant: normal;
            font-weight: 500px;
            line-height: 26.4px;
            background: #313131;
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

        .isi {
            height: 500px;
        }

        .isi form {
            height: 400px;
            width: 600px;
            background-color: white;
            float: right;
            margin-right: 250px;
            margin-top: 50px;
            box-shadow: 0px 8px 8px 0px rgba(0, 0, 0, 0.2);
        }

        .isi form .detail {

            padding: 30px;
            font-size: 15px;
        }

        .isi form .detail input {
            width: 250px;
            margin: 5px;
            border: none;
            font-size: 12px;
            padding: 5px;
            border-radius: 10px;
            border: 1px solid black;
        }

        .isi form .detail textarea {
            width: 250px;
            margin: 5px;
            border: none;
            font-size: 12px;
            padding: 5px;
            border-radius: 10px;
            border: 1px solid black;
        }

        .isi form .detail h5 {
            margin: 5px;
            font-size: 15px;
        }

        #button {
            float: right;
            margin-left: 100px;
            margin-top: 15px;
        }

        #button #btn {
            margin: 10px;
        }

        #btncancel {
            background: #313131;
            color: white;
            font-weight: bolder;
            width: 150px;
            height: 30px;
            font-size: 13px;
        }

        #btnsave {
            background: #F17425;
            color: white;
            font-weight: bolder;
            width: 150px;
            height: 30px;
            font-size: 13px;
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
            <form method="POST" action="<?= base_url(); ?>settingC/updateUser/<?= $akun['id_user'] ?>">
                <?php
                if ($this->session->flashdata('setting_failed') != '') {
                    echo '<div class="col-sm-12">';
                    echo '<div class="alert alert-danger" role="alert">';
                    echo $this->session->flashdata('setting_failed');
                    echo '</div>';
                    echo '</div>';
                }
                ?>
                <?php
                if ($this->session->flashdata('setting_success') != '') {
                    echo '<div class="col-sm-12">';
                    echo '<div class="alert alert-info" role="alert">';
                    echo $this->session->flashdata('setting_success');
                    echo '</div>';
                    echo '</div>';
                }
                ?>
                <div class="row">
                    <div class="detail">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="assets/img/editakun.png">
                                </div>
                                <div class="col-sm-6">
                                    <h3><?= $login['nama'] ?></h3>
                                    <p><?= $login['email'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Username</h5>
                                    <input type="text" class="form-control-sm-sm" name="nama" value="<?= $akun['nama'] ?>" placeholder="Insert Text Here...">
                                </div>
                                <div class="col-sm-6">
                                    <h5>Born Place</h5>
                                    <input type="text" class="form-control-sm-sm" name="tempat_lahir" value="<?= $akun['tempat_lahir'] ?>" placeholder="Insert Text Here...">
                                </div>
                                <div class="col-sm-6">
                                    <h5>E-Mail Address</h5>
                                    <input type="text" class="form-control-sm-sm" name="email" value="<?= $akun['email'] ?>" placeholder="Insert Text Here...">
                                </div>
                                <div class="col-sm-6">
                                    <h5>Phone Number</h5>
                                    <input type="text" class="form-control-sm-sm" name="nomer_tlp" value="<?= $akun['nomer_tlp'] ?>" placeholder="Insert Text Here...">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Date of Birth</h5>
                                    <input type="date" class="form-control-sm-sm" name="tanggal_lahir" value="<?= $akun['tanggal_lahir'] ?>" placeholder="Insert Text Here...">
                                </div>
                                <div class="col-sm-6">
                                    <h5>Address</h5>
                                    <textarea type="text" class="form-control-sm-sm" name="alamat" placeholder="Insert Text Here..."><?= $akun['alamat'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div id="button">
                            <div id="btn">
                                <button id="btncancel" class="btn btn-default">Cancel</button>
                                <button id="btnsave" class="btn btn-default" onClick="return confirm('Are you sure to save changes?')">Save</button>
                            </div>
                        </div>
                    </div>
            </form>
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

</html>