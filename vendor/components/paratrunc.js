(function($){
    $.fn.paraTrunc = function(options) {
	   
        var defaults = {
            max: 3,
            moreText: "[More]",
            lessText: "[Less]",
            slideSpeed: "slow",
            ellipsisText: "...",
            onShowMore: function(){
        
            }
        };
		
        var options = $.extend(defaults, options);
        var paragraphs;
        var obj;
	   
        $(".print_button").click(function(){
            $(".paraTruc_toggle").html(options.lessText);
            $(".ellipsisText").fadeOut("fast").text("");
            $(".paraTruc_content").slideDown(options.slideSpeed); 
        }); 
           
           
        return this.each(function() {
            
            obj = $(this);
            
            var hideHTML = "";
            paragraphs = obj.find("p").each(function(index){
                if(index >= options.max){
                    hideHTML += "<p>"+$(this).html()+"</p>";
                    $(this).remove();
                }
            });
            
            obj.append("<div class='paraTruc_hide'><div class='paraTruc_content'>" + hideHTML + "</div><div class='ellipsisText'>"+options.ellipsisText+"</div></div>");
            
            if(paragraphs.length > options.max){
                $(".paraTruc_hide").append("<span class='paraTruc_toggle'>"+options.moreText+"</span>");
            }
            //Hide ellipsisText if less than max paragraphs
            else
                $(".ellipsisText").hide();
            
            $(".paraTruc_content").hide();
            $(".paraTruc_toggle").click(function(){
                if($(".paraTruc_content").is(":visible")){
                    $(".paraTruc_toggle").html(options.moreText);
                    $(".paraTruc_content").slideUp(options.slideSpeed, function(){
                        $(".ellipsisText").fadeIn("fast").text(options.ellipsisText);
                    });
                }
                else{
                    
                    options.onShowMore();
                    
                    $(".paraTruc_toggle").html(options.lessText);
                    $(".ellipsisText").fadeOut("fast").text("");
                    $(".paraTruc_content").slideDown(options.slideSpeed); 
                }
            });
            
        });
        
    };
})(jQuery);