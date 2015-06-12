<?php theme('_content/popoutmenu.php'); ?>
<div id="body-container">
    <header id="header">

        <!-- Header Region --> 
        <div class="region region-header">
            <?php theme('_content/nav.php'); ?>
            <?php //theme('_content/channel/header.php'); ?>
            <?php theme('_content/channel/header-unbranded.php'); ?>
        </div>

    </header>

    <div id="main">
        <div class="row">

            <!-- Content Top Region -->
            <section class="region region-content-top">

                <?php theme_view('channel', 'channel-grid', '_content/channel/channel-directory-grid.php', null, null, null); ?>

            </section>
            <!-- Aside Region -->
            <aside class="region region-sidebar">
                <?php theme_block('block-channel-grid', '_content/channel/channel-grid.php', '', 'block-channel-grid'); ?>
                <?php theme_block('block-trending', '_content/trending.php', '', 'block-trending'); ?>
                <?php theme_block('block-mpu-block', '_content/mpu_block.php', '', 'block-mpu'); ?>
                <?php theme_block('block-twitter-block', '_content/twitter_block.php', '', 'block-twitter'); ?>
            </aside>



            <!-- Content Region -->
            <section id="content" class="region region-content">

            </section>

        </div>
    </div>


    <!-- Footer Region -->
    <footer class="region region-footer">
        <?php theme('_content/footer.php'); ?>
    </footer>
</div>