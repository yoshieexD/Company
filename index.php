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
            <br /><br />
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
    <br />
    <?php include './components/about.php' ?>
    <br />
    <!-- Services -->
    <?php include './components/services.php' ?>
    <!--Contact-->
    <br /><br />
    <?php include './components/contact.php' ?>
    <br /><br />
    <!--Footer -->
    <?php include './components/footer.php' ?>

    <!-- All right Reserve -->
    <?php include './components/reserve.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>