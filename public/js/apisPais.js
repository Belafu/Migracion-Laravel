console.log("holas paises");
/*API PAISES*/
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
})
.catch(function(error){
  console.log(error);
})


selectorPais.onclick = function(){
    var selectorCiudad =  document.querySelector(".ciudad");
  //Borra todo tus options
    while (selectorCiudad.hasChildNodes()) {
  	   selectorCiudad.removeChild(selectorCiudad.firstChild);
    }
    //console.log(selectorCiudad); es un select

    var idElegido = document.querySelector('.pais').value;
    console.log(idElegido);

    fetch('https://api.mercadolibre.com/classified_locations/countries/' + idElegido)
    .then(function(response) {
      return response.json()
    })
    .then(function(information) {
      console.log(information.states);
  //    var selectorCiudad =  document.querySelector(".ciudad");
        information.states.forEach(function(elem) {
          var optionCiudad = document.createElement('option');
          optionCiudad.innerText = elem.name ;
          optionCiudad.setAttribute('value',elem.name);
      //    console.log(optionCiudad);
          selectorCiudad.append(optionCiudad);
        });
    })
    .catch(function(error){
      console.log(error);
    })
}
