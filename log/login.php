<?php
  
  //connessione al db
  require_once ("config.php");


  $username = $connessione->real_escape_string($_POST["username"]);
  $password = $connessione->real_escape_string($_POST["password"]);


 if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $sql = "SELECT username, password FROM utenti WHERE username ='$username'";
   
    if($result = $connessione->query($sql)){
      if($result->num_rows == 1 ){
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if (password_verify($password, $row["password"])){
            session_start();

            $_SESSION["id"] = $row["id_utente"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["loggato"] = true;

            header("location: area-privata.php");
        } else {
            echo "Password errata";

        }

    } else{
          echo "Username errato";
      }
    } else {
        echo "Errore in fase di login";
    }

 }
  




  $connessione->close();
?>
