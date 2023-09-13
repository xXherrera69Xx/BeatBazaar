<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte</title>
  <link href="css/soporte.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="wrapper">
    <p>Necesitas ayuda?, Estamos aqui para vos</p>
    <h1>Preguntas Frecuentas</h1>

    <div class="faq">
      <button class="accordion">
        Cuanto tarda en llegar mi compra?
        <i class="fa-sharp fa-solid fa-plus" style="color: #00d5ff;"></i>
      </button>  
      <div class="panel">

      <p>Dependiendo de tu zona, 
        el envio puede tardar de a 3 dias o mas.
        Si eres de CABA o Provincia de buenos aires tu envio
        deberia llegar en 1 dia
      </p>
      </div>
      <div class="faq">
      <button class="accordion">
        Que medios de pago aceptan?
        <i class="fa-sharp fa-solid fa-plus" style="color: #00d5ff;"></i>
      </button>  
      <div class="panel">

      <p>Aceptamos todos los medias de pago</br>
        *Master Card</br>
        *Visa</br>
        *Paypal</br>
        *Mercado pago</br>
        *Transferencias bancarias</br>


        
      </p>
      </div>
       <div class="faq">
      <button class="accordion">
        Puedo pedir un rembolso?
        <i class="fa-sharp fa-solid fa-plus" style="color: #00d5ff;"></i>
      </button>  
      <div class="panel">

      <p>El rembolso de un producto solo se pude realizar 
        si solo dicho producto esta en el estado en el que se entrego
        El tiempo de devolucion de producto depende del mismo
        No se aceptaran rembolsos si el producto esta en un estado diferenete al que se entrego,
        fue manipaluado por terceros
      </p>
      </div>
      </div>
       <div class="faq">
      <button class="accordion">
        No encunetras una respuesta a tu pregunta?
        <i class="fa-sharp fa-solid fa-plus" style="color: #00d5ff;"></i>
      </button>  
      <div class="panel">

      <a href="album.php"> <button type="button" class="btn btn-outline-info">Detalles</button></a>
      </div>
      

      <script>
var  acc = document.getElementsByClassName("accordion");
var i;

for(i = 0; i < acc.length; i++){
  acc[i].addEventListener("click", function(){
    this.classList.toggle("active");
    this.parentElement.classList.toggle("active");


    var panel = this.nextElementbling;
    if(panel.style.display === "block"){
      panel.style.display = "none";
    }else{
      panel.style.display = "block";
    }
  });


}




  </script>
</body>
</html>