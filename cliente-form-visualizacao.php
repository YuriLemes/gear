<?php 
include('header-form.php');
require ('ClienteBO.php');
$id=$_GET['id'];
$servico= ClienteBO::findById($id);
?>
 <div class="containerprincipal">
 	

 </div>
<?php include('footer.php')?>
