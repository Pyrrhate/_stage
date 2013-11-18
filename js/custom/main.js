(function($){
  $(document).ready(function(){

  	$(function(){
  		main.init();
      handler.init();
   	});

   	var main={
   		init:function(){
   			console.log('main-init');
   			$('.dropdown-toggle').dropdown();
        $('.carousel').carousel({
            interval: 4000
          });
      }
   	};
    var handler={
      init:function(){
        console.log('handler-init');
        $('.btn-inscription').bind({click:this.toggle('inscription')});
      },
      toggle:function(type){
        console.log('handler-toggle');
        switch(type){
          case 'inscription':
          // $('body').append('<div id=""')
          break;
        }
      }
    };
});
})(jQuery);