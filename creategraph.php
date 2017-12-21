<?php

include('model.php');
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/creategraph.css">
</head>
<body>

  <select onchange="setDataSet(this.options[this.selectedIndex].value);">
  <option value="/home/rahul/results.json">Data Set #1</option>
  </select>

<div id="chartdiv"></div>
</body>
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js"></script>
</html>



<?php

$user= $db->User;
  $cursor = $user->aggregate(array(array('$unwind' => '$user_orders'), array('$group' => array('_id' => '$user_orders.order_date', 'amt' => array('$sum' => '$user_orders.total')))));
  $data =  json_encode($cursor['result']);

  $fp = fopen('/home/rahul/results.json', 'w') or die("Unable to open file!");
fwrite($fp, $data) ;
fclose($fp);
 echo '<script>';
 echo '
 var chart = AmCharts.makeChart("chartdiv", {
  "type": "serial",
  "dataLoader": {
    "url": "/home/rahul/results.json"
  },
  "valueAxes": [{
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  }],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [{
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "_id"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "amt",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  }
});

function setDataSet(dataset_url) {
  AmCharts.loadFile(dataset_url, {}, function(data) {
    chart.dataProvider = AmCharts.parseJSON(data);
    chart.validateData();
  });
}';

echo '</script>';
?>
