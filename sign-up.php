<?php
          
          if(isset($_POST["action"])){
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $action = $dbh->prepare(
              "INSERT INTO users (fullname, email, password) VALUES (:fullname, :email, :password)"
            );

            if(!$fullname || !$email || !$password){
              $message = "Lütfen formu kontrol edin!";
            }else{
              $action->bindParam(':fullname', $fullname);
              $action->bindParam(':email', $email);
              $action->bindParam(':password', $password);

              if($action->execute()){
                $message = "User created successfully";
              }else{
                $message = "Error creating user";
              }
            }

          }

        ?>