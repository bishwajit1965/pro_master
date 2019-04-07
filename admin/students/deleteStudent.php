<?php include_once '../partials/_head.php'; ?>
<!-- Site wrapper -->
<div class="wrapper">
<?php include_once '../partials/_header.php'; ?>
<!-- =============================================== -->
<!-- Left side column. contains the sidebar -->
<?php include_once '../partials/_leftSidebar.php'; ?>
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Delete student
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
            <a href=""></a>
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
                    <style>
                        .blink_text {
                        animation:1s blinker linear infinite;
                        -webkit-animation:1s blinker linear infinite;
                        -moz-animation:1s blinker linear infinite;
                        /*color: #FFF;*/
                        }

                        @-moz-keyframes blinker {
                        0% { opacity: 1.0; }
                        50% { opacity: 0.0; }
                        100% { opacity: 1.0; }
                        }

                        @-webkit-keyframes blinker {
                        0% { opacity: 1.0; }
                        50% { opacity: 0.0; }
                        100% { opacity: 1.0; }
                        }

                        @keyframes blinker {
                        0% { opacity: 1.0; }
                        50% { opacity: 0.0; }
                        100% { opacity: 1.0; }
                        }
                        .message {
                            background-color: #EF2B01;
                            color: #FFF;
                            font-weight: 600;
                            border-radius: 3px;
                        }
                    </style>
                    <div class="col-sm-12">
                        <div class="message">
                            <img src="../images/blinker/download.png" alt="Blinker" class="blink_text" style="width:30px; height:30px;">
                            HELLOW THERE !!! Do you really want to delete this data!
                        </div>
                    </div>
                <?php
                // Vendor autoloader file added
                require_once '../app/start.php';
                // Load the Student class here
                use Codecourse\Repositories\Student as Student;

                // Student class instantiated
                $student = new Student();
                if (isset($_POST['delete_all_btn'])) {
                    // Id received
                    $id = $_GET['delete_id'];
                    // Function called to delete data

                    $student->delete($id);
                }

                $query = 'SELECT * FROM tbl_students WHERE id = :id';
                $student->studentDeleteView($query);
                ?>
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
<?php include_once '../partials/_footer.php'; ?>
</div>
<!-- ./wrapper -->
<?php include_once '../partials/_scripts.php';?>
</body>
</html>
