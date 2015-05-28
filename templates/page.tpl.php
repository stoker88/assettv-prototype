<header id="header">

  <!-- Header Region --> 
  <div class="region region-header">
    <?php theme('_content/nav.php'); ?>
    <?php theme('_content/channel/header.php'); ?>
  </div>

</header>

<div id="main">
  <div class="row">

    <!-- Content Region -->
    <section id="content" class="region region-content">
      <?php theme_view('channel', 'video-list', '_content/channel/video_list.php', '_content/channel/video.php', null, '_content/channel/filter_menu.php'); ?>
    </section>

    <!-- Aside Region -->
    <aside class="region region-sidebar">
      <?php theme_block('block-contact-block', '_content/channel/contact_block.php', '', 'block-channel-contact'); ?>
      <?php theme_block('block-mpu-block', '_content/mpu_block.php', '', 'block-mpu'); ?>
      <?php theme_block('block-twitter-block', '_content/twitter_block.php', '', 'block-twitter'); ?>
    </aside>

  </div>
</div>

<footer class="footer">
  <div class="container">
    <!-- Footer Region -->
    <div class="region region-footer">
      <?php theme('_content/footer.php'); ?>
    </div>
  </div>
</footer>