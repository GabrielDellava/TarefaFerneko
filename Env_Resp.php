<?php
include 'connect.php';
include 'header.php';
$respostas = $_POST;

foreach ($respostas as $item) {

    $letra = (substr($item, 0, 1));
    $id = (substr($item, 2, 5));

    $resultado = mysqli_query($conexao, "select * from questoes where id = {$id}");
    $resultado = mysqli_fetch_array($resultado);


?>


    <head>
        <link href="assets.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <div class="card border-dark mb-3" >
        <div class="card-header" > <b> <?= $resultado['pergunta'] ?></b> </div>
        <div class="card-body text-dark">
            <div class="group">

            <label for="a"> A) </label>
                <input class="form-check-input mt-0" type="radio" disabled <?php if ($letra == 'A') { ?> checked <?php } ?> name="correta-<?= $resultado['id'] ?>" id="a" value="A"> <b> <?= $resultado['a'] ?>   </b>
             
                <br>

                <label for=" b"> B) </label>
                <input class="form-check-input mt-0" type="radio" disabled <?php if ($letra == 'B') {?> checked <?php } ?>name="correta-<?= $resultado['id'] ?>" id="b" value="B"> <b> <?= $resultado['b'] ?>   </b>
                
                <br>

                <label for="c"> C) </label>
                <input class="form-check-input mt-0" type="radio" disabled<?php if ($letra == 'C') { ?> checked <?php } ?>name="correta-<?= $resultado['id'] ?>" id="c" value="C"> <b> <?= $resultado['c'] ?>  </b>
               

                <br>
                <label for="d"> D) </label>
                <input class="form-check-input mt-0" type="radio" disabled <?php if ($letra == 'D') { ?> checked <?php } ?> name="correta-<?= $resultado['id'] ?>" id="d" value="D"> <b> <?= $resultado['d'] ?> </b>
                
                <br>

                <label for="e"> E) </label>
                <input class="form-check-input mt-0" type="radio" disabled <?php if ($letra == 'E') { ?> checked <?php } ?>name="correta-<?= $resultado['id'] ?>" id="e" value="E"> <b> <?= $resultado['e'] ?>  </b>
               

            </div>
            <?php if ($letra == $resultado['correta']) { ?>
              <hr>
                <div class="alert alert-success"  role="alert">
                <b>   Acertou </b>
                </div>
            <?php } else { ?>
                <hr>
                <div class="alert alert-danger"   role="alert">
                    <b> Resposta Incorreta: <?php echo $resultado['correta'] ?> </b>
                </div>
            <?php } ?>
        </div>
    </div>






<?php     

}

?>