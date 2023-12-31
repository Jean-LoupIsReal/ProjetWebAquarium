document.getElementById("menubutton").addEventListener("click", openNav);
document.getElementById("closebutton").addEventListener("click", closeNav);

let selectors = document.getElementsByClassName("picker");
for (let i = 0; i <= selectors.length; i++) {
  selectors[i].addEventListener("blur", updateInfo(e));
}

let suppressors = document.getElementsByClassName("supp");
for (let i = 0; i <= suppressors.length; i++) {
  suppressors[i].addEventListener("click", deleteEntry(e));
}

/* Configuration carousel */
/*let bouton_carousel = document.getElementsBy("bouton_carousel")
for(let i = 0; i = bouton_carousel.length; i++){
  bouton_carousel[i].addEventListener("click", change{
    let slides = document.getElementsBy("slideI")
    slides.forEach();
  })
}*/
/* Set the width of the side navigation to 250px */
//fait apparaitre le side menu
function openNav() 
{
    document.getElementById("mySidenav").style.width = "250px";
}
  
//fait disparaitre le side menu
function closeNav() 
{
    document.getElementById("mySidenav").style.width = "0";
}

//ajoute un aquarium au panier
function ajouterAquarium(objectID)
{
  let panierArray = new Array;

  if(getCookie("panierAquarium") != "")
  {
    let panierCookie = getCookie("panierAquarium");
    panierArray = JSON.parse(panierCookie);
  }

  console.log("avant: " + panierArray);
  panierArray.push(objectID);
  console.log("après: " + panierArray);
  setCookie("panierAquarium", JSON.stringify(panierArray));

}

//ajoute un poisson au panier
function ajouterPoisson(objectID)
{
  let panierArray = new Array;

  if(getCookie("panierPoisson") != "")
  {
    let panierCookie = getCookie("panierPoisson");
    panierArray = JSON.parse(panierCookie);
  }

  panierArray.push(objectID);
  console.log("après: " + panierArray);
  setCookie("panierPoisson", JSON.stringify(panierArray));

}

//ajoute un poisson au panier
function ajouterItem(objectID)
{
  let panierArray = new Array;

  if(getCookie("panierItem") != "")
  {
    let panierCookie = getCookie("panierItem");
    panierArray = JSON.parse(panierCookie);
  }

  console.log("avant: " + panierArray);
  panierArray.push(objectID);
  console.log("après: " + panierArray);
  setCookie("panierItem", JSON.stringify(panierArray));

}

//ajoute en masse les select non-vides au panier
function transferPick()
{
  let form = document.forms["partpicker"];

  if(form["aquarium"].value != 0)
  {
    ajouterAquarium(form["aquarium"].value);
  } 

  form.slice(1).forEach(element => {
    if(element.value != 0)
    {
      ajouterItem(element.value);
    }
  });
}

//mets à jours les infos d'un objet sélectionné dans un partpicker
//ne fonctionne pas car event reste undefined
//je ne sais pas pourquoi
function updateInfo(e)
{
  let thing = e.target;
  console.log(thing)
}

//détruit un cookie
function deleteCookie(cname)
{
  setCookie(cname, 0, 0);
}

//vide le panier et recharge la page pour afficher le changement
function viderPanier()
{
  deleteCookie("panierAquarium");
  deleteCookie("panierItem");
  deleteCookie("panierPoisson");
  location.reload();
}

//crée un cookie ou le modifie
function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

//obtient la valeur d'un cookie
function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}