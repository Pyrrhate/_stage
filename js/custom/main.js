(function($){
  $(document).ready(function(){

  	$(function(){
  		main.init();
      handler.init();
    });

    var main={
     init:function(){
      console.log('main-init');
      $('.carousel').carousel({
        interval: 4000
      });
      $('.dropdown-toggle').dropdown();
    }
  };
  var handler={
    init:function(){
      console.log('handler-init');
      $('.btn-inscription').bind("click",function(){
          // $('.carousel').carousel('pause');
        });

      $('.modal-footer .btn-default').bind("click",function(){
          // $('.carousel').carousel()
        });
    }
  };
});
})(jQuery);