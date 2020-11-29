<script type="text/javascript">

// Load the Visualization API and the corechart package.
google.charts.load('current', {'packages':['corechart']});

// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(drawChart);

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
function drawChart() {

  // Create the data table.
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Topping');
  data.addColumn('number', 'Slices');
  data.addRows([
    <?php
        // SELECT `status`,COUNT(*) as 'contagem' FROM `ticket` GROUP BY `status`
        global $conexao;

        $nome = $_GET['nome'];

        $sql = "SELECT `status`,COUNT(*) as 'contagem' FROM `ticket` GROUP BY `status`";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                if($row['status'] == 1) {
                    $contagem = $row['contagem'];
                    echo "['abertos', $contagem],";
                } else {
                    $contagem = $row['contagem'];
                    echo "['fechados', $contagem],";
                }
            }
        }    
    ?>
  ]);

  // Set chart options
  var options = {'title':'Chamados abertos e fechados',
                 'width':400,
                 'height':300};

  // Instantiate and draw our chart, passing in some options.
  var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}
</script>


<div id="chart_div" style="width: 364px;margin-left: auto;margin-right: auto;"></div>