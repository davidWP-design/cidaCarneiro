/*template JavaScript*/

// $(document).ready(function(){
// 	$("ul.menu li").click( function() {
// 		$( this ).animate({"top": "50px"}, "slow");					
// 	});
// });  

// script fixa barra de navegação no topo
jQuery("document").ready(function($){

    $( ".box-icone-menu" ).click(function() {
        $( ".menu-mobile" ).toggleClass( "mostrar-menu" );
    });
  
    $(".sub-menu li a").click(function() {
      $(".menu-mobile").removeClass( "mostrar-menu" );
    });
  
  });


// lightbox 
// jQuery(document).ready(function( $ ) {
//     $(document).on('click', '[data-toggle="lightbox"]', function(event) {
//                   event.preventDefault();
//                   $("#thumbnail").ekkoLightbox();
//               });
//           });




// window.lightbox.init();

// lightbox.option({
//     'resizeDuration': 200,
//     'wrapAround': true
//   })
