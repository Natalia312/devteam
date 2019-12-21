<?php
$this->title = 'My first chart';

$script = <<< JS
var densityCanvas = document.getElementById("speedChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'Кол-во человек',
  data: [20522, 20398, 20283, 20191, 20085, 19812, 15596, 18858, 19755, 20747, 20695, 20581 ],
  backgroundColor: [
    'rgba(0, 99, 132, 0.6)',
    'rgba(30, 99, 132, 0.6)',
    'rgba(60, 99, 132, 0.6)',
    'rgba(90, 99, 132, 0.6)',
    'rgba(120, 99, 132, 0.6)',
    'rgba(150, 99, 132, 0.6)',
    'rgba(180, 99, 132, 0.6)',
    'rgba(210, 99, 132, 0.6)',
    'rgba(240, 99, 132, 0.6)',
    'rgba(210, 99, 132, 0.6)',
    'rgba(180, 99, 132, 0.6)',
    'rgba(150, 99, 132, 0.6)',
  ],
  borderColor: [
    'rgba(0, 99, 132, 1)',
    'rgba(30, 99, 132, 1)',
    'rgba(60, 99, 132, 1)',
    'rgba(90, 99, 132, 1)',
    'rgba(120, 99, 132, 1)',
    'rgba(150, 99, 132, 1)',
    'rgba(180, 99, 132, 1)',
    'rgba(210, 99, 132, 1)',
    'rgba(240, 99, 132, 1)',
    'rgba(210, 99, 132, 1)',
    'rgba(180, 99, 132, 1)',
    'rgba(150, 99, 132, 1)',

  ],
  borderWidth: 2,
  hoverBorderWidth: 0
};

var chartOptions = {
  scales: {
    yAxes: [{
      barPercentage: 0.5
    }]
  },
  elements: {
    rectangle: {
      borderSkipped: 'left',
    }
  }
};

var barChart = new Chart(densityCanvas, {
  type: 'horizontalBar',
  data: {
    labels: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август","Сентябрь","Октябрь","Ноябрь","Декабрь"],
    datasets: [densityData],
  },
  options: chartOptions
});

JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>

<div id="my-chart">
	<h1><?= $this->title ?></h1>

	<canvas id="speedChart" width="600" height="400"></canvas>
</div>