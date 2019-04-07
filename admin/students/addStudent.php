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
    <h1>Add student<small>it all starts here</small></h1>
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
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
        <!-- Code below -->
        <div class="row">
            <div class="col-sm-12">
            <?php
            // Vendor autoloader file added
            require_once '../app/start.php';
            // Load the Student class here
            use Codecourse\Repositories\Student as Student;
            use Codecourse\Repositories\Helpers as Helpers;

            // Classes instantiated and objects created
            $student = new Student();
            $helpers = new Helpers();

            // Insert student data
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['submit'])) {
                    $roll = $helpers->validation($_POST['roll']);
                    $name = $helpers->validation($_POST['name']);
                    $mother = $helpers->validation($_POST['mother']);
                    $father = $helpers->validation($_POST['father']);
                    $gpa = $helpers->validation($_POST['gpa']);
                    $blood = $helpers->validation($_POST['blood']);
                    $phone = $helpers->validation($_POST['phone']);
                    $preAddress = $helpers->validation($_POST['preAddress']);
                    $perAddress = $helpers->validation($_POST['perAddress']);
                    $class = $helpers->validation($_POST['class']);
                    $s_group = $helpers->validation($_POST['s_group']);
                    $ban = $helpers->validation($_POST['ban']);
                    $eng = $helpers->validation($_POST['eng']);
                    $ict = $helpers->validation($_POST['ict']);
                    $optSubOne = $helpers->validation($_POST['optSubOne']);
                    $optSubTwo = $helpers->validation($_POST['optSubTwo']);
                    $optSubThree = $helpers->validation($_POST['optSubThree']);
                    $optSubFour = $helpers->validation($_POST['optSubFour']);
                    $stipend = $helpers->validation($_POST['stipend']);
                    $status = $helpers->validation($_POST['status']);
                    $session = $helpers->validation($_POST['session']);
                    // Image insert code
                    $file_name = $_FILES['photo']['name'];
                    $file_size = $_FILES['photo']['size'];
                    $permitted = ['jpg', 'jpeg', 'png', 'gif'];
                    $file_temp = $_FILES['photo']['tmp_name'];
                    $div = explode('.', $file_name);
                    $file_ext = strtolower(end($div));
                    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                    $uploaded_image = 'uploads/'.$unique_image;

                    // Validation of data
                    if (empty($roll)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Roll field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($name)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Name field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($mother)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Mother name field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($father)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Father field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($gpa)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Gpa field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($blood)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Blood group field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($phone)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Phone field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($preAddress)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Present address field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($perAddress)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Permanent address field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($class)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Class address field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($s_group)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Group field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($ban)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Permanent address field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($eng)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Permanent address field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($ict)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Permanent address field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($optSubOne)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Optional sobject one field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($optSubTwo)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Optional sobject two field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($optSubThree)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Optional sobject three field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($optSubFour)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Optional sobject four remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($status)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Status field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($session)) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! Session field remained blank! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (empty($file_name)) {
                        $student->storeWithoutPhoto($roll, $name, $mother, $father, $gpa, $blood, $phone, $preAddress, $perAddress, $class, $s_group, $ban, $eng, $ict, $optSubOne, $optSubTwo, $optSubThree, $optSubFour, $stipend, $status, $session);
                    } elseif ($file_size > 1048567) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! File size is too large!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (in_array($file_ext, $permitted) === false) {
                        $msg = '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <strong id= "strong">WARNING!!! You can upload only:-'.implode(',', $permitted).'! Fill up the field and try again!
                            </strong>
                        </div>';
                        echo $msg;
                    } elseif (!empty($file_name)) {
                        $student->store($roll, $name, $mother, $father, $gpa, $blood, $phone, $preAddress, $perAddress, $uploaded_image, $class, $s_group, $ban, $eng, $ict, $optSubOne, $optSubTwo, $optSubThree, $optSubFour, $stipend, $status, $session);
                        move_uploaded_file($file_temp, $uploaded_image);
                    } else {
                    }
                }
            }
            ?>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="roll">Roll</label>
                        <input type="text" class="form-control" name="roll" id="roll" placeholder="Input roll no....">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Input name....">
                    </div>
                    <div class="form-group">
                        <label for="name">Mother's name</label>
                        <input type="text" class="form-control" name="mother" id="name" placeholder="Input mother's name....">
                    </div>

                    <div class="form-group">
                        <label for="father">Father's name</label>
                        <input type="text" class="form-control" name="father" id="father" placeholder="Input father's name....">
                    </div>
                    <div class="form-group">
                        <label for="father">Class</label>
                        <select name="class" class="form-control">
                            <option value="">Select class</option>
                            <option value="Eleven">Eleven</option>
                            <option value="Twelve">Twelve</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gpa">SSC Gpa</label>
                        <input type="text" class="form-control" name="gpa" id="gpa" placeholder="Input SSC GPA....">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="Ban">Bangla</label>
                        <select name="ban" class="form-control">
                            <option value="Ban" selected>Bangla</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="eng">English</label>
                        <select name="eng" class="form-control">
                            <option value="Eng" selected>English</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ict">ICT</label>
                        <select name="ict" class="form-control">
                            <option value="Ict" selected>ICT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="optSubOne">Optional Subject One</label>
                        <select name="optSubOne" class="form-control">
                            <option value="" selected>Select opt sub one</option>
                            <option value="Phy">Physics</option>
                            <option value="Che">Chemistry</option>
                            <option value="Mat">Mathematics</option>
                            <option value="Bio">Biology</option>
                            <option value="Agr">Agriculture</option>
                            <option value="Socio">Sociology</option>
                            <option value="Civs">Civics</option>
                            <option value="Eco">Economics</option>
                            <option value="Log">Logic</option>
                            <option value="Hist">History</option>
                            <option value="I.hist">Isl History</option>
                            <option value="I.std">Isl Studies</option>
                            <option value="Acct">Accounting</option>
                            <option value="B.org">Business Organization</option>
                            <option value="Prd.Mgmt">Prd Management</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="optSubTwo">Optional Subject Two</label>
                        <select name="optSubTwo" class="form-control">
                            <option value="" selected>Select opt sub one</option>
                            <option value="Phy">Physics</option>
                            <option value="Che">Chemistry</option>
                            <option value="Mat">Mathematics</option>
                            <option value="Bio">Biology</option>
                            <option value="Agr">Agriculture</option>
                            <option value="Socio">Sociology</option>
                            <option value="Civs">Civics</option>
                            <option value="Eco">Economics</option>
                            <option value="Log">Logic</option>
                            <option value="Hist">History</option>
                            <option value="I.hist">Isl History</option>
                            <option value="I.std">Isl Studies</option>
                            <option value="Acct">Accounting</option>
                            <option value="B.org">Business Organization</option>
                            <option value="Prd.Mgmt">Prd Management</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="optSubThree">Optional Subject Three</label>
                        <select name="optSubThree" class="form-control">
                            <option value="" selected>Select opt sub one</option>
                            <option value="Phy">Physics</option>
                            <option value="Che">Chemistry</option>
                            <option value="Mat">Mathematics</option>
                            <option value="Bio">Biology</option>
                            <option value="Agr">Agriculture</option>
                            <option value="Socio">Sociology</option>
                            <option value="Civs">Civics</option>
                            <option value="Eco">Economics</option>
                            <option value="Log">Logic</option>
                            <option value="Hist">History</option>
                            <option value="I.hist">Isl History</option>
                            <option value="I.std">Isl Studies</option>
                            <option value="Acct">Accounting</option>
                            <option value="B.org">Business Organization</option>
                            <option value="Prd.Mgmt">Prd Management</option>
                        </select>
                    </div>

                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="optSubFour">Fourth Subject</label>
                        <select name="optSubFour" class="form-control">
                            <option value="" selected>Select fourth sub</option>
                            <option value="Mat">Mathematics</option>
                            <option value="Bio">Biology</option>
                            <option value="Agr">Agriculture</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="blood">Blood Group</label>
                        <input type="text" class="form-control" name="blood" id="blood" placeholder="Input blood group....">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Input phone no....">
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" name="photo" id="photo">
                    </div>
                    <div class="form-group">
                        <label for="preAddress">Present address</label>
                        <textarea name="preAddress" cols="82" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="father">Group</label>
                        <select name="s_group" class="form-control">
                            <option value="">Select group</option>
                            <option value="Science">Science</option>
                            <option value="B_studi ">Businees studies</option>
                            <option value="Humanit">Humanities</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="photo">Stipend</label>
                        <select name="stipend" class="form-control">
                            <option value="0" selected>Non-stipend</option>
                            <option value="1">Stipened</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status Regular/Casual</label>
                        <select name="status" class="form-control">
                            <option value="1" selected>Regular</option>
                            <option value="2">Casual</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="session">Session</label>
                        <select name="session" class="form-control">
                            <option value="" selected>Select session</option>
                            <option value="2017-18">2017-18</option>
                            <option value="2018-19">2018-19</option>
                            <option value="2019-20">2019-20</option>
                            <option value="2020-21">2020-21</option>
                            <option value="2021-22">2021-22</option>
                            <option value="2022-23">2022-23</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="perAddress">Permanent address</label>
                        <textarea name="perAddress" cols="82" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-sm btn-primary">
                        <span class="glyphicon glyphicon-upload"></span> Add result</button>

                        <button type="reset-data" class="btn btn-sm btn-warning">
                        <span class="glyphicon glyphicon-refresh"></span> Reset data</button>
                        <a href="studentIndex.php" class="btn btn-sm btn-primary">
                        <span class="glyphicon glyphicon-fast-backward"></span> Student index</a>
                    </div>
                </div>
            </form>
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
