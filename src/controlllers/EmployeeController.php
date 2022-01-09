<?php
require_once 'models/Employee.php'; 
class EmployeeController {
    public function index() {
        $teacher = new Employee(); 
        $teachers = $Employee->index();
        require_once 'views/employee/index.php';
    }
    public function add() { 
        $error = '';
        if (isset($_POST['submit'])) {
            $madg = $_POST['madg'];
            $hovaten = $_POST['hovaten'];
            $gioitinh = $_POST['gioitinh'];
            $namsinh = $_POST['namsinh'];
            $nghenghiep = $_POST['nghenghiep'];
            $ngaycapthe = $_POST['ngaycapthe'];
            $ngayhethan = $_POST['ngayhethan'];
            $diachi = $_POST['diachi'];
            $Employee = new Employee();
            $EmployeeArr = [
                'madg'=> $madg,
                'hovaten' => $hovaten,
                'gioitinh' => $gioitinh,
                'namsinh' => $namsinh,
                'nghenghiep' => $nghenghiep,
                'ngayhethan' => $ngayhethan,
                'diachi'=>$diachi,
                
            ];
            $isInsert = $Employee->insert($EmployeeArr);
            if ($isInsert) {
                $_SESSION['success'] = "Them moi thanh cong";
            }
            else {
                $_SESSION['error'] = "Them moi that bai";
            }
            header("Location: index.php?controller=employee&action=index");
            exit();
        }
        require_once 'views/Employees/add.php';
    }
    public function detail() {
        $Employee = new Employee(); // tu model
        $Employee = $Employee->index(); // truyen sang view index trang chu
        require_once 'views/Employees/index.php';
    }
    public function edit() {
        if (!isset($_GET['madg'])) {
            $_SESSION['error'] = "Tham so khong hop le";
            header("Location: index.php?controller=employee&action=index");
            return;
        }
        if (!is_numeric($_GET['madg'])) {
            $_SESSION['error'] = "Id phai la tham so";
            header("Location: index.php?controller=employee&action=index");
            return;
        }
        $magv = $_GET['madg'];
        $employeeModel = new Employee();
        $Employee = $employeeModel->getEmployeeById($madg);
        $error = '';
        if (isset($_POST['submit'])) {
            $madg = $_POST['madg'];
            $hovaten = $_POST['hovaten'];
            $gioitinh = $_POST['gioitinh'];
            $namsinh = $_POST['namsinh'];
            $nghenghiep = $_POST['nghenghiep'];
            $ngaycapthe = $_POST['ngaycapthe'];
            $ngayhethan = $_POST['ngayhethan'];
            $diachi = $_POST['diachi'];
            $Employee = new Employee();
            $EmployeeArr = [
                'madg'=> $madg,
                'hovaten' => $hovaten,
                'gioitinh' => $gioitinh,
                'namsinh' => $namsinh,
                'nghenghiep' => $nghenghiep,
                'ngayhethan' => $ngayhethan,
                'diachi'=>$diachi,
            ];
            $isUpdate = $employeeModel->update($employeeArr);
            $isUpdate = $employeeModel->update($employeeArr); // sai
            if ($isUpdate) {
                $_SESSION['success'] = "Update ban ghi #$madg thanh cong";
            }
            else { // nhay vao day
                $_SESSION['error'] = "Update ban ghi #$madg that bai";
            }
            header("Location: index.php?controller=employee&action=index");
            exit();
            
        }
        require_once 'views/Employees/edit.php';
    }
    public function delete() {
        $maNV = $_GET['madg'];
        if (!is_numeric($madg)) {
            header("Location: index.php?controller=employee&action=index");
            exit();
        }
        $book = new Employee();
        $isDelete = $book->delete($maNV);
        if ($isDelete) {
            $_SESSION['success'] = "Xoa ban ghi #$madg thanh cong";
        }
        else {
            $_SESSION['error'] = "Xoa ban ghi #$madg that bai";
        }
        header("Location: index.php?controller=employee&action=index");
        exit();
    }
}
           