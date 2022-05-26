<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'alina');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


if (isset($_POST)) {
    // при получении данных методом пост 
    $price = $_POST['price'];
} else { 
    // при получении гетом
    $price = 2500000; 
}

if (isset($_POST)) {
    // при получении данных методом пост 
    $class = $_POST['class'];
} else { 
    // при получении гетом
    $class = 'A'; 
}


$info = [];

if ($query = $conn->query("SELECT * FROM auto_car WHERE " )) {
    $info = $query->fetch_all(PDO::FETCH_ASSOC);
} else {
    print_r($conn->errorInfo());
}
print_r( $info);


echo '<pre>';
print_r($info);
echo '</pre>';

echo '<pre>';
print_r($info[1][7]);
echo '</pre>';







echo '<pre>';
print_r($_POST);
echo '</pre>';

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
    <title>Cars</title>
    <link rel="stylesheet" href="style/style.css">
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
    <div class="main_page">
        <div class="container">
            <div class="main_pages">
                <h1>Выбор автомобиля</h1>
                <div class="forms_main">
                    <form action="" method="POST" name="stamp_form">
                    
                            <select name="stamp" id="list_stamp">
                                <option value="stamp">Марка</option>
                                <option value="Kia">Kia</option>
                                <option value="Lada">Lada</option>
                                <option value="Lamborghini">Lamborghini</option>
                                <option value="Mustang">Mustang</option>
                            </select>

                        
                        
                            <select name="stamp_name" id="list_stamp_name">
                                <option value="stamp_name">Модель</option>
                                <option value="K5">K5</option>
                                <option value="K8">K8</option>
                                <option value="Huracan">Huracan</option>
                                <option value="Mustang">Mustang</option>
                            </select>

                        
                        
                            <select name="color" id="list_color">
                                <option value="color">Цвет</option>
                                <option value="Blue">Синий</option>
                                <option value="Grey">Серый</option>
                                <option value="Black">Черный</option>
                                <option value="White">Белый</option>
                            </select>

                        
                            <select name="class" id="list_class">
                                <option value="Class">Класс</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>

                        
                            <select name="price" id="list_price">
                                <option value="Price">Цена</option>
                                <option value="2500000">До 3 000 000</option>
                                <option value="4000000">До 5 000 000</option>
                                <option value="5000000">Более 5 000 000</option>
                            </select>
                            <input type="submit" value="Отправить ">
                       
                    </form>
                   
                </div>


                
                <div class="carts">
                    <?php foreach ($info as $data): ?>
                        <div class="cart">
                            <img src="<?php echo $info[1][7]?> " alt="#" width="540px">
                            <div class="text_cart">
                                <div class="name_text"><?php echo $data['1']?> <?php echo $data['2']?> </div>
                                <div class="price_text">От <span><?php echo $price?></span> </div>
                                <div class="class_text"><?php echo $class?>-класс</div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

</body>

</html>