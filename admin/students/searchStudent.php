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
    Search student
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
                    <?php
                    if (isset($_POST['submit'])) {
                        $roll = trim($_POST['roll']);
                    }

                    ?>
                    <form action="" method="get" accept-charset="utf-8">
                       <input type="text" name="roll" value="" placeholder="Insert roll to search">
                       <button type="submit" name="submit" class="btn btn-sm btn-success"><i class="fa fa-search"></i> Search</button>
                    </form>

                    <table class="table-responsive table-bordered table-condensed table-striped table-sm" id="example">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Roll</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Father</th>
                                <th>Mother</th>
                                <th>Gpa</th>
                                <th>Blood</th>
                                <th>Phone</th>
                                <th>Adpr</th>
                                <th>Adper</th>
                                <th>Photo</th>
                                <th>Creat</th>
                                <th>Updat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Data selected
                            $query = "SELECT * FROM tbl_students WHERE roll = :roll";
                            // Data loaded
                            $student->searchById($query);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <!-- Code above -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div>
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
