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
            <h1>Edit Profile<small>it all starts here</small></h1>
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
                        <button type="button" class="btn btn-box-tool" data-widget="remove"
                        data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <!-- Code below -->
                    <?php
                    if (isset($_GET['profileUpdated']) && isset($_GET['profileUpdated']) == 1) {
                        echo '<div class="alert alert-warning alert-dismissible " role="alert">
                        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>';
                    }
                    ?>
                    <?php
                    use Codecourse\Repositories\Profile as Profile;

                    $profile = new Profile();
                    $query = 'SELECT * FROM tbl_users WHERE userID = :id';
                    $profile->editView($query);
                    ?>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        if (isset($_POST['btn-update'])) {
                            $id = $_GET['edit_id'];
                            $firstName = trim($_POST['firstName']);
                            $lastName = trim($_POST['lastName']);
                            $userRole = trim($_POST['userRole']);
                            $email = trim($_POST['userEmail']);
                            $profile->update($id, $firstName, $lastName, $userRole, $email);
                        }
                    }
                    ?>
                    <!-- Code above -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">Footer</div><!--  -->
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
