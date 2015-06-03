<div id="body-container">

    <header class="">

        <div id="front-nav">
            <?php theme('_content/nav-front.php'); ?>

            <div class="">
                <div id="header-nav-btns">
                    <!--<div class="header-item switch featurebox hidden-xs"><img src="images/icons/slider-right.png" /></div>-->
                    <div class="header-item switch searchbox hidden"><img src="images/icons/search-glass.png" /></div>
                </div>
                <div id="header-slider-wrapper" class="">

                    <div class="header-slider-inner">
                        <div class="header-item search-wrapper col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <?php
                            theme('_content/front/header-search.php');
                            ?>
                        </div>
                        <!-- Icons need to be converted in fonticon at some point -->
                        <div class="header-item featuredbox col-xs-6 col-sm-6 col-md-6 col-lg-6 hidden-xs">
                            <?php
                            theme('_content/front/header-featured.php');
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>





    </header>

    <section id="content-top">

        <div class="container">
            <?php
            theme('_content/featured-tabs.php');
            ?>
        </div>

        <div class="container">
            <?php
            theme('_content/latest-tab.php');
            ?>

        </div>
    </section>     



</div>


<!-- Footer Region -->
<footer class="region region-footer">
    <?php theme('_content/footer.php'); ?>
</footer>