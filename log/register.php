<?php
  
  //connessione al db
  require_once ("config.php");


  $email = $connessione->real_escape_string($_POST["email"]);
  $username = $connessione->real_escape_string($_POST["username"]);
  $password = $connessione->real_escape_string($_POST["password"]);
  $password_hashed = password_hash($password,PASSWORD_DEFAULT);

  if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $sql = "INSERT INTO utenti (email, username, password) VALUES ('$email','$username','$password_hashed')";

    if($connessione->query($sql) === true){
      echo "Registrazione effettuata";    
    } else {
      echo ("Errore con la query $sql" . $connessione->error);
    }

    // if ($stm = $connessione->prepare($sql)){
    //   $stm->bind_param("sss", $email, $username, $password_hashed);
    //   $stm->execute();
    //   echo ("registrazione avvenuta con successo");
  
    // } else{
    //   die("Errore inserimento: " .$connessione->error);
    // }
  
  
  }

  // $stm->close();
  $connessione->close();
  
?>
