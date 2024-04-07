<?php
require 'include/navbar.php';
?>
<style>
    .form-inputs label {
        color: #000;
        font-weight: 500;
        padding-bottom: 5px;
    }

    .form-inputs input {
        color: #000;
        border: 1px solid #000;
    }
</style>

<div class="container-fluid">
   
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Create Company</h2>
            <form action="<?php echo base_url(); ?>save-company-data" class="form-inputs" method="post">
                <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <div class="row">
                    <div class="col-md-6 my-2">
                        <label for="">Company Name</label>
                        <input class="form-control" type="text" name="company_name" placeholder="Enter Company Name" required>
                    </div>
                    <div class="col-md-6 my-2">
                        <label for="">Username</label>
                        <input class="form-control" type="text" name="user_name" placeholder="Enter Username" required>
                    </div>
                    <div class="col-md-6 my-2">
                        <label for="">Email</label>
                        <input class="form-control" type="text" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="col-md-6 my-2">
                        <label for="">Mobile</label>
                        <input class="form-control" type="text" name="mobile" placeholder="Enter Mobile" required>
                    </div>
                    <div class="col-md-6 my-2">
                        <label for="">Password</label>
                        <input class="form-control" type="text" name="password" placeholder="Enter Password" required>
                    </div>
                    <div class="col-md-6 my-2">
                        <label for="">Confirm Password</label>
                        <input class="form-control" type="text" placeholder="Confirm Password" required>
                    </div>
                    <div class="col-md-12 my-2">
                        <button class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


</div>


<?php
require 'include/footer.php';
?>