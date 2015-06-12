<div class="navbar navbar-default navbar-front" role="navigation">
    <div class="container">
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle collapsed pull-left toggle-nav" >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="images/assettv.png" alt="Asset.tv" /></a>
        </div>


        <nav id='main-nav' class="collapse navbar-collapse col-sm-12">
            <ul class="nav navbar-nav ">
                <li role="presentation" class="dropdown">
                    <a href="#">BROWSE<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>DROPDOWN</li>
                    </ul>
                </li>
                <li><a href="#">CHANNELS</a></li>
                <li><a href="#about">MARKETS</a></li>
                <li><a href="#about">TRAINING</a></li>
            </ul>
            <ul class="nav navbar-nav hidden-sm hidden-md second-nav text-uppercase">
                <li><span class="spacer">|</span></li>
                <li><a href="#">Trending</a></li>
                <li><a href="#about">Newsletter</a></li>
                <li><a href="#about">Blog</a></li>
                <li><a href="#about">Feedback</a></li>
            </ul>

        </nav>
        <?php theme_block('block-menu-user-menu', '_content/usermenu-front.php', '', 'block-menu'); ?>

    </div>
</div>


