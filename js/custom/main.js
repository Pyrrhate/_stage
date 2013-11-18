(function($){
  $(document).ready(function(){

  	$(function(){
  		main.init();
   	});

   	var main={
   		init:function(){
   			console.log('init');
   			$('.dropdown-toggle').dropdown();
        $('.carousel').carousel({
            interval: 2000
          });
      }
   	};
});
})(jQuery);