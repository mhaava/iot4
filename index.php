<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ajaveeb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="graphing.js"></script>
</head>

<body class="bg-light">
  <nav class="navbar navbar-inverse bg-dark">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand text-white" href="#">Chart thing</a>
      </div>
      <div class="navbar-form navbar-left">
          <label for="start" class="text-white">Start date:</label>
          <input type="date" id="start" name="start"
                 value="2019-04-15">
          <label for="start" class="text-white">Stop date:</label>
          <input type="date" id="stop" name="stop"
                 value="2019-05-13">
          <button class="btn btn-warning" onclick="fetchData('default')">Search</button>
          <button class="btn btn-danger" onclick="showChart(0)">Line chart</button>
          <button class="btn btn-success" onclick="showChart(1)">Bar chart</button>
    </div>
    </div>
  </nav>
  <div class="container">
    <canvas id="myChart"></canvas>
  </div>
  <canvas id="myChart2"></canvas>
</body>

</html>
<script>
    fetchData('default')
  //fetchData("default", "2019-04-15 08:23:22", "2019-05-13 07:47:29");
</script>