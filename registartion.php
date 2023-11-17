<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Untitled Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container-xl">
        <div class="nav">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Student Blood Bank</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="donorlist.php">Donors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-success" href="registartion.php">Become a Donor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary" href="login.php">Admin</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div id="banner">
            <img src="images/banner.jpg" alt="banner" />
        </div>
        <div class="registration">
            <h2>Donor Information</h2>
            <form class="row g-3" method="post" action="register.php">
                <div class="col-12">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Full Name">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="text" class="form-control" id="inputEmail4" name="inputEmail4">
                </div>
                <div class="col-12">
                    <label for="inputNumber" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="inputNumber" name="inputNumber" placeholder="Your Contact Number">
                </div>
                <div class="col-12">
                    <label for="inputBloodGroup" class="form-label">Your Blood Group</label>
                    <input type="text" class="form-control" id="inputBloodGroup" name="inputBloodGroup" placeholder="O+">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Your Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Your Address">
                </div>
                <div class="col-md-12">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity" name="inputCity">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-success" name="register">Save</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>