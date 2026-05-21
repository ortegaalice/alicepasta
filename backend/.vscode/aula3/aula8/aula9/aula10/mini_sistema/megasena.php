<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style> 
    body {
        font-family: Arial, sans-serif;
        background-color: #c5ced1;
        margin: 0;
        padding: 0;
    }

    .container{
        width: 400px;
        margin: 80px auto;
        background-color: rgb(58, 182, 182);
        padding: 25px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    }
    
    h1{
        color: white;
    }

    p{
        font-size: 22px;
        color: white;
        font-weight: bold;
    }

    button{
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        background-color: white;
        color: rgd(58, 182, 182);
        font-size: 16px;
    }

    button:hover{
        background-color: #eeeeee;
    }
    </style>
    </head>
    <body>
        <div class="container">
            <h1>Sorteador mega-sena</h1>

            <?php
             $numeros = [];
                while(count($numeros) < 6){
                    
                $sorteio = mt_rand(1,60);

                if(!in_array($sorteio, $numeros)){
                    $numeros[] = $sorteio;
                }
                }

                echo "<p>";

                foreach($numeros as $numero){

                if($numero <10){
                    echo "0" . $numero . " - ";
                }else{
                    echo $numero . " - ";
                }
                }

         echo "</p>";
         ?>

         <form method="post">
            <button type= "submit"> Sortear novamente</button>
</form>
</div>
    </body>
</html>