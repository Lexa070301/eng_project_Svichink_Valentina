<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    

    <title>savlas</title>
  </head>
  <body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <img src="img/savlas_logo.png" alt="logo_savlas" id="logo">

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li class="nav-item d-flex">
        <a class="nav-link text-light" href="http://php.std-938.ist.mospolytech.ru/php_labs/savlas.ru/">Главная</a>
        <a class="nav-link text-light" href="http://php.std-938.ist.mospolytech.ru/php_labs/savlas.ru/index2.php">Наша продукция</a>
        <a class="nav-link text-light" href="http://php.std-938.ist.mospolytech.ru/php_labs/savlas.ru/savlas_test_base.php">Test</a>
        <a class="nav-link text-light" href="#">Продукция других брендов</a>
        <a class="nav-link text-light" href="#">Личный кабинет</a>
      </li>
    </ul>
  </div>
</nav>

</header>

<main>
<div class="main_cont">
<div class="container-fluid p-5">
    <div class="row">
        <div class="col">
            <h3 class="my-3">Личный кабинет</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-6 col-xl-6">
            <form>
            <div class="form-group">
                <label for="name">Введите имя</label>
                <input type="text" class="form-control w-75" id="name" placeholder="Имя">
            </div>
            <div class="form-group">
                <label for="surname">Введите фамилию</label>
                <input type="text" class="form-control w-75" id="surname" placeholder="Фамилия">
            </div>
            <div class="form-group">
                <label for="parname">Введите отчество</label>
                <input type="text" class="form-control w-75" id="parname" placeholder="Отчество">
            </div>
            </form>
        </div>

        <div class="col-12 col-lg-6 col-xl-6 mt-3">
            <form>
            <div class="form-group">
                <label for="email">Введите e-mail</label>
                <input type="email" class="form-control w-75" id="email" placeholder="E-mail">
            </div>
            <div class="form-group">
                <label for="birth">Введите дату Вашего рождения</label>
                <input type="text" class="form-control w-75" id="birth" placeholder="01.01.1990">
            </div>
            <div class="form-group">
                <label for="phone">Введите номер телефона</label>
                <input type="text" class="form-control w-75" id="phone" placeholder="89999999999">
            </div>
            </form>
        </div>
    </div>
    

    <div class="row mt-3">
    <div class="col-lg-5 col-md-0 col-sm-0"></div>
        <div class="col-lg-6 d-flex flex-column w-lg-50 w-md-75 w-sm-100 ">
            <div class="small_buttons d-flex flex-column flex-lg-row flex-xl-row">
                <button type="button" class="col-12 col-lg-6 col-xl-6 btn btn-dark mr-1 mb-3 mb-lg-0 mb-xl-0">Сохранить</button>
                <button type="button" class="col-12 col-lg-6 col-xl-6 btn btn-dark">Редактировать</button>
            </div>
            <button type="button" class="btn btn-pink my-3 w-100">Удалить свои данные из клиентской базы</button>
            <button type="button" class="btn btn-blue w-100">Показать клиентскую базу</button>
        </div>
        <div class="col-lg-1 col-md-0 col-sm-0"></div>    
    </div>
</div>


</div>
</main>


<footer>
    <div class="container-fluid">
        <div class="row bg-dark d-flex flex-column">
        <div class="d-flex  my-2">
            <img src="img/inst.svg" alt="icon instagram">
            <a href="#" class="text-light ml-1">Instagram</a>
        </div>
        <div class="d-flex">
          <img src="img/facebook.svg" alt="icon facebook">
          <a href="#" class="text-light align-self-center ml-1">Facebook</a>
        </div>
        <div class="align-self-end d-flex">
          <img src="img/copyright.svg" alt="icon copyright">
          <a href="#" class="text-light ml-1">2020 savlas</a>
        </div>
        </div>
    </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- <script src = 'js/main.js'></script> -->
  </body>
</html>