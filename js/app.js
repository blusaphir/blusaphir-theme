document.querySelector("#hamburger").addEventListener("click", menu);
function menu () {
  if (document.querySelector("#nav").classList.contains("nav--reveal")) {
    document.querySelector("#nav").classList.remove("nav--reveal");
    document.querySelector("#hamburger").classList.remove("hamburger-container-open");
  } else {
    document.querySelector("#nav").classList.add("nav--reveal");
    document.querySelector("#hamburger").classList.add("hamburger-container-open");
  }
};
