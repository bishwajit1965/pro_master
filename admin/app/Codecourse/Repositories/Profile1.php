<?php

namespace Codecourse\Repositories;

// Will load database and helpers class

use Codecourse\Repositories\Database as Database;
use PDO;
use PDOException;

class Profile
{
    // Database connection constructor
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $dbConnection = $database->dbConnection();
        $this->conn = $dbConnection;
    }

    public function index($query)
    {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $id = 0;
                while ($profile = $stmt->fetch(PDO::FETCH_OBJ)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo ++$id; ?>
                        </td>
                        <td>
                            <?php echo $profile->firstName.' '.$profile->lastName; ?>
                        </td>
                        <td>
                            <?php echo $profile->userEmail; ?>
                        </td>
                        <td>
                        <?php
                        $profile->userRole;
                    if ($profile->userRole == 0) {
                        echo 'Admin';
                    } elseif ($profile->userRole == 1) {
                        echo 'Editor';
                    } elseif ($profile->userRole == 2) {
                        echo 'Author';
                    } else {
                    } ?>
                    </td>
                    <td>
                        <a href="editProfile.php?edit_id=<?php echo $profile->userID; ?>"
                            class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> Edit</a>

                        <a href="deleteProfile.php?delete_id=<?php echo $profile->userID; ?>"
                            class="btn btn-sm btn-danger" onClick="return confirm('Are you sure to delete trhis data ???')" ;><i
                                class="fa fa-trash"></i> Delete</a>
                    </td>
                </tr>
                <?php
                }
            }
        } catch (PDOException $pe) {
            echo $pe->getMessage();
        }
    }

    public function editView($query)
    {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([':id' => $_GET['edit_id']]);
            $stmt->bindParam(':id', $id);
            if ($stmt->rowCount() > 0) {
                $id = 0;
                while ($profile = $stmt->fetch(PDO::FETCH_OBJ)) {
                    ?>
                <div class="col-sm-6 col-sm-offset-3">
                    <form action="" method="post">
                        <div class="form-group">
                            <!-- <label for="userID">Id</label> -->
                            <input type="hidden" class="form-control" name="userID"
                                value="<?php echo $profile->userID; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" name="firstName"
                                value="<?php echo $profile->firstName; ?>">
                        </div>
                        <div class="form-group">
                            <label for="firstName">Last Name</label>
                            <input type="text" class="form-control" name="lastName"
                                value="<?php echo $profile->lastName; ?>">
                        </div>
                        <div class="form-group">
                            <label for="userRole">User Role</label>
                            <select name="userRole" id="" class="form-control">
                                <option value="<?php echo $profile->userRole; ?>">
                                    <?php
                                    $profile->userRole;
                    if ($profile->userRole == 0) {
                        echo 'Admin';
                        echo '
                                            <option value="1">Editor</option>
                                            <option value="2">Author</option>
                                        ';
                    } elseif ($profile->userRole == 1) {
                        echo 'Editor';
                        echo '
                                            <option value="0">Admin</option>
                                            <option value="2">Author</option>
                                        ';
                    } elseif ($profile->userRole == 2) {
                        echo 'Author';
                        echo '
                                        <option value="0">Admin</option>
                                        <option value="1">Editor</option>
                                        ';
                    } ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="userID">User Email</label>
                            <input type="text" class="form-control" name="userEmail"
                                value="<?php echo $profile->userEmail; ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btn-update" class="btn btn-sm btn-primary">
                                <i class="fa fa-pencil"></i> Update</button>
                            <a href="profileIndex.php" class="btn btn-sm btn-warning">
                                <i class="fa fa-fast-backward"></i> Profile index</a>
                        </div>
                    </form>
                </div>
                <?php
                }
            }
        } catch (PDOException $pe) {
            echo $pe->getMessage();
        }
    }

    public function update($id, $firstName, $lastName, $userRole, $email)
    {
        try {
            $stmt = $this->conn->prepare('UPDATE tbl_users SET userID = :edit_id,firstName = :firstName, lastName = :lastName,userRole =:userRole, userEmail = :userEmail WHERE userID = :edit_id');
            $stmt->bindParam(':edit_id', $id);
            $stmt->bindParam(':firstName', $firstName);
            $stmt->bindParam(':lastName', $lastName);
            $stmt->bindParam(':userRole', $userRole);
            $stmt->bindParam(':userEmail', $email);
            $updatedProfile = $stmt->execute();
            if ($updatedProfile) {
                header('Location: profileIndex.php?profileUpdated=1');
            } else {
                header('Location: editProfile.php?profileUpdated=0');
            }
        } catch (PDOException $pe) {
            echo $pe->getMessage();
        }
    }

    public function checkpassword($id, $oldPassword)
    {
        $password = md5($oldPassword);
        $query = 'SELECT userPass FROM tbl_users WHERE userID = :id AND userPass = :password';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function changePassword($id, $passwordData)
    {
        $old_password = $passwordData['userPass'];
        $new_password = $passwordData['new_password'];
        if (empty($old_password)) {
            $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>SORRY!</strong> Old password field must not be empty!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            return $message;
        }
        if (empty($new_password)) {
            $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>SORRY!</strong> New password field must not be empty!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            return $message;
        }
        $checkPassword = $this->changePassword($id, $old_password);
        if ($checkPassword == false) {
            $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>SORRY!</strong> New password field must not be empty!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            return $message;
        }
        if (strlen($new_password) < 6) {
            $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>SORRY!</strong> Password is too short, it must be at least 6 characters!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';

            return $message;
        }
        $password = md5($new_password);
        $sql = 'UPDATE tbl_users SET userPass = :password WHERE userID = :id';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':password', $password);
        $result = $stmt->execute();
        if ($result) {
            $message = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>WOW!</strong> User password has been updated successfully!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';

            return $message;
        } else {
            $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>SORRY!</strong> User password is not updated!! There is some problem in data update!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';

            return $message;
        }
    }

    public function deleteView($query)
    {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([':id' => $_GET['delete_id']]);
            $stmt->bindParam(':id', $id);
            if ($stmt->rowCount() > 0) {
                $id = 0;
                while ($profile = $stmt->fetch(PDO::FETCH_OBJ)) {
                    ?>
                <div class="col-sm-6 col-sm-offset-3">
                    <form action="" method="post">
                        <div class="form-group">
                            <!-- <label for="userID">Id</label> -->
                            <input type="hidden" class="form-control" name="userID"
                                value="<?php echo $profile->userID; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control"
                                value="<?php echo $profile->firstName; ?>">
                        </div>
                        <div class="form-group">
                            <label for="firstName">Last Name</label>
                            <input type="text" class="form-control"
                                value="<?php echo $profile->lastName; ?>">
                        </div>
                        <div class="form-group">
                            <label for="userRole">User Role</label>
                            <select name="userRole" id="" class="form-control">
                                <option value="<?php echo $profile->userRole; ?>">
                    <?php
                    $profile->userRole;
                    if ($profile->userRole == 0) {
                        echo 'Admin';
                        echo '
                            <option value="1">Editor</option>
                            <option value="2">Author</option>
                        ';
                    } elseif ($profile->userRole == 1) {
                        echo 'Editor';
                        echo '
                            <option value="0">Admin</option>
                            <option value="2">Author</option>
                        ';
                    } elseif ($profile->userRole == 2) {
                        echo 'Author';
                        echo '
                            <option value="0">Admin</option>
                            <option value="1">Editor</option>
                        ';
                    } ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="userID">User Email</label>
                            <input type="text" class="form-control"
                                value="<?php echo $profile->userEmail; ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btn-delete" class="btn btn-sm btn-danger"
                                onClick="return confirm('Are you sure to delete trhis data ???')" ;>
                                <i class="fa fa-trash"></i> Delete</button>

                            <a href="profileIndex.php" class="btn btn-sm btn-warning">
                                <i class="fa fa-fast-backward"></i> Profile index</a>
                        </div>

                    </form>
                </div>
                <?php
                }
            }
        } catch (PDOException $pe) {
            echo $pe->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            $stmt = $this->conn->prepare('DELETE FROM tbl_users WHERE userID = :delete_id');
            $stmt->bindParam(':delete_id', $id);
            $deletedProfile = $stmt->execute();
            if ($deletedProfile) {
                header('Location:profileIndex.php?profileDeleted=1');
            } else {
                header('Location:deleteProfile.php?profileDeleted=0');
            }
        } catch (PDOException $pe) {
            echo $pe->getMessage();
        }
    }
}
