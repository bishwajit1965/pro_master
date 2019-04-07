<?php include_once('../partials/_head.php');?>
<!-- Site wrapper -->
<div class="wrapper">
<?php include_once('../partials/_header.php'); ?>
<!-- =============================================== -->
<!-- Left side column. contains the sidebar -->
<?php include_once '../partials/_leftSidebar.php';?>
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Add science students result
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
            <h3 class="box-title">Title</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <?php
            // Vendor autoloader file added
            require_once('../app/start.php');

            // Load the Student class here
            use Codecourse\Repositories\Science as Science;
            use Codecourse\Repositories\Student as Student;
            use Codecourse\Repositories\Helpers as Helpers;

            // classes instantiated and objects created
            $science = new Science;
            $student = new Student;
            $helpers = new Helpers;

            // Search input data after checking
            if (isset($_POST['submit'])) {
                $roll = $helpers->validation($_POST['roll']);
            }
            ?>
            <!-- Submit form to search data -->
            <div class="row">
                <form action="" method="get" accept-charset="utf-8">
                    <div class="col-sm-3">    
                        <div class="form-group">
                            <input type="number" class="form-control" name="roll" min="200" max="250" 
                            placeholder="Insert roll to search">
                        </div>   
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-md btn-success">
                            <i class="fa fa-search"></i> Search</button>   
                        </div>
                    </div>
                </form>
            </div>

            <!--Upload result data to database -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['submit'])) {
                    $roll       = $helpers->validation($_POST['roll']);
                    $name       = $helpers->validation($_POST['name']);
                    $class      = $helpers->validation($_POST['class']);
                    $s_group    = $helpers->validation($_POST['s_group']);
                    $subjects   = $helpers->validation($_POST['subjects']);
                }
            }
            ?>
            <!--/Upload result data to database -->

            <!--Upload data to database form -->
            <form method="post" enctype="multipart/form-data">
                <?php
                // Data selected
                $query = "SELECT * FROM tbl_students WHERE roll = :roll";
                // Data loaded
                $science->searchByRoll($query);
                ?>
                
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-edit"></span> Upload result</button>

                    <button type="reset-data" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-refresh"></span> Reset data</button>
                    
                    <a href="scienceResultIndex.php" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-fast-backward"></span> Science result index</a>
                </div> 
            </form>
            <!--/Upload data to database form -->
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
<?php include_once('../partials/_footer.php');?>
</div>
<!-- ./wrapper -->
<?php include_once('../partials/_scripts.php');?>
</body>
</html>
