<?php 
include("vt.php");  
?>
<? include("sil.php");
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>

  <div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header_top">
          
          <div class="header_top_right">
            <form action="#" class="search_form">
              <input type="text" placeholder="Text to Search">
              <input type="submit" value="">
            </form>
          </div>
        </div>
      
      </div>
    </div>
  </header>
  <div id="navarea">
    <div id="navarea">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
                  
        </div>
      </nav>
    </div>
    <section id="ContactContent">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          
            <div class="contact_bottom">
              <div class="contact_us wow fadeInRightBig">
                <h2>İletisim</h2>
                <form action="" method="post">
    
    <table class="table">
        
        <tr>
            <td>Başlık</td>
            <td><input type="text" name="baslik" class="form-control" ></td>
        </tr>

            <tr>
            <td>İçerik</td>
            <td><textarea name="icerik" class="form-control" ></textarea></td>
        </tr>

        <tr>
            <td></td>
            <td><input class="btn btn-primary"  type="submit" value="Ekle"></td>
        </tr>
         
    </table>

<?php 

if ($_POST) {
    $baslik = $_POST['baslik']; 
    $icerik = $_POST['icerik'];
 
    if ($baslik<>"" && $icerik<>"") { 
          
         
        if ($baglanti->query("INSERT INTO makale (baslik, icerik) VALUES ('$baslik','$icerik')")) 
        {
            echo "Veri Eklendi"; 
        }
        else
        {
            echo "Hata oluştu";
        }

    }
    }
?>
</div>

<div class="col-md-7">
<table class="table">
    
    <tr>
        <th>No</th>
        <th>Başlık</th>
        <th>İçerik</th>
        <th></th>
        <th></th>
    </tr>

<?php 

$sorgu = $baglanti->query("SELECT * FROM makale"); 

while ($sonuc = $sorgu->fetch_assoc()) { 

$id = $sonuc['id']; 
$baslik = $sonuc['baslik'];
$icerik = $sonuc['icerik'];

?>
    
    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $baslik; ?></td>
        <td><?php echo $icerik; ?></td>
        
        <td><a href="duzenle.php?id=<?php echo $id; ?>" class="btn btn-primary">Düzenle</a></td>
        <td><a href="sil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
    </tr>

<?php 
} 
 
?>
</form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>