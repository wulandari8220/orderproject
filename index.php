<?php 
require_once('food.php');
require_once('drink.php');
?>
 
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Warung Ayam Berkah</title>
		<link rel="stylesheet" href="stylesheet.css">
	</head>
	<body>
	<form  method="post" action="confirm.php">
	    <div class="form_order">
		<div class="place">
			Warung Ayam Berkah
		</div>
		<div class="table_number">
			<label name="table">Nomor Meja : </label>
				<select name="table">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
		</div>	
			<div class="menu">
				MENU
			</div>
			<div class="food">
				<div class="head_food">
					MAKANAN
				</div>
				<div class="list1">
					<?php foreach($foodsMenu as $foodMenu): ?>
						<div class="makanan_list">
							<img class="gambar" src="<?php echo $foodMenu -> getImage() ?>">
							<h4><?php echo $foodMenu -> getName()?></h4>
							<h4>Rp.<?php echo $foodMenu -> getPrice()?></h4>
							<h4>Jumlah pesanan :
								<input type="text" value="0" name="<?php echo $foodMenu -> getOrderNumber()?>">
							</h4>
						</div>
					<?php endforeach ?>
				</div>
			</div>
			
			
			<div class="drink">
				<div class="head_drink">
					MINUMAN
				</div>
				<div class="list2">
					<?php foreach($drinksMenu as $drinkMenu): ?>
						<div class="minuman_list">
							<img class="gambar" src="<?php echo $drinkMenu -> getImage() ?>">
							<h4><?php echo $drinkMenu -> getName()?></h4>
							<h4>Rp.<?php echo $drinkMenu -> getPrice() ?></h4>
							<h4>Jumlah pesanan :
							<input type="text" value="0" name="<?php echo $drinkMenu -> getOrderNumber()?>">
							</h4>
						</div>
					<?php endforeach ?>
				</div>
			</div>
			<button class="next" type="submit">Selanjutnya</button>
		</div>
	</form>
	<div class="name">by: Wulandari</div>
	</body>
</html>