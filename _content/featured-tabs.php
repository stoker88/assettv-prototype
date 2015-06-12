<div id="feature-tabs" role="tabpanel">
      <!-- Nav tabs -->
  <ul id="featured-tablist" class="nav nav-tabs nav-justified" role="tablist" id="myTab">
    <li role="presentation" class="tabs vertical-center active"><a href="#company-channels-tab" aria-controls="company-channels-tab" role="tab" data-toggle="tab">Company Channels</a></li>
    <li role="presentation" class="tabs vertical-center"><a href="#industry-channels-tab" aria-controls="industry-channels-tab" role="tab" data-toggle="tab">Industry Channels</a></li>
    <li role="presentation" class="tabs vertical-center"><a href="#masterclass-tab" aria-controls="masterclass-tab" role="tab" data-toggle="tab">Masterclass</a></li>
    <li role="presentation" class="tabs vertical-center"><a href="#academy-tab" aria-controls="academy-tab" role="tab" data-toggle="tab">The Academy</a></li>
    <li role="presentation" class="tabs vertical-center"><a href="#hot-topics-tab" aria-controls="hot-topics-tab" role="tab" data-toggle="tab">Hot topics</a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="company-channels-tab">
        
        <?php theme_view('channel', 'channel-list', '_content/front/company-slider.php',null, null, null);?>
    </div>
    <div role="tabpanel" class="tab-pane" id="industry-channels-tab">
        <?php theme_view('channel', 'channel-list', '_content/front/channels-industry.php',null, null, null);?>
    </div>
    <div role="tabpanel" class="tab-pane" id="masterclass-tab">
        <?php theme_view('channel', 'channel-list', '_content/front/channels-masterclass.php',null, null, null);?>
    </div>
    <div role="tabpanel" class="tab-pane" id="academy-tab">
       
        <?php theme_view('channel', 'channel-list', '_content/front/channels-academy.php',null, null, null);?>
    </div>
    <div role="tabpanel" class="tab-pane" id="hot-topics-tab">
        <?php theme_view('channel', 'channel-list', '_content/front/company-slider.php',null, null, null);?>
    </div>
  </div>

</div>