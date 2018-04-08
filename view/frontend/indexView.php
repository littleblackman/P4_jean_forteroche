<?php $page_title = 'Jean Forteroche - Alaska'; ?>

<?php ob_start(); ?>

	<div id="posts">
		<p>EPISODES</p>

<?php 
foreach ( $resp AS $value ) {
?>
		<div class="post-excerpt-container">
			<div>
				<h3><?= htmlspecialchars($value->getTitle()); ?></h3>
				<p>
					<?php
						$date = htmlspecialchars($value->getPost_date());
						$date_fr = new DateTime($date);
						echo "Publié le " .$date_fr->format('d-m-Y');	
					?>				
				</p>
				<!-- <div class="post-excerpt">
					<?= $value->getContent(); ?>
				</div> -->
			</div>
			
			<a class="comment-link" href="index.php?action=post&amp;id=<?= $value->getId(); ?>">
				<img src="view/frontend/img/reading.svg" alt="chat icon" height="30px" width="30px">
				<p>Lire l'épisode</p>	
			</a>		
		</div>
<?php
} 
?>
	</div>
	<div>
		<a href="index.php?action=login">Espace administrateur</a>
	</div>

<?php

$page_content = ob_get_clean();

require('template.php');

?>