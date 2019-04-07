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
    Update student data
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
        <!-- Code below -->
            <div class="row">
                <div class="col-sm-12">
                <?php
                // Vendor autoloader file added
                require_once('../app/start.php');
                // Load the Student class here
                use Codecourse\Repositories\Student as Student;

                // Student class instantiated
                $student = new Student();
                // Update view and update data
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['submit'])) {
                        $id             = $_GET['edit_id'];
                        $roll           = $_POST['roll'];
                        $name           = $_POST['name'];
                        $mother         = $_POST['mother'];
                        $father         = $_POST['father'];
                        $gpa            = $_POST['gpa'];
                        $blood          = $_POST['blood'];
                        $phone          = $_POST['phone'];
                        $preAddress     = $_POST['preAddress'];
                        $perAddress     = $_POST['perAddress'];
                        $class          = $_POST['class'];
                        $s_group        = $_POST['s_group'];
                        $ban            = $_POST['ban'];
                        $eng            = $_POST['eng'];
                        $ict            = $_POST['ict'];
                        $optSubOne      = $_POST['optSubOne'];
                        $optSubTwo      = $_POST['optSubTwo'];
                        $optSubThree    = $_POST['optSubThree'];
                        $optSubFour     = $_POST['optSubFour'];
                        $stipend        = $_POST['stipend'];
                        $status         = $_POST['status'];
                        $session        = $_POST['session'];
                        // Image insert code
                        $file_name      = $_FILES['photo']['name'];
                        $file_size      = $_FILES['photo']['size'];
                        $permitted      = ['jpg', 'jpeg', 'png', 'gif'];
                        $file_temp      = $_FILES['photo']['tmp_name'];
                        $div            = explode('.', $file_name);
                        $file_ext       = strtolower(end($div)) ;
                        $unique_image   = substr(md5(time()), 0, 10) . '.' . $file_ext;
                        $uploaded_image = "uploads/". $unique_image;

                        // Validation of data
                        if (empty($roll)) {
                            $msg ='
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                                <strong id="strong">WARNING!!! Roll field remained blank! Fill up the field and try again!
                                </strong>
                            </div>';
                            echo $msg;
                        } elseif (empty($name)) {
                            $msg ='
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                                <strong id="strong">WARNING!!! Name field remained blank! Fill up the field and try again!
                                </strong>
                            </div>';
                            echo $msg;
                        } elseif (empty($mother)) {
                            $msg ='
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                                <strong id="strong">WARNING!!! Mother name field remained blank! Fill up the field and try again!
                                </strong>
                            </div>';
                            echo $msg;
                        } elseif (empty($father)) {
                            $msg ='
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                                <strong id="strong">WARNING!!! Father field remained blank! Fill up the field and try again!
                                </strong>
                            </div>';
                            echo $msg;
                        } elseif (empty($gpa)) {
                            $msg ='
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                                <strong id="strong">WARNING!!! Gpa field remained blank! Fill up the field and try again!
                                </strong>
                            </div>';
                            echo $msg;
                        } elseif (empty($blood)) {
                            $msg ='
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                                <strong id="strong">WARNING!!! Blood group field remained blank! Fill up the field and try again!
                                </strong>
                            </div>';
                            echo $msg;
                        } elseif (empty($phone)) {
                            $msg ='
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                                <strong id="strong">WARNING!!! Phone field remained blank! Fill up the field and try again!
                                </strong>
                            </div>';
                            echo $msg;
                        } elseif (empty($preAddress)) {
                            $msg ='
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                                <strong id="strong">WARNING!!! Present address field remained blank! Fill up the field and try again!
                                </strong>
                            </div>';
                            echo $msg;
                        } elseif (empty($perAddress)) {
                            $msg ='
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                <strong id="strong">WARNING!!! Permanent address field remained blank! Fill up the field and try again!
                                </strong>
                            </div>';
                            echo $msg;
                        } elseif (empty($file_name)) {
                            $student->updateWithoutPhoto($id, $roll, $name, $mother, $father, $gpa, $blood, $phone, $preAddress, $perAddress, $class, $s_group, $ban, $eng, $ict, $optSubOne, $optSubTwo, $optSubThree, $optSubFour, $stipend, $status, $session);
                        } elseif ($file_size > 1048567) {
                            $msg ='
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                <strong id="strong">WARNING!!! File size is too large!
                                </strong>
                            </div>';
                            echo $msg;
                        } elseif (in_array($file_ext, $permitted) === false) {
                            $msg ='
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                <strong id="strong">WARNING!!! You can upload only:-' . implode(',', $permitted).'! Fill up the field and try again!
                                </strong>
                            </div>';
                            echo $msg;
                        } elseif (!empty($file_name)) {
                            $student->update($id, $roll, $name, $mother, $father, $gpa, $blood, $phone, $preAddress, $perAddress, $uploaded_image, $class, $s_group, $ban, $eng, $ict, $optSubOne, $optSubTwo, $optSubThree, $optSubFour, $stipend, $status, $session);
                            move_uploaded_file($file_temp, $uploaded_image);
                        } else {
                        }
                    }
                }

                $query = "SELECT * FROM tbl_students WHERE id = :id";
                $student->updateView($query);
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
