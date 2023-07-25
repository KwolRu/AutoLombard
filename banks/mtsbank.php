<!DOCTYPE html>
<html lang="ru">


<!-- include -->
<?php include '../scripts.php'; ?>

<?php include '../head.php'; ?>

<!-- include -->

<body>
	<!-- include -->
	<?php include '../header.php'; ?>


	<!-- include -->
	<?
	$id = 97; // Replace with the desired ID

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
							<p class="ot">Банки</p> <img src="/assets/img/Arrow 1.png" alt="">
							<p> <? echo $row["main_name"]; ?>  <? echo $row["name"]; ?> </p>
						</div>

						<h2 class="h2-bank-banks-name"> <? echo $row["name"]; ?> </h2>
						<p class="p-bank-lider">
							<? echo $row["description"]; ?>
						</p>

					</div>
					<div class="col-12 col-sm-12 col-lg-6 col-md-12 col-xl-6 img-body-about-bank">
						<div class="bank">
							<div class="img-body-bank"> <? echo '<img src="' . $row["logo"] . '"' ?> </div>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="bottom-about-bank">
						<div class="col-12 col-sm-12 col-lg-6 col-md-12 col-xl-4  block-bottom-about-block">
							<div class="block-bottom-about-block-p">
								<p class="about-block-p-lid"><? echo $row["bet"]; ?>% годовых</p>
								<p class="about-block-p">до <? echo $row["time"]; ?> лет</p>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-6 col-md-6 col-xl-4 block-bottom-about-block none">
							<p class="ot-p"><? echo $row["amount"]; ?></p>
						</div>
						<div class="col-12 col-sm-12 col-lg-6 col-md-12 col-xl-4 block-bottom-about-block">
							<a type="button" class="" data-bs-toggle="modal" data-bs-target="#modal-mini"> Подать заявку </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bankinfo">
		<div class="container">
			<div class="row">

				<div class="banks-info-body">
					<div class="title-banks-info-body">
						<h4 class="bn-in-h4">Детальная информация</h4>
					</div>


					<div class="flex-block-infobank">

						<div class="blocks-flex-infobank">
							<div class="title-blocks-flex">
								<p>Кредитный <br> портфель</p>
								<div class="nember-blocks-flex">
									<p><? echo $row["int_credit_portfel"]; ?></p>
								</div>
							</div>
							<div class="title-blocks-flex">
								<p>Чистая<br> прибыль</p>
								<div class="nember-blocks-flex">
									<p><? echo $row["int_clear_profit"]; ?></p>
								</div>
							</div>
							<div class="title-blocks-flex">
								<p>Суммарные<br> активы</p>
								<div class="nember-blocks-flex">
									<p><? echo $row["int_summa_active"]; ?></p>
								</div>
							</div>
							<div class="title-blocks-flex">
								<p>Доходность <br> активов</p>
								<div class="nember-blocks-flex">
									<p><? echo $row["int_profit_active"]; ?></p>
								</div>
							</div>
							<div class="title-blocks-flex">
								<p>Суммарный <br> капитал</p>
								<div class="nember-blocks-flex">
									<p><? echo $row["int_summa_capital"]; ?></p>
								</div>
							</div>
							<div class="title-blocks-flex">
								<p>Рентабельность<br> капитала</p>
								<div class="nember-blocks-flex">
									<p><? echo $row["int_renta"]; ?></p>
								</div>
							</div>
							<div class="title-blocks-flex">
								<p>Депозитный<br> портфель</p>
								<div class="nember-blocks-flex">
									<p><? echo $row["int_deposit_portfel"]; ?></p>
								</div>
							</div>
						</div>




					</div>
					<div class="body-block-info-flex ">

						<div class="col-md-12 flex-lr">
							<div class="col-md-6 pad-gov">
								<div class="col-md-12 lider-info-block-one ">
									<p>Правление</p>
								</div>
								<div class="col-md-12 body-block-info">
									<div class="col-md-6 body-block-info-one">
										<p>Председатель</p>
									</div>
									<div class="col-md-6 body-block-info-two">
										<p><? echo $row["gov_predsed"]; ?></p>
									</div>
								</div>
								<div class="col-md-12 body-block-info">
									<div class="col-md-6 body-block-info-one">
										<p>Члены правления</p>
									</div>
									<div class="col-md-6 body-block-info-two">
										<p><? echo $row["gov_member"]; ?></p>
									</div>
								</div>
							</div>
							<div class="col-md-6 pad-gov">
								<div class="col-md-12 lider-info-block-one ">
									<p>Совет директоров</p>
								</div>
								<div class="col-md-12 body-block-info">
									<div class="col-md-6 body-block-info-one">
										<p>Председатель</p>
									</div>
									<div class="col-md-6 body-block-info-two">
										<p><? echo $row["dir_predsed"]; ?></p>
									</div>
								</div>

								<div class="col-md-12 body-block-info">
									<div class="col-md-6 body-block-info-one">
										<p>Члены совета</p>
									</div>
									<div class="col-md-6 body-block-info-two">
										<p><? echo $row["dir_member"]; ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 lider-info-block-one ">
							<p>Финансовые показатели</p>
						</div>
						<div class="col-md-6">

							<div class="col-md-12 body-block-info">
								<div class="col-md-6 body-block-info-one">
									<p>Активы</p>
								</div>
								<div class="col-md-6 body-block-info-two">
									<p><? echo $row["active"]; ?></p>

								</div>
							</div>
							<div class="col-md-12 body-block-info">
								<div class="col-md-8 body-block-info-one">
									<p>Доля в общих активов банков</p>
								</div>
								<div class="col-md-4 body-block-info-two">
									<p><? echo $row["fraction_all_active"]; ?></p>
								</div>
							</div>


							<div class="col-md-12 body-block-info">
								<div class="col-md-6 body-block-info-one">
									<p>Кредитный портфель</p>
								</div>
								<div class="col-md-6 body-block-info-two">
									<p><? echo $row["credit_portfel"]; ?></p>

								</div>
							</div>
							<div class="col-md-12 body-block-info">
								<div class="col-md-6 body-block-info-one">
									<p>Доля в общем кредитном портфеле банков</p>
								</div>
								<div class="col-md-6 body-block-info-two">
									<p><? echo $row["fraction_all_credit_portfel"]; ?></p>
								</div>
							</div>
						</div>
						<div class="col-md-6">



							<div class="col-md-12 body-block-info">
								<div class="col-md-6 body-block-info-one">
									<p>Депозитный портфель</p>
								</div>
								<div class="col-md-6 body-block-info-two">
									<p><? echo $row["deposit_portfel"]; ?></p>

								</div>
							</div>
							<div class="col-md-12 body-block-info">

								<div class="col-md-8 body-block-info-one">
									<p>Доля в общем депозитном портфеле банков</p>
								</div>
								<div class="col-md-4 body-block-info-two">
									<p><? echo $row["fraction_all_deposit_portfel"]; ?></p>
								</div>
							</div>
							<div class="col-md-12 body-block-info">
								<div class="col-md-6 body-block-info-one">
									<p>Чистая прибыль/убыток </p>
								</div>
								<div class="col-md-6 body-block-info-two">
									<p><? echo $row["profit"]; ?></p>


								</div>
							</div>
							<div class="col-md-12 body-block-info">
								<div class="col-md-6 body-block-info-one">
									<p>Прибыль от операций с валютой</p>
								</div>
								<div class="col-md-6 body-block-info-two">
									<p><? echo $row["profit_invalut"]; ?></p>
								</div>
							</div>
						</div>


						<div class="col-md-12 body-block-info">
							<div class="col-md-3 body-block-info-one">
								<p>Количество филилалов/сберкасс</p>
							</div>
							<div class="col-md-9 body-block-info-two">
								<p><? echo $row["filials"]; ?>.</p>
							</div>
						</div>

						<div class="col-md-12 body-block-info">
							<div class="col-md-3 body-block-info-one">
								<p>Дата основания </p>
							</div>
							<div class="col-md-9 body-block-info-two">
								<p><? echo $row["data_create"]; ?></p>
							</div>
						</div>

						

						<div class="col-md-12 body-block-info">
							<div class="col-md-3 body-block-info-one">
								<p>Контакты </p>
							</div>
							<div class="col-md-9 body-block-info-two">
								<p><? echo $row["contacts"]; ?></p>
							</div>
						</div>



					</div>

				</div>

			</div>
		</div>
	</section>
	<?php include '../modal.php'; ?>
	<!-- include -->
	<?php include '../footer.php'; ?>

	<!-- include -->





</body>

</html>