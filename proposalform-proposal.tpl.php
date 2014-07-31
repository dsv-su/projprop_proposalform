<div id="proposal-form">
  <?php print theme('ctools_collapsible',
    array(
      'handle'  => '<h3>'.t('Add a new proposal').'</h3>',
      'content' => drupal_render($form),
      'collapsed' => !$_POST
    )
  );
  ?>
</div>