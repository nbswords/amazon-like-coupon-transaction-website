var i=0;
var j=0;

$(document).ready(function(){
    /*------------------hamburger--------------*/
    $(".container-middle img").addClass("scale-animation");
    /*------------------search bar---------------*/
    $(".search-box").on({
        mouseleave: function(){
            
            if(i==1){
                $(".search-text").animate({width:'0px'});
                $(this).animate({width:'16px', left:'+=200px'});
                $(".search-box").css("border-color", "transparent");
                $(".search-box").css("background", "rgba(192, 192, 192, 0)");
                i=0;
                j=0;
            }
        },
        click: function(){
            if(j==0){
                $(".search-box").css("border-color", "#f6c04c");
                $(this).animate({width:'216px', left:'-=200px'});
                $(".search-text").animate({width:'190px'});
                $(".search-box").css("background", "rgba(192, 192, 192, 0.5");
                i++;
            }  
            j++;
        }
    });

    $(".search-btn").on({
        mouseenter: function(){
            $(".search-btn img").attr("src","decoration/search-hover.png");
            $(".search-btn").css("cursor", "pointer");
        },
        mouseleave: function(){
            $(".search-btn img").attr("src","decoration/search.png");
        }
    });

    /*----------------social media icon-------------------*/
   $(".n1 img").hover(function(){
        $(this).attr("src","decoration/gmail-hover.png");
   },
   function(){
        $(this).attr("src","decoration/gmail.png");
   });

   $(".n2 img").hover(function(){
        $(this).attr("src","decoration/twitter-hover.png");
   },
   function(){
        $(this).attr("src","decoration/twitter.png");
   });

   $(".n3 img").hover(function(){
     $(this).attr("src","decoration/facebook-hover.png");
   },
   function(){
     $(this).attr("src","decoration/facebook.png");
   });

   $(".n4 img").hover(function(){
     $(this).attr("src","decoration/ig-hover.png");
   },
   function(){
     $(this).attr("src","decoration/ig.png");
   });

})