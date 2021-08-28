<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Dashboard</title>
    <!-- CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />


    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/'); ?>chartjs/Chart.js"></script>
    <style>
        #chart {
            max-width: 380px;
            margin: 35px auto;
            padding: 0;
        }

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
            border-radius: 20px;
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
            width: 185px;
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

        .card-baru {
            text-align: center;
            margin: 0px 50px 50px 50px;
            padding: 35px 20px 35px 20px;
            box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .card-chart {
            position: all;
            margin: 0px 5px 10px 25px;
            width: 540px;
            height: 300px;

            text-align: left;

            background: #F5F5F5;
            border: 1px solid rgba(49, 49, 49, 0.3);
            box-sizing: border-box;
            box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .card-sum {
            position: all;
            margin: 0px 5px 10px 25px;
            width: 180px;
            height: 75px;

            text-align: left;

            background: #F5F5F5;
            border: 1px solid rgba(49, 49, 49, 0.3);
            box-sizing: border-box;
            box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/'); ?>chartjs/Chart.js"></script>
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
                <h3>My Dashboard</h3>
            </div>
            <hr>
            <div class="row">
                <div class="form-row">
                    <div class="card-sum">
                        <p>Number of Tickets</p>
                        <h5>5</h5>

                    </div>
                    <div class="card-sum">
                        <p>Overdue Tickets</p>
                        <h5 style="color: orange;">5</h5>
                    </div>
                    <div class="card-sum">
                        <p>Ticket(s) on Hold</p>
                        <h5>5</h5>
                    </div>
                    <div class="card-sum">
                        <p>Open Ticket(s)</p>
                        <h5>5</h5>
                    </div>
                    <div class="card-sum">
                        <p>Due Today</p>
                        <h5>5</h5>
                    </div>
                    <div class="card-sum">
                        <p>All Ticket(s)</p>
                        <h5>5</h5>
                    </div>
                    <div class="card-sum">
                        <p>Unassigned Tickets</p>
                        <h5 style="color: orange;">5</h5>
                    </div>
                    <div class="card-sum">
                        <p>List of Approval</p>
                        <h5>5</h5>
                    </div>
                    <div class="card-sum">
                        <p>List of Latest Ticket</p>
                        <h5>5</h5>
                    </div>
                    <div class="card-sum">
                        <p>List of Agent</p>
                        <h5>5</h5>
                    </div>
                </div>
                <div class="form-row">

                    <div class="card-chart">
                        <h5>Ticket Status</h5>
                        <div style="width: 500px;height: 500px">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>

                </div>
                <div class="card-baru">
                    <div class="form-row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">User</th>
                                    <th scope="col">Number of Ticket(s)</th>
                                    <th scope="col">Submission Date</th>
                                    <th scope="col">Request Type</th>
                                    <th scope="col">Agent</th>
                                    <th scope="col">Approval</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Steven Alexander</td>
                                    <td>4</td>
                                    <td>21-05-2021</td>
                                    <td>Incident</td>
                                    <td>Support Business Units</td>
                                    <td style="color: #00A006">Approved</td>
                                </tr>
                                <tr>
                                    <td>Michael Steven</td>
                                    <td>3</td>
                                    <td>21-05-2021</td>
                                    <td>Problem</td>
                                    <td>Technical Support</td>
                                    <td style="color: orange">Pending</td>
                                </tr>
                                <tr>
                                    <td>Michelle Jasmine</td>
                                    <td>5</td>
                                    <td>21-05-2021</td>
                                    <td>Service</td>
                                    <td>Application Support</td>
                                    <td style="color: red">Declined</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Number of Tickets", "Overdue Tickets", "Ticket on Hold", "Open Tickets", "Due Today", "All Tickets", "Unassigned Ticket"],
                datasets: [{

                    data: [8, 6, 2, 4, 5, 6, 7],
                    backgroundColor: [
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderColor: [
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script>
        var ctx = document.getElementById("myChart2").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {

                datasets: [{

                    data: [8, 6, 2, 4, 5, 6, 7],
                    backgroundColor: [
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderColor: [
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
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