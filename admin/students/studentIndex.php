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
    Student index
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
            <a href="addStudent.php" class="btn btn-sm btn-primary"><i class="fa fa-upload"></i> Add student</a>
            <a href="searchStudent.php" class="btn btn-sm btn-primary"><i class="fa fa-search"></i> Search student</a>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                title="Remove">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
        <!-- Code below -->
            <div class="row">
                <div class="col-sm-12">
                    <?php
                    // Load student class
                    use Codecourse\Repositories\Student as Student;

                    // Create student class object

                    $student = new Student();
                    ?>
                    <!-- Action messages displayed -->
                    <?php
                    if (isset($_GET['inserted']) && $_GET['inserted'] = 1) {
                        ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <strong id="strong">SUCCESSFUL!!! Data inserted successfully!
                            </strong>
                        </div>
                    <?php
                    }
                    if (isset($_GET['updated_with_photo']) && $_GET['updated_with_photo'] = 1) {
                        ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <strong id="strong">SUCCESSFUL!!! Data updated along with photo!
                            </strong>
                        </div>
                    <?php
                    }
                    if (isset($_GET['updated_without_photo']) && $_GET['updated_without_photo'] = 1) {
                        ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <strong id="strong">SUCCESSFUL!!! Data updated without photo!
                            </strong>
                        </div>
                    <?php
                    }

                    if (isset($_GET['insertedWhithoutPhoto']) && $_GET['insertedWhithoutPhoto'] = 1) {
                        ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <strong id="strong">SUCCESSFUL!!! Data inserted without photo!
                            </strong>
                        </div>
                    <?php
                    }
                    if (isset($_GET['only-photo-deleted']) && $_GET['only-photo-deleted'] = 1) {
                        ?>
                        <div class="alert alert-info alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <strong id="strong">SUCCESSFUL!!! Only photo has been deleted!
                            </strong>
                        </div>
                    <?php
                    }
                    if (isset($_GET['data-deleted']) && $_GET['data-deleted'] = 1) {
                        ?>
                        <div class="alert alert-info alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <strong id="strong">SUCCESSFUL!!! Data has been deleted!
                            </strong>
                        </div>
                    <?php
                    }
                    ?>
                    <table class="table table-responsive table-bordered table-condensed table-striped table-sm" id="example1">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Roll</th>
                                <th>Name</th>
                                <th>class</th>
                                <th>Gro</th>
                                <th>Sti</th>
                                <th>Subjects</th>
                                <th>Fath</th>
                                <th>Moth</th>
                                <th>Gpa</th>
                                <th>Bld</th>
                                <th>Phone</th>
                                <th>Adpr</th>
                                <th>Adper</th>
                                <th>Photo</th>
                                <th>Creat</th>
                                <th>Updat</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Data selected
                            $query = 'SELECT * FROM tbl_students ORDER BY id DESC';
                            // Data loaded
                            $student->viewStudentData($query);
                            ?>
                        </tbody>
                        <tfooter>
                            <th>Id</th>
                            <th>Roll</th>
                            <th>Name</th>
                            <th>class</th>
                            <th>Gro</th>
                            <th>Sti</th>
                            <th>Subjects</th>
                            <th>Fath</th>
                            <th>Moth</th>
                            <th>Gpa</th>
                            <th>Bld</th>
                            <th>Phone</th>
                            <th>Adpr</th>
                            <th>Adper</th>
                            <th>Photo</th>
                            <th>Creat</th>
                            <th>Updat</th>
                            <th>Actions</th>
                        </tfooter>
                    </table>
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
<?php include_once '../partials/_footer.php'; ?>
</div>
<!-- ./wrapper -->
<?php include_once '../partials/_scripts.php'; ?>
</body>
</html>
