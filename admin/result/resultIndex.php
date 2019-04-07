<?php include_once '../partials/_head.php';?>
<!-- Site wrapper -->
<div class="wrapper">
<?php include_once '../partials/_header.php';?>
<!-- =============================================== -->
<!-- Left side column. contains the sidebar -->
<?php include_once '../partials/_leftSidebar.php';?>
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Dashboard
    <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Examples</a></li>
    <li class="active">Blank page</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <!-- <h3 class="box-title">Title</h3> -->
            <a href="addScience.php" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-upload"></span> Add science result</a>
            <a href="addHumanities.php" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-upload"></span> Add humanities result</a>
            <a href="addBusinessStudies.php" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-upload"></span> Add business studies result</a>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
        <!-- Code below -->
            <div class="row">
                <div class="col-sm-12">
                <?php
                // Vendor autoloader file added
                require_once('../app/start.php');
                // Load the Student class here
                use Codecourse\Repositories\Science as Science;
                use Codecourse\Repositories\Student as Student;

                // Science class instantiated
                $science = new Science();
                $student = new Student;
                
                // $query = "SELECT * FROM tbl_students";
                // $student->viewStudentData($query);
                ?>
                    
                </div>
            </div>
        <!-- Code above -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">Footer</div>
    <!-- /.box-footer-->
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include_once '../partials/_footer.php';?>
</div>
<!-- ./wrapper -->
<?php include_once '../partials/_scripts.php';?>
</body>
</html>
