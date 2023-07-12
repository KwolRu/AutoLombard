<?
$id = 8 ; // Replace with the desired ID

// Query to fetch data from the "banks" table based on the specified ID
$sql = "SELECT * FROM banks WHERE ID = $id";
$result = $conn->query($sql);

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Fetch the data and display it
    $row = $result->fetch_assoc();
} else {
    echo "No data found for the specified ID.";
}
?>
    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12 about-bank-body">
                    <div class=" col-sm-12 col-lg-6 col-md-12 col-xl-6 text-body-about flex">
                        <div class="display-flex block-nd-title-bank">
                            <p class="ot">Банки</p> <img src="assets/img/Arrow 1.png" alt="">
                            <p> <? echo $row["main_name"]; ?></p>
                            </div>
                            
                        <h2 class="h2-bank-banks-name"> <? echo $row["name"]; ?> </h2>
                        <p class="p-bank-lider">
                            <? echo $row["desc"]; ?>
                        </p>
                       
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6 col-md-12 col-xl-6 img-body-about-bank">
                        <div class="bank">
                            <div class="img-body-bank"> <? echo '<img src="' . $row["logo"] . '"'?> </div>
                        </div>
                    </div>
                </div>

            <div class="col-md-12 about-bank-body">
                <div class="bottom-about-bank">
                    <div class="col-12 col-sm-12 col-lg-6 col-md-12 col-xl-4  block-bottom-about-block">
                        <div class="block-bottom-about-block-p">
                            <p class="about-block-p-lid">22% годовых</p>
                            <p class="about-block-p">До 2-х лет</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 col-xl-4 block-bottom-about-block none">
                        <p class="ot-p">От 500.000</p>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6 col-md-12 col-xl-4 block-bottom-about-block">
                        <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal"> Подать заявку </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>