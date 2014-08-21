$(document).ready(function () {
            //hide
			var slide = true;
			
				$(".yeah").click(function () {
					if(slide){
						var abc = document.getElementById("page-sidebar-menu");
						abc.style.display="none";
						$('.open-close').attr('src','assets/img/close.png');
						slide=false;
					}else{
					   var abc = document.getElementById("page-sidebar-menu");
						abc.style.display="";
						$('.open-close').attr('src','assets/img/open.png');
						slide = true
				   }
				});
			
 });