
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

			<picture class="large-img">
				<img src="assets/square.png" alt="">
			</picture>

			<li>
				<picture class="client-icon">
					<img src="<?=$client['icon']?>" alt="">
				</picture>
				<h3 class="strong-voice"><?=$client['copy']?></h3>

				<client-info>

					<picture class="client-photo">
						<img src="<?=$client['photo']?>" alt="">
					</picture>
					<div class="client-info-text">
						<p class="calm-voice"><?=$client['name']?></p>
						<p class="calm-voice job"><?=$client['job']?></p>
						<p class="calm-voice description"><?=$client['description']?></p>
					</div>
					

				</client-info>
				
			</li>
			

		 <?php } ?>

		 </ul>
	</scroll-gallery>


	
</client-talk>
