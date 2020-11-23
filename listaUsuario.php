<?php
    $tipoUsuario = [
        2 => "consultor",
        1 => "usuario"
    ];
    
?>
<tr>
    <td style="width: 427px;"><?=$row['nome']?></td>
    <td style="width: 130px;"><?=$row['usuario']?></td>
    <td style="width: 122px;"><?=$tipoUsuario[$row['tipoConta']]?></td>
    <td style="width: 77px;"><a href="?id=<?=$row['id']?>&alterar=sim">Alterar</a></td>
</tr>