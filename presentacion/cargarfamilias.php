<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Módulo de Familias</h1>
        <hr>
        <a href="guardarfamilia.php">Crear Nuevo</a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once '../logica/LFamilia.php';
                    $log=new LFamilia();
                    $familias=$log->cargar();
                    foreach($familias as $fam){
                ?>
                <tr>
                    <td><?=$fam->getIdFamilia()?></td>
                    <td><?=$fam->getNombre()?></td>
                    <td><?=$fam->getDescripcion()?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>