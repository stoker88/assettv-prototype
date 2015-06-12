/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


(function ($) {
    
    function return_to_search() {
        
    }
    
  
  $(document).ready(function() {
     var speed = 500;


//on Resize return to Search to ensure things to mess up
     $( window ).resize(function() {
        if($( ".switch.featurebox" ).hasClass( "hidden" )) {
            $('.header-slider-inner').animate({
              left: "0px"
          },speed);
            $('.switch.searchbox').addClass('hidden');
            $('.switch.featurebox').removeClass('hidden');
        }
        });
     
     //Slide to Featured Content
      $('.switch.featurebox').click(function () {
        var slideWidth = $('.header-item.search-wrapper').innerWidth();  
          $('.header-slider-inner').animate({
              left: "-" + slideWidth
          },speed);
          $(this).addClass('hidden');
          $('.switch.searchbox').removeClass('hidden');
         console.log(slideWidth); 
      });
      
      //Slide to Search
      $('.switch.searchbox').click(function () {
          $('.header-slider-inner').animate({
              left: "0px"
          },speed);
          $(this).addClass('hidden');
          
          $('.switch.featurebox').removeClass('hidden');
         //console.log(slideWidth); 
      });
      
      
  });
  
  
})(jQuery);