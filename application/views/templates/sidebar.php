<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!-- Font Awesome JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<style>
    body {
        background: #313131;
    }

    #sidebar.active {
        margin-left: -250px;
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

    #sidebar {
        min-width: 250px;
        max-width: 250px;
        /* min-height: 130vh; */
        background: #313131;
        color: #fff;
        transition: all 0.3s;
        /* height :auto; */
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #515151;
    }

    #sidebar .sidebar-footer {
        bottom: 0;
        width: 18.3%;
        position: absolute;
        background: #F17425;
    }

    #content-wrapper {
        text-align: center;
        width: 400px;
        margin: 20% auto;
    }

    #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #313131;
    }

    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li {
        margin-left: 10px;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }

    #sidebar ul li a:hover {
        color: #ffffff;
        background: #F17425;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: #fff;
        background: #313131;
    }

    ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        background: #313131;
    }

    .sidebar-footer {
        position: relative;
    }
</style>
</head>

<body>
    <nav id="sidebar">
        <div class="sidebar-header">
            <center><a href="<?php base_url() ?>dashboardC"><img src="<?php site_url() ?>assets/img/logohelp3.png" width="130" height="50"></a></center>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="<?php site_url() ?>requestC"><i class="fa fa-user-plus" aria-hidden="true"></i> Request</a>
            </li>
            <li>
                <a href="<?php site_url() ?>vdashboardC"><i class="fa fa-eye" aria-hidden="true"></i> View Dashboard</a>
            </li>
            <li>
                <a href="<?php site_url() ?>approvalC"><i class="fa fa-check" aria-hidden="true"></i> Check Approval</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-database" aria-hidden="true"></i> Master Data</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="<?php site_url() ?>datapegawaiC"><i class="fa fa-file" aria-hidden="true"></i> Data Pegawai</a>
                    </li>
                    <li>
                        <a href="<?php site_url() ?>datarequestC"><i class="fa fa-file" aria-hidden="true"></i> Data Request</a>
                    </li>
                    <li>
                        <a href="<?php site_url() ?>dataagentC"><i class="fa fa-file" aria-hidden="true"></i> Data Agent</a>
                    </li>
                    <li>
                        <a href="<?php site_url() ?>datacompanyC"><i class="fa fa-file" aria-hidden="true"></i> Data Company</a>
                    </li>
                    <li>
                        <a href="<?php site_url() ?>datauserC"><i class="fa fa-file" aria-hidden="true"></i> Data User</a>
                    </li>
                    <li>
                        <a href="<?php site_url() ?>datakbC"><i class="fa fa-file" aria-hidden="true"></i> Data KB</a>
                    </li>
                    <li>
                        <a href="<?php site_url() ?>datafaqC"><i class="fa fa-file" aria-hidden="true"></i> Data FAQ</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="sidebar-footer">
            <ul class="list-unstyled tes">
                <li>
                    <a href="<?php site_url() ?>settingC"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
                </li>
                <li>
                    <a href="<?php site_url() ?>loginC/logout"><i class="fa fa-arrow-left" aria-hidden="true"></i> Log Out</a>
                </li>

            </ul>
        </div>
    </nav>

</body>

</html>