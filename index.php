<?php 
	$pageTitle = "Главная страница";
	include("./templates/_head.php"); 
	require('./config.php');
?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			<!-- header -->
			<?php include("./templates/_header.php");  ?>
			<!-- // header -->
			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
				<!-- Left aside -->
					<?php include("./templates/_aside.php");  ?>
				<!-- // Left aside -->
				<!-- Center Part -->
				<div class="col-md-9 col-lg-10">
					<div class="row">


						<!-- Товар 1 -->
						<?php 
							// for( $i = 1; $i <= 7; $i++){
							// 	include("./templates/_product-item.php");
							// }
							$sql = "SELECT * FROM products";
							$result = $db->query($sql);
							$products = $result->fetchAll(PDO::FETCH_ASSOC);

							foreach ($products as $product) {
								include("./templates/_product-item.php");
							}
						?>
					
						<!-- // Товар 1 -->

						<!-- Товар 1 -->
						
						<!-- <div class="col-sm-6 col-lg-4">
							<div class="card mb-4">
								<div class="card-top">
									<div class="card-top__new">Новинка</div>
									<div class="card-top__cat">Телефоны</div>
								</div>
								<div class="product-img">
									<img src="img/products/iphone.jpg">
								</div>
								<div class="card-body">
									<h4 class="item-title">Apple iPhone X 256 ГБ «серый космос»</h4>
									<div class="card-btn">
										<div class="card-btn__price">
											75 990 ₽
										</div>
										<div class="card-btn__btn">
											Купить
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- // Товар 1 -->

						<!-- Товар 1 -->
						<!-- <div class="col-sm-6 col-lg-4">
							<div class="card mb-4">
								<div class="card-top">
									<div class="card-top__sale">Sale</div>
									<div class="card-top__cat">Телефоны</div>
								</div>
								<div class="product-img">
									<img src="img/products/iphone.jpg">
								</div>
								<div class="card-body">
									<h4 class="item-title">Apple iPhone X 256 ГБ «серый космос»</h4>
									<div class="card-btn">
										<div class="card-btn__price">
											75 990 ₽
										</div>
										<div class="card-btn__btn">
											Купить
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- // Товар 1 -->

						<!-- Товар 1 -->
						<!-- <div class="col-sm-6 col-lg-4">
							<div class="card mb-4">
								<div class="card-top">
									<div class="card-top__sale">Sale</div>
									<div class="card-top__cat">Телефоны</div>
								</div>
								<div class="product-img">
									<img src="img/products/iphone.jpg">
								</div>
								<div class="card-body">
									<h4 class="item-title">Apple iPhone X 256 ГБ «серый космос»</h4>
									<div class="card-btn">
										<div class="card-btn__price">
											75 990 ₽
										</div>
										<div class="card-btn__btn">
											Купить
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- // Товар 1 -->

						<!-- Товар 1 -->
						<!-- <div class="col-sm-6 col-lg-4">
							<div class="card mb-4">
								<div class="card-top">
									<div class="card-top__sale">Sale</div>
									<div class="card-top__cat">Телефоны</div>
								</div>
								<div class="product-img">
									<img src="img/products/iphone.jpg">
								</div>
								<div class="card-body">
									<h4 class="item-title">Apple iPhone X 256 ГБ «серый космос»</h4>
									<div class="card-btn">
										<div class="card-btn__price">
											75 990 ₽
										</div>
										<div class="card-btn__btn">
											Купить
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- // Товар 1 -->

					</div>
				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<?php include("./templates/_footer.php"); ?>