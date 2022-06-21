<!DOCTYPE html>
<html>
<head>
	<title>Perhitungan Nilai Depresiasi</title>

</head>
<body>
	<script type="text/javascript">
			function hasil()
			{
				var num1 = document.myform.angka1.value;
				var num2 = document.myform.angka2.value;
				var num3 = document.myform.angka3.value;
				var num4 = document.myform.angka4.value;
				var depresiasi = (parseInt(num1) - parseInt(num2)) * (parseInt(num3) / parseInt(num4));
				document.getElementById('add').value = depresiasi;
			}
	</script>
	<div>
		<form name="myform">
				<h1>Unit of Activity</h1>
				<table border="0" cellpadding="2" cellspacing="5">
					<tr>
						<td>Harga Perolehan</td>
						<td>:</td>
						<td><input type="text" name = "angka1"></td>
					</tr>
					<tr>
						<td>Harga Residu</td>
						<td>:</td>
						<td><input type="text" name = "angka2"></td>
					</tr>
					<tr>
						<td>Pemakai</td>
						<td>:</td>
						<td><input type="text" name = "angka3"></td>
					</tr>
					<tr>
						<td>Kapasitas Maksimum</td>
						<td>:</td>
						<td><input type="text" name = "angka4"></td>
					</tr>
					<tr>
						<td>Hasil Perhitungan</td>
						<td>:</td>
						<td><input type = "text" id = "add" value= ""></td>
					</tr>
					<tr>
						<td>
							<INPUT TYPE="button" NAME="hasil1" Value="Proses" onClick="hasil()"/>
            				<button type="button" class="btn btn-danger" onclick="location.href='index.php'">Kembali</button>
						</td>
					</tr>
				</table>
		</form>
	</div>
</body>
</html>