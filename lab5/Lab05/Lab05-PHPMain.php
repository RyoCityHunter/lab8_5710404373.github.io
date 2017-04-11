<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" media="screen" href="Lab05-MainStyleSheet.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="Script-DateDropdown.js"></script>
<script src="Script-MyScript.js"></script>
<title>Provinces of Thailand</title>
</head>

<body>
<section>
	<header role="banner">
	</header>
</section>
<br><br>
<form name="myForm" id="myForm" action="loadNextPage(nextpage)" method="post">
	<fieldset class="fieldset">
	
		Name:--------------------------------------------------------------<br>
			<input type="text" name="firstname" id="firstname" placeholder="Firstname">
			<input type="text" name="lastname" id="lastname" placeholder="Lastname"><br><br>
		Birthday:-----------------------------------------------------------<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Month:<select name="month" id="month"></select>
		Date:<select name="day" id="day"></select>
		Year:<select name="year" id="year"></select>
		<!-- <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" id="birthday" readonly=""> -->
		<br><br>
		Gender:------------------------------------------------------------<br>
			<input type="radio" name="gender" id="gender" value="Male">Male&nbsp;
			<input type="radio" name="gender" id="gender" value="Female">Female<br><br>
		Province:-----------------------------------------------------------<br>
			<select class="province" name="province"  id="province" style="width: auto;">
			  <option value="">--------- เลือกจังหวัด ---------</option>
			  <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
			  <option value="กระบี่">กระบี่</option>
			  <option value="กาญจนบุรี">กาญจนบุรี</option>
			  <option value="กาฬสินธุ์">กาฬสินธุ์</option>
			  <option value="กำแพงเพชร">กำแพงเพชร</option>
			  <option value="ขอนแก่น">ขอนแก่น</option>
			  <option value="จันทบุรี">จันทบุรี</option>
			  <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
			  <option value="ชลบุรี">ชลบุรี</option>
			  <option value="ชัยนาท">ชัยนาท</option>
			  <option value="ชัยภูมิ">ชัยภูมิ</option>
			  <option value="ชุมพร">ชุมพร</option>
			  <option value="เชียงราย">เชียงราย</option>
			  <option value="เชียงใหม่">เชียงใหม่</option>
			  <option value="ตรัง">ตรัง</option>
			  <option value="ตราด">ตราด</option>
			  <option value="ตาก">ตาก</option>
			  <option value="นครนายก">นครนายก</option>
			  <option value="นครปฐม">นครปฐม</option>
			  <option value="นครพนม">นครพนม</option>
			  <option value="นครราชสีมา">นครราชสีมา</option>
			  <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
			  <option value="นครสวรรค์">นครสวรรค์</option>
			  <option value="นนทบุรี">นนทบุรี</option>
			  <option value="นราธิวาส">นราธิวาส</option>
			  <option value="น่าน">น่าน</option>
			  <option value="บึงกาฬ">บึงกาฬ</option>
			  <option value="บุรีรัมย์">บุรีรัมย์</option>
			  <option value="ปทุมธานี">ปทุมธานี</option>
			  <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
			  <option value="ปราจีนบุรี">ปราจีนบุรี</option>
			  <option value="ปัตตานี">ปัตตานี</option>
			  <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
			  <option value="พังงา">พังงา</option>
			  <option value="พัทลุง">พัทลุง</option>
			  <option value="พิจิตร">พิจิตร</option>
			  <option value="พิษณุโลก">พิษณุโลก</option>
			  <option value="เพชรบุรี">เพชรบุรี</option>
			  <option value="เพชรบูรณ์">เพชรบูรณ์</option>
			  <option value="แพร่">แพร่</option>
			  <option value="พะเยา">พะเยา</option>
			  <option value="ภูเก็ต">ภูเก็ต </option>
			  <option value="มหาสารคาม">มหาสารคาม</option>
			  <option value="มุกดาหาร">มุกดาหาร</option>
			  <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
			  <option value="ยะลา">ยะลา</option>
			  <option value="ยโสธร">ยโสธร</option>
			  <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
			  <option value="ระนอง">ระนอง</option>
			  <option value="ระยอง">ระยอง</option>
			  <option value="ราชบุรี">ราชบุรี</option>
			  <option value="ลพบุรี">ลพบุรี</option>
			  <option value="ลำปาง">ลำปาง</option>
			  <option value="ลำพูน">ลำพูน</option>
			  <option value="เลย">เลย</option>
			  <option value="ศรีสะเกษ">ศรีสะเกษ</option>
			  <option value="สกลนคร">สกลนคร</option>
			  <option value="สงขลา">สงขลา</option>
			  <option value="สตูล">สตูล</option>
			  <option value="สมุทรปราการ">สมุทรปราการ</option>
			  <option value="สมุทรสงคราม">สมุทรสงคราม</option>
			  <option value="สมุทรสาคร">สมุทรสาคร</option>
			  <option value="สระแก้ว">สระแก้ว</option>
			  <option value="สระบุรี">สระบุรี</option>
			  <option value="สิงห์บุรี">สิงห์บุรี</option>
			  <option value="สุโขทัย">สุโขทัย</option>
			  <option value="สุพรรณบุรี">สุพรรณบุรี</option>
			  <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
			  <option value="สุรินทร์">สุรินทร์</option>
			  <option value="หนองคาย">หนองคาย</option>
			  <option value="หนองบัวลำภู">หนองบัวลำภู</option>
			  <option value="อ่างทอง">อ่างทอง</option>
			  <option value="อุดรธานี">อุดรธานี</option>
			  <option value="อุตรดิตถ์">อุตรดิตถ์</option>
			  <option value="อุทัยธานี">อุทัยธานี</option>
			  <option value="อุบลราชธานี">อุบลราชธานี</option>
			  <option value="อำนาจเจริญ">อำนาจเจริญ</option>
			</select><br><br>

		<input type="reset"  id="reset" value="Cancel">&nbsp;
		<input type="submit" id="submit" value="Submit">  
	</fieldset>
</form>
</body>
<!-- SilentMonster -->
</html>