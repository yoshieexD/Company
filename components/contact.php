<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="d-flex py-4 " id="contact">

        <div class="w-50 " style="display: flex; justify-content:center; align-items:center">
            <div>
                <b class="fs-2 text"> Get in Touch</b>
                <p>with Us</p>
                <p> 09-123-123-12</p>
                <p>John_Doe@gmail.com</p>
            </div>
        </div>

        <div class="w-50">
            <div class="card w-75 p-4">
                <div class="card-body">
                    <form class="">
                        <div class="d-flex justify-content-between">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="First Name Last Name">
                                <label for="floatingInput">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="0912121132321">
                                <label for="floatingInput">Phone</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" placeholder="name@example.com">
                                    <option selected>Open this select menu</option>
                                    <option value="conceptual planning">Conceptual Planning</option>
                                    <option value="designing">Designing</option>
                                    <option value="construction">Construction</option>
                                </select>
                                <label for="floatingSelect">Services</label>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" cols="8" rows="10" style="resize: none;"></textarea>
                            <label for="floatingTextarea">Tell use more</label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-warning">Send us message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>