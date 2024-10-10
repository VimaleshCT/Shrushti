<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Srushti Hospital - Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">

    <!-- Stylesheets -->
    <link href="<?php echo base_url(); ?>assets/css/sty.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">

    <!-- Toastr.js for Notifications -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5">
                    <div class="card login-card">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <a href="<?php echo base_url(); ?>">
                                    <!-- Madras Mania Logo -->
                                    <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Madras Mania Logo"
                                        style="height: 50px;">
                                </a>
                            </div>

                            <!-- Display Flash Messages After Form Submission Only -->
                            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                                <?php if ($this->session->flashdata('success')): ?>
                                    <script>
                                        toastr.success('<?php echo $this->session->flashdata('success'); ?>');
                                    </script>
                                <?php endif; ?>

                                <?php if ($this->session->flashdata('error')): ?>
                                    <div class="alert alert-danger">
                                        <?php echo $this->session->flashdata('error'); ?>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>

                            <!-- Sign In Form -->
                            <h3 class="text-center mb-3 font-w300">Sign In to Srushti Hospital</h3>
                            <form action="<?php echo base_url('admin/dashboard'); ?>" method="post">
                                <div class="form-group">
                                    <label class="mb-1">Email<span class="required">*</span></label>
                                    <input type="email" class="form-control" name="email" required
                                        value="<?php echo set_value('email'); ?>">
                                    <!-- Display Form Validation Error -->
                                    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                                        <?php echo form_error('email', '<div class="error text-danger">', '</div>'); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label class="mb-1">Password<span class="required">*</span></label>
                                    <input type="password" class="form-control" name="password" required>
                                    <!-- Display Form Validation Error -->
                                    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                                        <?php echo form_error('password', '<div class="error text-danger">', '</div>'); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block custom-btn">Sign In</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required JS Files -->
    <script src="<?php echo base_url(); ?>assets/js/global.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/deznav-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>

</html>