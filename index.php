<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Лабораторная работа №4</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">

            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Поиск">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
            </form>
        </div>
    </nav>
</header>

<!-- Begin page content -->
<main role="main" class="container">
    <h1 class="mt-5">Вычислить значение ...</h1>

    <form method="post">
        <div>
            <label for="a">a:</label>
            <input type="text" name="a" id="a">
        </div>

        <div>
            <label for="b">b:</label>
            <input type="text" name="b" id="b">
        </div>

        <div>
            <label for="c">c:</label>
            <input type="text" name="c" id="c">
        </div>

        <button type="submit">Вычислить корни уравнения</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем значения коэффициентов a, b и c
        $a = isset($_POST['a']) ? floatval($_POST['a']) : 0;
        $b = isset($_POST['b']) ? floatval($_POST['b']) : 0;
        $c = isset($_POST['c']) ? floatval($_POST['c']) : 0;

        // Вычисляем дискриминант
        $discriminant = $b * $b - 4 * $a * $c;

        // Определяем количество корней
        echo '<p id="result">';
        if ($discriminant > 0) {
            echo 'Уравнение имеет два корня.';
        } elseif ($discriminant === 0) {
            echo 'Уравнение имеет один корень.';
        } else {
            echo 'Уравнение не имеет действительных корней.';
        }
        echo '</p>';
    }
    ?>

</main>

<footer class="footer">

</footer>

<script src="js/bootstrap.min.js"></script>

</body>

</html>
