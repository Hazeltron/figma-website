
<client-talk>

	<header>
		<h2 class="attention-voice">what our clients say</h2>
		<p class="calm-voice">Lorem ipsum dolor sit amet.</p>
	</header>

	<scroll-gallery>
		<ul>

		<?php
		$json = file_get_contents('data/client-feedback.json');
		$clients = json_decode($json, true); 
		foreach ($clients as $client) {?>

			<li>
				<picture class="client-icon">
					<img src="<?=$client['icon']?>" alt="">
				</picture>
				<h3 class="calm-voice"><?=$client['copy']?></h3>
				<picture class="client-photo">
					<img src="<?=$client['photo']?>" alt="">
				</picture>
				<p class="calm-voice"><?=$client['name']?></p>
			</li>
			

		 <?php } ?>

		 </ul>
	</scroll-gallery>


	
</client-talk>
