<?php
// Create connection
$db = mysqli_connect("localhost","user","","studycase"); 
// Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

# Gambar 1
$sql = "SELECT * FROM gambar WHERE id = 2";
$sth = $db->query($sql);
$result=mysqli_fetch_assoc($sth);
# Gambar 2
$sql2 = "SELECT * FROM gambar WHERE id = 3";
$sth2 = $db->query($sql2);
$result2=mysqli_fetch_assoc($sth2);
# Gambar 3
$sql3 = "SELECT * FROM gambar WHERE id = 4";
$sth3 = $db->query($sql3);
$result3=mysqli_fetch_assoc($sth3);

if(isset($_POST['gambar1'])){
	#$tanggal_klik = date("Y-m-d");
	$sql01 = "INSERT INTO klik (tanggal_klik, id) VALUES (now(), 2)";
	mysqli_query($db, $sql01);
}

if(isset($_POST['gambar2'])){
	#$tanggal_klik = date("Y-m-d");
	$sql02 = "INSERT INTO klik (tanggal_klik, id) VALUES (now(), 3)";
	mysqli_query($db, $sql02);
}

if(isset($_POST['gambar3'])){
	#$tanggal_klik = date("Y-m-d");
	$sql03 = "INSERT INTO klik (tanggal_klik, id) VALUES (now(), 4)";
	mysqli_query($db, $sql03);
}

# Menghitung Total Klik LinkAja
$sqlt = "SELECT COUNT(*) AS num FROM klik WHERE id=2";
$stht = mysqli_query($db, $sqlt);
$resultk = mysqli_fetch_array($stht) ;
# Menghitung Total Klik SMS
$sqls = "SELECT COUNT(*) AS num FROM klik WHERE id=3";
$sths = mysqli_query($db, $sqls);
$resultl=mysqli_fetch_assoc($sths);
# Menghitung Total Klik Mandiri
$sqlm = "SELECT COUNT(*) AS num FROM klik WHERE id=4";
$sthm = mysqli_query($db, $sqlm);
$resultm=mysqli_fetch_assoc($sthm);
mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Study Case - Total Click</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .container {
    padding: 80px 120px;
  }
  </style>
</head>
<body>

<div class="container text-center">
  <h3>THE BRAND</h3>
  <p><em>Together We Strong!</em></p>
  <p>These are our partners that agreed to support our project</p>
  <br>
  <div class="row">
  <form action="frontpage.php" method="POST">
    <div class="col-sm-4">
      <p><strong><?php echo $result['nama']?></strong></p><br>
      <button type="submit" name="gambar1" onclick="window.open('https://linkaja.id')"><img src="<?php echo $result['gambar']?>" height="250px" alt="Random Name" width="255" height="255"></button>
	  <h4>Total Klik : <?php echo $resultk['num']?></h4>
    </div>
    <div class="col-sm-4">
      <p><strong><?php echo $result2['nama']?></strong></p><br>
       <button type="submit" name="gambar2" onclick="window.open('http://www.malserpong.com')"><img src="<?php echo $result2['gambar']?>" alt="Random Name" width="255" height="255"></button>
	   <h4>Total Klik : <?php echo $resultl['num']?></h4>
    </div>
    <div class="col-sm-4">
      <p><strong><?php echo $result3['nama']?></strong></p><br>
       <button type="submit" name="gambar3" onclick="window.open('https://bankmandiri.co.id')"><img src="<?php echo $result3['gambar']?>" alt="Random Name" width="255" height="255"></button>
	   <h4>Total Klik : <?php echo $resultm['num']?></h4>
    </div>
  </form>
  </div>
  <a href="per-tanggal-klik.php"><button style="margin-top:50px">Lihat Jumlah Klik Berdasarkan Tanggal</button></a>
</div>

</body>
</html>
