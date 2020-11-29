<script type="text/javascript">
     google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

//SELECT `ticket`.`usuario`, `usuario`.nome ,COUNT(*) as 'contagem' FROM `ticket` join `usuario` on `ticket`.`usuario`=`usuario`.`id` GROUP BY `ticket`.`usuario`

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Funcionários', 'Chamados'],
          <?php
        // SELECT `status`,COUNT(*) as 'contagem' FROM `ticket` GROUP BY `status`
        global $conexao;

        $nome = $_GET['nome'];

        $sql = "SELECT `ticket`.`usuario`, `usuario`.nome ,COUNT(*) as 'contagem' FROM `ticket` join `usuario` on `ticket`.`usuario`=`usuario`.`id` GROUP BY `ticket`.`usuario`";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $nome = $row['nome'];
                $contagem = $row['contagem'];
                echo "['$nome', $contagem],";
            }
        }    
        ?>
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'Chamados abertos por usuários'
            },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_values'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
</script>
<div id="columnchart_values" style="height: 600px;margin-left: auto;margin-right: auto;"></div>