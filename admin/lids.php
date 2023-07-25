<!DOCTYPE html>
<html lang="ru">

<body class="body-admin lids"></body>
<?php
require 'app/check_admin.php';
require 'app/update.php';
require 'app/bd.php';
require '../scripts.php';
require 'check_admin.php';
require 'app/head.php';
?>





<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?php include 'toplogin.php'; ?>
<div class="admin-flex">
    <?php include 'leftblock.php'; ?>
    <div class=" adminbanks">

        <div class="body-tabble parent-container">

            <div class="col-12 tabble-lider">
                <div class="col-md-1">
                    <p class="block-tabble">Имя</p>
                </div>
                <div class="col-md-2">
                    <p class="block-tabble">Фамилия</p>
                </div>
                <div class="col-md-2">
                    <p class="block-tabble">Телефон</p>
                </div>
                <div class="col-md-2">
                    <p class="block-tabble">Дата заявки</p>
                </div>
                <div class="col-md-2">
                    <p class="block-tabble">Банк</p>
                </div>
                <div class="col-md-1">
                    <p class="block-tabble">Регион</p>
                </div>
                <div class="col-md-1">
                    <p class="block-tabble">Заявка</p>
                </div>
                <div class="col-md-1">
                    <p class="block-tabble">Промокод</p>
                </div>

            </div>

            <?php 
$sql = "SELECT name, lastname, phone, data_create, bank, region, version_lid, promo FROM lids"; 
$result = $conn->query($sql); 
// Check if any rows are returned 
if ($result) { 
    // Check if any rows are returned 
    if ($result->num_rows > 0) { 
        // Loop through each row and display the data 
        while ($row = $result->fetch_assoc()) { 
            echo '<div class="col-12 tabble-block"data-id="">'; 
            echo '<div class="col-md-1  "><p class="block-tabble">' . $row["name"] . '</p></div>'; 
            echo '<div class="col-md-2  "><p class="block-tabble">' . $row["lastname"] . '</p></div>'; 
            echo '<div class="col-md-2  "><p class="block-tabble">' . $row["phone"] . '%</p></div>'; 
            echo '<div class="col-md-2  "><p class="block-tabble">' . $row["data_create"] . '₽</p></div>'; 
            echo '<div class="col-md-2  "><p class="block-tabble">' . $row["bank"] . '₽</p></div>'; 
            echo '<div class="col-md-1  "><p class="block-tabble">' . $row["region"] . '₽</p></div>'; 
            echo '<div class="col-md-1  "><p class="block-tabble">' . $row["version_lid"] . '₽</p></div>'; 
            echo '<div class="col-md-1  "><p class="block-tabble">' . $row["promo"] . '₽</p></div>'; 
 
            echo '</div>'; 
        } 
    } else { 
        echo "No data found."; 
    } 
} else { 
    echo "Error: " . $conn->error; 
} 
?>

        </div>
    </div>


    </body>

</html>