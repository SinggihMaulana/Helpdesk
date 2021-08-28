<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <style>
        .content .sidebar {
            background: orange;
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

        #upload {
            position: relative;
            overflow: hidden;
        }

        .uploadfoto {
            position: absolute;
            align-items: center;
            font-size: 50px;
            opacity: 0;
            right: 0;
            top: 0;
        }

        input {
            margin: 10px;
            border: none;
            box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            border: 1px solid black;
        }

        textarea {
            margin: 10px;
            border: none;
            box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            border: 1px solid black;
        }

        #uploadfile {
            position: absolute;
            opacity: 0;
            font-size: 50px;
            right: 0;
            top: 0;
        }

        label {
            text-align: left;
        }

        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .btn {
            border: 2px solid gray;
            color: white;
            background-color: #F17425;
            padding: 8px 20px;
            border-radius: 8px;
            font-size: 20px;
            font-weight: bold;
        }

        input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }

        .btnaksi {
            float: right;
            margin-top: 10px;
            ;
            margin-right: 70px;
        }

        #btncancel {
            background: #313131;
        }

        #bagianupload {
            align-items: center;
            text-align: center;
        }
    </style>
    <title><?= $title ?></title>
</head>

<body>

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
                <h3> Data Knowledge Based</h3>
            </div>
            <hr>
            <div class="row">
                <div class="button">
                    <button class="btn"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</button>
                    <button class="btn"><i class="fa fa-pencil-edit" aria-hidden="true"></i> Change Data Request</button>
                    <button class="btn"><i class="fa fa-filter" aria-hidden="true"></i> Filter</button>
                    <div class="search">
                        <input type="text" id="inputPassword2" placeholder="Insert Text Here">
                        <button class="btn"> Search</button>
                    </div>
                </div>
            </div>
            <form action="<?= site_url('datakbC/add') ?>" method="post">
                <br>
                <div class="row">
                    <div class="header">
                        <h4>Add New "Knowledge Based"</h4>
                    </div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-sm-2" id="bagianupload">
                        <img src="assets/img/iconrequest.png" alt="Cinque Terre" width="150">
                        <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-file" aria-hidden="true"></i> Upload File</button>
                            <input type="file" name="myfile" />
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-inline row-sm-5 mb-3">
                            <label for="name" class="col-sm-5 col-form-label">ID Content :</label>
                            <input type="text" class="form-control-sm-sm" id="id_konten" name="id_konten" placeholder="Insert Text Here...">
                        </div>

                        <div class="form-inline row-sm-5 mb-3">
                            <label for="name" class="col-sm-5">Content Date :</label>
                            <input type="date" class="form-control-sm-sm" id="date" name="date" placeholder="Insert Text Here...">
                        </div>

                    </div>
                    <div class="col-sm-5">
                        <div class="form-inline row-sm-5 mb-3">
                            <label for="name" class="col-sm-5 col-form-label ">Content :</label>
                            <textarea class="form-control-sm-sm" id="konten" name="konten" placeholder="Insert Text Here..."></textarea>
                        </div>

                        <div class="btnaksi">
                            <a class="btn btn-default" id="btncancel" href="<?= site_url('datakbC') ?>">Cancel</a>
                            <button type="submit" class="btn btn-default"> Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>