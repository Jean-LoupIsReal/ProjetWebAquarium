document.getElementById("menubutton").addEventListener(onclick, openNav);
document.getElementById("closebutton").addEventListener(onclick, closeNav);


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

function transferPick()
{
  let form = document.forms["partpicker"];

  //ce serait meilleur si array.forEach() fonctionnait avec le form
  if(form["aquarium"].value != 0)
  {
    ajouterAquarium(form["aquarium"].value);
  }  
  if(form["chauffe"].value != 0)
  {
    ajouterItem(form["chauffe"].value);
  }
  if(form["lumiere"].value != 0)
  {
    ajouterItem(form["lumiere"].value);
  }
  if(form["deco"].value != 0)
  {
    ajouterItem(form["deco"].value);
  }
  if(form["substrait"].value != 0)
  {
    ajouterItem(form["substrait"].value);
  }
  if(form["nettoyage"].value != 0)
  {
    ajouterItem(form["nettoyage"].value);
  }
  if(form["thermo"].value != 0)
  {
    ajouterItem(form["thermo"].value);
  }
  if(form["filtre"].value != 0)
  {
    ajouterItem(form["filtre"].value);
  }

}

function updateInfo()
{

}

function deleteCookie(cname)
{
  setCookie(cname, 0, 0);
}

function viderPanier()
{
  deleteCookie("panierAquarium");
  deleteCookie("panierItem");
  deleteCookie("panierPoisson");
  location.reload();
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