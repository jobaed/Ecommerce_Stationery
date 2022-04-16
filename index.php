<?php

include 'header.php';

?>

<body>

    <?php

    include "nav.php";

    ?>

    <div class="container-fluid pt-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active item-1 d-flex justify-content-end">
                    <div class="col-lg-6 p-5 text-light pt-5">
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <h1 class="pb-3">Lorem ipsum, dolor <br> sit amet consectetur <br> adipisicing.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <button type="button" class="btn btn-primary">Shop Now</button>
                    </div>
                </div>
                <div class="carousel-item item-3 d-flex justify-content-end">
                    <div class="col-lg-6 p-5 text-light pt-5">
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <h1 class="pb-3">Lorem ipsum, dolor <br> sit amet consectetur <br> adipisicing.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <button type="button" class="btn btn-primary">Shop Now</button>
                    </div>
                </div>

                <div class="carousel-item item-2 d-flex justify-content-center">
                    <div class="col-lg-6 p-5 text-dark pt-5">
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <h1 class="pb-3">Lorem ipsum, dolor <br> sit amet consectetur <br> adipisicing.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <button type="button" class="btn btn-primary">Shop Now</button>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="container-fluid">
            <div class="row p-0">
                <div class="col-lg-6 p-0">
                    <div class="image-section1 d-flex justify-content-center align-items-center">
                        <a href="#" class="h1 text-decoration-none text-light">Stationery</a>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="image-section2 d-flex justify-content-center align-items-center">
                        <a href="#" class="h1 text-decoration-none text-light">living</a>
                    </div>
                    <div class="image-section3 d-flex justify-content-center align-items-center">
                        <a href="#" class="h1 text-decoration-none text-light">Our Book</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="row text-center">
                <h1>Our Product</h1>
            </div>
            <div class="col-lg-3 py-5">
                <div class="card shadow text-center position-reletive">
                    <div class="card-image">
                        <img class="card-img-top" src="asset/img/card-item1.jpg" alt="Card image cap">
                    </div>
                    <span style="top: 20%; right: 30%; font-size: 30px;" class="badge bg-secondary position-absolute"><i class="bi bi-heart"></i></span>
                    <span style="top: 32%; right: 30%; font-size: 30px;" class="badge bg-secondary position-absolute"><i class="bi bi-arrow-clockwise my-3"></i></span>
                    <div class="card-body">
                        <h5 class="card-title">Spectrum Mini Planner</h5>
                        <p class="card-text">$24.00</p>
                        <a href="#" class="btn btn-primary">Add To Card</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 py-5">
                <div class="card shadow text-center position-reletive">
                    <div class="index-card">
                        <div class="card-image">
                            <img class="card-img-top" src="asset/img/card-item-2.jpg" alt="Card image cap">
                        </div>
                    </div>
                    <span style="top: 20%; right: 30%; font-size: 30px;" class="badge bg-secondary position-absolute"><i class="bi bi-heart"></i></span>
                    <span style="top: 32%; right: 30%; font-size: 30px;" class="badge bg-secondary position-absolute"><i class="bi bi-arrow-clockwise my-3"></i></span>
                    <div class="card-body">
                        <h5 class="card-title">Spectrum Mini Planner</h5>
                        <p class="card-text">$24.00</p>
                        <a href="#" class="btn btn-primary">Add To Card</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 py-5">
                <div class="card shadow text-center position-reletive">
                    <div class="card-image">
                        <img class="card-img-top" src="asset/img/card-item3.jpg" alt="Card image cap">
                    </div>
                    <span style="top: 20%; right: 30%; font-size: 30px;" class="badge bg-secondary position-absolute"><i class="bi bi-heart"></i></span>
                    <span style="top: 32%; right: 30%; font-size: 30px;" class="badge bg-secondary position-absolute"><i class="bi bi-arrow-clockwise my-3"></i></span>
                    <div class="card-body">
                        <h5 class="card-title">Spectrum Mini Planner</h5>
                        <p class="card-text">$24.00</p>
                        <a href="#" class="btn btn-primary">Add To Card</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 py-5">
                <div class="card shadow text-center position-reletive">
                    <div class="card-image">
                        <img class="card-img-top" src="asset/img/card-item-4.jpg" alt="Card image cap">
                    </div>
                    <span style="top: 20%; right: 30%; font-size: 30px;" class="badge bg-secondary position-absolute"><i class="bi bi-heart"></i></span>
                    <span style="top: 32%; right: 30%; font-size: 30px;" class="badge bg-secondary position-absolute"><i class="bi bi-arrow-clockwise my-3"></i></span>
                    <div class="card-body">
                        <h5 class="card-title">Spectrum Mini Planner</h5>
                        <p class="card-text">$24.00</p>
                        <a href="#" class="btn btn-primary">Add To Card</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 py-5">
                <div class="card shadow text-center position-reletive">
                    <div class="card-image">
                        <img class="card-img-top" src="asset/img/card-item-5.jpg" alt="Card image cap">
                    </div>
                    <span style="top: 20%; right: 30%; font-size: 30px;" class="badge bg-secondary position-absolute"><i class="bi bi-heart"></i></span>
                    <span style="top: 32%; right: 30%; font-size: 30px;" class="badge bg-secondary position-absolute"><i class="bi bi-arrow-clockwise my-3"></i></span>
                    <div class="card-body">
                        <h5 class="card-title">Spectrum Mini Planner</h5>
                        <p class="card-text">$24.00</p>
                        <a href="#" class="btn btn-primary">Add To Card</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 py-5">
                <div class="card shadow text-center position-reletive">
                    <div class="card-image">
                        <img class="card-img-top" src="asset/img/card-item-6.jpg" alt="Card image cap">
                    </div>
                    <span style="top: 20%; right: 30%; font-size: 30px;" class="badge bg-secondary position-absolute"><i class="bi bi-heart"></i></span>
                    <span style="top: 32%; right: 30%; font-size: 30px;" class="badge bg-secondary position-absolute"><i class="bi bi-arrow-clockwise my-3"></i></span>
                    <div class="card-body">
                        <h5 class="card-title">Spectrum Mini Planner</h5>
                        <p class="card-text">$24.00</p>
                        <a href="#" class="btn btn-primary">Add To Card</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 py-5">
                <div class="card shadow text-center position-reletive">
                    <div class="card-image">
                        <img class="card-img-top" src="asset/img/card-item-7.jpg" alt="Card image cap">
                    </div>
                    <span style="top: 20%; right: 30%; font-size: 30px;" class="badge bg-secondary position-absolute"><i class="bi bi-heart"></i></span>
                    <span style="top: 32%; right: 30%; font-size: 30px;" class="badge bg-secondary position-absolute"><i class="bi bi-arrow-clockwise my-3"></i></span>
                    <div class="card-body">
                        <h5 class="card-title">Spectrum Mini Planner</h5>
                        <p class="card-text">$24.00</p>
                        <a href="#" class="btn btn-primary">Add To Card</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 py-5">
                <div class="card shadow text-center position-reletive">
                    <div class="card-image">
                        <img class="card-img-top" src="asset/img/card-item-8.jpg" alt="Card image cap">
                    </div>
                    <span style="top: 20%; right: 30%; font-size: 30px;" class="badge bg-secondary position-absolute"><i class="bi bi-heart"></i></span>
                    <span style="top: 32%; right: 30%; font-size: 30px;" class="badge bg-secondary position-absolute"><i class="bi bi-arrow-clockwise my-3"></i></span>
                    <div class="card-body">
                        <h5 class="card-title">Spectrum Mini Planner</h5>
                        <p class="card-text">$24.00</p>
                        <a href="#" class="btn btn-primary">Add To Card</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid ">
        <div class="container-fluid">
            <div class="row p-0">
                <div class="col-lg-6 p-0">
                    <div class="bottom-img1 d-flex justify-content-center align-items-center">
                        <div>
                            <h1 class="text-light">Journal</h1><br>
                            <button class="btn btn-danger">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="buttom-img2 d-flex justify-content-center align-items-center">
                        <div class="px-5 text-light">
                            <h2 class="pb-3">Lorem ipsum dolor sit amet.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, minus!</p>
                        </div>
                    </div>
                    <div class="buttom-img3 d-flex justify-content-center align-items-center">
                        <div class="px-5 pt-5 text-light">
                            <h2 class="pb-3 pt-5">Lorem ipsum dolor sit amet.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, minus!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    include 'footer.php';

    ?>


    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/jquery-3.6.0.min.js"></script>

</body>

</html>