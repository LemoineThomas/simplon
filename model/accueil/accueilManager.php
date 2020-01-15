<?php


    function verificationLogin($login,$mdp,$users){
        $login = strip_tags($login);
        $mdp = strip_tags($mdp);
        $trouve = false;
        $pos = 0;
        
        do{
            if ($login == $users[$pos][1] && $mdp == $users[$pos][2] ) {

                $trouve = true;
                $_SESSION["connecté"] = 'connecté';
                $_SESSION["id"] = $users[$pos][0];
                if($users[$pos][3] == "admin"){
                    $_SESSION["role"] = 'admin';
                }elseif($users[$pos][3] == "membre"){
                    $_SESSION["role"] = 'membre';
                }else{
                    $_SESSION["role"] = '';
                }

            }

            $pos = $pos + 1;

        }while ($pos < count($users) && !$trouve);

        if ($trouve) {			
            header('Location: index.php');
            exit();
        }else{
            header('Location: index.php?retour=KO');
            exit();
        }
    }


?>