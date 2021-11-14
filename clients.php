

<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Clients</title>
    <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/Bootstrap.css">

<style >
  body{
    background: #FFCCCC;
  }
</style>


</head>


<body background="#00FF00">
    



  <ul class="menu cf">



    <li><a href="bienvenue.php"><b><img src="images_home/deconnx.png" style="height:12px;  width:20px; margin-right:6px;">Déconnexion </b></a></li>
    <li><a href="acceuil.php"><b><img src="images_home/acceuil.ico" style="height:12px;  width:20px; margin-right:6px;">Home </b></a></li>

    <li>
        <a href="clients.php"><b><img src="images_home/clientn.png" style="height:12px;  width:20px; margin-right:6px;" />Clients</b></a>
        <ul class="submenu">

            <li><a href="Fonctions/rechercher_client.php"><b>Rechercher</b></a></li>
            <li><a href="Fonctions/supprimer_client.php"><b>Supprimer</b></a></li>
            <li><a href="Fonctions/modifier_client.php"><b>Modifier</b></a></li>

        </ul>
    </li>

    <li>
        <a href="produits.php"><b><img src="images_home/produits.png" style="height:12px;  width:20px; margin-right:6px;" />Produits</b></a>
        <ul class="submenu">
            <li><a href="Fonctions/ajoute_produit.php"><b>Ajouter</b></a></li>
            <li><a href="Fonctions/rechercher_produit.php"><b>Rechercher</b></a></li>
            <li><a href="Fonctions/supprimer_produit.php"><b>Supprimer</b></a></li>
            <li><a href="Fonctions/modifier_produit.php"><b>Modifier</b></a></li>
        </ul>
    </li>

    <li>
        <a href="commandes.php"><b><img src="images_home/commandes.png" style="height:12.25px;  width:20px; margin-right:6px;" />Commandes</b></a>
        <ul class="submenu">
            <li><a href="Fonctions/ajoute_cmd.php"><b>Ajouter</b></a></li>
            <li><a href="Fonctions/rechercher_cmd.php"><b>Rechercher</b></a></li>
            <li><a href="Fonctions/supprimer_cmd.php"><b>Supprimer</b></a></li>
            <li><a href="Fonctions/modifier_cmd.php"><b>Modifier</b></a></li>
        </ul>
    </li>
</ul>



  <div class="CSSTableGenerator" >
                <table >              
                    <tr>
                    
                        <td >
                        Id client
                        </td>
                        <td>
                         Username
                        </td>
                        <td>
                           Id client
                        </td>
                    </tr>


                      

                      <?php

                       
                         $con=mysqli_connect("localhost:3325","root","","bienvenuegestion");
                         $query = "SELECT * FROM gestion ";
                     if ($result = mysqli_query($con,$query)) {
                           /* Récupère un tableau associatif */
                    while ($rep = mysqli_fetch_assoc($result)) {
                      ?>
                        <tr>
                          <td>
                         <?php echo $rep["numerodetelephone"];?>
                       </td>
                       <td><?php echo $rep["username"]; ?></td>

                       <td>
                         <?php echo $rep["id"];?>
                       </td>

                       
                        <?php }
     mysqli_free_result($result);

     
}
?>

                    

               
                  



                </table>


            </div>




</body>



</html>