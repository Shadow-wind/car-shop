<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'alina');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$info = [];

if ($query = $conn->query("SELECT * FROM auto_car")) {
    $info = $query->fetch_all(PDO::FETCH_ASSOC);
} else {
    print_r($conn->errorInfo());
}
print_r( $info);




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
                    <form action="" method="post" name="stamp_form">
                        <select name="list_stamp" id="list_stamp">
                            <option value="">Марка</option>
                            <option value="">Kia</option>
                            <option value="">Lada</option>
                            <option value="">Lamborghini</option>
                            <option value="">Mustang</option>
                        </select>

                    </form>
                    <form action="" method="post" name="color_form">
                        <select name="list_color" id="list_color">
                            <option value="">Цвет</option>
                            <option value="">Синий</option>
                            <option value="">Серый</option>
                            <option value="">Черный</option>
                            <option value="">Белый</option>
                        </select>

                    </form>
                    <form action="" method="post" name="class_form">
                        <select name="list_class" id="list_class">
                            <option value="">Класс</option>
                            <option value="">A</option>
                            <option value="">B</option>
                            <option value="">C</option>
                            <option value="">D</option>
                            <option value="">E</option>
                        </select>

                    </form>
                    <form action="" method="post" name="price_form">
                        <select name="list_price" id="list_price">
                            <option value="">Цена</option>
                            <option value="">До 1 000 000</option>
                            <option value="">До 3 000 000</option>
                            <option value="">До 5 000 000</option>
                            <option value="">Более 5 000 000</option>
                        </select>

                    </form>
                    <input type="submit" value="Отправить ">
                </div>


                
                <div class="carts">
                    <?php foreach ($info as $data): ?>
                        <div class="cart">
                            <img src="<?php echo $data['7']?> " alt="#" width="540px">
                            <div class="text_cart">
                                <div class="name_text"><?php echo $data['1']?> <?php echo $data['2']?> </div>
                                <div class="price_text">От <span><?php echo $data['3']?></span> </div>
                                <div class="class_text"><?php echo $data['4']?>-класс</div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

</body>

</html>