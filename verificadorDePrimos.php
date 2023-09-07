<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-4 " id="verificador">
                <header>
                    <h1>Verificador de Números Primos</h1>
                </header>
                <main>
                    <form action="#" method="POST">
                        <label for="num"> Digite o número:</label><br>
                        <input type="number" name="num" id="num"><br><br>
                        <button type="submit" class="btn btn-info" id="btn">Verificar</button>
                    </form>
                </main>
                <div id="php">
                    <?php 
                        if(!empty($_POST['num'])){
                            $num = $_POST['num'];
                            $cont = 0;
                            for ($i = 1; $i <= $num; $i++){
                                if($num % $i == 0){
                                    $cont++;
                                }
                            }

                            if ($cont == 2){
                                echo "O número é primo";
                            }else {
                                echo "O número não é primo";
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
        background: linear-gradient(to right,palevioletred, plum);
    }

    #verificador{
        background: linear-gradient(to top, white, paleturquoise);
        border: 5px solid black;
        border-radius: 10px;
        margin-top: 50px;
        padding: 10px;
    }

    input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
    }

    #php{
        margin: 10px;
        padding: 10px;
        border: 2px solid black;
        border-radius: 30px;
    }

</style>
</html>