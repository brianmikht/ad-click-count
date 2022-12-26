<?php
// Create connection
$db = mysqli_connect("localhost","user","","studycase"); 
// Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$sebelum = $_POST['sebelum'];
	$sesudah = $_POST['sesudah'];
	$sqd = "SELECT COUNT(klik.id) as total_click FROM klik, gambar WHERE gambar.id=klik.id AND klik.id='$id' AND tanggal_klik>='$sebelum' AND tanggal_klik<='$sesudah'";
	if (mysqli_query($db, $sqd)) {
		$std = $db->query($sqd);
		$resultd = mysqli_fetch_assoc($std);
		#echo "Total Klik = ". $resultd['total_click'];
		echo '<script type="text/javascript">alert("Total Klik : '.$resultd['total_click'].'");</script>';
	} else {
		echo "Error: " . $sqd . "<br>" . mysqli_error($db);
	}
}

?>
<!DOCTYPE html>
<html>
<title>Study Case - Click By Date</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<a href="frontpage.php"<i class="fa fa-home">Back to Frontpage</i></a>
<h3>Jumlah Klik Dengan Rentang Tanggal</h3>

<form action="per-tanggal-klik.php" method="POST">
  <p>Nama:
  <select name="id">
<?php
	$q = "SELECT id, nama FROM gambar";
	$r = @mysqli_query($db, $q);
	while ($rows = mysqli_fetch_array($r, MYSQLI_ASSOC)){
        unset($id, $nama);
        $id = $rows['id'];
        $nama = $rows['nama'];
        echo '<option value="'.$id.'" name="'.$id.'" selected="selected">'.$nama.'</option>';
    }
	mysqli_close($db);
?>
  </select></p>
  <label for="sebelum">Tanggal Sebelum:</label>
  <input type="date" id="sebelum" name="sebelum"><br><br>
  <label for="sesudah">Tanggal Sesudah:</label>
  <input type="date" id="sesudah" name="sesudah"><br><br>
  <input type="submit" name="submit" id="submit" value="Submit">
</form>

</body>
</html>