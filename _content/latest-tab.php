<div role="tabpanel">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs latest-tab" role="tablist">
        <li role="presentation" class="active"><a href="#latest-content-tab" aria-controls="latest-content-tab" role="tab" data-toggle="tab">Latest content</a></li>
        <li role="presentation"><a href="#trending-tab" aria-controls="trending-tab" role="tab" data-toggle="tab">Trending</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="latest-content-tab">
            <?php
            theme_view('channel', 'channel-list', '_content/channel/video_list.php','_content/channel/video.php', null, '_content/channel/filter_menu.php');
            ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="trending-tab">
            <?php
            theme_view('channel', 'channel-list', '_content/channel/video_list.php', '_content/channel/video.php', null, '_content/channel/filter_menu.php');
            ?>
        </div>
    </div>

</div>