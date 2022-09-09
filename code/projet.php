<?php
if (isset($_REQUEST['myFunction']) && $_REQUEST['myFunction'] != '') {
    $_REQUEST['myFunction']($_REQUEST);
}


function afficherProjet($data)
{
    try {
        require('config/fonctions.php');
        $idProjet = $data['myParams']['idProjet'];
        $getInfoProjet = $conn->prepare('SELECT idProjet, nomProjet, descriptionProjet, rstScolaire, lgProg FROM mesprojets where idProjet =:idProjet');
        $getInfoProjet->bindParam(':idProjet', $idProjet, PDO::PARAM_STR, 50);
        $getInfoProjet->execute();
        $rs = $getInfoProjet->fetchAll(PDO::FETCH_ASSOC);
        echo utf8_encode(json_encode($rs));
    } catch (PDOException $e) {
    }
}
?>