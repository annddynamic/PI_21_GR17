
let fotoja =document.getElementById("foto");
main_path = "../Assets/img/"
fotot = ["vioence", "corruption", "robbery", "report"]

function changePic(e) {
    fotoja.src= main_path + fotot[e.target.options.selectedIndex] + ".png";
}