console.log("holas paises");

var selectorPais =  document.querySelector(".pais");
fetch('https://api.mercadolibre.com/classified_locations/countries')
.then(function(response) {
  return response.json()
})
.then(function(information) {
    information.forEach(function(elem) {
      var option = document.createElement('option');
      option.innerText = elem.name ;
      option.setAttribute('value',elem.id);
      selectorPais.append(option);
    });
  console.log(information);
})
.catch(function(error){
  console.log(error);
})

var selectorCiudad =  document.querySelector(".ciudad");
selectorPais.onclick = function(){
  var option = document.createElement('option');
  option.innerText = "hola" ;
  selectorCiudad.append(option);
}

// var selectorPais = document.querySelector('.pais')
// selectorCiudad.onclick = function(){
//   var idElegido = document.querySelector('.pais').value;
//   console.log(idElegido);
//
//   fetch('https://api.mercadolibre.com/classified_locations/countries/'+idElegido)
//   .then(function(response) {
//     return response.json()
//   })
//   .then(function(information) {
//     var selectorCiudad =  document.querySelector(".ciudad");
//       information.states.forEach(function(elem) {
//         var option = document.createElement('option');
//         option.innerText = elem.name ;
//         option.setAttribute('value',elem.id);
//         console.log(option);
//         selectorCiudad.append(option);
//       });
//   })
//   .catch(function(error){
//     console.log(error);
//   })
//
// }
