<?php
	include("../database/connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/imgdetail-style.css" type="text/css" rel="stylesheet" />
<script src="../js/angular.min.js" type="text/javascript"></script>
<script src="../js/imageLoader.js" type="text/javascript"></script>
<script src="../js/ngDialog.js" type="text/javascript"></script>
<title>Untitled Document</title>
</head>

<body>
	<div class="wrapper" ng-app="popupDetail" ng-controller="popupCtrl">
    <?php
		$id = $_GET[id];
		$result = mysql_query(" SELECT * FROM notes WHERE id = '$id' ");
		if(mysql_num_rows($result)) {
			while ($row = mysql_fetch_array($result)) {
				echo '
					<div class="right" style="width:720px">
						<div class="right-container">
							<div class="title">'.$row[title].'</div>
							<div class="content">'.$row[content].'</div>
						</div>
					</div>
				';
			}
		}
	?>
    <!--<div class="title">My first Project</div>
							<div class="content">Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn. Lorem Ipsum đã được sử dụng như một văn bản chuẩn cho ngành công nghiệp in ấn từ những năm 1500, khi một họa sĩ vô danh ghép nhiều đoạn văn bản với nhau để tạo thành một bản mẫu văn bản. Đoạn văn bản này không những đã tồn tại năm thế kỉ, mà khi được áp dụng vào tin học văn phòng, nội dung của nó vẫn không hề bị thay đổi. Nó đã được phổ biến trong những năm 1960 nhờ việc bán những bản giấy Letraset in những đoạn Lorem Ipsum, và gần đây hơn, được sử dụng trong các ứng dụng dàn trang, như Aldus PageMaker.</div>-->
    </div>
</body>
</html>
