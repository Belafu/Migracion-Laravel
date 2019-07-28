console.log("javascript de productos");
var productos = document.querySelector(".productos");
var cajaFiltro = document.querySelector(".tags");

var botom = document.querySelector(".botom-filtro");

botom.onclick = function(){
    cajaFiltro.style.zIndex = "10" ;
    cajaFiltro.style.display = "block";
    /*para que las imagenes queden atras*/
    cajaFiltro.style.position = "relative";

    productos.style.zIndex = "2" ;
   // cajaFiltro.style.transform = "translate(100px)";
    productos.style.position = "relative";
    productos.style.bottom = "658px";
    productos.style.opacity = "0.3";

    productos.onclick = function(){
      console.log("clickl en los productos");
      productos.style.opacity ="1";
      productos.style.bottom = "0";
     // cajaFiltro.style.transform = "translate(-100px)";
      cajaFiltro.style.display = "none";

   }
}
