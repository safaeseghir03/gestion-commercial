<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Recherche Client</title>
  <link rel="stylesheet" type="text/css" href="../css/Bootstrap.css">
   <link rel="stylesheet" href="../css/style.css">


</head>
<style>body{background: pink;}</style>
<body>
  <ul class="menu cf">

    <li><a href="../index.php"><b><img src="../images_home/deconnx.png" style="height:12px;  width:20px; margin-right:6px;" />Deconnexion </b></a></li>
     <li><a href="../acceuil.php"><b><img src="../images_home/acceuil.ico" style="height:12px;  width:20px; margin-right:6px;">Home </b></a></li>
    <li>
        <a href="../clients.php"><b><img src="../images_home/clientn.png" style="height:12px;  width:20px; margin-right:6px;" />Clients</b></a>
        <ul class="submenu">
            <li><a href="rechercher_client.php"><b>Rechercher</b></a></li>
            <li><a href="supprimer_client.php"><b>Supprimer</b></a></li>
            <li><a href="modifier_client.php"><b>Modifier</b></a></li>
        </ul>         
    </li>
    
    <li>
        <a href="../produits.php"><b><img src="../images_home/produits.png" style="height:12px;  width:20px; margin-right:6px;" />Produits</b></a>
        <ul class="submenu">
           <li><a href="ajoute_produit.php"><b>Ajouter</b></a></li>
            <li><a href="rechercher_produit.php"><b>Rechercher</b></a></li>
            <li><a href="supprimer_produit.php"><b>Supprimer</b></a></li>
            <li><a href="modifier_produit.php"><b>Modifier</b></a></li>
        </ul>         
    </li>

    <li>
        <a href="../commandes.php"><b><img src="../images_home/commandes.png" style="height:12.25px;  width:20px; margin-right:6px;" />Commandes</b></a>
        <ul class="submenu">
            <li><a href="ajoute_cmd.php"><b>Ajouter</b></a></li>
            <li><a href="rechercher_cmd.php"><b>Rechercher</b></a></li>
            <li><a href="supprimer_cmd.php"><b>Supprimer</b></a></li>
            <li><a href="modifier_cmd.php"><b>Modifier</b></a></li>
        </ul>              
    </li>
</ul>



  
            <form method="POST" action="">
              <div id="formulaire">
<table>
<tr>
  <td><label><b>Numero Client :</b></label></td>
<td><input type="texte" name="num_client" placeholder="Numero client" required></td>
</tr>
<tr><td>
<center><input type="image" src="../images_clients/rechercher_client.png" value="Rechercher" class="client" name="rechercher" width="132" height="92"><b style="font-size: 26px; color:maroon;">Rechercher</b> </center> </td> </tr>
</div>
</table>
</form>
 
                     
                                    <div class="CSSTableGenerator" >
                                    <table>        
                        <tr>

                        <td >
                         Id client
                        </td>
                           <td >
                        Username
                        </td>
                        <td>
                          Telephone
                        </td>
                    </tr>
 
                              
  <?php
   $con=mysqli_connect("localhost:3325","root","","bienvenuegestion");

                               if(isset($_POST['rechercher'])){


                                
                               // $ref=$_POST['id'];

                         // $query =mysqli_query($con,"SELECT * FROM gestion WHERE id='$ref'");
                     // if ($result = mysqli_query($query)) {
                           /* Récupère un tableau associatif */
                    while ($rep = mysqli_fetch_assoc($result)) {
                      ?>
                        <tr>
                          <td>
                         <?php echo $rep["id"];?>
                       </td>
                       <td>
                         <?php echo $rep["numerodetelephone"];?>
                       </td>

                       <td>
                         <?php echo $rep["username"];?>
                       </td>

                      
                        </tr>
                        <?php }
     mysqli_free_result($result);
     mysqli_close ();

}
?>

</table>
   




            </div>





</body>



</html>