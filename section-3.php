<div class="container row-margin-minus ">
    <div class="row">
        <div class="col-md-12">

           
            <div class="body-tabble">
                <div class="col-12 tabble-lider">
                    <p class=" block-tabble">№</p>
                    <p class="col-md-1 none2 block-tabble">Логотип</p>
                    <p class="col-md-2  block-tabble">Наименование</p>
                    <p class="col-md-2  block-tabble">Срок</p>
                    <p class="col-md-1  block-tabble">Ставка</p>
                    <p class="col-md-2  block-tabble">Сумма</p>
                    <p class=" block-tabble"></p>
                </div>
                <?php
                // Query to fetch all data from the "banks" table
                $sql = "SELECT * FROM banks";
                $result = $conn->query($sql);

                // Check if any rows are returned
                if ($result->num_rows > 0) {
                    // Loop through each row and display the data
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-12 tabble-block">';
                        echo '<p class=" block-tabble">' . $row["ID"] . '</p>';
                        echo '<img class="none2" src="' . $row["logo"] . '" alt="">';
                        echo '<p class="col-md-2 block-tabble">' . $row["name"] . '</p>';
                        echo '<p class="col-md-2 block-tabble">' . $row["main_name"] . '</p>';
                        echo '<p class="col-md-1 block-tabble">' . $row["bet"] . '%</p>';
                        echo '<p class="col-md-2 block-tabble">' . $row["amount"] . '₽</p>';
                        echo '<div class="col-md-2 none"><a class="  tabble-button" href="banks/'. $row["ID"] .'.php">Узнать подробнее</a></div>';
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