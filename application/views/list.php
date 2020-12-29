<?php
/**
 * CRUD Using CI3
 * 
 * PHP Version 7
 * 
 * @category   CRUD
 * @package    CEDCOSS
 * @subpackage CRUD_Using_CI3
 * @author     Shashikant Bharti <surya.indian321@gmail.com>
 * @license    https://cedcoss.com/ <CEDCOSS 2020>
 * @link       http://localhost/training/ci3/
 * @since      Version 1.0
 */

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

    <title>View User</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand" href="http://localhost/training/ci3">
                CRUD Using CI3
            </a>
        </div>
    </nav>
    <!-- //Navbar -->

    <!-- Add Action -->
    <div class="container py-5 d-flex justify-content-end">
        <a href="<?php echo base_url().'index.php/user/create'; ?>" class="btn btn-primary">Add New User</a>
    </div>
    <!-- //Add Action -->

    <!-- Form -->
    <div class="container">
     <!-- Alert -->
        <?php 
        $success = $this->session->userdata('success');
        if ($success != null) : 
            ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $success; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" 
            aria-label="Close"></button>
        </div>
        <?php endif; ?>
        <!-- //Alert -->
        <!-- Alert -->
        <?php 
        $failure = $this->session->userdata('failure');
        if ($failure != null) : 
            ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $failure; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" 
            aria-label="Close"></button>
        </div>
        <?php endif; ?>
        <!-- //Alert -->
        <h4 class="text-primary">All Users</h4>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped shadow">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($users)) : ?>
                        <?php foreach ($users as $key=>$user) : ?>
                        <tr>
                            <td><?php echo ++$key; ?></td>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['mobile']; ?></td>
                            <td>
                                <a href="<?php echo base_url().'index.php/user/edit/'.$user['id']; ?>"
                                    class="btn btn-sm btn-primary">Edit</a>
                                <a href="<?php echo base_url().'index.php/user/delete/'.$user['id']; ?>"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                        <?php else : ?>

                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- //Form -->

    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
</body>

</html>