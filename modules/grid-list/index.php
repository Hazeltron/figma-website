
<grid-list-container>

	<graphic-diptych>

		<p class="calm-voice optional-p">Lorem ipsum dolor sit, amet.</p>
		<h2 class="attention-voice">Lorem ipsum dolor sit amet.</h2>
		<p class="calm-voice">Lorem ipsum dolor sit, amet.</p>
		<picture>
			<img class="main-image" src="assets/square.png" alt="">
		</picture>

	</graphic-diptych>

	<ul>

	<?php 
	$json = file_get_contents('data/grid-list.json');
	$products = json_decode($json, true); 
	?>

	<?php foreach($products as $product){ ?>
		<li>
			
			<picture class="list-icons">
				<img  src="<?=$product['icon']?>" alt="">
			</picture>
			<div class="list-copy">

				<h3 class="strong-voice"><?=$product['heading']?></h3>
			
				<p class="calm-voice"><?=$product['copy']?></p>
			</div>
			

		</li>

	
	<?php } ?> 

	</ul>
	
</grid-list-container>