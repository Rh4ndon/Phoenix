<?php
include 'models/connection.php';

$select_easy_results = $conn->prepare("SELECT SUM(score) AS score_sum FROM `test_results` WHERE student_id = ? AND test_level = 'easy'");
$select_easy_results->execute([$session_id]);

$select_average_results = $conn->prepare("SELECT SUM(score) AS score_sum FROM `test_results` WHERE student_id = ? AND test_level = 'average'");
$select_average_results->execute([$session_id]);

$select_difficult_results = $conn->prepare("SELECT SUM(score) AS score_sum FROM `test_results` WHERE student_id = ? AND test_level = 'difficult'");
$select_difficult_results->execute([$session_id]);


if($select_easy_results->rowCount() > 0){   
    $row_easy_results = $select_easy_results->fetch(PDO::FETCH_ASSOC);

    $easy = $row_easy_results['score_sum'];

    $easy_result = ($easy / 36)*100;

}else{
    $easy_result = 0;
}

if($select_average_results->rowCount() > 0){   
    $row_average_results = $select_average_results->fetch(PDO::FETCH_ASSOC);

    $average = $row_average_results['score_sum'];

    $average_result = ($average / (54))*100;

}else{
    $average_result = 0;
}

if($select_difficult_results->rowCount() > 0){   
    $row_difficult_results = $select_difficult_results->fetch(PDO::FETCH_ASSOC);

    $difficult = $row_difficult_results['score_sum'];

    $difficult_result = ($difficult / (72))*100;

}else{
    $difficult_result = 0;
}

?>

<script>

var easyGradeOptions = {
  series: [<?= $easy_result ?>],
  chart: {
    height: 350,
    type: "radialBar",
    toolbar: {
      show: true,
    },
  },
  plotOptions: {
    radialBar: {
      startAngle: -135,
      endAngle: 225,
      hollow: {
        margin: 0,
        size: "70%",
        background: "#fff",
        image: undefined,
        imageOffsetX: 0,
        imageOffsetY: 0,
        position: "front",
        dropShadow: {
          enabled: true,
          top: 3,
          left: 0,
          blur: 4,
          opacity: 0.24,
        },
      },
      track: {
        background: "#fff",
        strokeWidth: "67%",
        margin: 0, // margin is in pixels
        dropShadow: {
          enabled: true,
          top: -3,
          left: 0,
          blur: 4,
          opacity: 0.35,
        },
      },

      dataLabels: {
        show: true,
        name: {
          offsetY: -10,
          show: true,
          color: "#888",
          fontSize: "17px",
        },
        value: {
          formatter: function (val) {
            return parseInt(val)
          },
          color: "#111",
          fontSize: "36px",
          show: true,
        },
      },
    },
  },
  fill: {
    type: "gradient",
    gradient: {
      shade: "dark",
      type: "horizontal",
      shadeIntensity: 0.5,
      gradientToColors: ["#ABE5A1"],
      inverseColors: true,
      opacityFrom: 1,
      opacityTo: 1,
      stops: [0, 100],
    },
  },
  stroke: {
    lineCap: "round",
  },
  labels: ["Percent"],
}

var averageGradeOptions = {
  series: [<?= $average_result ?>],
  chart: {
    height: 350,
    type: "radialBar",
    toolbar: {
      show: true,
    },
  },
  plotOptions: {
    radialBar: {
      startAngle: -135,
      endAngle: 225,
      hollow: {
        margin: 0,
        size: "70%",
        background: "#fff",
        image: undefined,
        imageOffsetX: 0,
        imageOffsetY: 0,
        position: "front",
        dropShadow: {
          enabled: true,
          top: 3,
          left: 0,
          blur: 4,
          opacity: 0.24,
        },
      },
      track: {
        background: "#fff",
        strokeWidth: "67%",
        margin: 0, // margin is in pixels
        dropShadow: {
          enabled: true,
          top: -3,
          left: 0,
          blur: 4,
          opacity: 0.35,
        },
      },

      dataLabels: {
        show: true,
        name: {
          offsetY: -10,
          show: true,
          color: "#888",
          fontSize: "17px",
        },
        value: {
          formatter: function (val) {
            return parseInt(val)
          },
          color: "#111",
          fontSize: "36px",
          show: true,
        },
      },
    },
  },
  fill: {
    type: "gradient",
    gradient: {
      shade: "dark",
      type: "horizontal",
      shadeIntensity: 0.5,
      gradientToColors: ["#ABE5A1"],
      inverseColors: true,
      opacityFrom: 1,
      opacityTo: 1,
      stops: [0, 100],
    },
  },
  stroke: {
    lineCap: "round",
  },
  labels: ["Percent"],
}

var difficultGradeOptions = {
  series: [<?= $difficult_result ?>],
  chart: {
    height: 350,
    type: "radialBar",
    toolbar: {
      show: true,
    },
  },
  plotOptions: {
    radialBar: {
      startAngle: -135,
      endAngle: 225,
      hollow: {
        margin: 0,
        size: "70%",
        background: "#fff",
        image: undefined,
        imageOffsetX: 0,
        imageOffsetY: 0,
        position: "front",
        dropShadow: {
          enabled: true,
          top: 3,
          left: 0,
          blur: 4,
          opacity: 0.24,
        },
      },
      track: {
        background: "#fff",
        strokeWidth: "67%",
        margin: 0, // margin is in pixels
        dropShadow: {
          enabled: true,
          top: -3,
          left: 0,
          blur: 4,
          opacity: 0.35,
        },
      },

      dataLabels: {
        show: true,
        name: {
          offsetY: -10,
          show: true,
          color: "#888",
          fontSize: "17px",
        },
        value: {
          formatter: function (val) {
            return parseInt(val)
          },
          color: "#111",
          fontSize: "36px",
          show: true,
        },
      },
    },
  },
  fill: {
    type: "gradient",
    gradient: {
      shade: "dark",
      type: "horizontal",
      shadeIntensity: 0.5,
      gradientToColors: ["#ABE5A1"],
      inverseColors: true,
      opacityFrom: 1,
      opacityTo: 1,
      stops: [0, 100],
    },
  },
  stroke: {
    lineCap: "round",
  },
  labels: ["Percent"],
}

var easyGrade = new ApexCharts(
  document.querySelector("#easyGrade"),
  easyGradeOptions
)
var averageGrade = new ApexCharts(
  document.querySelector("#averageGrade"),
  averageGradeOptions
)
var difficultGrade = new ApexCharts(
  document.querySelector("#difficultGrade"),
  difficultGradeOptions
)

easyGrade.render()
averageGrade.render()
difficultGrade.render()



</script>