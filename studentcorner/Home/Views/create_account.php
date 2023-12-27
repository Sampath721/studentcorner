<?= view('Modules\Home\Views\common\header') ?>
<p style="margin-top: 80px;"></p>
<div class="container mt-5 centered-form">
   <div class="col-md-6 form-border-index-page p-4 d-flex flex-column align-items-center">
    <img src="<?php echo base_url() ?>public/assets/images/add-user.png" class="img-fluid mb-4" style="width: 150px; height: 150px" alt="Create Account">
    <form autocomplete="off" action="" id="myForm" method="post" class="text-center">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control mb-2 shadow-none" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control mb-2 shadow-none" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" class="form-control mb-2 shadow-none" id="phone" name="phone" pattern="[0-9]{10}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control mb-2 shadow-none" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary shadow-none sbmt-btn" style="background: linear-gradient(90deg, rgba(0,174,255,1) 0%, rgba(14,123,160,1) 0%, rgba(32,100,127,1) 100%); ">Sign Up</button>
    </form>
</div>

</div>

<!-- jQuery and Bootstrap JS links -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

<script>
    $(document).ready(function () {
        // Initialize form validation
        $("#myForm").validate({
            rules: {
                username: {
                    required: true,
                    minlength: 5
                },
                password: {
                    required: true,
                    minlength: 8
                },
                phone: {
                    required: true,
                    pattern: "[0-9]{10}"
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                username: {
                    required: "Please enter your username.",
                    minlength: "Username must be at least 5 characters long."
                },
                password: {
                    required: "Please enter your password.",
                    minlength: "Password must be at least 8 characters long."
                },
                phone: {
                    required: "Please enter your phone number.",
                    pattern: "Please enter a valid 10-digit phone number."
                },
                email: {
                    required: "Please enter your email address.",
                    email: "Please enter a valid email address."
                }
            },
            submitHandler: function (form) {
                // Form submission logic goes here
                alert("Form submitted successfully!");
            }
        });
    });
</script>
<?= view('Modules\Home\Views\common\footer') ?>