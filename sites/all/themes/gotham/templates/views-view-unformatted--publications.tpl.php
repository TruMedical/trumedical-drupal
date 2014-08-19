<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="grid__item lap-one-half">
	<div class="pub-group">
		<?php if (!empty($title)): ?>
		  <h3 class="pub-group__title"><?php print $title; ?></h3>
		<?php endif; ?>
		<ul class="pub-group__list">
			<?php foreach ($rows as $id => $row): ?>
			  <li class="pub-group__item">
			    <?php print $row; ?>
			  </li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
