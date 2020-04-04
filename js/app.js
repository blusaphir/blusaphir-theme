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

  //Funtion for the search icon to open the search form overlay at mobile view.
  function searchOverlay() {

    document.querySelector("#search-icon-mobile").addEventListener("click", openOverlay);
    // document.querySelector("#search-icon-close").addEventListener("click", closeOverlay);

    const searchForm = document.querySelector("#searchform");
    const searchIcon = document.querySelector("#search-icon-mobile");
    const searchIconClose = document.querySelector("#search-icon-close");

    function openOverlay() {
      searchForm.classList.add("search--reveal");
      searchIconClose.classList.add("search-icon-close");
      searchIcon.classList.add("search-icon-mobile-invisible");
    }

    // function closeOverlay() {
    //   searchForm.classList.remove("search--reveal");
    //   searchIconClose.classList.remove("search-icon-close");
    //   searchIcon.classList.remove("search-icon-mobile-invisible");
    // }
  }

  //Function to generate and display social icons for the external links such as Facebook, Twitter etc.
  function generateSocialIcons() {
    const postATags = document.querySelectorAll(".artist-single-posts-body a, .footer-nav-links-social a");

    postATags.forEach(function(aTag) {
      const newSpan = document.createElement('span');
      newSpan.classList.add('social-icons');

      switch (aTag.innerText.toLowerCase()) {
        case "facebook":
        case "facebook - blu saphir recs":
        case "facebook - digital blus":
        case "facebook - blu saphir ltd":
          newSpan.classList.add('facebook-icon');
          aTag.prepend(newSpan);
          break;
        case "soundcloud":
          newSpan.classList.add('soundcloud-icon');
          aTag.prepend(newSpan);
          break;
        case "twitter":
          newSpan.classList.add('twitter-icon');
          aTag.prepend(newSpan);
          break;
        case "instagram":
          newSpan.classList.add('instagram-icon');
          aTag.prepend(newSpan);
          break;
        case "mixcloud":
          newSpan.classList.add('mixcloud-icon');
          aTag.prepend(newSpan);
          break;
        case "beatport":
        case "beatport - blu saphir":
        case "beatport - digital blus":
        case "beatport - blu saphir ltd":
          newSpan.classList.add('beatport-icon');
          aTag.prepend(newSpan);
          break;
      }
    })
  }

  imageBanner();
  searchOverlay();
  hamburger();
  generateSocialIcons();
});
