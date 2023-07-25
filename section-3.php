
<section class="header-lider">
<div class="container row-margin-minus ">
    <div class="row">
        <div class="col-md-12">


            <div class="body-tabble">
                <div class="col-12 tabble-lider">
                    <div class="">
                        <p class=" block-tabble">№</p>
                    </div>
                    <div class="col-md-1 none2">
                        <p class="  block-tabble">Логотип</p>
                    </div>
                    <div class="col-md-2 ">
                        <p class=" block-tabble">Наименование</p>
                    </div>
                    <div class="col-md-2 ">
                        <p class=" block-tabble">Срок</p>
                    </div>
                    <div class="col-md-1 ">
                        <p class=" block-tabble">Ставка</p>
                    </div>
                    <div class="col-md-2">
                        <p class="  block-tabble">Сумма</p>
                    </div>
                    <div class="col-md-2">
                        <p class=" block-tabble"></p>
                    </div>
                </div>
                <?php
                // Query to fetch all data from the "banks" table
                $sort = isset($_GET['sort'])  && !empty($_GET['sort']) ? $_GET['sort'] : 'sort_ru';

                        if (!isset($_GET['sort'])) {
                            $sort = 'sort_ru';
                        }

                        require 'app/bd.php';
                        $sql = "SELECT * FROM banks ORDER BY $sort LIMIT 10";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="col-12 tabble-block" data-id="' . $row['ID'] . '">';
                                echo '<div class="col-md-1"><p class=" block-tabble">' . $row["$sort"] . '</p></div>';
                        echo '<img class="none2" src="' . $row["logo"] . '" alt="">';
                        echo '<p class="col-md-2 block-tabble">' . $row["name"] . '</p>';
                        echo '<p class="col-md-2 block-tabble">' . $row["main_name"] . '</p>';
                        echo '<p class="col-md-1 block-tabble">' . $row["bet"] . '%</p>';
                        echo '<p class="col-md-2 block-tabble">' . $row["amount"] . '₽</p>';
                        echo '<div class="col-md-2 none"><a class="  tabble-button" href="banks/' . $row["naming"] . '.php">Узнать подробнее</a></div>';
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
</section>