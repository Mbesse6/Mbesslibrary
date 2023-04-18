<?php
    $nom = $prenom = $email = $tel = "";
    $nomError = $prenomError = $emailError = $telError = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = checkInput($_POST["nom"]);
        $prenom = checkInput($_POST["prenom"]);
        $email = checkInput($_POST["email"]);
        $tel = checkInput($_POST["tel"]);

        if (empty($nom)) {
            $nomError = 'Je veux votre nom';
         }
          if (empty($prenom)) {
             $prenomError = 'Je veux votre prenom';
          }
          if (empty($email)) {
             $emailError = 'Je veux votre email';
          }
          if (empty($tel)) {
             $telError = 'Je veux votre tel';
          }
          
    }
    function checkInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 ?>


