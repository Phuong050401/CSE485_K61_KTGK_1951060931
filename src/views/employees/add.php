<h1>
    Thêm Thành Viên 
</h1>

<!--</form>-->
<div style="color: red">
    <?php echo $error; ?>
</div>
<form method="post" action="">
    Mã Độc Giả :
    <input type="number" name="madg" value="" />
    <br />

    Họ và tên :
    <input type="text" name="hovaten" value="" />
    <br />

    Giới Tính:
    <input type="text" name="gioitinh" value="" />
    <br />
    
    Năm Sinh: 
    <input type="number" name="namsinh" value="" />
    <br />

    Nghề Nghiệp :
    <input type="text" name="nghenghiep" value="" />
    <br />

   Ngày Cấp Thẻ :
    <input type="number" name="ngaycapthe" value="" />
    <br />
    Ngày Hết Hạn :
    <input type="number" name="ngayhethan" value="" />
    <br />
    Địa Chỉ :
    <input type="text" name="diachi" value="" />
    <br />
    <input type="submit" name="submit" value="Save" />
</form>