
<questions-container>
	<header class="frequently-asked">
		<h2 class="attention-voice">frequently asked questions</h2>
		<p class="calm-voice">Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Tempora, suscipit.</p>
	</header>


	<questions-dropdown>

		<ul>

		<?php
		$json = file_get_contents('data/questions.json');
		$questions = json_decode($json, true);

		foreach($questions as $question) { ?> 

		<li class="dropdown">

			<details class=“faq-card”>
			<summary class=“medium-voice”>
				<?=$question['header']?>
				<span class=“dropdown”>+</span>
			</summary>
			<p class=“small-voice”><?=$question['copy']?></p>
			</details>

		</li>


		

		<?php } ?>

		</ul>
		
	</questions-dropdown>

</questions-container>

