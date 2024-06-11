<?php require_once('datamanager.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Desplegable y Gráfico</title>
    <style>
        header {
            text-align: center;
        }

        nav {
            width: 90%;
            margin: 2rem auto;
        }

        nav ul {
            background: #333;
            border-radius: 3px;
            box-shadow: 0 -3px #000 inset, 0 1px #444 inset, 0 2px #666 inset;
            height: 2.5rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            float: left;
        }

        nav ul li a {
            box-shadow: 1px 0 rgba(0, 0, 0, .8), 2px 0 rgba(255, 255, 255, .1);
            color: #fff;
            display: block;
            font-family: Verdana;
            font-size: .8rem;
            line-height: 2.5rem;
            padding: 0 2rem;
            text-decoration: none;
        }

        nav ul li a:hover {
            background: rgba(0, 0, 0, .4);
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 1rem;
        }

        .chart-container {
            position: relative;
            height: 400px;
            width: 100%;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Menu desplegable con CSS puro</h1>
    <nav>
        <ul>
            <li><a href="#">Item 1</a></li>
            <li><a href="#">Item 2</a></li>
            <li><a href="#">Item 3</a></li>
            <li><a href="#">Item 4</a></li>
            <li><a href="#">Item 5</a></li>
            <li><a href="#">Item 6</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="chart-container">
            <canvas id="myChart"></canvas>
        </div>
        <div>
            <button onclick="alignTitle('start')">Title Alignment: start</button>
            <button onclick="alignTitle('center')">Title Alignment: center (default)</button>
            <button onclick="alignTitle('end')">Title Alignment: end</button>
        </div>
    </div>
    <?php include 'chart_config.php'; ?>
</body>
</html>
