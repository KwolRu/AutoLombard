<!DOCTYPE html>
<html lang="ru">



<!-- include -->
<?
require 'app/check_admin.php';
require 'app/update.php';
require 'app/bd.php';
require '../scripts.php';
require 'check_admin.php';
require 'app/head.php';
?>

<body class="body-admin main">
    <?php include 'leftblock.php'; ?>

    <?php include 'toplogin.php'; ?>
    <div class="col-sm-10 adminbanks">


        <div class="flex-admin">
            <div class="col-md-7">
                <div class="block-admin">
                    <div class="block-adm">
                        <p class="left-zz">Заявки</p>
                        <div class="col-12 tabble-lider">
                            <div class="col-md-2">
                                <p class="block-tabble">Имя</p>
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
                            <div class="col-md-2">
                                <p class="block-tabble">Регион</p>
                            </div>
                            <div class="col-md-2">
                                <p class="block-tabble">Промокод</p>
                            </div>

                        </div>
                        <?php 
$sql = "SELECT name, lastname, phone, data_create, bank, region, version_lid, promo FROM lids ORDER BY data_create DESC LIMIT 10"; 
$result = $conn->query($sql); 
 
// Check if the query was successful 
if ($result) { 
    // Check if any rows are returned 
    if ($result->num_rows > 0) { 
        // Loop through each row and display the data 
        while ($row = $result->fetch_assoc()) { 
            echo '<div class="col-12 tabble-block" data-id="">'; 
            echo '<div class="col-md-2"><p class="block-tabble">' . $row["name"] . '</p></div>'; 
            echo '<div class="col-md-2"><p class="block-tabble">' . $row["phone"] . '%</p></div>'; 
            echo '<div class="col-md-2"><p class="block-tabble">' . $row["data_create"] . '₽</p></div>'; 
            echo '<div class="col-md-2"><p class="block-tabble">' . $row["bank"] . '</p></div>'; 
            echo '<div class="col-md-2"><p class="block-tabble">' . $row["region"] . '</p></div>'; 
            echo '<div class="col-md-2"><p class="block-tabble">' . $row["promo"] . '</p></div>'; 
            echo '</div>'; 
        } 
    } else { 
        echo "No data found."; 
    } 
} else { 
    echo "Query failed: " . $conn->error; 
} 
?>

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="block-admin">
                    <div class="block-adm">
                        <p class="left-zz">Банк наиболее пользующийся спросом в России </p>
                        <div class="block-admin-img">
                            <?php
                            $sort = $_GET['sort_ru'] ?? 'sort_ru';
                            $sql = "SELECT * FROM banks ORDER BY $sort LIMIT 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<img  src="' . $row["logo"] . '" alt="">';
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="block-adm">
                        <p class="left-zz">Банк наиболее пользующийся спросом в Казахстане </p>
                        <div class="block-admin-img">
                            <?php
                            $sort = $_GET['sort_kz'] ?? 'sort_kz';
                            $sql = "SELECT * FROM banks ORDER BY $sort LIMIT 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<img  src="' . $row["logo"] . '" alt="">';
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="block-adm">
                        <p class="left-zz">Банк наиболее пользующийся спросом в Узбекистане </p>
                        <div class="block-admin-img">
                            <?php
                            $sort = $_GET['sort_uz'] ?? 'sort_uz';
                            $sql = "SELECT * FROM banks ORDER BY $sort LIMIT 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<img  src="' . $row["logo"] . '" alt="">';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="block-admin">
                    <div class="block-adm">

                        <p class="left-zz">Рейтинг</p>

                        <?php
                        // Query to fetch all data from the "banks" table 
                        $sort = $_GET['sort'] ?? 'sort_ru'; // default sort is 'sort_ru' 

                        $sql = "SELECT * FROM banks ORDER BY $sort LIMIT 10";
                        $result = $conn->query($sql);
                        // Check if any rows are returned 
                        if ($result->num_rows > 0) {
                            // Loop through each row and display the data 
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="col-12 tabble-block"data-id="">';
                                echo '<div class="col-md-2"><p class=" block-tabble">' . $row["$sort"] . '</p></div>';
                                echo '<img class="col-md-4" src="' . $row["logo"] . '" alt="">';
                                echo '<div class="col-md-6"><p class="block-tabble">' . $row["name"] . '</p></div>';
                                echo '</div>';
                            }
                        } else {
                            echo "No data found.";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>

       
        <div class="row"></div>
    </div>
</body>


</html>