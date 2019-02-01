
<?php
include("connection_PDO.php");
$sql = 'SELECT * FROM liste WHERE ID='.$_SESSION['identifiant'];
$req = $conn->query( $sql );
$donnees = $req->fetch();

?>


  