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
    // nbSegment:null,
    // numSegment:0,
    // Allsegment:null,
    panelListingCollapsed:'',
    segmentActive:'',
    init:function(){
      console.log('handler-init');
      $('#projects .panel-document').bind('click',function(){
        $(this).toggleClass('panel-active');
        $(handler.panelListingCollapsed).removeClass('panel-active');
        if(handler.panelListingCollapsed!=this){handler.panelListingCollapsed=this;}else{handler.panelListingCollapsed='';}
      });

      $('#translation-document .table .tr').click(function(){
        $(this).toggleClass("tr-active");
        $(handler.segmentActive).removeClass("tr-active");
        if(handler.segmentActive!=this){handler.segmentActive=this;}else{handler.segmentActive='';}
      }
      ); 


      $('.btn-inscription').bind("click",function(){
          // $('.carousel').carousel('pause');
        });
      $('.modal-footer .btn-default').bind("click",function(){
          // $('.carousel').carousel()
        });
      $(document).scroll(function(e){
        if($(this).scrollTop()>=90){
          $('#scrollTop').addClass('show');
        }else{
          $('#scrollTop').removeClass('show');
        }
      });
    }
  };
});
})
(jQuery);


      // $('#translation-document .infos-project .next-segment').attr('href','#actual-seg')
      // $('#translation-document tbody tr:first-child').attr('id','actual-segment');
      // this.nbSegment=$('#translation-document tbody tr').length-1;
      // this.Allsegment=$('#translation-document tbody tr');
      // $('.next-segment').bind({click:handler.nextSegment});
      /*$('#translation-document table thead td:first-child').bind("click",function(){
          $('#translation-document td:last-child').focus(function(){css('background-color','red');});
        });*/
/*$('#translation-document table thead td:first-child').click(function(){
    // $('#translation-document table').toggleClass("left-click");
    // $('#translation-document table').removeClass("right-click");
  }
  );*/
   /*
  $('#translation-document table tr').click(function(){
    $('#translation-document table tr').removeClass("trClicked");
    $(this).toggleClass("trClicked");
  }
  ); */
/*$('#translation-document table thead td:last-child').click(function(){
    // $('#translation-document table').toggleClass("right-click");
    // $('#translation-document table').removeClass("left-click");
  }
  );*/


/*nextSegment:function(){
  $('#translation-document #actual-segment').attr('id','');
  console.log(handler.numSegment);
  ++handler.numSegment;
  if(handler.numSegment>handler.nbSegment){
    handler.numSegment=0;
  }
  
  $(handler.Allsegment[handler.numSegment]).attr('id','actual-segment');
}
};*/