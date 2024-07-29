<?php
    $easy = 0;
    $average = 0;
    $difficult = 0;

    $select_easy = $conn->prepare("SELECT score FROM `test_results` WHERE test_language = ? AND test_level = ?");
    $select_easy->execute([$language, 'easy']);
    $scores_easy = $select_easy->fetchAll(PDO::FETCH_COLUMN);
    $sum_of_easy_scores = array_sum($scores_easy);

    $select_average = $conn->prepare("SELECT score FROM `test_results` WHERE test_language = ? AND test_level = ?");
    $select_average->execute([$language, 'average']);
    $scores_average = $select_average->fetchAll(PDO::FETCH_COLUMN);
    $sum_of_average = array_sum($scores_average);

    $sum_of_average_scores = $sum_of_average;

    $select_difficult = $conn->prepare("SELECT score FROM `test_results` WHERE test_language = ? AND test_level = ?");
    $select_difficult->execute([$language, 'difficult']);
    $scores_difficult = $select_difficult->fetchAll(PDO::FETCH_COLUMN);
    $sum_of_difficult = array_sum($scores_difficult);

    $sum_of_difficult_scores = $sum_of_difficult;

    
   ?>
<script>
    var chartColors = {
  red: "rgb(255, 99, 132)",
  orange: "rgb(255, 159, 64)",
  yellow: "rgb(255, 205, 86)",
  green: "rgb(75, 192, 192)",
  info: "#41B1F9",
  blue: "#3245D1",
  purple: "rgb(153, 102, 255)",
  grey: "#EBEFF6",
}


var ctxBar = document.getElementById("bar").getContext("2d")
var myBar = new Chart(ctxBar, {
  type: "bar",
  data: {
    labels: ["Easy", "Average", "Difficult"],
    datasets: [
      {
        label: "Scores",
        backgroundColor: [
          
          chartColors.info,
          chartColors.purple,
          chartColors.blue,
        ],
        data: [<?= $sum_of_easy_scores ?>, <?= $sum_of_average_scores ?>, <?= $sum_of_difficult_scores ?>],
      },
    ],
  },
  options: {
    responsive: true,
    barRoundness: 1,
    title: {
      display: true,
      text: "Test Scores",
    },
    legend: {
      display: false,
    },
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: true,
            suggestedMax: 40 + 20,
            padding: 10,
          },
          gridLines: {
            drawBorder: false,
          },
        },
      ],
      xAxes: [
        {
          gridLines: {
            display: false,
            drawBorder: false,
          },
        },
      ],
    },
  },
})
</script>