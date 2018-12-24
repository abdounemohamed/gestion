

<?php
    require_once("connexion.php");
    $Nom = $_POST["Nom"];
    $Email = $_POST["Email"];
    $Nomphoto = $_FILES["Photo"]["name"];
    $file_tmp_name = $_FILES["Photo"]["tmp_name"]; //recupiration de chemin temporaire de la photo//
    move_uploaded_file($file_tmp_name, "./images/$Nomphoto");// placement de fichier telecharger dans un dossier//
    $req = "insert into etudiants(Nom,mail,photo) values('$Nom','$Email','$Nomphoto')";   //requete sql//
    mysqli_query($connexion,$req);   //execution de la requete//

?>
<html>
<body>

<table border="2">
    <tr>
        <td>Nom</td>
        <td><?php echo ($Nom)?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo ($Email)?></td>
    </tr>
    <tr>
        <td>Photo</td>
        <td><img src="images/<?php echo($Nomphoto)?>"/>  </td>
    </tr>
</table>
</body>
</html>