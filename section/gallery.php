<div class="slider">    
      <div class="sl-left">&nbsp;</div>
      <div class="sl-right"> &nbsp;</div>      <div class="slider-wrapper">
        <div class="slider-items">                                
            <div class="wu-slider-block"> 
                <a href="#"><img src="img/512x512(1).png" alt="" width="130" height="100"></a>            </div>
            <div class="wu-slider-block"> 
                <a href="#"><img src="img/512x512(2).jpg" alt="" width="130" height="100"></a>            </div>
            <div class="wu-slider-block"> 
                <a href="#"><img src="img/512x512(3).png" alt="" width="130" height="100"></a>            </div>
            <div class="wu-slider-block"> 
                <a href="#"><img src="img/remont.jpg" alt="" width="130" height="100"></a>            </div>
		    <div class="wu-slider-block"> 
				<a href="#"><img src="img/yellow.png" alt="" width="130" height="100"></a>            </div>
			<div class="wu-slider-block">
			<a href="#"><img src="img/kal.jpg"  alt="" width="130" height="100"></a>            </div>
			<div class="wu-slider-block"> 
				
				<script type="text/javascript">
$(function(){
    wuWidth = $('.wu-slider-block').width(); //1
    $(".sl-right").click(function(){
        var div = $(this).parent('div') //2
        var item = div.find('.slider-items'); //3
        item.animate({left: -wuWidth}, 300); //4
        setTimeout(function () { //5
            item.find(".wu-slider-block").eq(0).clone().appendTo(item); 
            item.find(".wu-slider-block").eq(0).remove();     
            item.css({"left":"0px"}); 
        }, 450);
    });
    $(".sl-left").click(function(){     
        var div = $(this).parent('div')
        var item = div.find('.slider-items');
        item.find(".wu-slider-block").eq(-1).clone().prependTo(item); 
        item.css({"left": -wuWidth});     
        item.animate({left: "0px"}, 300);
        item.find(".wu-slider-block").eq(-1).remove();
    });    
});
</script>
</div> 
        </div>        
        <div align="center"></div>
      </div>