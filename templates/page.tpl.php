<?php theme('_content/popoutmenu.php'); ?>
<div id="body-container">
    <header id="header">

        <!-- Header Region --> 
        <div class="region region-header">
            <?php theme('_content/nav.php'); ?>
            <?php theme('_content/channel/header.php'); ?>
        </div>

    </header>

    <div id="main">
        <div class="row">

            <!-- Content Top Region -->
            <section class="region region-content-top">
                <?php theme_block('block-featured-video', '_content/channel/video.php', '', 'block-featured-video'); ?>
            </section>
            <!-- Aside Region -->
            <aside class="region region-sidebar">
                <?php theme_block('block-contact-block', '_content/channel/contact_block.php', '', 'block-channel-contact'); ?>
                <?php theme_block('block-mpu-block', '_content/mpu_block.php', '', 'block-mpu'); ?>
                <?php theme_block('block-twitter-block', '_content/twitter_block.php', '', 'block-twitter'); ?>
            </aside>

            <!-- Content Region -->
            <section id="content" class="region region-content">
                <?php theme_view('channel', 'video-list', '_content/channel/video_list.php', '', null, '_content/channel/filter_menu.php'); ?>
            </section>

        </div>
    </div>


    <!-- Footer Region -->
    <footer class="region region-footer">
        <?php theme('_content/footer.php'); ?>
    </footer>
</div>