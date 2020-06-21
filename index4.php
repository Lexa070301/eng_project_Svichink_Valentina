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
<div class="container-fluid p-5">
    <div class="row">
        <div class="col">
            <h3 class="my-3">Личный кабинет</h3>
        </div>
    </div>

    <div class="row">
            <form class="w-100" action="index4.php" method="post">
                <div class="container-fluid  d-flex flex-wrap flex-row">
                    <div class="form-group w-sm-100 w-mb-50 w-lg-25 w-xl-25 mx-5">
                        <label for="name">Имя</label>
                        <input type="text" class="form-control" id="name" placeholder="Имя" name="mname">
                    </div>
                    <div class="form-group w-sm-100 w-mb-50 w-lg-25 w-xl-25 mx-5">
                        <label for="surname">Фамилия</label>
                        <input type="text" class="form-control" id="surname" placeholder="Фамилия" name="surname">
                    </div>
                    <div class="form-group w-sm-100 w-mb-50 w-lg-25 w-xl-25 mx-5">
                        <label for="parname">Отчество</label>
                        <input type="text" class="form-control" id="parname" placeholder="Отчество" name="parname">
                    </div>

                    <div class="form-group w-sm-100 w-mb-50 w-lg-25 w-xl-25 mx-5">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
                    </div>
                    <div class="form-group w-sm-100 w-mb-50 w-lg-25 w-xl-25 mx-5">
                        <label for="birth">Дата рождения</label>
                        <input type="text" class="form-control" id="birth" placeholder="гггг-мм-дд" name="bdate">
                    </div>
                    <div class="form-group w-sm-100 w-mb-50 w-lg-25 w-xl-25 mx-5">
                        <label for="phone">Номер телефона</label>
                        <input type="text" class="form-control" id="phone" placeholder="89999999999" name="phone">
                    </div>
                    <div class="form-group w-sm-100 w-mb-50 w-lg-25 w-xl-25 mx-5">
                        <label for="gender">Пол</label>
                        <input type="text" class="form-control" id="gender" placeholder="male/female" name="gender">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-5 col-md-0 col-sm-0"></div>
                    <div class="col-lg-6 d-flex flex-column w-lg-50 w-md-75 w-sm-100 ">
                        <div class="small_buttons d-flex flex-column flex-lg-row flex-xl-row">
                            <input type="submit" class="btn btn-dark col-12 col-lg-6 col-xl-6 mr-1 mb-3 mb-lg-0 mb-xl-0" name="save" value="Сохранить">
                            <input type="submit" class="btn btn-dark col-12 col-lg-6 col-xl-6" value="Редактировать" name="ed">
                        </div>
                        <input type="button" class="btn btn-pink my-3 w-100" value="Удалить свои данные из клиентской базы" name="del"  data-toggle="modal" data-target="#Modal3">
                        <input type="submit" class="btn btn-blue w-100" value="Показать клиентскую базу" name="show">
                    </div>
                    <div class="col-lg-1 col-md-0 col-sm-0"></div>  
                </div>  

                <!-- Modal -->
                <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModal3Label">Выберете номер строки</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
                        <label for="id">Номер строки</label>
                        <input type="text" class="form-control" id="id" name="id">
                    </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-danger" name="delete" value="Удалить">
                    </div>
                    </div>
                </div>
                </div>

            </form>
    </div>



    <?php

        
        $mysqli = mysqli_connect('std-mysql', 'std_938', 'qazwsxedc', 'std_938');
        if( mysqli_connect_errno() ) 
        return 'Ошибка подключения к БД: '.mysqli_connect_error();

        // Кнопка добавления клиента в БД
        if( isset($_POST['save']) && $_POST['save']== 'Сохранить')
        {
            $sql_res = $mysqli->query ("INSERT INTO `clients` (`id_client`, `sur_name`, `name`, `par_name`, `birthday`, `gender`, `email`, `phone`) VALUES (NULL, '{$_POST['surname']}', '{$_POST['mname']}', '{$_POST['parname']}', '{$_POST['bdate']}', '{$_POST['gender']}', '{$_POST['email']}', '{$_POST['phone']}')");
            
            if( mysqli_errno($mysqli) )
            echo '<div class="alert alert-danger mt-5">Запись не добавлена</div>';
            else 
            echo '<div class="alert alert-success mt-5">Запись добавлена</div>';

        } 


        function printResult($result_set) {
            while (($row  =  $result_set->fetch_assoc()) !=false) {
                echo('<tr>
                        <td>'.$row['id_client'].'</td>
                        <td>'.$row['sur_name'].'</td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['par_name'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['birthday'].'</td>
                        <td>'.$row['phone'].'</td> 
                    </tr>');
                
            }
        }
        
        // Кнопка показа клиентской базы данных
        if( isset($_POST['show']) && $_POST['show']== 'Показать клиентскую базу')
        {
            $p++;
            if($p==1)
            {
              $result_set = $mysqli->query("SELECT * FROM `clients`");
              echo("<div class='table-responsive'><table class='table table-bordered mt-5'>
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Фамилия</th>
                            <th>Имя</th>
                            <th>Отчество</th>
                            <th>E-mail</th>
                            <th>Дата рождения</th>
                            <th>Телефон</th>
                        </tr>
                    </thead>
                    <tbody>");
              printResult($result_set);
              echo("</tbody></table></div>");
              echo("<form action='index4.php' method='post'><input type='submit' class='btn btn-secondary' name='close' value='Скрыть'></form>");

            if( mysqli_errno($mysqli) )
            echo '<div class="alert alert-danger mt-5">Произошла ошибка</div>';

            } 
        }

        if( isset($_POST['close']) && $_POST['close']== 'Скрыть'){
            $p = 0;
        }

        if( isset($_POST['delete']) && $_POST['delete']== 'Удалить'){
        $mysqli->query("DELETE FROM `clients` WHERE `clients`.`id_client` = {$_POST['id']}");
        }

       
        $mysqli->close ();
    ?>
    



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