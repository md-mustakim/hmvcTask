<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--css files-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/fa/css/all.min.css">
    <!--js files-->

</head>
<body>
    <div class="d-flex flex-column min-vh-100">
        <div class="h1 bg-light py-3 text-center">
            Welcome to HMVC of Codeigniter
        </div>
        <div class="">
          <div class="row m-0 p-0">
              <div class="col-md-2 border-end h-auto bg-light">
                  <button class="btn btn-success w-100 my-2">Home Page <i class="fa fa-home"></i></button>
                  <button class="btn btn-success w-100 my-2">Home Page</button>
              </div>
              <div class="col-md-10">
                  <?php
                    $this->load->view($view_name, $view_data);
                  ?>
              </div>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center py-2 px-2 mt-auto bg-info">
            <p class="fw-bold my-auto">CopyRight @ <?php echo date('Y');?></p>
            <p class="fw-bold my-auto">Develop by Codeigniter</p>
        </div>
    </div>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.bundle.js"></script>
    <?php
    $this->load->view($script);
    ?>
</body>
</html>