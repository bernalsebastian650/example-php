<?php require_once('header.php'); ?>
        <!--main-->
	<main class="main" role="main">
		<!--wrap-->
		<div class="wrap clearfix">
			<!--row-->
			<div class="row">
			<!--content-->
				<section class="content center full-width wow fadeInUp">
                                    <form  action="../Controlers/user_controller.php?action=crear" method="POST" > 
					<div class="modal container">
						<h3>REGISTRO</h3>
						<div class="f-row">
                                                        <input type="text"  name ="Nombre" placeholder="Ingrese nombre completo" required="required"/>  
						</div>
						<div class="f-row">
							<input type="Email"  name="Email" placeholder="Email" required="required" />  
						</div>
						<div class="f-row">
							<input type="password"  name="Clave" placeholder="Escribe tu clave" required="required" />
						</div>
						<div class="f-row">
							<input type="password"  name="Clave2" placeholder="Repite tu clave" required="required" />  
						</div>
						<label for="preguntaSeguridad" >Pregunta de seguridad</label>
                                                <br/> 
                                                <br/>
                                                    <select name="PreguntaS" id="preguntaSeguridad" required="required" style="width: 522px;length:37px;border: 1px solid #aaa;box-shadow: 0px 0px 3px #ccc, 0 10px 15px #eee inset;"> 
                                                        <option>Selecciona</option>
                                                        <option>Nombre de tu primera mascota</option>
                                                        <option>Fecha de nacimiento de alguno de tus padres</option>
                                                        <option>Comida favorita</option>
                                                        <option>Color favorito</option>
                                                    </select>
                                                <br/>
                                                <br/>
                                                <input type="text"  name="Respuesta" placeholder="Respuesta" required="required" />  
                                                <br/>
                                                <br/>
						<button id="buttonRegistrar" name="buttonRegistrar" type="submit"> REGISTRAR </button>
                                     </form>
                                                <button><a href="../index.php" > Salir </a> </button>
                                </section>
				<!--//content-->
			</div>
			<!--//row-->
		</div>
		<!--//wrap-->
	</main>
	<!--//main-->
	
	
	<!--footer-->
	<footer class="foot" role="contentinfo">
		<div class="wrap clearfix">
			<div class="row">
				<article class="one-half">
					<h5>About SocialChef Community</h5>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
				</article>
				<article class="one-fourth">
					<h5>Need help?</h5>
					<p>Contact us via phone or email</p>
					<p><em>T:</em>  +1 555 555 555<br /><em>E:</em>  <a href="#">socialchef@email.com</a></p>
				</article>
				<article class="one-fourth">
					<h5>Follow us</h5>
					<ul class="social">
						<li class="facebook"><a href="#" title="facebook">facebook</a></li>
						<li class="youtube"><a href="#" title="youtube">youtube</a></li>
						<li class="rss"><a href="#" title="rss">rss</a></li>
						<li class="gplus"><a href="#" title="gplus">google plus</a></li>
						<li class="linkedin"><a href="#" title="linkedin">linkedin</a></li>
						<li class="twitter"><a href="#" title="twitter">twitter</a></li>
						<li class="pinterest"><a href="#" title="pinterest">pinterest</a></li>
						<li class="vimeo"><a href="#" title="vimeo">vimeo</a></li>
					</ul>
				</article>
				
				<div class="bottom">
					<p class="copy">Copyright 2014 SocialChef. All rights reserved</p>
					
					<nav class="foot-nav">
						<ul>
							<li><a href="index-2.html" title="Home">Home</a></li>
							<li><a href="recipes.html" title="Recipes">Recipes</a></li>
							<li><a href="blog.html" title="Blog">Blog</a></li>
							<li><a href="contact.html" title="Contact">Contact</a></li>    
							<li><a href="find_recipe.html" title="Search for recipes">Search for recipes</a></li>
							<li><a href="login.html" title="Login">Login</a></li>	<li><a href="register.html" title="Register">Register</a></li>													
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</footer>
	<!--//footer-->
	
	<!--preloader-->
	<div class="preloader">
		<div class="spinner"></div>
	</div>
	<!--//preloader-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery.uniform.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/scripts.js"></script>
	<script>new WOW().init();</script>
</body>
</html>