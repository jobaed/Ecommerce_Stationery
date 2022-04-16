<?php

include 'header.php';

?>

<body>

    <?php

    include 'nav.php';

    ?>


    <!-- login-section Start -->
    <div class="container p-5">
        <div class="row">
            <div class="col-lg-6 login-section">
                <h1 class="py-5">Customer <br> Login</h1>
                <hr>
            </div>
            <div class="col-lg-6 p-5">
                <div class="input-group py-3">
                    <input class="form-control mt-2" placeholder="Email" type="email">
                </div>
                <div class="input-group py-3">
                    <input class="form-control" placeholder="Password" type="password">
                </div>
                <div class="input-group py-3">
                    <input class="btn btn-dark btn-lg" placeholder="Email" type="submit">
                </div>
            </div>
        </div>
    </div>
    <!-- login-section End -->



    <?php

    include 'footer.php';

    ?>


    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/jquery-3.6.0.min.js"></script>
</body>