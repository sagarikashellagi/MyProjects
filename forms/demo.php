<form action="" method="post" novalidate>
    <div class="mb-3">
        <label for="name" class="form-label">Enter Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" required>
        <div class="invalid-feedback">
            Please enter your name.
        </div>
    </div>
    
    <div class="mb-3">
        <label for="mobile" class="form-label">Mobile Number</label>
        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number" required pattern="^\d{10}$">
        <div class="invalid-feedback">
            Please enter a valid 10-digit mobile number.
        </div>
    </div>
    
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Id" required>
        <div class="invalid-feedback">
            Please enter a valid email address.
        </div>
    </div>
    
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
        <div class="invalid-feedback">
            Please enter a password.
        </div>
    </div>
    
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
        <div class="invalid-feedback">
            You must agree before submitting.
        </div>
    </div>
    
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
</form>

<!-- Bootstrap 5 validation -->
<script>
    // Example of how to trigger form validation manually if needed
    (function () {
        'use strict'
        
        var form = document.querySelector('form');
        
        form.addEventListener('submit', function (event) {
            // Stop form submission if validation fails
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            // Add or remove the was-validated class to show validation styles
            form.classList.add('was-validated');
        });
    })();
</script>

<!-- Bootstrap JS (with Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
