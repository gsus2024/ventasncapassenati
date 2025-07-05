<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Módulo de Categorias</h1>
        <hr>
        <a href="guardarcategoria.php">Çrear Nuevo</a>
        <table>
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Descripcións</td>
                    <td>Id Familia</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once '../logica/LCategoria.php';
                    $log=new LCategoria();
                    $categorias=$log->cargar();
                    foreach($categorias as $cat){
                ?>
                <tr>
                    <td><?=$cat->getIdCategoria()?></td>
                    <td><?=$cat->getNombre()?></td>
                    <td><?=$cat->getIdFamilia()?></td>
                </tr>
                <?php     
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>