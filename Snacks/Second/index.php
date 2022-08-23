<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Secondo Iscrizione utente</title>
    </head>

    <body>
        <h1>Registrazione necessaria</h1>
        <!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
        che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
        Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

        <?php
            $name = $_GET['name'];
            $email = $_GET['email'];
            $age = $_GET['age'];

            if (strlen($name) > 3 && strpos($email, '@') !== false && strpos($email, '.') !== false && is_numeric($age) > 17) {
                echo "<h4>Benvenuto!" . $name . "</h4>";
            } else {
                echo "<h4>ERRORE, ritentare. Inserisci Nome Mail ed Età</h4>";
            }
        ?>
        
        
    </body>
</html>