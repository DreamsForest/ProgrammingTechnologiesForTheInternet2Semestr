<?php
class Database
{
    protected $connect;
    
    public function __construct($host, $user, $password, $dbname)
    {
        $this->connect = new mysqli($host, $user, $password, $dbname);
        if ($this->connect->connect_error) {
            die("Connection failed: " . $this->connect->connect_error);
        }
    }

    public function getGroups()
    {
        $query = "SELECT * FROM students JOIN direction  
            ON students.course_direction = direction.id_direction";
        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    public function addGroup($img_student, $name_student, $course_direction, $name_group, $year)
    {
        $query = "INSERT INTO students (img_student, name_student, course_direction, name_group, year) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connect->prepare($query);
        $stmt->bind_param("ssisi", $img_student, $name_student, $course_direction, $name_group, $year);
        if ($stmt->execute()) {
            echo "Data added successfully";
        } else {
            echo "Error adding data: " . $stmt->error;
        }
    }

    public function updateGroup($id, $img_student, $name_student, $course_direction, $name_group, $year)
    {
        $query = "UPDATE students SET `img_student` = ?, `name_student` = ?, `course_direction` = ?, `name_group` = ?, `year` = ? WHERE id = ?";
        $stmt = $this->connect->prepare($query);
        $stmt->bind_param("ssisii", $img_student, $name_student, $course_direction, $name_group, $year, $id);
        $stmt->execute();
    }

    public function getConnect() {
        return $this->connect;
    }

    public function deleteGroup($id)
    {
        $query = "DELETE FROM students WHERE id = ?";
        $stmt = $this->connect->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }

    public function getExistingGroup($id)
    {
        $query = "SELECT * FROM students WHERE id = ?";
        $stmt = $this->connect->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}


$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "lb-1"; 

$database = new Database($host, $user, $password, $dbname);
$data = $database->getGroups();
?>