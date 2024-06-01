<?php
require "database.php";

$statement = $pdo->prepare("SELECT h.id_hotel, h.titre, h.adresse, h.prix_par_nuit, h.nombre_de_places, t.type_name FROM h JOIN typehotel t ON h.id_type = t.id_type");
$statement->execute();

$hotels = $statement->fetchAll(PDO::FETCH_ASSOC);

