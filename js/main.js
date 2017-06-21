// displays the date/time on load of page
var dateAj = new Date();
var minutesAj = dateAj.getMinutes()>10 ? dateAj.getMinutes() : ("0" + dateAj.getMinutes());
document.getElementById("dateA").innerHTML = dateAj.getDate() + " / " + (dateAj.getMonth()+1) + " / " + dateAj.getFullYear() + " - " + dateAj.getHours() + "h" + minutesAj;

// check the categories depending on what is selected and send what's to be done to classChange function
function tabChange(x) {
  var articles = document.getElementsByTagName('article');
  var j = 0;
  var tab = ["hw", "sw", "dev"];
  for (var i = 0; i < articles.length; i++) {
    if ((x == 3 || articles[i].classList.contains(tab[x])) && j < 8) {
      classChange(articles[i], j, 0);
      j++;
    } else {
      classChange(articles[i], j, 1);
    }
  }
  for (var i = 0; i < 4; i++) {
    var btn = "btn" + i;
    if (i == x) {
      document.getElementById(btn).classList.add("btn-primary");
      document.getElementById(btn).classList.remove("btn-secondary");
    }
    else {
      document.getElementById(btn).classList.remove("btn-primary");
      document.getElementById(btn).classList.add("btn-secondary");
    }
  }
}

// adds or remove classes to display articles depending on selected category and what tabChange() sent
function classChange(art, j, n) {
  if (j <= 1 && n == 0) {
    art.classList.remove("smallArticle");
    art.classList.remove("hideArticle");
    art.classList.remove("col-md-6");
    art.style.order = j-4;
  } else if (j > 1 && n == 0) {
    art.classList.add("smallArticle");
    art.classList.add("col-md-6");
    art.classList.remove("hideArticle");
    art.style.order = 0;
  } else {
    art.classList.add("hideArticle");
  }
}

// Displays the alt attribute of the image inside a p element thats displayed over the image
function imgHover(th, z) {
  var art = "art" + th.id.substr(3);
  var img = "img" + th.id.substr(3);
  if (z == 1) {
    var alt = document.getElementById(img).alt;
    document.getElementById(art).innerHTML = alt;
  } else {
    document.getElementById(art).innerHTML = "";
  }
}

// Displays how many seconds the user is on the page
function tempsP() {
  var t = setTimeout("tempsP()", 1000);
  document.getElementById("temps").innerHTML = "You've been here for : " + (t-1) + " seconds";
}

// Confirm validation of articles' comments (atm not doing anything)
function confirmA() {
  confirm("Are you sure you want to send this comment ?");
}
