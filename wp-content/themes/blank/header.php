<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">           
      <img src="http://localhost/LipNChic/wp-content/uploads/2021/05/logo.png" class="img-rounded" alt="Cinque Terre" width="300" height="200" style="box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
    </div>

<nav class="nav navbar-nav navbar-right">
	<div class="search" style="margin-top: -250px; float: right; margin-right: 70px; font-family: Edwardian Script ITC; font-size: 20px; ">
		<button style="padding: 3px 10px; background-color: rgb(58,60,59); color: mintcream;">Search</button>
		<input type="text" name="search">
	</div>
  <div class="container-fluid" style=""> 
    <ul class="nav navbar-nav" style="font-family: Edwardian Script ITC; font-size: 30px; margin-top: -200px;">
      <li class="active"><a href="http://localhost/LipNChic/" style="color: rgb(58,60,59);">Home</a></li>
      <li><a href="http://localhost/LipNChic/contact/" style="color: rgb(58,60,59);">Contact</a></li>
      <li><a href="http://localhost/LipNChic/about-us/" style="color: rgb(58,60,59);">About Us</a></li>
      <li><a href="http://localhost/LipNChic/lipnchic-co-products/" style="color: rgb(58,60,59);">Product</a></li>
      <li><a href="http://localhost/LipNChic/shop/" style="color: rgb(58,60,59);">Shop</a></li>
      <li><a href="http://localhost/LipNChic/cart/"><span class="glyphicon glyphicon-shopping-cart" style="font-size: 20px; color: rgb(58,60,59);"></span> Cart</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in" style="font-size: 20px; color: rgb(58,60,59);"></span> Login</a></li>
    </ul>
</nav>
</div>
</body>
</html>