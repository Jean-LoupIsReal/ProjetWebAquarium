document.getElementById("menubutton").addEventListener(onclick, openNav)
document.getElementById("closebutton").addEventListener(onclick, closeNav)

/* Configuration carousel */
/*let bouton_carousel = document.getElementsBy("bouton_carousel")
for(let i = 0; i = bouton_carousel.length; i++){
  bouton_carousel[i].addEventListener("click", function(){
    let slides = document.getElementsBy("slideI")
    slides.forEach();
  })
}*/

/* Set the width of the side navigation to 250px */
function openNav() 
{
    document.getElementById("mySidenav").style.width = "250px";
}
  
  /* Set the width of the side navigation to 0 */
function closeNav() 
{
    document.getElementById("mySidenav").style.width = "0";
}

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

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

function ajouterAquarium(value)
{
  let panierArray = new Array;

  if(getCookie("panierAquarium") != "")
  {
    let panierCookie = getCookie("panierAquarium");
    panierArray = JSON.parse(panierCookie);
  }

  console.log("avant: " + panierArray);
  panierArray.push(value);
  console.log("après: " + panierArray);
  setCookie("panierAquarium", JSON.stringify(panierArray));

}

function ajouterPoisson()
{
  let panierArray = new Array;

  if(getCookie("panierPoisson") != "")
  {
    let panierCookie = getCookie("panierPoisson");
    panierArray = JSON.parse(panierCookie);
  }

  console.log("avant: " + panierArray);
  panierArray.push(value);
  console.log("après: " + panierArray);
  setCookie("panierPoisson", JSON.stringify(panierArray));

}

function ajouterItem()
{
  let panierArray = new Array;

  if(getCookie("panierItem") != "")
  {
    let panierCookie = getCookie("panierItem");
    panierArray = JSON.parse(panierCookie);
  }

  console.log("avant: " + panierArray);
  panierArray.push(value);
  console.log("après: " + panierArray);
  setCookie("panierItem", JSON.stringify(panierArray));

}
