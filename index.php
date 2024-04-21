<?php
include './global/font.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC - Company</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;

            .main {
                background-image: url(https://img.freepik.com/free-photo/construction-works-frankfurt-downtown-germany_1268-20907.jpg?t=st=1713707660~exp=1713711260~hmac=d9553133c4ac70c777ec2b21c99a3ac75c1d1c0ff9f07c7c3ea8af5080859c41&w=1060);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                height: 68vh;
                width: auto;
                /* border-radius: 0% 0% 50% 50%; */
            }

            .main-text {
                font-weight: 800;
                font-style: normal;
            }

            .hover-img-container {
                position: relative;
                display: inline-block;
            }

            .hover-img-container:hover .overlay {
                opacity: 1;
            }

            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                opacity: 0;
                transition: opacity 0.3s ease;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                text-align: center;
            }

            .overlay-text {
                z-index: 1;
            }

            .hover-img {
                max-width: 100%;
                height: auto;
            }
        }
    </style>
</head>

<body class=" h-100 w-100">
    <div class="main">

        <!-- Navbar-->
        <div class="d-flex justify-content-center">
            <nav class="navbar navbar-expand-lg bg-white position-sticky mb-4 w-75 rounded mt-2 shadow">
                <div class="container-fluid d-flex justify-content-between">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex justify-content-center w-100">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#service">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-lg-none d-flex" aria-disabled="true">Contact</a>
                                <button type="button" class="btn btn-outline-warning d-none d-lg-flex">Contact</button>
                            </li>
                            <li class="nav-item d-flex d-lg-none">
                                <a class="nav-link" aria-disabled="true" href="facebook.com">facebook</a>
                            </li>
                            <li class="nav-item d-flex d-lg-none">
                                <a class="nav-link" aria-disabled="true">instagram</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-none d-lg-flex">
                        <div class="mx-2" style="cursor: pointer;">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#2aa4f4"></stop>
                                    <stop offset="1" stop-color="#007ad9"></stop>
                                </linearGradient>
                                <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
                                <path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"></path>
                            </svg>
                        </div>
                        <div class="mx-2" style="cursor: pointer;">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fd5"></stop>
                                    <stop offset=".328" stop-color="#ff543f"></stop>
                                    <stop offset=".348" stop-color="#fc5245"></stop>
                                    <stop offset=".504" stop-color="#e64771"></stop>
                                    <stop offset=".643" stop-color="#d53e91"></stop>
                                    <stop offset=".761" stop-color="#cc39a4"></stop>
                                    <stop offset=".841" stop-color="#c837ab"></stop>
                                </radialGradient>
                                <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#4168c9"></stop>
                                    <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                </radialGradient>
                                <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                <path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path>
                                <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                <path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </nav>
        </div>


        <!-- Home -->

        <div class="grid">
            <p class="text-capitalize text-center fs-1 main-text mb-4 text-warning "> ABC - REVOLUTIONIZED COMPANY</p>
            <div class="d-flex justify-content-center">
                <p class="text-center mb-4 w-50 fs-6 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Hendrerit dolor magna eget est lorem ipsum dolor sit amet.</p>
            </div>
            <div class="d-grid gap-2 col-2 mx-auto  mb-4">
                <button class="btn btn-outline-primary" type="button">Learn More</button>
            </div>
        </div>

    </div>


    <!-- About -->
    <div class="d-flex justify-content-evenly w-full " id="about" style="padding :40px 0px">
        <!-- <p class="fs-3 fw-bold">ABOUT US</p> -->
        <div class="d-flex align-items-center" style="flex-direction: column;">
            <p class="fs-3 text-warning fw-bolder">2019</p>
            <p>Year Established</p>
        </div>

        <div class="d-flex align-items-center" style="flex-direction: column;">
            <p class="fs-3 text-warning fw-bolder">19</p>
            <p>Cities we worked</p>
        </div>

        <div class="d-flex align-items-center" style="flex-direction: column;">
            <p class="fs-3 text-warning fw-bolder">1000+</p>
            <p>Project completed</p>
        </div>

        <div class="d-flex align-items-center" style="flex-direction: column;">
            <p class="fs-3 text-warning fw-bolder">7</p>
            <p>Partnered company</p>
        </div>
    </div>



    <!-- Services -->
    <div class="d-flex p-4 bg-dark" id="service" style="flex-direction: column;">
        <div class="my-4">
            <p class="fs-2 fw-semibold m-0 text-warning">OUR SERVICES</p>
            <p class="fst-italic m-0 text-white">WE PROVIDE A VARIETY OF SERVICES</p>
        </div>

        <div class="d-flex justify-content-evenly align-items-center my-4">
            <div class="hover-img-container">
                <img src="https://img.freepik.com/free-photo/high-angle-measuring-tools-still-life_23-2150440970.jpg?t=st=1713713773~exp=1713717373~hmac=a4331d0e285cfdba718d47f1a6e45e7faa57b5e66a3c54aec3803f4f464f3e87&w=360" alt="" class="img-fluid hover-img">
                <div class="overlay">
                    <div class="overlay-text">
                        <p class="fs-3 fw-semibold">Conceptual Planning</p>
                    </div>
                </div>
            </div>

            <div class="hover-img-container">
                <img src="https://img.freepik.com/free-photo/brutalist-inspiration-architecture-background_23-2149162853.jpg?t=st=1713713930~exp=1713717530~hmac=02138855b5831434f46100a44a79cea3353a1e18cc96aa98bca71c0f8f538df2&w=360" alt="" class="img-fluid  hover-img">
                <div class="overlay">
                    <div class="overlay-text">
                        <p class="fs-3 fw-semibold">Designing</p>
                    </div>
                </div>
            </div>


            <div class="hover-img-container">
                <img src="https://img.freepik.com/free-photo/large-building-site_1127-3251.jpg?t=st=1713713852~exp=1713717452~hmac=4110a5a21f64637e27a23afd47f4d5db99b44e8e4b28d78aeabea811420c0e47&w=360" alt="" class="img-fluid hover-img">
                <div class="overlay">
                    <div class="overlay-text">
                        <p class="fs-3 fw-semibold">Construction</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Contact-->
    <div class="d-flex justify-content-center align-items-center" id="service" style="flex-direction: column;">
        <p class="fs-3 fw-bold">CONTACT</p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>