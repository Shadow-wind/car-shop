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

if (!empty($_POST)) {
    // при получении данных методом пост 
    $price = $_POST['price'];
    $color = $_POST['color'];

} else { 
    // при получении гетом
    $price = 2500000;
    $color = ''; 
}



$stmt = $db->prepare('SELECT * FROM alina.auto_car WHERE price >= :price AND color = :color');

$stmt->execute(array('price' => $price, 'color' => $color));

$item = $stmt->fetchAll();

var_dump($item);

echo '<pre>';
print_r($item);
echo '</pre>';




















// $conn = mysqli_connect('localhost', 'root', 'root', 'alina');
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";


// if (isset($_POST)) {
//     // при получении данных методом пост 
//     $price = $_POST['price'];
// } else { 
//     // при получении гетом
//     $price = 2500000; 
// }

// if (isset($_POST)) {
//     // при получении данных методом пост 
//     $class = $_POST['class'];
// } else { 
//     // при получении гетом
//     $class = 'A'; 
// }


// $info = [];

// if ($query = $conn->query("SELECT * FROM auto_car WHERE " )) {
//     $info = $query->fetch_all(PDO::FETCH_ASSOC);
// } else {
//     print_r($conn->errorInfo());
// }
// print_r( $info);


// echo '<pre>';
// print_r($info);
// echo '</pre>';

// echo '<pre>';
// print_r($info[1][7]);
// echo '</pre>';







// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// <!-- $stamp = $_POST['stamp'];
// $sql = "INSERT INTO auto_car (stamp) VALUES (:stamp)";
// $q = $conn->prepare($sql);
// $q->execute(array(':stamp' => $stamp));
// print_r( $q); -->


// $query = "SELECT * FROM auto_car";
// $filters_count = 0;
// if($_POST.get("stamp")){
//   if($filters_count == 0){
//       $query .= "WHERE stamp ='$stamp' ";
//       $filters_count++;
// }
//    else $query .= "AND stamp = '$stamp'";
// }
// if($_POST.get("stamp_name")){
//   if($filters_count == 0){
//       $query .= "WHERE stamp_name ='$stamp_name' ";
//       $filters_count++;
// }
//    else $query .= "AND stamp_name = '$stamp_name'";
// }
// if($_POST.get("color")){
//     if($filters_count == 0){
//         $query .= "WHERE color ='$color' ";
//         $filters_count++;
//   }
//      else $query .= "AND color = '$color'";
//   }
  



?>










<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бомбочка</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="header">
                <div class="logo">
                    <img src="img/logo.png" alt="" width="70">
                </div>
                <div class="menu_header">
                    <a href="#">Сотрудники</a>
                    <a href="#">Добавить товары</a>
                    <a href="#">Магазин</a>
                </div>
                <div class="contacts">
                    <div class="cont_text">88005553535</div>
                </div>
                
            </div>
        </div>
    </header>
    <div class="main_page">
        <div class="container">
            <div class="main_pages">
                <h1>Каталог товаров</h1>
                <div class="forms_main">
                    <form action="" method="POST" name="bath_form">
                    
                            <select name="color" id="list_color">
                                <option value="color">Цвет</option>
                                <option value="pink">Розовый</option>
                                <option value="blue">Синий</option>
                                <option value="green">Зеленый</option>
                                <option value="black">Черный</option>
                            </select>

                        
                        
                            <select name="shape" id="list_shape">
                                <option value="shape">Форма</option>
                                <option value="round">Круглое</option>
                                <option value="heard">Сердце</option>
                                <option value="more">Другое</option>
                                
                            </select>

                        
                        
                            <select name="size" id="list_size">
                                <option value="size">Размер</option>
                                <option value="s">S</option>
                                <option value="m">M</option>
                                <option value="l">L</option>
                                
                            </select>

                            <input class="text_type_btn" type="submit" value="Отправить ">
                       
                    </form>
                    <form name="bath_bomb" method="POST" action="">
                        <input class="text_type_input" name="search" type="text" placeholder="Введите ключевые слова">
                        <input class="text_type_btn" type="submit" value="Отправить">
                    </form>
                   
                </div>


                
                <div class="carts">
                   
                        <div class="cart">
                            <img src="img/p1.jpeg " alt="#" width="188" height="188">
                            <div class="text_cart">
                                <div class="name_text">Для души </div>
                                <div class="ostalos">Осталось:</div>
                                <div class="price_text"> 180р </div>
                                <div class="tegs">Теги:</div>
                            </div>
                        </div>
                        
                   
                </div>
            </div>
        </div>

</body>

</html>