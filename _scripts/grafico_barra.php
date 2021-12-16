<?php
include "config.php";
$sql = "SELECT
'Card1' as dt,
COUNT(nome) as total
FROM card1
order by DATE(data_criacao)";
$query = $mysqli->query($sql);
while ($dados = $query->fetch_array()){ //Pega a query do Banco de Dados, transforma em um array e joga dentro da variável $dados
    $geral[] = array("country"=>implode("-",array_reverse(explode("-",$dados["dt"]))), "visits"=>$dados["total"]); //A posição "country" terá os dados de "dt" e a posição "visits" terá os dados de "total"
                //O implode pegará o array e transformará em texto, separado pelo "-". O array reverse fará com que ela fique ao contrário (a data brasileira, no caso) e o explode fará com que volte a ser um array
}

$dados_g = json_encode($geral); //Cria a variável $dados_g e chama a função json_encode, que transforma o array em um json. 
?>

<script language="javascript">
var chart = AmCharts.makeChart( "chartdiv", {
    "type": "serial",
    "theme": "none",
    "dataProvider": <?php echo $dados_g;?>,
    "valueAxes": [ {
      "gridColor": "#FFFFFF",
      "gridAlpha": 0.2,
      "dashLength": 0
    } ],
    "gridAboveGraphs": true,
    "startDuration": 1,
    "graphs": [ {
      "balloonText": "[[category]]: <b>[[value]]</b>",
      "fillAlphas": 0.8,
      "lineAlpha": 0.2,
      "type": "column",
      "valueField": "visits"
    } ],
    "chartCursor": {
      "categoryBalloonEnabled": false,
      "cursorAlpha": 0,
      "zoomable": false
    },
    "categoryField": "country",
    "categoryAxis": {
      "gridPosition": "start",
      "gridAlpha": 0,
      "tickPosition": "start",
      "tickLength": 20
    },
    "export": {
      "enabled": true
    }
  
  } );
  </script>





