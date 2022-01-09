<?php
require_once 'views/commons/error.php';
?>
<a href="index.php?controller=Employee&action=add">
    Thêm Đọc Giả Mới 
</a>
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
            <?php
                    //khai báo 3 url xem, sửa, xóa
                    $urlDetail =
                        "index.php?controller=Employee&action=detail&madg=" . $Employee['madg'];
                    $urlEdit =
                        "index.php?controller=Employee&action=edit&madg=" . $Employee['madg'];
                    $urlDelete =
                        "index.php?controller=Employee&action=delete&madg=" . $Employee['madg'];
                    ?>
                    <a href="<?php echo $urlDetail?>">Chi tiết</a> &nbsp;
                    <a href="<?php echo $urlEdit?>">Sửa</a> &nbsp;
                    <a onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                       href="<?php echo $urlDelete?>">
                        Xóa
                    </a>
                    </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">Không có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>