<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Configuration PS2</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
    <style>
        
    </style>
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="../index.html"><img src="assets/images/logo.png" style="width:80px;height: 38px;" alt="Progressus HTML5 template">FAR IN GAMES</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li ><a href="../index.html">Accueil</a></li>
					<li><a href="../about.html">A propos</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Les Jeux de l'évènement<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="active"><a href="../sidebar-left.html">Les jeux PS4</a></li>
							<li ><a href="../sidebar-right.html">Les jeux PS2</a></li>
							<li ><a href="../callof.html">Call Of Mobile</a></li>
						</ul>
					</li>
					<li><a href="../contact.html">Contact</a></li>
					<li><a class="btn" href="../signin.html">S'abonner</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	</div>

    <!-- div>div*4>class.ligne2 -->

	<h2 class="game-tournament">PS2 Tournament</h2>
	<form action="" method="post">
		<div class="pouls-conf">
			<div class="pouls-config">
				<div class="pouls-config-options">
					<h4>Choisissez un jeu:</h4>
					<div>
						<input type="radio" id="pes_2015" name="choosen_game" value="pes_2015" checked>
						<label for="pes_2015">PES 2015</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" id="velo" name="choosen_game" value="lzl">
						<label for="velo">Downhill Velo</label>
					</div>
				</div>
				<div class="pouls-config-options">
					<h4>Combien de joueurs y joueront?</h4>
					<div class="players-slide">
						<input name="players_number" type="range" value="8" min="2" max="64" step="2" oninput="this.nextElementSibling.value = this.value">&nbsp<output>8</output>
					</div>
				</div>
				<div class="pouls-config-options">
					<h4><a href="" style="text-decoration: none;">Ou alors, configurez un classement existant</a></h4>
				</div>
			</div>
			<div>
				<button type="submit" name="submit" class="submit">Valider</button>
			</div>	
			<div style="margin-top: 5%">
				<h4><i class="fa fa-check" aria-hidden="true"></i>Sélectionnez un jeu et le nombre de participants pour générer l'arbre des poules</h4>
				<h4><i class="fa fa-check" aria-hidden="true"></i>Vous pouvez faire un truc cool *.)</h4>
			</div>
		</div>
		<?php
			if (isset($_POST["submit"])){
				$players_numb = $_POST['players_number'];
				$choosen_game = $_POST['choosen_game'];
				switch ($players_numb){
					case $players_numb <= 4:
						header("Location:'4players.html'");
						break;
					case $players_numb <= 8:
						header("Location:'8players.html'");
						break;
					case $players_numb <= 16:
						header("Location:'16players.html'");
						break;
					case $players_numb >= 16:
						header("Location:'16players.html'");
						break;
					default:
						header("Location:'4players.html'");
						break;						
				}
			}
		?>
	</form>

    <!--  -->
	
	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h4 class="widget-title">Contact</h4>
						<div class="widget-body">
							<p>+229 66 64 22 36<br>
								<a href="mailto:#">some.email@somewhere.com</a><br>
								<br>
								Rue en face du College Pythagore, Cotonou, Bénin
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h4 class="widget-title">Suivez-nous</h4>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
								<a href=""><i class="fa fa-telegram" aria-hidden="true"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<!-- <h4 class="widget-title">Text widget</h4> -->
						<div class="widget-body">
							<!-- <p> amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
							<p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p> -->
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> | 
								<a href="about.html">About</a> |
								<a href="sidebar-right.html">Sidebar</a> |
								<a href="contact.html">Contact</a> |
								<b><a href="signup.html">Sign up</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2022, FAR IN GAMES. Designé par l'équipe<a href="../signup.html" rel="designer"> FIG</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
    <script src="assets/js/main.js" ></script>
    <script>
        
function init(){
    const canvas = document.getElementsById('canvas')
    const ctx = canvas.getContext('2D')

    document.addEventListener('DOMContentLoaded', init)
    ctx.beginPath()
    ctx.strokeRect(50, 35, 150, 150)
    ctx.beginPath()
    ctx.fillRect(125, 35, 150, 150)  
}

    </script>
</body>
</html>