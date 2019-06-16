<?php

namespace Codecourse\Repositories;

// Will load database and helpers class
use Codecourse\Repositories\Database as Database;
use Codecourse\Repositories\Helpers as Helpers;
// Without PDO class and
// PDOException error will be thrown
use PDO;
use PDOException;

class Science
{
    // Database connection constructor
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }

    // upload science student marks
    public function storeMarks(
        $roll,
        $name,
        $class,
        $group,
        $subject,
        $uploaded_image,
        $banCQ,
        $banMCQ,
        $banTut,
        $banAtt,
        $eng,
        $ictCQ,
        $ictMCQ,
        $ictTut,
        $ictAtt,
        $phyCQ,
        $phyMCQ,
        $phyTut,
        $phyAtt,
        $cheCQ,
        $cheMCQ,
        $cheTut,
        $cheAtt,
        $mathCQ,
        $mathMCQ,
        $mathTut,
        $mathAtt
    ) {
    }

    // Search data by roll
    public function searchByRoll($query)
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
<div class="row">
    <!-- LEFT PART BEGINS-->
    <div class="col-sm-6">
        <div class="row">
            <!-- Column one begins-->
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="roll">Roll</label>
                    <input type="text" class="form-control" name="roll" id="roll"
                        value="<?php echo $student->roll; ?>">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name"
                        value="<?php echo $student->name; ?>">
                </div>
                <div class="form-group">
                    <label for="father">Class</label>
                    <select name="class" class="form-control">
                        <option
                            value="<?php echo $student->class; ?>">
                            <?php echo $student->class; ?>
                        </option>
                        <option value="Eleven">Eleven</option>
                        <option value="Twelve">Twelve</option>
                        <option value="Casual">Casual</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="father">Group</label>
                    <select name="s_group" class="form-control">
                        <option
                            value="<?php echo $student->s_group; ?>">
                            <?php echo $student->s_group; ?>
                        </option>
                        <option value="science">Science</option>
                        <option value="b_studies ">Businees studies</option>
                        <option value="humanities">Humanities</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exam">Examination</label>
                    <select name="exam" class="form-control">
                        <option value="">Select Exam</option>
                        <option value="Half-yearly">Half Yearly</option>
                        <option value="Annual">Annual</option>
                        <option value="Pretest">Pretest</option>
                        <option value="Test">Test</option>
                        option
                    </select>
                </div>
                <div class="form-group">
                    <label for="stipend">Stipend</label>
                    <select name="stipend" class="form-control">
                        <option
                            value="<?php echo $student->stipend; ?>"
                            selected>
                            <?php
                                    if ($student->stipend == 0) {
                                        echo 'Non-stipened';
                                    }
                    if ($student->stipend == 1) {
                        echo 'Stipened';
                    } ?>
                        </option>
                        <?php
                                            if ($student->stipend == 0) {
                                                ?>
                        <option value="1">Stipened</option>
                        <?php
                                            }
                    if ($student->stipend == 1) {
                        ?>
                        <option value="0">Non-stipend</option>
                        <?php
                    } ?>
                    </select>
                </div>
            </div>
            <!-- Column one ends -->


            <!-- Column two begins -->
            <div class="col-sm-6">
                <!-- Compulsory subjects -->
                <?php
                                if ($student->eng == true) {
                                    ?>
                <div class="form-group">
                    <label for="eng">English</label>
                    <input type="text" class="form-control" name="eng" id="eng" placeholder="English...">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="engTut">English Tut</label>
                            <input type="text" class="form-control" name="engTut" id="engTut"
                                placeholder="English tutorial">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="engAttend">English Attend</label>
                            <input type="text" class="form-control" name="engAttend" id="engAttend"
                                placeholder="English attendance">
                        </div>
                    </div>
                </div>
                <?php
                                }
                    if ($student->ban == true) {
                        ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ban">Bangla CQ</label>
                            <input type="text" class="form-control" name="banCq" id="banCq" placeholder="B-CQ">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="banMcq">Bangla MCQ</label>
                            <input type="text" class="form-control" name="banMcq" id="banMcq" placeholder="B-MCQ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="banTut">Bangla Tut</label>
                            <input type="text" class="form-control" name="banTut" id="banTut" placeholder="B-TUT">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="banAtten">Bangla Attend</label>
                            <input type="text" class="form-control" name="banAtten" id="banAtten" placeholder="B-Atten">
                        </div>
                    </div>
                </div>
                <?php
                    }
                    if ($student->ict == true) {
                        ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="Ict">ICT CQ</label>
                            <input type="text" class="form-control" name="IctCq" id="IctCq" placeholder="ICT-CQ">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="IctMcq">ICT MCQ</label>
                            <input type="text" class="form-control" name="IctMcq" id="IctMcq" placeholder="ICT-MCQ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="IctTut">ICT Tut</label>
                            <input type="text" class="form-control" name="IctTut" id="IctTut" placeholder="ICT-TUT">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="IctAtten">ICT Attend</label>
                            <input type="text" class="form-control" name="IctAtten" id="IctAtten"
                                placeholder="ICT-Atten">
                        </div>
                    </div>
                </div>
                <?php
                    } ?>
            </div>
            <!-- /Column two ends -->
        </div>
    </div>
    <!-- /LEFT PART ENDS-->

    <!-- RIGHT PART BEGINS -->
    <div class="col-sm-6">
        <div class="row">
            <!-- ====================COLUMN THREE BEGINS=================== -->
            <div class="col-sm-6">
                <?php
                if ($student->optSubOne == 'Phy') {
                    ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="PhyCq">Phy CQ</label>
                            <input type="text" class="form-control" name="PhyCq" id="PhyCq" placeholder="Phy-CQ">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="PhyMcq">Phy MCQ</label>
                            <input type="text" class="form-control" name="PhyMcq" id="PhyMcq" placeholder="B-MCQ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="PhyTut">Phy Tut</label>
                            <input type="text" class="form-control" name="PhyTut" id="PhyTut" placeholder="Phy-TUT">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="PhyAtten">Phy Atte</label>
                            <input type="text" class="form-control" name="PhyAtten" id="PhyAtten"
                                placeholder="Phy-Atten">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="PhyPrac">Phy prac</label>
                            <input type="text" class="form-control" name="PhyPrac" id="PhyPrac" placeholder="Phy-prac">
                        </div>
                    </div>
                </div>
                <?php
                }
                    if ($student->optSubTwo == 'Che') {
                        ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="CheCq">Che CQ</label>
                            <input type="text" class="form-control" name="CheCq" id="CheCq" placeholder="Che-CQ">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="CheMcq">Che MCQ</label>
                            <input type="text" class="form-control" name="CheMcq" id="CheMcq" placeholder="Che-MCQ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="CheTut">Che Tut</label>
                            <input type="text" class="form-control" name="CheTut" id="CheTut" placeholder="Che-TUT">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="CheAtten">Che Atte</label>
                            <input type="text" class="form-control" name="CheAtten" id="CheAtten"
                                placeholder="Che-Atten">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ChePrac">Che pract</label>
                            <input type="text" class="form-control" name="ChePrac" id="ChePrac" placeholder="ChePrac">
                        </div>
                    </div>
                </div>
                <?php
                    }
                    if ($student->optSubThree == 'Mat') {
                        ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="CheCq">Math CQ</label>
                            <input type="text" class="form-control" name="CheCq" id="CheCq" placeholder="Mat-CQ">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="CheMcq">Math MCQ</label>
                            <input type="text" class="form-control" name="CheMcq" id="CheMcq" placeholder="Mat-MCQ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="CheTut">Math Tut</label>
                            <input type="text" class="form-control" name="CheTut" id="CheTut" placeholder="Mat-TUT">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="matTut">Mat Atte</label>
                            <input type="text" class="form-control" name="matTut" id="matTut" placeholder="matTut">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="matPrac">Mat prac</label>
                            <input type="text" class="form-control" name="matPrac" id="matPrac" placeholder="matPrac">
                        </div>
                    </div>
                </div>
                <?php
                    }
                    if ($student->optSubThree == 'Bio') {
                        ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="BioCq">Bio CQ</label>
                            <input type="text" class="form-control" name="BioCq" id="BioCq" placeholder="Bio-CQ">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="BioMcq">Bio MCQ</label>
                            <input type="text" class="form-control" name="BioMcq" id="BioMcq" placeholder="B-MCQ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="BioTut">Bio Tut</label>
                            <input type="text" class="form-control" name="BioTut" id="BioTut" placeholder="Bio-TUT">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="CheAtten">Bio Attend</label>
                            <input type="text" class="form-control" name="CheAtten" id="CheAtten"
                                placeholder="Bio-Atten">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="bioPrac">Bio prac</label>
                            <input type="text" class="form-control" name="bioPrac" id="bioPrac" placeholder="bioPrac">
                        </div>
                    </div>
                </div>
                <?php
                    } ?>
            </div>
            <!-- ======================COLUMN THREE ENDS ==========================-->

            <!-- COLUMN FOUR STARTS -->
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <?php if (!empty($student->photo)) {
                        ?>
                    <img src="../students/<?php echo $student->photo; ?>"
                        alt="Photo" style="width:100%;height:180px; border-radius: 5px;">
                    <?php
                    } else {
                        ?>
                    <img src="../images/avatar/avatar.jpg" alt="Photo" style="width:100%;
                                        height:180px;border-radius: 5px;">
                    <?php
                    } ?>
                </div>
                <!-- Fourth subject -->
                <?php
                if ($student->optSubFour == 'Bio') {
                    ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="BioCq">Bio CQ</label>
                            <input type="text" class="form-control" name="BioCq" id="BioCq" placeholder="Bio-CQ">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="BioMcq">Bio MCQ</label>
                            <input type="text" class="form-control" name="BioMcq" id="BioMcq" placeholder="Bio-MCQ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="BioTut">Bio Tut</label>
                            <input type="text" class="form-control" name="BioTut" id="BioTut" placeholder="Bio-TUT">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="BioAtten">Bio Atte</label>
                            <input type="text" class="form-control" name="BioAtten" id="BioAtten"
                                placeholder="Bio-Atten">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="bioPrac">Bio prac</label>
                            <input type="text" class="form-control" name="bioPrac" id="bioPrac" placeholder="bioPrac">
                        </div>
                    </div>
                </div>
                <?php
                }
                    if ($student->optSubFour == 'Mat') {
                        ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="CheCq">Math CQ</label>
                            <input type="text" class="form-control" name="CheCq" id="CheCq" placeholder="Mat-CQ">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="CheMcq">Math MCQ</label>
                            <input type="text" class="form-control" name="CheMcq" id="CheMcq" placeholder="Mat-MCQ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="CheTut">Math Tut</label>
                            <input type="text" class="form-control" name="CheTut" id="CheTut" placeholder="Mat-TUT">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="CheAtten">Mat Attend</label>
                            <input type="text" class="form-control" name="CheAtten" id="CheAtten"
                                placeholder="Mat-Atten">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="matPrac">Mat prac</label>
                            <input type="text" class="form-control" name="matPrac" id="matPrac" placeholder="matPrac">
                        </div>
                    </div>
                </div>
                <?php
                    }
                    if ($student->optSubFour == 'Agri') {
                        ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="AgrCq">Agri CQ</label>
                            <input type="text" class="form-control" name="AgrCq" id="AgrCq" placeholder="Mat-CQ">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="AgrMcq">Agri MCQ</label>
                            <input type="text" class="form-control" name="AgrMcq" id="AgrMcq" placeholder="Mat-MCQ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="AgrTut">Agri Tut</label>
                            <input type="text" class="form-control" name="AgrTut" id="AgrTut" placeholder="Mat-TUT">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="AgrAtten">Agri Atte</label>
                            <input type="text" class="form-control" name="AgrAtten" id="AgrAtten"
                                placeholder="AgrAtten">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="AgrPrac">Argi prac</label>
                            <input type="text" class="form-control" name="AgrPrac" id="AgrPrac" placeholder="AgrPrac">
                        </div>
                    </div>
                </div>
                <?php
                    } ?>
            </div>
            <!-- COLUMN FOUR ENDS -->
        </div>
    </div>
    <!-- RIGHT PART ENDS -->
</div>
<?php
                }
            } else {
                ?>
<h4 style="color:#E11111;font-weight:600;">
    Roll field remained blank or no data exists against that roll.</h4>
<?php
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
