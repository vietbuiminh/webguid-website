window.onscroll = function () {
  scrollFunction();
};
// var height = document.getElementById("nav-logo").style.height;
// var logoHeight = document.getElementById("logo").style.height;
// function scrollFunction() {
//   if (
//     document.body.scrollTop > 100 ||
//     document.documentElement.scrollTop > 100
//   ) {
//     document.getElementById("nav-logo").style.height = "0";
//     document.getElementById("logo").style.height = "0";
//   } else {
//     document.getElementById("nav-logo").style.height = height;
//     document.getElementById("logo").style.height = logoHeight;
//   }
// }
let check = false;
function scrollFunction() {
  if (document.documentElement.scrollTop > 300) {
    if (!check) {
      incNbr();
      check = true;
      console.log("ACITVATED ONE");
    }
  }
}
