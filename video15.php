 <!DOCTYPE html>
 <html>
 <head>
 	<title>Video 15</title>
 	<script src="Js/jquery-2.1.4.js"></script>
 	
 	<script >

 		$(document).on("ready",function(){

 			$('a').on("click",function(e){

 				e.preventDefault();
 				var link = $(this).attr('href');
 				var entrar = confirm("Pirob desea salir?? ");

 				if (entrar) {
 					location.href = link;
 				}else{
 					alert("Gracias por permanecer en nuestra pagina :D");
 				}

 				

 			});

 		});

 	</script>
 </head>
 <body>
 
 <a href="http:\\www.youtube.com">Seguime en yotube</a>

 </body>
 </html>