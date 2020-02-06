import "../scss/imports.scss";

window.addEventListener("load", function() {
  //Logic to generate and display different banner image on page load for the header
  function imageBanner() {
    const random = Math.floor(Math.random() * 4) + 1;
    const imageBanners = document.getElementById("imageBanners");

    if (random === 1) {
      imageBanners.src = ABSPATH + "/images/banner_blusaphir.jpg";
    } else if (random === 2) {
      imageBanners.src = ABSPATH + "/images/banner_cutworks.jpg";
    } else if (random === 3) {
      imageBanners.src = ABSPATH + "/images/banner_kasper.jpg";
    } else {
      imageBanners.src = ABSPATH + "/images/banner_paulsg.jpg";
    }
  }

  //Function for hamburger icon to open up the navigation menu during mobile view.
  function hamburger() {
    document.querySelector("#hamburger").addEventListener("click", menu);
    function menu() {
      const nav = document.querySelector("#nav");
      const hamburger = document.querySelector("#hamburger");

      if (nav.classList.contains("nav--reveal")) {
        nav.classList.remove("nav--reveal");
        hamburger.classList.remove("hamburger-container-open");
      } else {
        nav.classList.add("nav--reveal");
        hamburger.classList.add("hamburger-container-open");
      }
    }
  }

  //Function to generate and display social icons for the external links such as Facebook, Twitter etc.
  function socialIcons() {
    const postATags = document.querySelectorAll(".single-posts-body a");
    const newSpan = document.createElement('span');
    postATags.forEach(function(aTag) {

      if (aTag.innerText === "facebook" || aTag.innerText === "Facebook" || aTag.innerText === "FACEBOOK") {
        newSpan.classList.add('social-icons', 'facebook-icon');
        aTag.prepend(newSpan);
      }
    });
  }

  imageBanner();
  hamburger();
  socialIcons();
});
