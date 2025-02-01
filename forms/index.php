<?php 
$conn = mysqli_connect('localhost', 'root', '', 'practice') or die("Connection Failed: " . mysqli_connect_error());
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Demo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Service 1</a></li>
                                <li><a class="dropdown-item" href="#">Service 2</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Other Services</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/1.jpg" class="d-block w-100" alt="..." style="height:400px;">
            </div>
            <div class="carousel-item">
                <img src="images/2.jpg" class="d-block w-100" alt="..." style="height:400px;">
            </div>
            <div class="carousel-item">
                <img src="images/3.jpg" class="d-block w-100" alt="..." style="height:400px;">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div id="form_success_msg"></div>
        <h2 style="text-align:center;">Personal Information</h2>
        <div class="row">
            <form action="" method="post" id="myForm" novalidate>
                <div class="mb-3">
                    <label for="name" class="form-label">Enter Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" required>
                    <div class="invalid-feedback">Please enter your name.</div>
                </div>

                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number" required pattern="^\d{10}$">
                    <div class="invalid-feedback">Please enter a valid 10-digit mobile number.</div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Id" required>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
                    <div class="invalid-feedback">Please enter a password.</div>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    <div class="invalid-feedback">You must agree before submitting.</div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <div id="error-message" class="text-danger mt-3" style="display:none;">
                    <strong>Error:</strong> Please fill out all required fields correctly!
                </div>
            </form>
        </div>
    </div>

    <script>
        // Example of how to trigger form validation manually if needed
        (function () {
            'use strict';

            var form = document.getElementById('myForm');
            var errorMessage = document.getElementById('error-message');

            form.addEventListener('submit', function (event) {
                // Stop form submission if validation fails
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                    errorMessage.style.display = 'block';  // Show error message
                } else {
                    errorMessage.style.display = 'none';  // Hide error message if form is valid
                }

                // Add or remove the was-validated class to show validation styles
                form.classList.add('was-validated');
            });
        })();
    </script>

    <!-- Bootstrap JS (with Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<?php 
if(isset($_POST['submit'])){
    // Collect form data
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Example of handling form data (you can insert into the database here)
    $query = "INSERT INTO tbl_personal_info (name, mobile, email, password) VALUES ('$name', '$mobile', '$email', '$password')";
    $result = mysqli_query($conn, $query);

    if($result){
        echo "<div class='alert alert-success' id='form_success_msg'>Form submitted successfully!</div>";
    } else {
        echo "<div class='alert alert-danger' id='form_error_msg'>Error: " . mysqli_error($conn) . "</div>";
    }
}
?>
