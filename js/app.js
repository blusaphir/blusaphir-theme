window.addEventListener('load', function() {

    //Logic to generate and display different banner image on page load for the header
    function imageBanner() {
      const random = Math.floor(Math.random() * 4) + 1;
      const imageBanners = document.getElementById("imageBanners");
    
      if (random === 1) {
          imageBanners.src = ABSPATH + "/images/banner_blusaphir.jpg"
        } else if (random === 2) {
          imageBanners.src = ABSPATH + "/images/banner_cutworks.jpg"
        } else if (random === 3) {
          imageBanners.src = ABSPATH + "/images/banner_kasper.jpg"
        } else {
          imageBanners.src = ABSPATH + "/images/banner_paulsg.jpg"
        };
      };

  //Function for hamburger icon to open up the navigation menu during mobile view.
  function hamburger () {
    document.querySelector("#hamburger").addEventListener("click", menu);
    function menu () {
      const nav = document.querySelector("#nav");
      const hamburger = document.querySelector("#hamburger");

      if (nav.classList.contains("nav--reveal")) {
        nav.classList.remove("nav--reveal");
        hamburger.classList.remove("hamburger-container-open");
      } else {
        nav.classList.add("nav--reveal");
        hamburger.classList.add("hamburger-container-open");
      }
    };
  };

  //Function for hover effect on artist images for all artist pages.
  function hoverEffect () {
    const images = document.querySelectorAll(".artist_digiblus div a img");
    const artistName = document.querySelectorAll(".artist_digiblus div p");

    for (let i = 0;  i < images.length; i++) {
      for (let j = 0; j < artistName.length; j++) {
        images[i].addEventListener("mouseover", hoverOn);
        function hoverOn () {
          artistName[i].style.background = "#1ca9d6";
          artistName[i].style.color = "#fff"
        }
      }
    }

    for (let i = 0;  i < images.length; i++) {
      for (let j = 0; j < artistName.length; j++) {
        images[i].addEventListener("mouseout", hoverOff);
        function hoverOff () {
          artistName[i].style.background = "";
          artistName[i].style.color = ""
        }
      }
    }
  };
  imageBanner();
  hoverEffect();
  hamburger();
});
