<header id="header">

  <!-- Header Region --> 
  <div class="region region-header">
    <?php theme('_content/nav.php'); ?>
    <?php theme('_content/searchbar.php'); ?>
    <?php theme('_content/channel/header.php'); ?>
  </div>

</header>

<div id="main">
  <div class="row">

    <section id="content">
      <!-- Content Region -->
      <div class="region region-content">
        <?php theme_view('channel', 'video-list', '_content/channel/video_list.php', '_content/channel/video.php', null, '_content/channel/filter_menu.php'); ?>
      </div>

      <!-- Below Content Region -->
    </section>

    <aside id="sidebar">
      <!-- Aside Region -->
      <div class="region region-sidebar">
        <?php theme_block('contact-block', '_content/channel/contact_block.php'); ?>
        <?php theme_block('mpu-block', '_content/mpu_block.php'); ?>
      </div>
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