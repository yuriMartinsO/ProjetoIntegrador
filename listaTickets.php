<?php
    $status = [
        1 => 'aberto',
        0 => 'fechado'
    ];
?>

<tr>
    <td><?=$row['id']?></td>
    <td><?=$row['dataInicio']?></td>
    <td><?=$row['nomeContato']?></td>
    <td><?=$row['titulo']?></td>
    <td><?=$status[$row['status']]?></td>
    <td><a href="?alterar=sim&id=<?=$row['id']?>">Alterar</a></td>
</tr>