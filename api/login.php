<?php

require_once '../connection.php';


    if(isset($_POST['email'])){    
    $sql = "SELECT * FROM utilisateur  WHERE email_user = :E AND password_user = :P";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam('E', $_POST['email'], PDO::PARAM_STR);
    $stmt->bindParam('P', $_POST['password'], PDO::PARAM_STR);
   // $stmt->bindParam('E', $login, PDO::PARAM_STR);
    //$stmt->bindParam('P', $pass, PDO::PARAM_STR);
    $stmt->execute();

    $res=$stmt->fetch();
    if(isset($res['Id_User'])){
        $res["message"]='ok';    
    }else{
        $res["message"]='non';
            
    }
    
    echo json_encode($res);

}

?>