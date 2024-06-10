<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <?php include './global/icon.php'; ?>
</head>

<body>

    <div class="d-flex py-4 " id="contact">
        <div class="w-50 " style="display: flex; justify-content:center; align-items:center">
            <div>
                <b class="fs-2 text">Let's get in touch</b>
                <p>Contact us with the following details and fill up the form with the details.</p>
                <p><i class="fas fa-map-marker-alt"></i> Valenzuela, NCR</p>
                <p><i class="fas fa-phone"></i> 09-123-123-12</p>
                <p><i class="fas fa-envelope"></i> John_Doe@gmail.com</p>
            </div>
        </div>

        <div class="w-50">
            <div class="card w-75 p-4">
                <div class="card-body">
                    <form class="">
                        <div class="d-flex justify-content-between">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInputName" placeholder="First Name Last Name">
                                <label for="floatingInputName"><i class="fas fa-user"></i> Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                                <label for="floatingInputEmail"><i class="fas fa-envelope"></i> Email address</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInputPhone" placeholder="0912121132321">
                                <label for="floatingInputPhone"><i class="fas fa-phone"></i> Phone</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" placeholder="Select service">
                                    <option selected>Open this select menu</option>
                                    <option value="conceptual planning">Conceptual Planning</option>
                                    <option value="designing">Designing</option>
                                    <option value="construction">Construction</option>
                                </select>
                                <label for="floatingSelect"><i class="fas fa-concierge-bell"></i> Services</label>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" cols="8" rows="10" style="resize: none;"></textarea>
                            <label for="floatingTextarea"><i class="fas fa-comment"></i> Tell us more</label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-warning"><i class="fas fa-paper-plane"></i> Send us a message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>