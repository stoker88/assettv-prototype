var substringMatcher = function (strs) {
    return function findMatches(q, cb) {
        var matches, substringRegex;

        // an array that will be populated with substring matches
        matches = [];

        // regex used to determine if a string contains the substring `q`
        substrRegex = new RegExp(q, 'i');

        // iterate through the pool of strings and for any string that
        // contains the substring `q`, add it to the `matches` array
        $.each(strs, function (i, str) {
            if (substrRegex.test(str)) {
                matches.push(str);
            }
        });

        cb(matches);
    };
};

var videourl = 'http://watchlist-hydra.gotpantheon.com/api/supersearch/video';
var channelsurl = 'http://watchlist-hydra.gotpantheon.com/api/supersearch/channel_pages';
var nodesurl = 'http://watchlist-hydra.gotpantheon.com/api/supersearch/all';



var channels = new Bloodhound({
    name: 'Channels',
    datumTokenizer: function (d) {

        return Bloodhound.tokenizers.whitespace(d.name);
    },
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    prefetch: {
        url: channelsurl
    },
    remote: {
        url: channelsurl
    },
    sufficient: 1
});


// constructs the suggestion engine
var videos = new Bloodhound({
    name: 'Videos',
    datumTokenizer: function (d) {
        return Bloodhound.tokenizers.whitespace(d.name);
    },
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    prefetch: {
        url: videourl
    },
    remote: {
        url: videourl
    },
    sufficient: 1
});


// constructs the suggestion engine
var nodes = new Bloodhound({
    name: 'Nodes',
    datumTokenizer: function (d) {
        return Bloodhound.tokenizers.whitespace(d.name);
    },
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    prefetch: {
        url: nodesurl
    },
    remote: {
        url: nodesurl
    },
    sufficient: 1
});


$('.typeahead').bind('typeahead:render', function (ev, suggestion, async, dataset) {

    $("body .addbackdrop").html("<div class='modal-backdrop fade in'></div>");
});
$('.typeahead').bind('typeahead:active', function (ev, suggestion, async, dataset) {

    //$("body .addbackdrop").html("<div class='modal-backdrop fade in'></div>");
});
$('.typeahead').bind('typeahead:close', function (ev, suggestion) {

    $(".modal-backdrop").remove();
});


$('.typeahead').typeahead({
    classNames: {
        menu: 'search-dropdown',
        dataset: 'search-section',
        suggestion: 'suggestion'
    },
    highlight: true,
    hint: false,
    minLength: 3
},
{
    name: 'channels',
    display: 'name',
    engine: Hogan,
    limit: 3,
    source: channels,
    templates: {
        header: function (data) {
            $('.channel-suggestions').text(data.suggestions.length);
        },
        suggestion: function (data) {

            $('.search-divider.channels .totals').text(data.totals);
            return '<li><a href="/' + data.link + '"><div class="media"><div class="media-left"><img class="media-object" src="' + data.uri + '"><span class="key">' + data.count + ' Videos</span></div> <div class="media-body">' + data.name + ' - ' + data.description + '</div></div></a></li>';
        }
    }

},
{
    name: 'videos',
    display: 'name',
    engine: Hogan,
    limit: 6,
    source: videos,
    templates: {
        header: function (data) {

            $('.video-suggestions').text(data.suggestions.length);
        },
        suggestion: function (data) {

            $('.search-divider.videos .totals').text(data.totals);
            return '<li><a href="/' + data.link + '"><p>' + data.name + '<span class="duration">' + data.duration + '</span><span class="glyphicon glyphicon-play pull-right"></span></p></a></li>';
        }
    }
}
//},
//{
//    name: 'nodes',
//    display: 'name',
//    engine: Hogan,
//    source: nodes,
//    limit: 6,
//    templates: {
//        header: function (data) {
//            $('.node-suggestions').text(data.suggestions.length);
//
//        },
//        suggestion: function (data) {
//            $('.search-divider.nodes .totals').text(data.totals);
//           
//            return '<a href="/' + data.link + '"><p><strong>' + data.name + '</strong></p></a>';
//        }
//    }
//}
);

$('.search-dropdown').prepend('<h4>Search Results</h4><hr>');



$('.search-section-channels').before('<h5 class="bold" id="collapse-channels" data-toggle="collapse" href="#collapsechannels" aria-expanded="false" aria-controls="collapsechannels">Channels (<span class="channel-suggestions"></span>)<span class="pull-right glyphicon glyphicon-chevron-up"></span></h5>');
$('.search-section-channels').after('<div class="search-divider channels center-block"><p class="text-center"><a href="#"><span class="totals"></span> results found - see full search</a></p></div>');
$('.search-section-channels').addClass('collapse in');
$(".search-section-channels").attr("id", "collapsechannels");

$('.search-section-videos').before('<h5 class="bold collapsed" id="collapse-videos" data-toggle="collapse" href="#collapsevideos" aria-expanded="false" aria-controls="collapsevideos">Videos (<span class="video-suggestions"></span>)<span class="pull-right glyphicon glyphicon-chevron-down"></span></h5>');
$('.search-section-videos').after('<div class="search-divider videos center-block"><p class="text-center"><a href="#"><span class="totals"></span> results found - see full search</a></p></div>');
$('.search-section-videos').addClass('collapse');
$(".search-section-videos").attr("id", "collapsevideos");

$('.search-section-nodes').before('<h5 class="bold collapsed" id="collapse-nodes" data-toggle="collapse" href="#collapsenodes" aria-expanded="false" aria-controls="collapsenodes">Nodes (<span class="node-suggestions"></span>)<span class="pull-right glyphicon glyphicon-chevron-down"></span></h5>');
$('.search-section-nodes').after('<div class="search-divider nodes center-block"><p class="text-center"><a href="#"><span class="totals"></span> results found - see full search</a></p></div>');
$('.search-section-nodes').addClass('collapse');
$(".search-section-nodes").attr("id", "collapsenodes");

$('.search-divider.videos').hide();
$('.search-divider.nodes').hide();

$("#collapse-channels").on("click", function () {
    if ($('.search-section-channels').hasClass('collapse in')) {
        $('#collapse-channels .glyphicon').switchClass("glyphicon-chevron-up", "glyphicon-chevron-down");
        $('.search-divider.channels').hide();
    }
    else {
        $('#collapse-channels .glyphicon').switchClass("glyphicon-chevron-down", "glyphicon-chevron-up");
        $('.search-divider.channels').show();
    }
});

$("#collapse-videos").on("click", function () {
    if ($('.search-section-videos').hasClass('collapse in')) {
        $('#collapse-videos .glyphicon').switchClass("glyphicon-chevron-up", "glyphicon-chevron-down");
        $('.search-divider.videos').hide();
    }
    else {
        $('#collapse-videos .glyphicon').switchClass("glyphicon-chevron-down", "glyphicon-chevron-up");
        $('.search-divider.videos').show();
    }
});

$("#collapse-nodes").on("click", function () {
    if ($('.search-section-nodes').hasClass('collapse in')) {
        $('#collapse-nodes .glyphicon').switchClass("glyphicon-chevron-up", "glyphicon-chevron-down");
        $('.search-divider.nodes').hide();
    }
    else {
        $('#collapse-nodes .glyphicon').switchClass("glyphicon-chevron-down", "glyphicon-chevron-up");
        $('.search-divider.nodes').show();
    }
});


//$(".search-dropdown h5.collapsed").last().css("padding-bottom", "20px");