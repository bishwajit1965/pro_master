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
            <h1>Admin index page<small>it all starts here</small></h1>
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
                    <h3 class="box-title">List of all users</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i>
                        </button>

                        <button type="button" class="btn btn-box-tool" data-widget="remove"
                        data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <!-- Code below -->
                    <?php
                    if (isset($_GET['adminUpdated']) && isset($_GET['adminUpdated']) == 1) {
                        echo '<div class="alert alert-success alert-dismissible " role="alert">
                        <strong> WOW !</strong> Admin data updated successfully.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>';
                    }
                    if (isset($_GET['adminDeleted']) && isset($_GET['adminDeleted']) == 1) {
                        echo '<div class="alert alert-success alert-dismissible " role="alert">
                        <strong> SUCCESSFUL !</strong> Admin data deleted successfully.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>';
                    }
                    ?>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>UserName</th>
                                <th>userEmail</th>
                                <th>User Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            use Codecourse\Repositories\Profile as Profile;

                            $admin = new Profile();

                            $query = 'SELECT * FROM tbl_users';
                            $admin->index($query);
                            ?>
                        </tbody>
                        <tfooter>
                            <tr>
                                <th>Id</th>
                                <th>UserName</th>
                                <th>userEmail</th>
                                <th>User Role</th>
                                <th>Actions</th>
                            </tr>
                        </tfooter>
                    </table>
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
