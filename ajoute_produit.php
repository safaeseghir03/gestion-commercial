<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Ajouter Produit</title>
   
</style>
  <link rel="stylesheet" type="text/css" href="../css/Bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">




</head>
<style>body{background: pink;}</style>
<?php

$con=mysqli_connect("localhost:3325","root","","bienvenuegestion");


if(isset($_POST['ajoute'])){

$nom=$_POST['nom_produit'];
$prix=$_POST['p_unitaire'];
$qte=$_POST['qte_stocke'];
$query="INSERT INTO produit(nom_produit,p_unitaire,qte_stocke)value('$nom','$prix','$qte')";
    mysqli_query($con,$query);}
//$ref=$_POST['num_ref'];

//ajoute_produit($_POST['nom_produit'],$_POST['p_unitaire'],$_POST['qte_stocke'];


//}



  

//function ajoute_produit($r,$n,$p,$q,$i){
//mysql_query("INSERT INTO produit(nomProduit,prixUnitaire,qteStockee) VALUES($r,'$n',$p,$q,'$i');") or die(mysql_error());
//}

?>
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

   

  



            <form method="POST" action="">
              <div id="formulaire">
<table>

<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
  <td><label><b>Nom Produit :</b></label></td>
<td><input type="texte" name="nom_produit" placeholder="Nom produit" required></td>

</tr>

<tr>
  <td><label><b>Prix Unitaire :</b></label></td>
<td><input type="texte" name="p_unitaire" placeholder="Prix unitaire" required></td>

</tr>

<tr>
  <td><label><b>Quantite stockee :</b></label></td>
<td><input type="texte" name="qte_stocke" placeholder="Quantite stockee" required></td>

</tr>


 <tr><td>
<center><input type="image" src="../images_produits/ajout.png" class="produits" value="Ajouter"  name="ajoute" width="149" height="100"><b style="font-size: 26px; color:maroon;">Ajouter</b> </center> </td> </tr>


</table>

</div>
          
            </form>

</body>

</html>