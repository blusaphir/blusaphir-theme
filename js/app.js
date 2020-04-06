import "../scss/imports.scss";

window.addEventListener("load", function() {

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
  hamburger();
  generateSocialIcons();
});
