<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regressiva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-6 " id="contador">
                <header><h1>Contagem Regressiva</h1></header>
                <main>
                    <form action="#" method="post">
                        <label for="num">Digite o número:</label><br>
                        <input type="number" name="num" id="num"><br>
                        <button type="submit" class="btn btn-info" id="btn"> Enviar </button>
                    </form>
                </main>
                <div id="php">
                    <?php
                        if(!empty($_POST['num'])){
                            $num = $_POST['num'];
                            $cont = 0;
                            echo "Contagem Regressiva, começa em.....";
                            while($num!=0){
                                $cont = $num;
                                $num--;
                                echo "<br>".$cont;
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    body{
        background: linear-gradient(to right, paleturquoise, white);
    }
    #contador{
        margin-top: 70px;
        border: 5px solid black;
        background: paleturquoise;
    }
    #php{
        border: 1px solid black;
        border-radius: 30px;
        padding: 10px;
    }
    input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
    }
    #btn,#num{
        margin: 5px;
    }
</style>
</html>