<?php 
include_once "connect.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="assets.css" rel="stylesheet" >
</head>

<?php include 'header.php' ?>

<body>



    <form action="./Env_Resp.php"  method="post">
        <?php
        $query = ("SELECT * from questoes  ORDER BY RAND() 
        LIMIT 10 ");
       $resultado =  mysqli_query($conexao, $query);
        $i = 0;
        while ($linha = mysqli_fetch_array($resultado)) {
           
            $i++;
          
               
            
        ?>

            <div class="card">
                <div class="card-header"> <b> <?= $linha['pergunta'] ?></b> </div>
                <div class="card-body">
                    <div class="group">
                        <label for="a"> A) </label>

                        <input class="form-check-input mt-0" type="radio" name="correta-<?= $i?>" id="a" value="A-<?= $linha['id']?>"> <?= $linha['a'] ?>
                        <br>

                        <label for="b"> B) </label>
                        <input class="form-check-input mt-0" type="radio" name="correta-<?= $i?>" id="b" value="B-<?= $linha['id']?>"> <?= $linha['b'] ?>
                        <br>

                        <label for="c"> C) </label>
                        <input class="form-check-input mt-0" type="radio" name="correta-<?= $i?>" id="c" value="C-<?= $linha['id']?>"> <?= $linha['c'] ?>

                        <br>
                        <label for="d"> D) </label>
                        <input class="form-check-input mt-0" type="radio" name="correta-<?= $i?>" id="d" value="D-<?= $linha['id']?>"> <?= $linha['d'] ?>
                        <br>

                        <label for="e"> E) </label>
                        <input class="form-check-input mt-0" type="radio" name="correta-<?= $i?>" id="e" value="E-<?= $linha['id']?>"> <?= $linha['e'] ?>




                    </div>
                </div>
            </div>
            <?php //}
            }
       
?>
           <button type="submit" class="btn btn-success"> Enviar </button>

    </form>
  
</body>





</html>