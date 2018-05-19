 <?php 

if ($_GET) 
{

include("vt.php"); 

if ($baglanti->query("DELETE FROM makale WHERE id =".(int)$_GET['id'])) 
{
    header("location:index.php"); 
}
}

?>