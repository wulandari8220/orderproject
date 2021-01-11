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
		<a href="index.php">
			<img class="back" src="iconfinder_restart-1_18208.png">
			<!--https://www.iconfinder.com/icons/18208/restart_arrow_back_icon -->
		</a>
		<form method="get" action="buy.php">
		<?php $totalPayment1 = 0;
					$totalPayment2 = 0;
					$totalOrder1 = 0;
					$totalOrder2 = 0;
					
					
					foreach($foodsMenu as $foodMenu){
						$orderCount = $_POST[$foodMenu -> getOrderNumber()];
						$foodMenu->setOrderCount($orderCount);
						$totalOrder1 += $foodMenu -> getOrderCount();
					}
					
					foreach($drinksMenu as $drinkMenu){
						
						$orderCount = $_POST[$drinkMenu -> getOrderNumber()];
						$drinkMenu -> setOrderCount($orderCount);
						$totalOrder2 += $drinkMenu -> getOrderCount();
					}
					
					$totalOrder = $totalOrder1 + $totalOrder2;
				?>
		
		<?php if($totalOrder>0): ?>
		<div class="form_order">
		<div class="form1_order">
			<div class="place1">
				Warung Ayam Berkah
			</div>
			<div class="form2_order">
				<div class="table_number1">
					Nomor Meja: <?php echo $_POST['table'] ?>
				</div>
				<center>
					<table class="table1">
						<tr>
							<th>Pesanan</th>
							<th>x</th>
							<th>Harga</th>
						</tr>
						
						<?php foreach($foodsMenu as $foodMenu):?>
							<?php
								$orderCount = $_POST[$foodMenu -> getOrderNumber()];
								$foodMenu->setOrderCount($orderCount);
								$totalPayment1 += $foodMenu -> getTotalPrice();
							?>
							<?php if($orderCount > 0) : ?>
							<tr>
								<td><?php echo $foodMenu -> getName() ?></td>
								<td><?php echo $orderCount?></td>
								<td>Rp. <?php echo $foodMenu -> getTotalPrice() ?></td>	
							</tr>
							<?php endif ?>
						<?php endforeach?>
						
						<p></p>
						
						<?php foreach($drinksMenu as $drinkMenu): ?>
							<?php 
								$orderCount = $_POST[$drinkMenu -> getOrderNumber()];
								$drinkMenu -> setOrderCount($orderCount);
								$totalPayment2 += $drinkMenu -> getTotalPrice();
							?>
							<?php if($orderCount > 0): ?>
							<tr>
								<td><?php echo $drinkMenu -> getName() ?></td>
								<td><?php echo $orderCount ?></td>
								<td>Rp. <?php echo $drinkMenu -> getTotalPrice() ?></td>	
							</tr>
							<?php endif ?>
						<?php endforeach?>	
					</table>
				<?php $total = $totalPayment1 + $totalPayment2?>
				
				<h2 class="total">Total : Rp. <?php echo $total?></h2>
				
			</center>
			</div>
		</div>	
			<button href="pesan.php" type="submit" class="buy">PESAN</button>
		</div>
		
		<?php else : ?>
		<div class="form_order">
		<div class="form1_order">
			<div class="place1">
				Warung Ayam Berkah
			</div>
			<div class="form2_order">
				<div class="table_number1">
					Nomor Meja: <?php echo $_POST['table'] ?>
				</div>
				<h4 class="else">"Tidak ada makanan atau minuman yang dipilih"</h4>
			</div>
		</div>
		</div>
		
		<?php endif ?>
		</form>
	</body>
</html>