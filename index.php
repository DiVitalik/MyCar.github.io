<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>CarApp</title>
</head>

<body class="bg-dark">
<header class="d-flex flex-row flex-md-row align-items-center justify-content-between p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">

            <a href="#" >
                    <img class="logo-header" src="img/oil_1.png" alt="">
            </a>

            <a href="#" >
                    <img class="logo-header" src="img/rate2_7.png" alt="">
            </a>

            <a href="#" >
                    <img class="logo-header" src="img/user_8.png" alt="">
            </a>

        </header>
    <div class="container">

        <!-- форма -->
        <div class="border rounded overflow-hidden p-3 bg-secondary text-light">
            <h3>Прошлый месяц</h3>
            <div class="flex-container">

                <div class="flex-item">
                    <p>Расходы</p>
                    <p> За день</p>
                </div>
                <div class="flex-item">
                    <p>Доход</p>
                    <p> За день</p>
                </div>

            </div>
            <hr />
            <div class="flex-container">
                <img class="ikon" src="img/oil_1.png" alt="Заправка">
                <img class="ikon" src="img/service_2.png" alt="Сервис">
                <img class="ikon" src="img/rate_3.png" alt="Расход">
            </div>

            <div class="mt-4 text-center">
                <button type="submit" class="btn btn-info" >Полный отчет</button>
            </div>
        </div>
        <hr />


        <?php   while (TRUE) ?>
        <div class="border rounded overflow-hidden p-3 bg-secondary text-light">

        <h1>История</h1>

        <div>Заправка</div>

        <div class="flex-container">

            <div class="flex-item">
                <p><img class="ikon-history" src="img/date_4.png" alt=""></p>
                <p> <img class="ikon-history" src="img/speed_5.png" alt=""></p>
            </div>

            <div class="flex-item">
                <p><img class="ikon-history" src="img/petrol_6.png" alt=""></p>
                <p> <img class="ikon-history" src="img/rate2_7.png" alt=""></p>
            </div>



        </div>

        </div>
        <?php endwhile;?>

        <?php   while (TRUE) ?>
        <div class="border rounded overflow-hidden p-3 bg-secondary text-light">

        <h1>История</h1>

        <div>Заправка</div>

        <div class="flex-container">

            <div class="flex-item">
                <p><img class="ikon-history" src="img/date_4.png" alt=""></p>
                <p> <img class="ikon-history" src="img/speed_5.png" alt=""></p>
            </div>

            <div class="flex-item">
                <p><img class="ikon-history" src="img/petrol_6.png" alt=""></p>
                <p> <img class="ikon-history" src="img/rate2_7.png" alt=""></p>
            </div>



        </div>

        </div>
        <?php endwhile;?>

        <?php   while (TRUE) ?>
        <div class="border rounded overflow-hidden p-3 bg-secondary text-light">

        <h1>История</h1>

        <div>Заправка</div>

        <div class="flex-container">

            <div class="flex-item">
                <p><img class="ikon-history" src="img/date_4.png" alt=""></p>
                <p> <img class="ikon-history" src="img/speed_5.png" alt=""></p>
            </div>

            <div class="flex-item">
                <p><img class="ikon-history" src="img/petrol_6.png" alt=""></p>
                <p> <img class="ikon-history" src="img/rate2_7.png" alt=""></p>
            </div>



        </div>

        </div>
        <?php endwhile;?>
</html>
