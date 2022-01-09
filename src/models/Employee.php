<?php
require_once 'configs/db.php';
class docgia{
    public $madg;
    public $hovaten;
    public $gioitinh;
    public $namsinh;
    public $nghenghiep;
    public $ngaycapthe;
    public $ngayhethan;
    public $diachi;

public function insert($param = []) {
    $connection = $this->connectDb();
    $queryInsert = "INSERT INTO docgia(madg, hovaten, gioitinh, namsinh, nghenghiep, ngaycapthe, ngayhethan, diachi);
    VALUES ('{$param['madg']}', '{$param['hovaten']}', '{$param['gioitinh']}',
     '{$param['namsinh']}', '{$param['nghenghiep']}', '{$param['ngaycapthe']}', '{$param['ngayhethan']}', '{$param['diachi']}')";
    $isInsert = mysqli_query($connection, $queryInsert);
    $this->closeDb($connection);
    return $isInsert;
    }
public function getEmployeeById($madg = null) {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM docgia WHERE madg=$madg";
        $results = mysqli_query($connection, $querySelect);
        $Employee = [];
        if (mysqli_num_rows($results) > 0) {
            $Employees = mysqli_fetch_all($results, MYSQLI_ASSOC);
            $Employee = $Employees[0];
        }
        $this->closeDb($connection);
        return $Employee;
    }
    public function index() {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM docgia";
        $results = mysqli_query($connection, $querySelect);
        $Employees = [];
        if (mysqli_num_rows($results) > 0) {
            $Employees = mysqli_fetch_all($results, MYSQLI_ASSOC); 
        }
        $this->closeDb($connection);
        return $Employees; 
    }
    public function update($Employee = []) {
        public function update($Employee = []) { // update chay ok
            $connection = $this->connectDb();
            $queryUpdate = "UPDATE docgia ";
            $queryUpdate = "UPDATE docgia
            SET `madg` = '{$Employee['madg']}', `hovaten` = '{$Employee['hovaten']}',`gioitinh` = '{$Employee['gioitinh']}',`namsinh` = '{$Employee['namsinh']}',
                    `nghenghiep` = '{$Employee['nghenghiep']}',`ngaycapthe` = '{$Employee['ngaycapthe']}', `ngayhethan` = '{$Employee['ngayhethan']}, `diachi` = '{$Employee['diachi']}'
                     
                    WHERE `maNV` = {$Employee['madg']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        $this->closeDb($connection);
        return $isUpdate;
    }
    public function delete($madg = null) {
        $connection = $this->connectDb();
        $queryDelete = "DELETE FROM docgia WHERE madg = $madg";
        $isDelete = mysqli_query($connection, $queryDelete);
        $this->closeDb($connection);
        return $isDelete;
    }
    $connection = mysqli_connect(DB_HOST,
            DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
        }
        return $connection;
    }
    public function closeDb($connection = null) {
        mysqli_close($connection);
    }
 }