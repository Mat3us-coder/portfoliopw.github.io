<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PA - Primeiro Termo</title>
    <link rel="stylesheet" href="../css/bootstrap-responsive.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style>
        body{
            background-color:gray;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="span4"></div>
            <div class="span4">
            <h1>Atribua Seus Valores</h1>
            <form action="" method="get">
                <input type="number" name="an" id="numero" placeholder="AN/Último Termo"><br>
                <input type="number" name="n" id="numero" placeholder="N/Última Posição"><br>
                <input type="number" name="r" id="numero" placeholder="Razão"><br>
                <input type="submit" value="Enviar" class="btn btn-primary" name="enviar"><br>
                <a href="../index.php"><input type="button" class="btn btn-primary" value="Retornar ao Início"></a>
                <?php
                    if(isset($_GET['enviar'])){
                        $val = array(
                            $_GET['an'],
                            $_GET['n'],
                            $_GET['r']
                        );
                        $a1 = 0;
                        
                        function paa1($a1, $n, $r, $an){
                            $val = array(
                                $_GET['an'],
                                $_GET['n'],
                                $_GET['r']
                            );
                            $a1 = $val[0] - ($val[1] - 1)*$val[2];
                            echo "O valor do seu Primeiro Termo é ". $a1;
                        };
                        paa1($val[0], $val[1], $val[2], $a1);
                    }
                ?>
            </form>
        </div>
    </div>
    </div>
</body>
</html>
