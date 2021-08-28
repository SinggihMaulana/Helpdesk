<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
    /* The Modal (background) */
        .modal {
            position: fixed; /* Stay in place */
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            right: -100%;
            opacity: 0;
            transition: right 0.4s, opacity 0.4s;
        }
        .modal.show {
            right: 0;
            opacity: 1;
        }

        /* Modal Content/Box */
        .modal-content {
            border-radius : 10px;
            position: absolute;
            left : 50%
        }

        /* Modal Body */
        .modal-body {padding: 2px 16px;}


        /* Modal Content */
        .modal-content {
            border-radius : 10px;
            border : black;
            width : 450px;
            height : 70px;
            box-shadow: 0px 4px 4px 4px rgba(0,0,0,0.2);
            margin-bottom : 10px;
        }
    </style>
</head>
    <body>
        <div class="col">
        <!-- Trigger/Open The Modal -->
            <div class="row">
                <button id="myBtn">Open Modal</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <button id="myBtn">Open Modal</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script>
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // When the user clicks on the button, open the modal
            btn.onclick = function() {
                modal.classList.add('show');
            }
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                modal.classList.remove('show');
                }
            }
        </script>
    </body>
</html>