<?php
  if (!empty($list_block['message1'])) {
    hide($list_block['message1']);
  }
?>
<div class="test-messages-wrapper">
  <?php print drupal_render_children($list_block); ?>
</div>

<?php
  if (!empty($list_block['message1'])) {
    show($list_block['message1']);
    print drupal_render($list_block['message1']);
  }
?>
