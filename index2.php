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
        <a class="nav-link text-light" href="http://savlas.std-938.ist.mospolytech.ru/">Главная</a>
        <a class="nav-link text-light" href="http://savlas.std-938.ist.mospolytech.ru/index2.php">Наша продукция</a>
        <a class="nav-link text-light" href="http://savlas.std-938.ist.mospolytech.ru/index3.php">Продукция других брендов</a>
        <a class="nav-link text-light" href="http://savlas.std-938.ist.mospolytech.ru/index4.php">Личный кабинет</a>
      </li>
    </ul>
  </div>
</nav>
</header>

<main>
<div class="main_cont">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-3"></div>
            <div class="col-9">
            <nav class="card card-body d-flex flex-row">
                <a href="http://php.std-938.ist.mospolytech.ru/php_labs/savlas.ru/" class="text-muted mr-1">Главная</a></li>/
                <a href="#" class="text-dark ml-2">Продукция от SAVLAS</a>
            </nav>
            </div>
        </div>

        <div class="row mt-3">
        <div class="col-3">

        <table class="table table-hover">
        <tbody>
            <tr><td>
                <a class="text-dark"  href="#bombs">Бомбочки для ванн</a>
            </td></tr>

            <tr><td>
                <a class="text-dark"href="#foam">Пена для ванн</a>
            </td></tr>

            <tr><td>
                <a class="text-dark" href="#scrab">Скрабы</a>
            </td></tr>

            <tr><td>
                <a class="text-dark" href="#pearls">Жемчуг для ванн</a>
            </td></tr>

            <tr><td>
                <a class="text-dark"href="#soap">Мыло</a>
            </td></tr>
        </tbody>
        </table>

        </div>

        <div class="col-9">
            <h2 class="mb-5">Каталог товаров</h2>


            <?php
              function printResult($result_set) {
                while (($row  =  $result_set->fetch_assoc()) !=false) {
      
                    echo("<div class='w-25 mx-3  mb-3 border-dark p-4 rounded shadow d-flex flex-column justify-content-center align-content-center bg-white'>
                    <img class='img-fluid' src='img/".$row['img']."'>
                    <h6 class='mt-2'>".$row['name_product']."</h6>
                    <p class='text-muted'>".$row['name_brand']."</p>
                    <button type='button' class='btn btn-dark' data-toggle='modal' data-target='#exampleModalCentered'>Купить</button>
                    </div>"); 
                    
                }
                // print_r($row);
              }

              $mysqli = mysqli_connect('std-mysql', 'std_938', 'qazwsxedc', 'std_938');
              if( mysqli_connect_errno() ) // проверяем корректность подключения
              return 'Ошибка подключения к БД: '.mysqli_connect_error();

              $mysqli->query ("SET NAMES 'utf8'");

              echo("<h5 id='bombs' class='mt-5'>Бомбочки для ванн</h5>");
              echo("<div class='d-flex flex-wrap'>");
              $result_set = $mysqli->query("SELECT `product`.`name_product`, `brand`.`name_brand`, `model`.`id_model`, `product`.`img` FROM `product` JOIN `brand` ON (`product`.`id_brand` = `brand`.`id_brand`) JOIN `model` ON (`product`.`id_model` = `model`.`id_model`) WHERE `product`.`id_model` = 1");
              printResult($result_set);
              echo("</div>");

              echo("<h5 id='foam' class='mt-5'>Пена для ванн</h5>");
              echo("<div class='d-flex flex-wrap'>");
              $result_set = $mysqli->query("SELECT `product`.`name_product`, `brand`.`name_brand`, `model`.`id_model`, `product`.`img` FROM `product` JOIN `brand` ON (`product`.`id_brand` = `brand`.`id_brand`) JOIN `model` ON (`product`.`id_model` = `model`.`id_model`) WHERE `product`.`id_model` = 2");
              printResult($result_set);
              echo("</div>");

              echo("<h5 id='scrab' class='mt-5'>Скрабы</h5>");
              echo("<div class='d-flex flex-wrap'>");
              $result_set = $mysqli->query("SELECT `product`.`name_product`, `brand`.`name_brand`, `model`.`id_model`, `product`.`img` FROM `product` JOIN `brand` ON (`product`.`id_brand` = `brand`.`id_brand`) JOIN `model` ON (`product`.`id_model` = `model`.`id_model`) WHERE `product`.`id_model` = 3");
              printResult($result_set);
              echo("</div>");

              echo("<h5 id='pearls' class='mt-5'>Жемчуг для ванн</h5>");
              echo("<div class='d-flex flex-wrap'>");
              $result_set = $mysqli->query("SELECT `product`.`name_product`, `brand`.`name_brand`, `model`.`id_model`, `product`.`img` FROM `product` JOIN `brand` ON (`product`.`id_brand` = `brand`.`id_brand`) JOIN `model` ON (`product`.`id_model` = `model`.`id_model`) WHERE `product`.`id_model` = 4");
              printResult($result_set);
              echo("</div>");

              echo("<h5 id='soap' class='mt-5'>Мыло</h5>");
              echo("<div class='d-flex flex-wrap'>");
              $result_set = $mysqli->query("SELECT `product`.`name_product`, `brand`.`name_brand`, `model`.`id_model`, `product`.`img` FROM `product` JOIN `brand` ON (`product`.`id_brand` = `brand`.`id_brand`) JOIN `model` ON (`product`.`id_model` = `model`.`id_model`) WHERE `product`.`id_model` = 5");
              printResult($result_set);
              echo("</div>");



              $mysqli->close ();
            ?>
        
        </div>
            

        </div> 

        </div>

    </div>


<!-- MODAL -->
<div class="modal" id="exampleModalCentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenteredLabel">Заполнение формы покупки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
      <div class="form-group">
        <label for="amount">Количество</label>
        <input type="text" class="form-control" id="amount" placeholder="1">
      </div>
      <div class="form-group">
        <label for="sur_name">Фамилия</label>
        <input type="text" class="form-control" id="sur_name">
      </div>
      <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" class="form-control" id="name">
      </div>
      <div class="form-group">
        <label for="par_name">Отчество</label>
        <input type="text" class="form-control" id="par_name">
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email">
      </div>
      <div class="form-group">
        <label for="phone">Телефон</label>
        <input type="text" class="form-control" id="phone" placeholder="89999999999">
      </div>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-info" data-dismiss="modal">Купить</button>
      </div>
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