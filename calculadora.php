<?php
    $nmr1 = 0;
    $nmr2 = 0;
    $resultado = 0;
    $calculo = 'somar';

    if (isset($_POST["nmr1"],$_POST["nmr2"], $_POST["calculo"])){                           
        $nmr1 = $_POST["nmr1"];
        $nmr2 = $_POST["nmr2"];
        $calculo = $_POST["calculo"];

        switch($calculo){
            case "somar":
                $resultado=$nmr1+$nmr2;
                break;
            case "subtrair":
                $resultado=$nmr1-$nmr2;
                break;
            case "multiplicar":
                $resultado=$nmr1*$nmr2;
                break;
            case "dividir":
                try{
                    $resultado=$nmr1/$nmr2;
                    break;
                }catch(DivisionByZeroError $e) {
                $resultado = "Não se pode dividir por ZERO. Digite um valor válido!!!";
                }
        }
    }

?>                                                        

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-4" id="calculadora">
                <header> 
                    <br>
                    <H1>Calculadora Simples</H1>
                    <hr>
                </header>
                <main>
                    <form method="POST">
                        <label> Digite o primeiro número:</label> <br>
                        <input type="number" name="nmr1" value="<?=$nmr1?>" required>
                        <br>
                        <br>
                        <label>O que deseja fazer?</label> <br>
                        <select name="calculo" required>
                            
                            <option value="somar" <?=($calculo == "somar")?"Selected":"";?>> Somar </option>
                            <option value="subtrair" <?=($calculo == "subtrair")?"Selected":"";?>> Subtrair </option>
                            <option value="multiplicar" <?=($calculo == "multiplicar")?"Selected":"";?>> Multiplicar </option>
                            <option value="dividir" <?=($calculo == "dividir")?"Selected":"";?>> Dividir </option>
                        </select>
                        <br>
                        <br>
                        <label> Digite o segundo número:</label> <br>
                        <input type="number" name="nmr2" value="<?=$nmr2?>" required>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-info" id="btn"> Calcular </button>
                        <br> <br>
                        <div id="resultado">
                            
                            <h4>Resultado:</h4>
                            <h5><?=$resultado?></h5>
                        </div><br>
                    </form> 
                </main>
            </div>
        </div>
    </div>

    <style>
        
        #calculadora{
            margin-top: 20px;
            border: 5px solid black;
            border-radius: 30px;
            background: lightblue;
            box-shadow: 0px 0px 1em #666;
        }
        body{
            background: linear-gradient(to top, powderblue ,plum);
        }
        #resultado{
            border: 1px solid black;
            border-radius: 40px;
        }
        #btn{
            color:#fff;
        }
        input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</body>

</html>