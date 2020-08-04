/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./js/app.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./js/app.js":
/*!*******************!*\
  !*** ./js/app.js ***!
  \*******************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_imports_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/imports.scss */ \"./scss/imports.scss\");\n/* harmony import */ var _scss_imports_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_imports_scss__WEBPACK_IMPORTED_MODULE_0__);\n\r\n\r\nwindow.addEventListener(\"load\", function() {\r\n\r\n  //Function for the mobile view search icon to open the search box\r\n  function toggleMobileSearchBox() {\r\n    document.querySelector(\".search-icon-mobile\").addEventListener(\"click\", toggle);\r\n    function toggle() {\r\n      const mobileSearchBox = document.querySelector(\".mobile-search-box\");\r\n\r\n      if (mobileSearchBox.classList.contains(\"mobile-search-box--show\")) {\r\n        mobileSearchBox.classList.remove(\"mobile-search-box--show\");\r\n      } else { \r\n        mobileSearchBox.classList.add(\"mobile-search-box--show\");\r\n      }\r\n    }\r\n  }\r\n\r\n  //Function for hamburger icon to open up the navigation menu during mobile view.\r\n  function hamburger() {\r\n    document.querySelector(\"#hamburger\").addEventListener(\"click\", menu);\r\n    function menu() {\r\n      const nav = document.querySelector(\"#nav\");\r\n      const hamburger = document.querySelector(\"#hamburger\");\r\n\r\n      if (nav.classList.contains(\"nav--reveal\")) {\r\n        nav.classList.remove(\"nav--reveal\");\r\n        hamburger.classList.remove(\"hamburger-container-open\");\r\n      } else {\r\n        nav.classList.add(\"nav--reveal\");\r\n        hamburger.classList.add(\"hamburger-container-open\");\r\n      }\r\n    }\r\n  }\r\n\r\n  // const container = document.querySelector('.front-page-random-artist-container, .artist-grid');\r\n\r\n  // container.addEventListener('mouseover', e => {\r\n  //   if (e.target.classList.contains('wp-post-image')) {\r\n  //     const target = e.target.parentElement.previousElementSibling;\r\n  //     target.style.backgroundColor = \"#0E546B\";\r\n  //   }\r\n  // });\r\n\r\n  // container.addEventListener('mouseout', e => {\r\n  //   if (e.target.classList.contains('wp-post-image')) {\r\n  //     const target = e.target.parentElement.previousElementSibling;\r\n  //     target.style.backgroundColor = \"#1ca9d6\";\r\n  //   }\r\n  // });\r\n\r\n\r\n  //Function to generate and display social icons for the external links such as Facebook, Twitter etc.\r\n  function generateSocialIcons() {\r\n    const postATags = document.querySelectorAll(\".artist-single-posts-body a, .release-single-posts-body p a, .footer-nav-links-social a\");\r\n\r\n    postATags.forEach(function(aTag) {\r\n      const newSpan = document.createElement('span');\r\n      newSpan.classList.add('social-icons');\r\n\r\n      switch (aTag.innerText.toLowerCase()) {\r\n        case \"facebook\":\r\n        case \"facebook - blu saphir recs\":\r\n        case \"facebook - digital blus\":\r\n        case \"facebook - blu saphir ltd\":\r\n          newSpan.classList.add('facebook-icon');\r\n          aTag.prepend(newSpan);\r\n          break;\r\n        case \"soundcloud\":\r\n          newSpan.classList.add('soundcloud-icon');\r\n          aTag.prepend(newSpan);\r\n          break;\r\n        case \"twitter\":\r\n          newSpan.classList.add('twitter-icon');\r\n          aTag.prepend(newSpan);\r\n          break;\r\n        case \"instagram\":\r\n          newSpan.classList.add('instagram-icon');\r\n          aTag.prepend(newSpan);\r\n          break;\r\n        case \"mixcloud\":\r\n          newSpan.classList.add('mixcloud-icon');\r\n          aTag.prepend(newSpan);\r\n          break;\r\n        case \"beatport\":\r\n        case \"beatport - blu saphir\":\r\n        case \"beatport - digital blus\":\r\n        case \"beatport - blu saphir ltd\":\r\n          newSpan.classList.add('beatport-icon');\r\n          aTag.prepend(newSpan);\r\n          break;\r\n        case \"spotify\":\r\n          newSpan.classList.add('spotify-icon');\r\n          aTag.prepend(newSpan);\r\n          break;\r\n        case \"patreon\":\r\n          newSpan.classList.add('patreon-icon');\r\n          aTag.prepend(newSpan);\r\n          break;\r\n        case \"discogs\":\r\n          newSpan.classList.add('discogs-icon');\r\n          aTag.prepend(newSpan);\r\n          break;\r\n        case \"bandcamp\":\r\n          newSpan.classList.add('bandcamp-icon');\r\n          aTag.prepend(newSpan);\r\n          break;\r\n        case \"youtube\":\r\n          newSpan.classList.add('youtube-icon');\r\n          aTag.prepend(newSpan);\r\n          break;\r\n      } \r\n    })\r\n  }\r\n\r\n  // Function to get current year and dynamically keep the footer date year upto date\r\n  function getyear() {\r\n    const date = new Date();\r\n    const year = date.getFullYear();\r\n    document.querySelector(\"#copyright\").innerHTML = ` ${year}&copy Blu Saphir Recordings Limited.`\r\n  };\r\n\r\n\r\n  toggleMobileSearchBox();\r\n  hamburger();\r\n  generateSocialIcons();\r\n  getyear();\r\n\r\n\r\n});\n\n//# sourceURL=webpack:///./js/app.js?");

/***/ }),

/***/ "./scss/imports.scss":
/*!***************************!*\
  !*** ./scss/imports.scss ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./scss/imports.scss?");

/***/ })

/******/ });