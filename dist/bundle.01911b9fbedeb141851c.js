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
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_imports_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/imports.scss */ \"./scss/imports.scss\");\n/* harmony import */ var _scss_imports_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_imports_scss__WEBPACK_IMPORTED_MODULE_0__);\n\n\nwindow.addEventListener(\"load\", function() {\n  //Logic to generate and display different banner image on page load for the header\n  function imageBanner() {\n    const random = Math.floor(Math.random() * 4) + 1;\n    const imageBanners = document.getElementById(\"imageBanners\");\n\n    if (random === 1) {\n      imageBanners.src = ABSPATH + \"/images/banner_blusaphir.jpg\";\n    } else if (random === 2) {\n      imageBanners.src = ABSPATH + \"/images/banner_cutworks.jpg\";\n    } else if (random === 3) {\n      imageBanners.src = ABSPATH + \"/images/banner_kasper.jpg\";\n    } else {\n      imageBanners.src = ABSPATH + \"/images/banner_paulsg.jpg\";\n    }\n  }\n\n  //Function for hamburger icon to open up the navigation menu during mobile view.\n  function hamburger() {\n    document.querySelector(\"#hamburger\").addEventListener(\"click\", menu);\n    function menu() {\n      const nav = document.querySelector(\"#nav\");\n      const hamburger = document.querySelector(\"#hamburger\");\n\n      if (nav.classList.contains(\"nav--reveal\")) {\n        nav.classList.remove(\"nav--reveal\");\n        hamburger.classList.remove(\"hamburger-container-open\");\n      } else {\n        nav.classList.add(\"nav--reveal\");\n        hamburger.classList.add(\"hamburger-container-open\");\n      }\n    }\n  }\n\n  imageBanner();\n  hamburger();\n});\n\n\n//# sourceURL=webpack:///./js/app.js?");

/***/ }),

/***/ "./scss/imports.scss":
/*!***************************!*\
  !*** ./scss/imports.scss ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("throw new Error(\"Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\\nSassError: property \\\"color\\\" must be followed by a ':'\\n        on line 50 of scss/modules/_nav.scss\\n        from line 9 of C:\\\\Users\\\\jasew\\\\workspace\\\\blusaphir-theme\\\\scss\\\\imports.scss\\n>>     color #4c4c4c;\\n\\n   ----^\\n\\n    at C:\\\\Users\\\\jasew\\\\workspace\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\lib\\\\NormalModule.js:316:20\\n    at C:\\\\Users\\\\jasew\\\\workspace\\\\blusaphir-theme\\\\node_modules\\\\loader-runner\\\\lib\\\\LoaderRunner.js:367:11\\n    at C:\\\\Users\\\\jasew\\\\workspace\\\\blusaphir-theme\\\\node_modules\\\\loader-runner\\\\lib\\\\LoaderRunner.js:233:18\\n    at context.callback (C:\\\\Users\\\\jasew\\\\workspace\\\\blusaphir-theme\\\\node_modules\\\\loader-runner\\\\lib\\\\LoaderRunner.js:111:13)\\n    at Object.callback (C:\\\\Users\\\\jasew\\\\workspace\\\\blusaphir-theme\\\\node_modules\\\\sass-loader\\\\dist\\\\index.js:73:7)\\n    at Object.done [as callback] (C:\\\\Users\\\\jasew\\\\workspace\\\\blusaphir-theme\\\\node_modules\\\\neo-async\\\\async.js:8067:18)\\n    at options.error (C:\\\\Users\\\\jasew\\\\workspace\\\\blusaphir-theme\\\\node_modules\\\\node-sass\\\\lib\\\\index.js:294:32)\");\n\n//# sourceURL=webpack:///./scss/imports.scss?");

/***/ })

/******/ });