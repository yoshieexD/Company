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
        <?php include './components/navbar.php' ?>

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
    <?php include './components/about.php' ?>
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
    <?php include './components/contact.php' ?>
    <!--Footer -->
    <?php include './components/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>