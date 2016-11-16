<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/css/skins/_all-skins.min.css">
    <script src="<?php echo base_url()?>public/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php if(!empty($plugin['css'])):?>
        <?php foreach ($plugin['css'] as $row):?>
            <link href='<?php echo base_url()?>public/<?php echo $row?>' rel="stylesheet">
        <?php endforeach;?>
    <?php endif;?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php $this->load->view('back-end/layouts/header.php')?>
    <?php $this->load->view('back-end/layouts/sidebar.php')?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1><?php echo isset($title)? $title:''?><small></small></h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url()?>admin/home"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><?php echo isset($title)? $title:''?></li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <?php if(isset($temp)):?>
                <?php $this->load->view($temp)?>
            <?php endif?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php $this->load->view('back-end/layouts/footer.php')?>
    <!-- Control Sidebar -->
    <?php $this->load->view('back-end/layouts/control-sidebar.php')?>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>public/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>public/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>public/js/app.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>public/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url()?>public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo base_url()?>public/plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>public/js/demo.js"></script>
<?php if(!empty($plugin['js'])):?>
    <?php foreach ($plugin['js'] as $row):?>
        <script src="<?php echo base_url()?>public/<?php echo $row?>"></script>
    <?php endforeach;?>
<?php endif;?>
</body>
</html>
