<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

    <title>Create User</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand" href="http://localhost/training/ci3">CRUD Using CI3</a>
        </div>
    </nav>
    <!-- //Navbar -->

    <!-- Form -->
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="<?php echo base_url().'index.php/user/index'; ?>" class="btn btn-primary my-3">Back</a>
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <div class="card-header-title">User Form</div>
                    </div>
                    <div class="card-body">
                        <form name="createUser" 
                        action="<?php echo base_url().'index.php/user/create'; ?>" 
                        method="post">
                            <div class="form-group mt-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" 
                                class="form-control <?php echo (form_error('name') != null)?'is-invalid':''; ?>"
                                value="<?php echo set_value('name'); ?>" >
                                <?php 
                                   echo '<div class="invalid-feedback">'.
                                   form_error('name').'</div>';
                                ?>
                            </div>
                            <div class="form-group mt-3">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" 
                                class="form-control <?php echo (form_error('email') != null)?'is-invalid':''; ?>"
                                value="<?php echo set_value('email'); ?>" >
                                <?php 
                                    echo '<div class="invalid-feedback">'.
                                    form_error('email').'</div>';
                                ?>
                            </div>
                            <div class="form-group mt-3">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" id="mobile" 
                                class="form-control <?php echo (form_error('mobile') != null)?'is-invalid':''; ?>"
                                value="<?php echo set_value('mobile'); ?>">
                                <?php 
                                    echo '<div class="invalid-feedback">'.
                                    form_error('mobile').'</div>';
                                ?>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <!-- //Form -->

    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
</body>

</html>