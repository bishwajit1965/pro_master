<?php

namespace Codecourse\Repositories;

// Will load database and helpers class
use Codecourse\Repositories\Database as Database;
use Codecourse\Repositories\Helpers as Helpers;
// Without PDO class and PDOException
// error will be thrown
use PDO;
use PDOException;

class Student
{
    // Database connection constructor
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }

    // Store student data
    public function store(
        $roll,
        $name,
        $mother,
        $father,
        $gpa,
        $blood,
        $phone,
        $preAddress,
        $perAddress,
        $uploaded_image,
        $class,
        $s_group,
        $ban,
        $eng,
        $ict,
        $optSubOne,
        $optSubTwo,
        $optSubThree,
        $optSubFour,
        $stipend,
        $status,
        $session
    ) {
        try {
            $stmt = $this->conn->prepare('INSERT INTO tbl_students(roll, name, mother, father, gpa, blood, phone, preAddress,  perAddress, photo, class, s_group, ban, eng, ict, optSubOne, optSubTwo, optSubThree, optSubFour, stipend, status, session) VALUES(:roll, :name, :mother, :father, :gpa, :blood, :phone, :preAddress, :perAddress,  :uploaded_image, :class, :s_group, :ban, :eng, :ict, :optSubOne, :optSubTwo, :optSubThree, :optSubFour, :stipend, :status, :session)');
            $stmt->bindParam(':roll', $roll);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':mother', $mother);
            $stmt->bindParam(':father', $father);
            $stmt->bindParam(':gpa', $gpa);
            $stmt->bindParam(':blood', $blood);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':preAddress', $preAddress);
            $stmt->bindParam(':perAddress', $perAddress);
            $stmt->bindParam(':uploaded_image', $uploaded_image);
            $stmt->bindParam(':class', $class);
            $stmt->bindParam(':s_group', $s_group);
            $stmt->bindParam(':ban', $ban);
            $stmt->bindParam(':eng', $eng);
            $stmt->bindParam(':ict', $ict);
            $stmt->bindParam(':optSubOne', $optSubOne);
            $stmt->bindParam(':optSubTwo', $optSubTwo);
            $stmt->bindParam(':optSubThree', $optSubThree);
            $stmt->bindParam(':optSubFour', $optSubFour);
            $stmt->bindParam(':stipend', $stipend);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':session', $session);
            $student = $stmt->execute();
            if ($student) {
                header('Location:studentIndex.php?inserted=1');
            } else {
                header('Location:addStudent.php?inserted=0');
            }

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Store data without photo
    public function storeWithoutPhoto(
        $roll,
        $name,
        $mother,
        $father,
        $gpa,
        $blood,
        $phone,
        $preAddress,
        $perAddress,
        $class,
        $s_group,
        $ban,
        $eng,
        $ict,
        $optSubOne,
        $optSubTwo,
        $optSubThree,
        $optSubFour,
        $stipend,
        $status,
        $session
    ) {
        try {
            $stmt = $this->conn->prepare('INSERT INTO tbl_students(roll, name, mother, father, gpa, blood, phone, preAddress,  perAddress, class, s_group, ban, eng, ict, optSubOne, optSubTwo, optSubThree, optSubFour, stipend, status, session) VALUES(:roll, :name, :mother, :father, :gpa, :blood, :phone, :preAddress, :perAddress, :class, :s_group, :ban, :eng, :ict, :optSubOne, :optSubTwo, :optSubThree, :optSubFour, :stipend, :status, :session)');
            $stmt->bindParam(':roll', $roll);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':mother', $mother);
            $stmt->bindParam(':father', $father);
            $stmt->bindParam(':gpa', $gpa);
            $stmt->bindParam(':blood', $blood);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':preAddress', $preAddress);
            $stmt->bindParam(':perAddress', $perAddress);
            $stmt->bindParam(':class', $class);
            $stmt->bindParam(':s_group', $s_group);
            $stmt->bindParam(':ban', $ban);
            $stmt->bindParam(':eng', $eng);
            $stmt->bindParam(':ict', $ict);
            $stmt->bindParam(':optSubOne', $optSubOne);
            $stmt->bindParam(':optSubTwo', $optSubTwo);
            $stmt->bindParam(':optSubThree', $optSubThree);
            $stmt->bindParam(':optSubFour', $optSubFour);
            $stmt->bindParam(':stipend', $stipend);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':session', $session);
            $student = $stmt->execute();
            if ($student) {
                header('Location:studentIndex.php?insertedWhithoutPhoto=1');
            } else {
                header('Location:addStudent.php?inserted=0');
            }

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // View student data in student index
    public function viewStudentData($query)
    {
        $fm = new Helpers();
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            while ($student = $stmt->fetch(PDO::FETCH_OBJ)) {
                ?>
<tr>
    <td><?php echo $student->id; ?></td>
    <td><?php echo $student->roll; ?></td>
    <td><?php echo $student->name; ?></td>
    <td><?php echo $student->class; ?></td>
    <td><?php echo $student->s_group; ?></td>
    <td><?php echo $student->stipend; ?></td>
    <td><?php echo $student->ban.','.$student->eng.','.'<br>'.
                $student->ict.','.$student->optSubOne.','.'<br>'.
                $student->optSubTwo.','.$student->optSubThree.','.'<br>'.
                $student->optSubFour; ?></td>
    <td><?php echo $student->mother; ?></td>
    <td><?php echo $student->father; ?></td>
    <td><?php echo $student->gpa; ?></td>
    <td><?php echo $student->blood; ?></td>
    <td><?php echo $student->phone; ?></td>
    <td><?php echo $student->preAddress; ?></td>
    <td><?php echo $student->perAddress; ?></td>
    <td>
        <?php
        if (!empty($student->photo)) {
            ?>
        <img src="<?php echo $student->photo; ?>" alt="Student's photo" style="width:50px;height:50px;">
        <?php
        } else {
            echo 'No photo';
        } ?>
    </td>
    <td><?php echo $fm->dateFormat($student->created_at); ?></td>
    <td><?php echo $fm->dateFormat($student->updated_at); ?></td>
    <td>
        <a href="editStudent.php?edit_id=<?php echo $student->id; ?>"
            class="btn btn-xs btn-block btn-primary" data-toggle="tooltip" data-placement="top" title="Edit student data!"><span class="glyphicon glyphicon-edit"></span> Edit</a>
            <a href="deleteStudent.php?delete_id=<?php echo $student->id; ?>"
                class="btn btn-xs btn-block btn-danger" data-toggle="tooltip" data-placement="top" title="Delete all student data!"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                <a href="deleteStudentPhoto.php?delete_photo_id=<?php echo $student->id; ?>" class="btn btn-xs btn-block btn-danger" data-toggle="tooltip" data-placement="top" title="Delete only student photo!"><span class="glyphicon glyphicon-trash"></span> Photo</a>
            </td>
        </tr>
        <?php
            }
        }
    }

    // Search data by id
    public function searchById($query)
    {
        try {
            $fm = new Helpers();
            $stmt = $this->conn->prepare($query);
            if (isset($_GET['roll'])) {
                $stmt->execute([':roll' => $_GET['roll']]);
            }
            $stmt->bindparam(':roll', $roll);
            if ($stmt->rowCount() > 0) {
                while ($student = $stmt->fetch(PDO::FETCH_OBJ)) {
                    ?>
        <tr>
            <td><?php echo $student->id; ?></td>
            <td><?php echo $student->roll; ?></td>
            <td><?php echo $student->name; ?></td>
            <td><?php echo $student->s_group; ?></td>
            <td><?php echo $student->class; ?></td>
            <td><?php echo $student->stipend; ?></td>
            <td><?php echo $student->subjects; ?></td>
            <td><?php echo $student->mother; ?></td>
            <td><?php echo $student->father; ?></td>
            <td><?php echo $student->gpa; ?></td>
            <td><?php echo $student->blood; ?></td>
            <td><?php echo $student->phone; ?></td>
            <td><?php echo $student->preAddress; ?></td>
            <td><?php echo $student->perAddress; ?></td>
            <td>
            <?php
            if (!empty($student->photo)) {
                ?>
                <img src="<?php echo $student->photo; ?>" alt="Student's photo" style="width:50px;height:50px;">
                <?php
            } else {
                echo 'No photo';
            } ?>
            </td>
            <td><?php echo $fm->dateFormat($student->created_at); ?></td>
            <td><?php echo $fm->dateFormat($student->updated_at); ?></td>
            <td>
                <a href="editStudent.php?edit_id=<?php echo $student->id; ?>">
                    <span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit student data!"></span>
                </a>
                <a href="deleteStudent.php?delete_id=<?php echo $student->id; ?>"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Delete student data!"></span></a>
            </td>
        </tr>
        <?php
                }
            } else {
                echo 'No data of that roll is available here!';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Update view of student data
    public function updateView($query)
    {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([':id' => $_GET['edit_id']]);
            $stmt->bindParam(':id', $id);
            if ($stmt->rowCount() > 0) {
                while ($student = $stmt->fetch(PDO::FETCH_OBJ)) {
                    ?>
        <form method="post" enctype="multipart/form-data">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="text" class="form-control" name="id" id="id" value="<?php echo $student->id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="roll">Roll</label>
                            <input type="text" class="form-control" name="roll" id="roll" value="<?php echo $student->roll; ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?php echo $student->name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Mother's name</label>
                            <input type="text" class="form-control" name="mother" id="name" value="<?php echo $student->mother; ?>">
                        </div>
                        <div class="form-group">
                            <label for="father">Father's name</label>
                            <input type="text" class="form-control" name="father" id="father" value="<?php echo $student->name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="father">Class</label>
                            <select name="class" class="form-control">
                                <option value="<?php echo $student->class; ?>"><?php echo $student->class; ?>
                                </option>
                                <option value="Eleven">Eleven</option>
                                <option value="Twelve">Twelve</option>
                                <option value="Casual">Casual</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $student->phone; ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ban">Bangla</label>
                            <input type="text" class="form-control" name="ban" id="ban" value="<?php echo $student->ban; ?>">
                        </div>
                        <div class="form-group">
                            <label for="eng">English</label>
                            <input type="text" class="form-control" name="eng" id="eng" value="<?php echo $student->eng; ?>">
                        </div>
                        <div class="form-group">
                            <label for="ict">ICT</label>
                            <input type="text" class="form-control" name="ict" id="ict" value="<?php echo $student->ict; ?>">
                        </div>
                        <div class="form-group">
                            <label for="optSubOne">Optional Subject One</label>
                            <select name="optSubOne" class="form-control">
                                <option value="<?php echo $student->optSubOne; ?>" selected><?php echo $student->optSubOne; ?></option>
                                <option value="phy">Physics</option>
                                <option value="che">Chemistry</option>
                                <option value="mat">Mathematics</option>
                                <option value="bio">Biology</option>
                                <option value="agr">Agriculture</option>
                                <option value="socio">Sociology</option>
                                <option value="civs">Civics</option>
                                <option value="eco">Economics</option>
                                <option value="log">Logic</option>
                                <option value="hist">History</option>
                                <option value="Ihist">Isl History</option>
                                <option value="Istd">Isl Studies</option>
                                <option value="acct">Accounting</option>
                                <option value="Borg">Business Organization</option>
                                <option value="PrdMgmt">Prd Management</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="optSubTwo">Optional Subject Two</label>
                            <select name="optSubTwo" class="form-control">
                                <option value="<?php echo $student->optSubTwo; ?>" selected><?php echo $student->optSubTwo; ?></option>
                                <option value="phy">Physics</option>
                                <option value="che">Chemistry</option>
                                <option value="mat">Mathematics</option>
                                <option value="bio">Biology</option>
                                <option value="agr">Agriculture</option>
                                <option value="socio">Sociology</option>
                                <option value="civs">Civics</option>
                                <option value="eco">Economics</option>
                                <option value="log">Logic</option>
                                <option value="hist">History</option>
                                <option value="Ihist">Isl History</option>
                                <option value="Istd">Isl Studies</option>
                                <option value="acct">Accounting</option>
                                <option value="Borg">Business Organization</option>
                                <option value="PrdMgmt">Prd Management</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="optSubThree">Optional Subject Three</label>
                            <select name="optSubThree" class="form-control">
                                <option value="<?php echo $student->optSubThree; ?>" selected><?php echo $student->optSubThree; ?></option>
                                <option value="phy">Physics</option>
                                <option value="che">Chemistry</option>
                                <option value="mat">Mathematics</option>
                                <option value="bio">Biology</option>
                                <option value="agr">Agriculture</option>
                                <option value="socio">Sociology</option>
                                <option value="civs">Civics</option>
                                <option value="eco">Economics</option>
                                <option value="log">Logic</option>
                                <option value="hist">History</option>
                                <option value="Ihist">Isl History</option>
                                <option value="Istd">Isl Studies</option>
                                <option value="acct">Accounting</option>
                                <option value="Borg">Business Organization</option>
                                <option value="PrdMgmt">Prd Management</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="optSubFour">Fourth Subject</label>
                            <select name="optSubFour" class="form-control">
                                <option value="<?php echo $student->optSubFour; ?>" selected><?php echo $student->optSubFour; ?></option>
                                <option value="mat">Mathematics</option>
                                <option value="bio">Biology</option>
                                <option value="agr">Agriculture</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="status">Status Regular/Casual</label>
                            <select name="status" class="form-control">
                                <option value="<?php echo $student->status; ?>" selected><?php echo $student->status; ?></option>
                                <option value="casual">Casual</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gpa">SSC Gpa</label>
                            <input type="text" class="form-control" name="gpa" id="gpa" value="<?php echo $student->gpa; ?>">
                        </div>
                        <div class="form-group">
                            <label for="blood">Blood Group</label>
                            <input type="text" class="form-control" name="blood" id="blood" value="<?php echo $student->blood; ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <?php
                            if (!empty($student->photo)) {
                                ?>
                            <img src="<?php echo $student->photo; ?>" alt="Photo" style="width:100%;height:180px; border-radius: 5px;">
                            <?php
                            } else {
                                ?>
                            <img src="../images/avatar/avatar.jpg" alt="Photo" style="width:100%;height:180px;border-radius: 5px;">
                            <?php
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="father">Group</label>
                            <select name="s_group" class="form-control">
                                <option value="<?php echo $student->s_group; ?>"><?php echo $student->s_group; ?></option>
                                <option value="science">Science</option>
                                <option value="b_studies ">Businees studies</option>
                                <option value="humanities">Humanities</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="session">Session</label>
                            <select name="session" class="form-control">
                                <option value="<?php echo $student->session; ?>" selected><?php echo $student->session; ?></option>
                                <option value="2017-18">2017-18</option>
                                <option value="2018-19">2018-19</option>
                                <option value="2019-20">2019-20</option>
                                <option value="2020-21">2020-21</option>
                                <option value="2021-22">2021-22</option>
                                <option value="2022-23">2022-23</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="preAddress">Present address</label>
                            <textarea name="preAddress" cols="82" rows="5" class="form-control"><?php echo $student->preAddress; ?></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" name="photo" id="photo">
                        </div>
                        <div class="form-group">
                            <label for="photo">Stipend</label>
                            <select name="stipend" class="form-control">
                                <option value="0" selected>Non-stipend</option>
                                <option value="1">Stipened</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="perAddress">Permanent address</label>
                            <textarea name="perAddress" cols="82" rows="5" class="form-control">
                            <?php echo $student->perAddress; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-sm btn-primary">
                    <span class="glyphicon glyphicon-edit"></span> Update student</button>
                    <button type="reset-data" class="btn btn-sm btn-warning">
                    <span class="glyphicon glyphicon-refresh"></span> Reset data</button>
                    <a href="studentIndex.php" class="btn btn-sm btn-primary">
                    <span class="glyphicon glyphicon-fast-backward"></span> Student index</a>
                </div>
            </div>
        </form>
        <?php
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Delete only student photo view
    public function deleteStudentPhotoView($query)
    {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([':id' => $_GET['delete_photo_id']]);
            $stmt->bindParam(':id', $id);
            if ($stmt->rowCount() > 0) {
                while ($student = $stmt->fetch(PDO::FETCH_OBJ)) {
                    ?>
        <form method ="post" enctype="multipart/form-data">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="text" class="form-control" name="id" id="id" value="<?php echo $student->id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="roll">Roll</label>
                            <input type="text" class="form-control" name="roll" id="roll" value="<?php echo $student->roll; ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?php echo $student->name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Mother's name</label>
                            <input type="text" class="form-control" name="mother" id="name" value="<?php echo $student->mother; ?>">
                        </div>
                        <div class="form-group">
                            <label for="father">Father's name</label>
                            <input type="text" class="form-control" name="father" id="father" value="<?php echo $student->name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="father">Class</label>
                            <select name="class" class="form-control">
                                <option value="<?php echo $student->class; ?>"><?php echo $student->class; ?>
                                </option>
                                <option value="Eleven">Eleven</option>
                                <option value="Twelve">Twelve</option>
                                <option value="Casual">Casual</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $student->phone; ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ban">Bangla</label>
                            <input type="text" class="form-control" name="ban" id="ban" value="<?php echo $student->ban; ?>">
                        </div>
                        <div class="form-group">
                            <label for="eng">English</label>
                            <input type="text" class="form-control" name="eng" id="eng" value="<?php echo $student->eng; ?>">
                        </div>
                        <div class="form-group">
                            <label for="ict">ICT</label>
                            <input type="text" class="form-control" name="ict" id="ict" value="<?php echo $student->ict; ?>">
                        </div>
                        <div class="form-group">
                            <label for="optSubOne">Optional Subject One</label>
                            <select name="optSubOne" class="form-control">
                                <option value="<?php echo $student->optSubOne; ?>" selected><?php echo $student->optSubOne; ?></option>
                                <option value="phy">Physics</option>
                                <option value="che">Chemistry</option>
                                <option value="mat">Mathematics</option>
                                <option value="bio">Biology</option>
                                <option value="agr">Agriculture</option>
                                <option value="socio">Sociology</option>
                                <option value="civs">Civics</option>
                                <option value="eco">Economics</option>
                                <option value="log">Logic</option>
                                <option value="hist">History</option>
                                <option value="Ihist">Isl History</option>
                                <option value="Istd">Isl Studies</option>
                                <option value="acct">Accounting</option>
                                <option value="Borg">Business Organization</option>
                                <option value="PrdMgmt">Prd Management</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="optSubTwo">Optional Subject Two</label>
                            <select name="optSubTwo" class="form-control">
                                <option value="<?php echo $student->optSubTwo; ?>" selected><?php echo $student->optSubTwo; ?></option>
                                <option value="phy">Physics</option>
                                <option value="che">Chemistry</option>
                                <option value="mat">Mathematics</option>
                                <option value="bio">Biology</option>
                                <option value="agr">Agriculture</option>
                                <option value="socio">Sociology</option>
                                <option value="civs">Civics</option>
                                <option value="eco">Economics</option>
                                <option value="log">Logic</option>
                                <option value="hist">History</option>
                                <option value="Ihist">Isl History</option>
                                <option value="Istd">Isl Studies</option>
                                <option value="acct">Accounting</option>
                                <option value="Borg">Business Organization</option>
                                <option value="PrdMgmt">Prd Management</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="optSubThree">Optional Subject Three</label>
                            <select name="optSubThree" class="form-control">
                                <option value="<?php echo $student->optSubThree; ?>" selected>
                                <?php echo $student->optSubThree; ?></option>
                                <option value="phy">Physics</option>
                                <option value="che">Chemistry</option>
                                <option value="mat">Mathematics</option>
                                <option value="bio">Biology</option>
                                <option value="agr">Agriculture</option>
                                <option value="socio">Sociology</option>
                                <option value="civs">Civics</option>
                                <option value="eco">Economics</option>
                                <option value="log">Logic</option>
                                <option value="hist">History</option>
                                <option value="Ihist">Isl History</option>
                                <option value="Istd">Isl Studies</option>
                                <option value="acct">Accounting</option>
                                <option value="Borg">Business Organization</option>
                                <option value="PrdMgmt">Prd Management</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="optSubFour">Fourth Subject</label>
                            <select name="optSubFour" class="form-control">
                                <option value="<?php echo $student->optSubFour; ?>" selected>
                                <?php echo $student->optSubFour; ?></option>
                                <option value="mat">Mathematics</option>
                                <option value="bio">Biology</option>
                                <option value="agr">Agriculture</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="status">Status Regular/Casual</label>
                            <select name="status" class="form-control">
                                <option value="<?php echo $student->status; ?>" selected><?php echo $student->status; ?></option>
                                <option value="casual">Casual</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gpa">SSC Gpa</label>
                            <input type="text" class="form-control" name="gpa" id="gpa" value="<?php echo $student->gpa; ?>">
                        </div>
                        <div class="form-group">
                            <label for="blood">Blood Group</label>
                            <input type="text" class="form-control" name="blood" id="blood" value="<?php echo $student->blood; ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <?php
                            if (!empty($student->photo)) {
                                ?>
                            <img src="<?php echo $student->photo; ?>" alt="Photo" style="width:100%;height:180px; border-radius: 5px;">
                            <?php
                            } else {
                                ?>
                            <img src="../images/avatar/avatar.jpg" alt="Photo" style="width:100%;height:180px;border-radius: 5px;">
                            <?php
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="father">Group</label>
                            <select name="s_group" class="form-control">
                                <option value="<?php echo $student->s_group; ?>"><?php echo $student->s_group; ?></option>
                                <option value="science">Science</option>
                                <option value="b_studies ">Businees studies</option>
                                <option value="humanities">Humanities</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="session">Session</label>
                            <select name="session" class="form-control">
                                <option value="<?php echo $student->session; ?>" selected><?php echo $student->session; ?></option>
                                <option value="2017-18">2017-18</option>
                                <option value="2018-19">2018-19</option>
                                <option value="2019-20">2019-20</option>
                                <option value="2020-21">2020-21</option>
                                <option value="2021-22">2021-22</option>
                                <option value="2022-23">2022-23</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="preAddress">Present address</label>
                            <textarea name="preAddress" cols="82" rows="5" class="form-control"><?php echo $student->preAddress; ?></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" name="photo" id="photo">
                        </div>
                        <div class="form-group">
                            <label for="photo">Stipend</label>
                            <select name="stipend" class="form-control">
                                <option value="0" selected>Non-stipend</option>
                                <option value="1">Stipened</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="perAddress">Permanent address</label>
                            <textarea name="perAddress" cols="82" rows="5" class="form-control"><?php echo $student->perAddress; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <button type="submit" name="delete_photo_btn" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete only student photo !"><span class="glyphicon glyphicon-trash"></span> Delete photo</button>
                    <button type="reset-data" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-refresh"></span> Reset data</button>
                    <a href="studentIndex.php" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-fast-backward"></span> Student index</a>
                </div>
            </div>
        </form>
        <?php
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Delete student photo only
    public function photoDelete($id)
    {
        // Select uploaded photo to delete from uploads
        $stmt = $this->conn->prepare('SELECT photo FROM tbl_students WHERE id = :id');
        $stmt->execute([':id' => $_GET['delete_photo_id']]);
        $stmt->bindparam(':id', $id);
        while ($photo_data = $stmt->fetch(PDO::FETCH_OBJ)) {
            $del_photo = $photo_data->photo;
            unlink($del_photo);
        }
        // Delete photo from database
        $stmt = $this->conn->prepare('UPDATE tbl_students SET photo = null WHERE id = :id');
        $stmt->bindparam(':id', $id);
        $photo_deleted = $stmt->execute();
        if ($photo_deleted) {
            header('Location: studentIndex.php?only-photo-deleted=1');
        } else {
            header('Location: deleteStudentPhoto.php?only-delete-errror');
        }
    }

    // Student data will be updated in database with photo
    public function update(
        $id,
        $roll,
        $name,
        $mother,
        $father,
        $gpa,
        $blood,
        $phone,
        $preAddress,
        $perAddress,
        $uploaded_image,
        $class,
        $s_group,
        $ban,
        $eng,
        $ict,
        $optSubOne,
        $optSubTwo,
        $optSubThree,
        $optSubFour,
        $stipend,
        $status,
        $session
    ) {
        // Deletes/unlinks photo from uploads folder first
        $stmt = $this->conn->prepare('SELECT photo FROM tbl_students WHERE id = :id');
        $stmt->execute([':id' => $_GET['edit_id']]);
        $stmt->bindparam(':id', $id);
        while ($photo_data = $stmt->fetch(PDO::FETCH_OBJ)) {
            $del_photo = $photo_data->photo;
            unlink($del_photo);
        }
        try {
            $stmt = $this->conn->prepare('UPDATE tbl_students SET
        id          = :id,
        roll        = :roll,
        name        = :name,
        mother      = :mother,
        father      = :father,
        gpa         = :gpa,
        blood       = :blood,
        phone       = :phone,
        preAddress  = :preAddress,
        perAddress  = :perAddress,
        photo       = :uploaded_image,
        class       = :class,
        s_group     = :s_group,
        ban         = :ban,
        eng         = :eng,
        ict         = :ict,
        optSubOne   = :optSubOne,
        optSubTwo   = :optSubTwo,
        optSubThree = :optSubThree,
        optSubFour  = :optSubFour,
        stipend     = :stipend,
        status      = :status,
        session     = :session
        WHERE id    = :id');
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':roll', $roll);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':mother', $mother);
            $stmt->bindParam(':father', $father);
            $stmt->bindParam(':gpa', $gpa);
            $stmt->bindParam(':blood', $blood);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':preAddress', $preAddress);
            $stmt->bindParam(':perAddress', $perAddress);
            $stmt->bindparam(':uploaded_image', $uploaded_image);
            $stmt->bindParam(':class', $class);
            $stmt->bindParam(':s_group', $s_group);
            $stmt->bindParam(':ban', $ban);
            $stmt->bindParam(':eng', $eng);
            $stmt->bindParam(':ict', $ict);
            $stmt->bindParam(':optSubOne', $optSubOne);
            $stmt->bindParam(':optSubTwo', $optSubTwo);
            $stmt->bindParam(':optSubThree', $optSubThree);
            $stmt->bindParam(':optSubFour', $optSubFour);
            $stmt->bindParam(':stipend', $stipend);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':session', $session);
            $updatedStudent = $stmt->execute();
            if ($updatedStudent) {
                header('Location:studentIndex.php?updated_with_photo=1');
            } else {
                header('Location:editStudent.php?updated_with_photo=0');
            }

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Student data will be updated without photo
    public function updateWithoutPhoto($id, $roll, $name, $mother, $father, $gpa, $blood, $phone, $preAddress, $perAddress, $class, $s_group, $ban, $eng, $ict, $optSubOne, $optSubTwo, $optSubThree, $optSubFour, $stipend, $status, $session)
    {
        try {
            $stmt = $this->conn->prepare('UPDATE tbl_students SET
        id          = :id,
        roll        = :roll,
        name        = :name,
        mother      = :mother,
        father      = :father,
        gpa         = :gpa,
        blood       = :blood,
        phone       = :phone,
        preAddress  = :preAddress,
        perAddress  = :perAddress,
        class       = :class,
        s_group     = :s_group,
        ban         = :ban,
        eng         = :eng,
        ict         = :ict,
        optSubOne   = :optSubOne,
        optSubTwo   = :optSubTwo,
        optSubThree = :optSubThree,
        optSubFour  = :optSubFour,
        stipend     = :stipend,
        status      = :status,
        session     = :session
        WHERE id = :id
        ');
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':roll', $roll);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':mother', $mother);
            $stmt->bindParam(':father', $father);
            $stmt->bindParam(':gpa', $gpa);
            $stmt->bindParam(':blood', $blood);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':preAddress', $preAddress);
            $stmt->bindParam(':perAddress', $perAddress);
            $stmt->bindParam(':class', $class);
            $stmt->bindParam(':s_group', $s_group);
            $stmt->bindParam(':ban', $ban);
            $stmt->bindParam(':eng', $eng);
            $stmt->bindParam(':ict', $ict);
            $stmt->bindParam(':optSubOne', $optSubOne);
            $stmt->bindParam(':optSubTwo', $optSubTwo);
            $stmt->bindParam(':optSubThree', $optSubThree);
            $stmt->bindParam(':optSubFour', $optSubFour);
            $stmt->bindParam(':stipend', $stipend);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':session', $session);
            $updatedStudent = $stmt->execute();
            if ($updatedStudent) {
                header('Location:studentIndex.php?updated_without_photo=1');
            } else {
                header('Location:editStudent.php?updated_without_photo=0');
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Delete view of student data
    public function studentDeleteView($query)
    {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([':id' => $_GET['delete_id']]);
            $stmt->bindParam(':id', $id);
            if ($stmt->rowCount() > 0) {
                while ($student = $stmt->fetch(PDO::FETCH_OBJ)) {
                    ?>
        <form method="post" enctype="multipart/form-data">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="text" class="form-control" name="id" id="id" value="<?php echo $student->id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="roll">Roll</label>
                            <input type="text" class="form-control" name="roll" id="roll" value="<?php echo $student->roll; ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?php echo $student->name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Mother's name</label>
                            <input type="text" class="form-control" name="mother" id="name" value="<?php echo $student->mother; ?>">
                        </div>
                        <div class="form-group">
                            <label for="father">Father's name</label>
                            <input type="text" class="form-control" name="father" id="father" value="<?php echo $student->name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="father">Class</label>
                            <select name="class" class="form-control">
                                <option value="<?php echo $student->class; ?>"><?php echo $student->class; ?>
                                </option>
                                <option value="Eleven">Eleven</option>
                                <option value="Twelve">Twelve</option>
                                <option value="Casual">Casual</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $student->phone; ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ban">Bangla</label>
                            <input type="text" class="form-control" name="ban" id="ban" value="<?php echo $student->ban; ?>">
                        </div>
                        <div class="form-group">
                            <label for="eng">English</label>
                            <input type="text" class="form-control" name="eng" id="eng" value="<?php echo $student->eng; ?>">
                        </div>
                        <div class="form-group">
                            <label for="ict">ICT</label>
                            <input type="text" class="form-control" name="ict" id="ict" value="<?php echo $student->ict; ?>">
                        </div>
                        <div class="form-group">
                            <label for="optSubOne">Optional Subject One</label>
                            <select name="optSubOne" class="form-control">
                                <option value="<?php echo $student->optSubOne; ?>" selected><?php echo $student->optSubOne; ?></option>
                                <option value="phy">Physics</option>
                                <option value="che">Chemistry</option>
                                <option value="mat">Mathematics</option>
                                <option value="bio">Biology</option>
                                <option value="agr">Agriculture</option>
                                <option value="socio">Sociology</option>
                                <option value="civs">Civics</option>
                                <option value="eco">Economics</option>
                                <option value="log">Logic</option>
                                <option value="hist">History</option>
                                <option value="Ihist">Isl History</option>
                                <option value="Istd">Isl Studies</option>
                                <option value="acct">Accounting</option>
                                <option value="Borg">Business Organization</option>
                                <option value="PrdMgmt">Prd Management</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="optSubTwo">Optional Subject Two</label>
                            <select name="optSubTwo" class="form-control">
                                <option value="<?php echo $student->optSubTwo; ?>" selected><?php echo $student->optSubTwo; ?></option>
                                <option value="phy">Physics</option>
                                <option value="che">Chemistry</option>
                                <option value="mat">Mathematics</option>
                                <option value="bio">Biology</option>
                                <option value="agr">Agriculture</option>
                                <option value="socio">Sociology</option>
                                <option value="civs">Civics</option>
                                <option value="eco">Economics</option>
                                <option value="log">Logic</option>
                                <option value="hist">History</option>
                                <option value="Ihist">Isl History</option>
                                <option value="Istd">Isl Studies</option>
                                <option value="acct">Accounting</option>
                                <option value="Borg">Business Organization</option>
                                <option value="PrdMgmt">Prd Management</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="optSubThree">Optional Subject Three</label>
                            <select name="optSubThree" class="form-control">
                                <option value="<?php echo $student->optSubThree; ?>" selected><?php echo $student->optSubThree; ?></option>
                                <option value="phy">Physics</option>
                                <option value="che">Chemistry</option>
                                <option value="mat">Mathematics</option>
                                <option value="bio">Biology</option>
                                <option value="agr">Agriculture</option>
                                <option value="socio">Sociology</option>
                                <option value="civs">Civics</option>
                                <option value="eco">Economics</option>
                                <option value="log">Logic</option>
                                <option value="hist">History</option>
                                <option value="Ihist">Isl History</option>
                                <option value="Istd">Isl Studies</option>
                                <option value="acct">Accounting</option>
                                <option value="Borg">Business Organization</option>
                                <option value="PrdMgmt">Prd Management</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="optSubFour">Fourth Subject</label>
                            <select name="optSubFour" class="form-control">
                                <option value="<?php echo $student->optSubFour; ?>" selected><?php echo $student->optSubFour; ?></option>
                                <option value="mat">Mathematics</option>
                                <option value="bio">Biology</option>
                                <option value="agr">Agriculture</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="status">Status Regular/Casual</label>
                            <select name="status" class="form-control">
                                <option value="<?php echo $student->status; ?>" selected><?php echo $student->status; ?></option>
                                <option value="casual">Casual</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gpa">SSC Gpa</label>
                            <input type="text" class="form-control" name="gpa" id="gpa" value="<?php echo $student->gpa; ?>">
                        </div>
                        <div class="form-group">
                            <label for="blood">Blood Group</label>
                            <input type="text" class="form-control" name="blood" id="blood" value="<?php echo $student->blood; ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <?php if (!empty($student->photo)) {
                        ?>
                            <img src="<?php echo $student->photo; ?>" alt="Photo" style="width:100%;height:180px; border-radius: 5px;">
                            <?php
                    } else {
                        ?>
                            <img src="../images/avatar/avatar.jpg" alt="Photo" style="width:100%;height:180px;border-radius: 5px;">
                            <?php
                    } ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="father">Group</label>
                            <select name="s_group" class="form-control">
                                <option value="<?php echo $student->s_group; ?>"><?php echo $student->s_group; ?></option>
                                <option value="science">Science</option>
                                <option value="b_studies ">Businees studies</option>
                                <option value="humanities">Humanities</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="session">Session</label>
                            <select name="session" class="form-control">
                                <option value="<?php echo $student->session; ?>" selected><?php echo $student->session; ?></option>
                                <option value="2017-18">2017-18</option>
                                <option value="2018-19">2018-19</option>
                                <option value="2019-20">2019-20</option>
                                <option value="2020-21">2020-21</option>
                                <option value="2021-22">2021-22</option>
                                <option value="2022-23">2022-23</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="preAddress">Present address</label>
                            <textarea name="preAddress" cols="82" rows="5" class="form-control"><?php echo $student->preAddress; ?></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" name="photo" id="photo">
                        </div>
                        <div class="form-group">
                            <label for="photo">Stipend</label>
                            <select name="stipend" class="form-control">
                                <option value="0" selected>Non-stipend</option>
                                <option value="1">Stipened</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="perAddress">Permanent address</label>
                            <textarea name="perAddress" cols="82" rows="5" class="form-control"><?php echo $student->perAddress; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <button type="submit" name="delete_all_btn" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Will delete all id related student data!" onclick ="return confirm('Are you sure of deleting this data !!!');"><span class="glyphicon glyphicon-trash"></span> Delete all data</button>
                    <button type="reset-data" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-refresh"></span> Reset data</button>
                    <a href="studentIndex.php" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-fast-backward"></span> Student index</a>
                </div>
            </div>
        </form>
        <?php
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Delete student from database
    public function delete($id)
    {
        //Select image from db to delete from folder
        $query = $this->conn->prepare('SELECT photo FROM tbl_students WHERE id =:id');
        $query->execute(array(':id' => $_GET['delete_id']));
        $query->bindparam(':id', $id);
        while ($ImgData = $query->fetch(PDO::FETCH_OBJ)) {
            $delImage = $ImgData->photo;
            unlink($delImage);
        }
        // Delete image and data from database
        $stmt = $this->conn->prepare('DELETE FROM tbl_students WHERE id=:id');
        $stmt->bindparam(':id', $id);
        $deletedData = $stmt->execute();
        if ($deletedData) {
            header('Location: studentIndex.php?data-deleted=1');
        } else {
            header('Location:deletestudent.php?data-deleted=0');
        }

        return true;
    }

    // View student data in student index
    public function viewDataForResultPreparation($query)
    {
        $fm = new Helpers();
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            while ($student = $stmt->fetch(PDO::FETCH_OBJ)) {
                ?>
        <tr>
            <td><?php echo $student->id; ?></td>
            <td><?php echo $student->roll; ?></td>
            <td><?php echo $student->name; ?></td>
            <td><?php echo $student->class; ?></td>
            <td><?php echo $student->s_group; ?></td>
            <td><?php echo $student->stipend; ?></td>
            <td><?php echo $student->subjects; ?></td>
            <td><?php echo $student->mother; ?></td>
            <td><?php echo $student->father; ?></td>
            <td><?php echo $student->gpa; ?></td>
            <td><?php echo $student->blood; ?></td>
            <td><?php echo $student->phone; ?></td>
            <td><?php echo $student->preAddress; ?></td>
            <td><?php echo $student->perAddress; ?></td>
            <td>
                <?php if (!empty($student->photo)) {
                    ?>
                <img src="<?php echo $student->photo; ?>" alt="Student's photo" style="width:50px;height:50px;">
                <?php
                } else {
                    echo 'No photo';
                } ?>
            </td>
            <td><?php echo $fm->dateFormat($student->created_at); ?></td>
            <td><?php echo $fm->dateFormat($student->updated_at); ?></td>
            <!-- <td>
                <a href="editStudent.php?edit_id=<?php echo $student->id; ?>"
                    class="btn btn-xs btn-block btn-primary" data-toggle="tooltip" data-placement="top" title="Edit student data!"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                    <a href="deleteStudent.php?delete_id=<?php echo $student->id; ?>"
                        class="btn btn-xs btn-block btn-danger" data-toggle="tooltip" data-placement="top" title="Delete all student data!"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                        <a href="deleteStudentPhoto.php?delete_photo_id=<?php echo $student->id; ?>" class="btn btn-xs btn-block btn-danger" data-toggle="tooltip" data-placement="top" title="Delete only student photo!"><span class="glyphicon glyphicon-trash"></span> Photo</a>
                    </td>     -->
                </tr>
                <?php
            }
        }
    }
}
