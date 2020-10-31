<?php 
session_start(); 

if(isset($_SESSION["login"]) && $_SESSION["login"] == "on"){
	header("Location: ./admin.php");
}

$pageTitle = "Вход за страницу";
include("./templates/_head.php"); 
?>
	<!-- white-plate -->
	<div class="white-plate white-plate--login">
		<div class="container-fluid">

			<!-- header -->
			<div class="header text-center">
				<a href="index.html" class="site-logo">
					<span>техно</span>Store
				</a>
			</div>
			<!-- // header -->

			<div class="line-between"></div>
			<form  action="./check-login.php" method="POST">
				<div class="form-group">
					<input name="password" type="password" class="form-control" placeholder="Пароль">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Войти</button>
				</div>
			</form>
			<p class="text-center"><a href="index.html" class="text-secondary">Вернуться назад</a></p>
		</div>
	</div>
	<!-- // white-plate -->

	<?php include("./templates/_footer.php"); ?>