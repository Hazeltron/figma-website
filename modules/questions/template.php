
<questions-container>
	<header>
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

		<header class="question-title">

			<h3 class="strong-voice"><?=$question['header']?></h3>
		<picture class="icon">
			<img src="assets/square.png" alt="">
		</picture>
			
		</header>

			<p><?=$question['copy']?></p>
	
	
		</li>

		<?php } ?>

		</ul>
		
	</questions-dropdown>

</questions-container>