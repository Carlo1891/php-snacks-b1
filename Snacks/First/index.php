<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Primo Snack Basket</title>
    </head>

    <body>
        <h1>Calendario stagione</h1>
        <!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60 -->

        <?php

        $teams = [
            [
                "firstTeam" => "Olimpia Milano",
                "secondTeam" => "Cantù",
                "firstScore" => "55",
                "secondScore" => "60",
            ],
            [
                "firstTeam" => "AS Roma",
                "secondTeam" => "SS Lazio",
                "firstScore" => "70",
                "secondScore" => "60",
            ],
            [
                "firstTeam" => "Chicago Bulls",
                "secondTeam" => "LS Lakers",
                "firstScore" => "60",
                "secondScore" => "60",
            ],
            [
                "firstTeam" => "All Blacks",
                "secondTeam" => "Italy",
                "firstScore" => "100",
                "secondScore" => "20",
            ]
        ];

        for ($index = 0; $index < count ($teams); $index ++) {
            $games = "<h2>" . $teams[$index]["firstTeam"] . " VS " . $teams[$index]["secondTeam"] . "-" . $teams[$index]["firstScore"] . "-" . $teams[$index]["secondScore"] . "</h2>";
            echo $games;
        }
        
    ?>
        
        
    </body>
</html>