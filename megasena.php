<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega-Sena</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-6 " id="random">
                <header>
                    <h1>Mega-Sena</h1>
                    <hr>
                </header>
                <main>
                    <form action="#" method="post">
                        <button type="submit" class="btn btn-info" name="botao"> Sortear </button>
                    </form>
                </main>
                <div id="php">
                    <?php
                        if(isset($_POST["botao"])){
                            $numeros = range(1, 60);
                            shuffle($numeros);
                            $sorteio = array_slice($numeros, 0, 6);
                            echo implode(', ', $sorteio);
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    body{
        background: linear-gradient(to right,palevioletred,paleturquoise);
    }
    #random{
        border: 5px solid black;
        box-shadow: 0px 0px 1em #666;
        margin-top: 50px;
        background: papayawhip;
    }
    #php{
        font-size: large;
        border: 1px solid black;
        border-radius: 30px;
        padding: 30x;
        margin: 20px;
    }
</style>
</html>