<?php
require_once 'views/commons/error.php';
?>

<h1>HIỂN THỊ CHI TIẾT DANH SÁCH GIẢNG VIÊN</h1>
<br>

<table border="1" cellspacing="0" cellpadding="8">
    <tr>
    <th>Mã độc giả</th>
        <th>Họ và tên</th>
        <th>Giới Tính</th>
        <th>Năm Sinh</th>
        <th>Nghề Nghiệp</th>
        <th>Ngày cấp thẻ</th>
        <th>Ngày hết hạn</th>
        <th>Địa chỉ</th>

    </tr>
    <?php if (!empty($Employees)): ?>      
        <?php foreach ($Employees AS $Employee) : ?>
            <tr>
            <td><?php echo $Empoyee['madg'] ?></td>
                <td><?php echo $Employee['hovaten'] ?></td>
                <td><?php echo $Employee['gioitinh'] ?></td>
                <td><?php echo $Employee['namsinh'] ?></td>
                <td><?php echo $Employee['nghenghiep'] ?></td>
                <td><?php echo $ngaycapthe['ngaycapthe'] ?></td>
                <td><?php echo $ngayhethan['ngayhethan'] ?></td>
                <td><?php echo $ngaydiachi['diachi'] ?></td>
                
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">Không có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>