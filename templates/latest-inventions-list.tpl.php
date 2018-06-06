<?php foreach ($nodes as $id => $node): ?>
    <h3><?php print $node->title; ?></h3>
    <p><?php print format_date($node->changed, 'medium'); ?></p>
    <p>
      <?php 
    	$summary_field = field_view_field('node', $node, 'body', array(
  		  'type' => 'text_summary_or_trimmed', 
		));
    	print render($summary_field);
      ?>
    </p>
<?php endforeach; ?>
