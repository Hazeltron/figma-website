
<video-module>

	<picture class="icon-top">
		<img src="assets/square.png" alt="">
	</picture>

	<p class="calm-voice optional-p">Lorem, ipsum dolor sit amet consectetur, adipisicing elit. </p>

	<h2 class="attention-voice">watch this</h2>

	<p class="calm-voice default-p">Lorem ipsum dolor sit amet, consectetur adipisicing, elit.</p>

	<iframe class="video-iframe" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Rick Astley - Never Gonna Give You Up (Official Music Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

	<ul>
	<list-area>

	<?php  
	$json = file_get_contents('data/video.json');
	$options = json_decode($json, true);
	foreach($options as $option) { ?>

		<li>
			<h3 class="strong-voice"><?=$option['header']?></h3>
			<p class="calm-voice"><?=$option['copy']?></p>
		</li>

	<?php } ?>

	</list-area>
	</ul>

	<button-control>

		<a class="learn-link" href="#">learn more</a>
		<a class="see-link" href="">see all</a>

	</button-control>
	

	<bottom-text-content>

		<h2 class="attention-voice ">watch this</h2>

		<p class="calm-voice ">Lorem ipsum dolor sit amet, consectetur adipisicing, elit.</p>
		
	</bottom-text-content>
	





</video-module>