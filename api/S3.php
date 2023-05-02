<?php
 require_once '../connection.php';


 $sql = "SELECT e.NOM_USER,e.PRENOM_USER,e.EMAIL_USER,a.ETAT,a.STATUT,s.date_D,s.date_F,el.NOM_ELEMENT
  
  FROM groupe g join etudiant e join absence a join seance s join element el  where ID_SEMESTRE=2 and g.ID_FILIERE_ = e.ID_FILIERE_ and a.Etat='absent' and a.Id_User = e.Id_User and a.ID_SEANCE=s.ID_SEANCE and s.Id_User=el.Id_User" ;
 $stmt = $pdo->prepare($sql);
 $stmt->execute();
 $resq = $stmt->fetchAll();

 echo json_encode($resq);



?>