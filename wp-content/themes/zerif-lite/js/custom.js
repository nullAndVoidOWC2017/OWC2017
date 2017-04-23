jQuery(document).ready(function($){
	$("#menu-primary li a").each(function(){
      if($(this).attr('href') == '#'){
      	$(this).css({'cursor':'default','text-decoration':'none'});
		$(this).removeAttr('href');
        //$(this).bind('click',function(e){
        //		e.preventDefault();
        //});
      }
  });
});
