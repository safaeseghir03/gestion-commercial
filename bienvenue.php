    
<!DOCTYPE html>
<html lang="en-US">
<head>
	
	<title>Clients</title>
    <link rel="stylesheet" href="bienvenue.css">
  




</head>


<body>
    
<center class="bienvenue"><h1><marquee behavior="alternate" style="border:solid 1.5px;border-radius: 17px;">Bienvenue sur note site - Gestion Commerciale</marquee></h1></center>
    <center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="container"><img  /><div align="center" class="caption"></div> </div></center>


   <div id="login">
  <form method="POST" action="#">
    <center><button type="submit" name="valider"  ><b>Connexion</b></button></center>







   <center> <button type="submit" name="valid"  ><b>creer une compt</b></button></center>
  </form>
</div>
<script src='http://localhost/gestion/creeruncompt.php'></script>

     <?php   

if(isset($_POST['valid'])) {
header("location:creeruncompt.php");
}

?>
</body>




     
       </html>