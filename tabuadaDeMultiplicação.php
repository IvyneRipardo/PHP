<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-6 " id="tabuada">
                <header>
                    <h1>Tabuada de Multiplicação</h1>
                </header>
                <main>
                    <form action="#" method="POST">
                        <label> Digite o número a ser multiplicado: </label>
                        <br>
                        <input type="number" name="n1" value=''>
                        <br><br>
                        <button type="submit" class="btn btn-info" id="btn">Multiplicar</button>
                    </form>
                    <br>
                </main>
                <div id="php">
                    <?php
                        if (!empty($_POST['n1'])){
                            $num = $_POST['n1'];
                            for ($i = 1; $i < 11; $i++){
                                echo "$i x $num =".($i * $num);
                                echo "<br>";
                            }
                        }
                    ?>
                </div>

                <br>
            </div>
            
        </div>
    </div>
</body>
<style>
    #tabuada{
        margin-top: 30px;
        border: 5px solid black;
        background: paleturquoise;
        border-radius: 30px;
    }

    #php{
        border: 1px solid black;
        border-radius: 10px;
    }

    body{
        background: linear-gradient(to right, powderblue, palevioletred);
    }

    header {
        padding: 10px;
    }

    #btn{
        color:#fff;
    }
    
    input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
    }
</style>
</html>