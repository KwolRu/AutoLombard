<!DOCTYPE html>
<html lang="ru">


<!-- include -->
<?php include 'scripts.php'; ?>

<?php include 'head.php'; ?>

<!-- include -->

<body>
	<!-- include -->
	<?php include 'header.php'; ?>


	<!-- include -->
	<section class="faq">
		<div class="container">
			<h2 class="title-h2-bank">Рейтинг</h2>
			<p class="title-p-bank">Быстрый анализ конкурирующих банков</p>
			<div class="row">
				<div class="col-md-12 body-banks">
					<div class="block banks">
						<?php
						require 'admin/app/bd.php'; 
 
						$params = ['time' => 'Срок', 'bet' => 'Ставка', 'amount' => 'Сумма']; 
						 
						$conditions = []; 
						foreach ($params as $param) { 
							if (isset($_GET[$param]) && $_GET[$param] === 'on') { 
								$conditions[] = "$param = 'on'"; 
							} elseif (isset($_GET[$param]) && is_numeric($_GET[$param])) { 
								$conditions[] = "$param <= {$_GET[$param]}"; 
							} 
						}
						 
						$type = isset($_GET['type']) ? $_GET['type'] : ''; 
						if ($type !== '') { 
							$conditions[] = "type = '$type'"; 
						} 
						 
						$sql = "SELECT * FROM banks"; 
						if (!empty($conditions)) { 
							$sql .= " WHERE " . implode(' AND ', $conditions); 
						} 
						$sort = isset($_GET['sort']) && in_array($_GET['sort'], ['amount', 'time', 'bet']) ? $_GET['sort'] : 'sort_ru';
						$sql .= " ORDER BY $sort";
						 
						$result = $conn->query($sql); 
						 
						if ($result->num_rows > 0) { 
							while ($row = $result->fetch_assoc()) { 
								// Вывод информации о банке  
								echo '<div class="col-12 tabble-block" style="display: none;" data-id="' . $row['ID'] . '"></div>'; 
								echo '<div class="col-md-3">'; 
								echo '<div class="bank">'; 
								echo '<div class="top-bank">'; 
								echo '<div class="img-body-bank">'; 
								echo '<div class="org"><p>'; 
						 
								switch ($row["type"]) { 
									case "bank": 
										echo "Банк"; 
										break; 
									case "leasing": 
										echo "Лизинг"; 
										break; 
									case "mkk": 
										echo "МКК"; 
										break; 
									case "mfo": 
										echo "МФО"; 
										break; 
									default: 
										echo $row["type"]; 
										break; 
								} 
						 
								echo '</p></div>'; 
								echo '<div class="num"><p>№' . $row["$sort"] . '</p></div>'; 
								echo '<img src="' . $row["logo"] . '" alt="">'; 
								echo '</div>'; 
								echo '<div class="title"><p class="name-bank">' . $row["name"] . '</p></div>'; 
								echo '<div class="description">'; 
								foreach ($params as $param => $label) {  
									if (isset($row[$param]) && $row[$param] != 0 && $param != 'bank' && $param != 'mkk' && $param != 'leasing' && $param != 'mfo') {  
										echo '<div class="mini-description">';  
										echo '<div>'; 
										echo '<p class="title">' . ucfirst($label) . '</p>'; 
										echo '</div>';  
										echo '<div>'; 
										echo '<p class="spec">' . $row[$param] . '</p>'; 
										echo '</div>';  
										echo '</div>';  
									} 
								}
								
								echo '</div></div>'; 
								echo '<div class="button-bank">'; 
								echo '<div class="bank-button-row"><a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">Заявка</a>'; 
								echo '<a href="">Промокод</a></div>'; 
								echo '<div class="bank-button-row-two"><a type="button" class="" data-bs-toggle="modal" data-bs-target="#modal-mini">Открыть вклад</a></div>'; 
								echo '<div class="bank-button-row-two"><a type="button" class="" href="banks/' . $row["naming"] . '.php">Подробнее</a></div>'; 
								echo '</div></div></div>'; 
							} 
						} 
						?> 
					</div>

				</div>
			</div>

		</div>
		</div>
	</section>

	<!-- include -->
	<?php include 'modal.php'; ?>

	<!-- include -->
	<?php include 'footer.php'; ?>




</body>

</html>