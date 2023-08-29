/*rediereccion de boton*/
<input class="btn" type="submit" onclick="location='index.php'" />

$( ".color-black" ).click(function() {
    $(this).css( "color", "white" );
    $(".color-white").css( "color", "white" );
    $(".blackwhite").html("Black");
    src="https://media.ldlc.com/r1600/ld/products/00/05/00/34/LD0005003477_2.jpg";
    $(".headset").attr("src", src);
  });
  
  $( ".color-white" ).click(function() {
    $(this).css( "color", "black" );
    $(".color-black").css( "color", "black" );
    $(".blackwhite").html("White");
    src="https://media.ldlc.com/r1600/ld/products/00/05/00/35/LD0005003502_2.jpg";
    $(".headset").attr("src", src);
  });
  
  