<div class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed pull-left toggle-nav" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="images/assettv.png" alt="Asset.tv" />
      </a>
    </div>
    <nav id="main-nav" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li role="presentation" class="dropdown">
          <a href="#">Browse <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li>DROPDOWN</li>
          </ul>
        </li>
        <li><a href="#">Channels</a></li>
        <li><a href="#">Markets</a></li>
        <li><a href="#">Training</a></li>
      </ul>
    </nav><!--/.nav-collapse -->

    <!-- This will need to be added via a region or something! -->
    <?php theme_block('block-search-form', '_content/searchbar.php', '', 'block-search'); ?>

  </div>
</div>