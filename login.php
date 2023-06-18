<?php
                    
          if(isset($_POST["action"])){
            $email = $_POST["email"];
            $password = $_POST["password"];

            $response = $dbh->query(
              "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'"
            )->fetch(PDO::FETCH_ASSOC);

            if(!$response){
              $message = "Email or password is wrong!";
            } else {
              // Oturumu burada açalım
              $message = "Login successful";

              $_SESSION["auth"] = true;
              $_SESSION["user"] = [
                "id" => $response["id"],
                "fullname" => $response["fullname"],
                "email" => $response["email"],
              ];

              header("refresh:1; url=$base_url/home.php");
            }
          } 
        
        ?>