<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"  action="infor.php">
   
     <h2>Nhập Thông Tin Sinh Viên </h2>
        MSSV: <input type="text" name="mssv"/><br><br>
        Họ Tên:<input type="text" name="hoten"/><br><br>
        Giới Tính:  Nam <input  type="radio"  name="GioiTinh" value="0" /> ,Nữ<input type="radio" name="GioiTinh" value="1"/> <br><br>
        Ngôn Ngữ Lập Trình: C++ <input  type="checkbox"  name="language1[]" value="C++" /> ,PHP <input type="checkbox" name="language1[]" value="PHP"/><br><br>
        Thành Phố <select name="thanhpho" >
            <option value="Sài Gòn">Sài Gòn</option>
            <option value="Huế">Huế</option>
            <option value="Đà Nẵng">Đà Nẵng</option>
            <option value="Hà Nội">Hà Nội</option>
        </select> <br><br>
        Tin Nhắn: <br>
        <textarea name="tinnhan" rows="6" cols="25">
        </textarea>	<br>  
     <input type="submit" >

   
    </form>
</body>
</html>