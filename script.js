$('DocsBttn').observe('click', function () {
    var Docsclicked = true;
    window.clicked = Docsclicked;
});

$('SheetsBttn').observe('click', function () {
    var Sheetsclicked = true;
    window.clicked = Sheetsclicked;
});

if (Docsclicked) {
    changeDcsStyle();
    } else {
    // Button not clicked
    }

if (Sheetsclicked) {
    changeShtsStyle();
    } else {
    
    }
  
function changeDcsStyle(){
    var element = document.getElementById("DocsDiv");
    element.style.display = "none";
}

function changeShtsStyle(){
    var element = document.getElementById("SheetsDiv");
    element.style.display = "none";
}