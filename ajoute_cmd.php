<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Ajouter Commande</title>
  <link rel="stylesheet" type="text/css" href="../css/Bootstrap.css">
   <link rel="stylesheet" href="../css/style.css">



</head>

<style>
  .btn{
  background:none;
  width:150px;
  height:70px;
  border: 4px solid #45aaf2;
  font-size:30px;   
  font-weight:bold;
  color :#45aaf2;
  transition:.4s linear;
  position:relative;
  cursor: pointer;
}
.btn:hover{
  color:white;
}
body{background: pink;}</style>


<?php

$con=mysqli_connect("localhost:3325","root","","bienvenuegestion");




if(isset($_POST['ajoute'])) {
  $num_cmd=$_POST['num_cmd'];
  $num_client=$_POST['num_client'];
  $date_cmd=$_POST['date_cmd'];
  $query="INSERT INTO comande(num_cmd,num_client,date_cmd)values('$num_cmd','$num_client','$date_cmd')";
  mysqli_query($con,$query);

}










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
              
<table>
  <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
  <td><label><b>Numero Commande :</b></label></td>
<td><input type="texte" name="num_cmd" placeholder="Numero commande" required></td>
</tr>

<tr>
  <td><label><b>Numero Client :</b></label></td>
<td><input type="texte" name="num_client" placeholder="Numero client" required></td>

</tr>

<tr>
  <td><label><b>Date Commande</b></label></td>
<td><input type="texte" name="date_cmd" placeholder="Date commande" required></td>

</tr>

<tr><td>
<center><button class="btn" type="submit" name="ajoute">ajoute</button> </center> </td> </tr>


</table>

          
            </form>





</body>
</html>