<div style="color: red">
    <?php echo $error; ?>
</div>
<h1>
    Sửa Độc Giả
</h1>

<form action="" method="post">
    Mã độc giả :
    <input type="number"
           name="madg"
           value="<?php
           echo isset($_POST['madg']) ? $_POST['madg'] : $Employee['madg']?>"
    />
    <br />
    Họ và tên :
    <input type="text"
           name="hovaten"
           value="<?php
           echo isset($_POST['hovaten']) ? $_POST['hovaten'] : $Employee['hovaten']?>"
    />
    <br />
    Giới Tính  :
    <input type="text"
           name="gioitinh"
           value="<?php
           echo isset($_POST['gioitinh']) ? $_POST['gioitinh'] : $Employee['gioitinh']?>"
    />
    <br />
    Năm Sinh :
    <input type="number"
           name="namsinh"
           value="<?php
           echo isset($_POST['namsinh']) ? $_POST['namsinh'] : $Employee['namsinh']?>"
    />
    <br />
    Nghề Nghiệp :
    <input type="text"
           name="nghenghiep"
           value="<?php
           echo isset($_POST['nghenghiep']) ? $_POST['nghenghiep'] : $Employee['nghenghiep']?>"
    />
    <br />
    Ngày Cấp Thẻ  :
    <input type="number"
           name="ngaycapthe"
           value="<?php
           echo isset($_POST['ngaycapthe']) ? $_POST['ngaycapthe'] : $Employee['ngaycapthe']?>"
    />
    <br />
    Ngày Hết Hạn  :
    <input type="number"
           name="ngayhethan"
           value="<?php
           echo isset($_POST['ngayhethan']) ? $_POST['ngayhethan'] : $Employee['ngayhethan']?>"
    />
    <br />
    Địa Chỉ :
    <input type="text"
           name="diachi"
           value="<?php
           echo isset($_POST['diachi']) ? $_POST['diachi'] : $Employee['diachi']?>"
    />
    <input type="submit" name="submit" value="Update" />
</form>