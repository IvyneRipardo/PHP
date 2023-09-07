<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Par</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-6 " id="contador">
                <header>
                    <h1>Contador de Números Pares</h1>
                </header>
                <main>
                    <form action="#" method="POST">
                        <label> Digite o valor final: </label>
                        <br>
                        <input type="number" name="n1">
                        <br><br>
                        <input type="submit" value="Enviar">
                    </form>
                    <br>
                </main>
                <?php
                    $num = 0;
                    $resultado = "";
                    if(isset($_POST['n1'])){
                        $num = $_POST['n1'];
                        for ($i=0; $i <= $num; $i++){
                            if ($i % 2 ==0){
                                $resultado = "$resultado,  ".$i;
                            }
                        }
                        $resultado = substr($resultado, 1);
                    } else{
                        $resultado = '0';
                    }
                ?>
                <div id="resultado">
                    <h4> Os número pares de 0 a <?=$num?> são: </h4>
                    <h5><?=$resultado?></h5>
                </div>
                <br>
            </div>
            
        </div>
    </div>
</body>
<style>
    body{
        background: linear-gradient(to right, paleturquoise, white);
    }
    #contador{
        margin-top: 10%;
        border: 5px solid black;
        border-radius: 30px;
        background: paleturquoise;
    }
    #resultado{
        padding: 10px;
        border: 1px solid black;
        border-radius: 30px;
    }
    input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
    }
</style>
</html>

