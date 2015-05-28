<div id="<?php print $block_html_id; ?>" class="block <?php print $block_class; ?>">

  <?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
    <h2<?php //print $title_attributes; ?>><?php print $block->subject ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content">
    <?php print $content; ?>
  </div>
</div>
