<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PA - Enésimo</title>
    <link rel="stylesheet" href="../css/bootstrap-responsive.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style>
        body{
            background-color:grey;
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
                <input type="number" name="a1" id="numero" placeholder="A1/Termo Inicial"><br>
                <input type="number" name="n" id="numero" placeholder="N/Posição do termo"><br>
                <input type="number" name="r" id="numero" placeholder="Razão"><br>
                <input type="submit" value="Enviar" class="btn btn-primary" name="enviar"><br>
                <a href="../index.php"><input type="button" class="btn btn-primary" value="Retornar ao Início"></a><br>
                <?php
                    if(isset($_GET['enviar'])){
                        $val = array(
                            $_GET['a1'],
                            $_GET['n'],
                            $_GET['r']
                        );
                        
                        function paan($a1, $n, $r){
                            $val = array(
                                $_GET['a1'],
                                $_GET['n'],
                                $_GET['r']
                            );
                            
                            $pos = $_GET['n'];
                            $an = $val[0] + ($val[1] - 1)*$val[2];
                            echo "O valor do termo da posição $pos é: " . $an;
                        };
                        paan($val[0], $val[1], $val[2]);
                    }
                ?>
            </form>
        </div>
    </div>
    </div>
</body>
</html>
