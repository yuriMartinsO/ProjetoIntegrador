<script type="text/javascript">
     google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Funcionários', 'Chamados'],
          ["Funcionario 2", 31],
          ["Funcionario 1", 90],
          ["Funcionario 2", 31],

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