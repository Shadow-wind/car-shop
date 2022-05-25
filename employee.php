<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$db_host = 'localhost';
$db_name= 'alina';
$db_user = 'root';
$db_password = 'root';

$db_dsn = 'mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8';

$db_opt = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

$db = new PDO($db_dsn, $db_user, $db_password, $db_opt);


?>






















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sotrudniki</title>
    <link rel="stylesheet" href="style/employee.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header">
                <div class="logo">pops</div>
                <div class="contacts">
                    <div class="cont_text">Автосалон на московском</div>
                </div>
                <div class="menu_header">
                    <a href="#">Выбрать автомобиль</a>
                    <a href="#">Наши сотрудники</a>
                    <a href="#">Добавить автомобиль</a>
                </div>
            </div>
        </div>
    </header>
    <div class="main_block">
        <div class="container">
            <div class="main">
                <div class="headling">
                    <h1>Наши коллеги</h1>
                </div>
                <div class="undo_headling">
                    Добавить сотрудника
                </div>
                <div class="add_sotrudniki column_wrapper">
                    <form  class="text-field" name="add_sotr" action="">
                        <input class="text-field__input" name="surname" type="text" placeholder="Фамилия">
                        <input class="text-field__input" name="name" type="text" placeholder="Имя">
                        <input class="text-field__input" name="potranumic" type="text" placeholder="Отчество">
                        <input class="text-field__input" name="job" type="text" placeholder="Должность">
                        <div class="btn_add">
                            <input class="text-field__btn" type="submit" name="submit" class="submit" value="Поиск">
                            <input class="text-field__btn" type="reset" placeholder="Сбросить" value="Сбросить">
                        </div>
                        


                    </form>
                </div>

                <div class="headling_search">Найти сотрудника</div>
                <div class="search_sotrudniki column_wrapper">
                    <form class="text-field" name="search_sotr" action="">
                        <input class="text-field__input" name="idsotr" type="number" placeholder="Айди">
                        <input class="text-field__input" name="surname_ser" type="text" placeholder="Фамилия">
                        <div class="btn_search">
                            <input class="text-field__btn" type="submit" name="submit" class="submit" value="Поиск">
                            <input class="text-field__btn" type="reset" placeholder="Сбросить" value="Сбросить">
                        </div>
                        
                    </form>
                        



                    <div class="table_class">
                        <table  >
                            <tr>
                                <th>Фамилия</th>
                                <th>Имя</th>
                                <th>Отчество</th>
                                <th>Должность</th>


                            </tr>
                            <tr>
                                <td>пхп</td>
                                <td>пхп</td>
                                <td>пхп</td>
                                <td>пхп</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>