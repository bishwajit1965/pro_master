<?php
namespace Codecourse\Repositories;

use Codecourse\Repositories\Database as Database;
use PDO;
use PDOException;

class Core
{
    // Database connection constructor
    private $conn;

    private $table = null;
    public function table($table)
    {
        $this->table = $table;
        $this->table = implode(',', $table);

        if (!empty($this->table)) {
            $this->table = $_GET["$table"];
            return $this->table;
        }
    }

    public function __construct()
    {
        $database = new Database();
        $dbConnection = $database->dbConnection();
        $this->conn = $dbConnection;
    }


    // View Data in Index page
    public function index()
    {
        try {
            $sql = "SELECT * FROM $this->table";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
                    $galleryData[] = $data;
                }
                return $galleryData;
            }
        } catch (PDOException $e) {
            echo $e->getMesssage();
        }
    }

    // Insert data
    public function store($fields)
    {
        try {
            $columns = implode(', ', array_keys($fields));
            $placeholders = implode(', :', array_keys($fields));
            $query = "INSERT INTO $this->table ($columns) VALUES(:$placeholders)";
            $stmt = $this->conn->prepare($query);
            foreach ($fields as $key => $value) {
                $stmt->bindValue(':'.$key, $value);
            }
            $stmtExec = $stmt->execute();
            if ($stmtExec) {
                header('Location: ../../admin/profile/profileIndex.php?uploaded=1');
            } else {
                header('Location: ../../admin/profile/profileIndex.php?uploaded=0');
            }
        } catch (PDOException $e) {
            echo $e->getMesssage();
        }
    }

    // View data to update
    public function updateView($id)
    {
        try {
            $sql ="SELECT * FROM $this->table WHERE pro_id = :edit_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(":edit_id", $id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMesssage();
        }
    }
    // Update data i database
    public function update($fields, $id)
    {
        // Delete photo from uploads folder
        $stmt = $this->conn->prepare("SELECT photo FROM $this->table WHERE pro_id = :id");
        $stmt->execute([':id' => $_GET['edit_id']]);
        $stmt->bindValue(':id', $id);
        while ($photo_data = $stmt->fetch(PDO::FETCH_OBJ)) {
            $del_photo = $photo_data->photo;
            unlink($del_photo);
        }
        try {
            $st = "";
            $counter = 1;
            $totalFields = count($fields);
            foreach ($fields as $key => $value) {
                if ($counter === $totalFields) {
                    $set = "$key = :".$key;
                    $st = $st.$set;
                } else {
                    $set = "$key = :".$key.", ";
                    $st = $st.$set;
                    $counter++;
                }
            }
            $sql = "";
            $sql.= "UPDATE $this->table SET ".$st;
            $sql.= " WHERE pro_id = ".$id;
            $stmt = $this->conn->prepare($sql);
            foreach ($fields as $key => $value) {
                $stmt->bindValue(':'.$key, $value);
            }
            $stmtExec = $stmt->execute();
            if ($stmtExec) {
                header('Location: ../../admin/profile/profileIndex.php?pupdated=1');
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    // Update eithout photo
    public function updateWithoutPhoto($fields, $id)
    {
        try {
            $st = "";
            $counter = 1;
            $totalFields = count($fields);
            foreach ($fields as $key => $value) {
                if ($counter === $totalFields) {
                    $set = "$key = :".$key;
                    $st = $st.$set;
                } else {
                    $set = "$key = :".$key. " , ";
                    $st = $st.$set;
                    $counter++;
                }
            }
            $sql = "";
            $sql.= "UPDATE $this->table SET ".$st;
            $sql.= " WHERE pro_id = ".$id;
            $stmt = $this->conn->prepare($sql);
            foreach ($fields as $key => $value) {
                $stmt->bindValue(':'.$key, $value);
            }
            $stmtExec = $stmt->execute();
            if ($stmtExec) {
                header('Location: ../../admin/profile/profileIndex.php?updated=1');
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Delete data from database
    public function destroy($id)
    {
        // Select uploaded photo to delete from uploads
        $query = "SELECT photo FROM $this->table WHERE pro_id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':id' => $_GET['delete_id']]);
        $stmt->bindparam(':id', $id);
        while ($photo_data = $stmt->fetch(PDO::FETCH_OBJ)) {
            $del_photo = $photo_data->photo;
            unlink($del_photo);
        }
        try {
            $sql = "DELETE FROM $this->table WHERE pro_id = :delete_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':delete_id', $id);
            $stmtExec = $stmt->execute();
            if ($stmtExec) {
                header('Location: ../../admin/profile/profileIndex.php?deleted=1');
            }
        } catch (PDOException $e) {
            echo $e->getMesssage();
        }
    }
}
