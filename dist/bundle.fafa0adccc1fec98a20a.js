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
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_imports_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/imports.scss */ \"./scss/imports.scss\");\n/* harmony import */ var _scss_imports_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_imports_scss__WEBPACK_IMPORTED_MODULE_0__);\n\r\n\r\nwindow.addEventListener(\"load\", function() {\r\n  //Logic to generate and display different banner image on page load for the header\r\n  function imageBanner() {\r\n    const random = Math.floor(Math.random() * 4) + 1;\r\n    const imageBanners = document.getElementById(\"imageBanners\");\r\n\r\n    if (random === 1) {\r\n      imageBanners.src = ABSPATH + \"/images/banner_blusaphir.jpg\";\r\n    } else if (random === 2) {\r\n      imageBanners.src = ABSPATH + \"/images/banner_cutworks.jpg\";\r\n    } else if (random === 3) {\r\n      imageBanners.src = ABSPATH + \"/images/banner_kasper.jpg\";\r\n    } else {\r\n      imageBanners.src = ABSPATH + \"/images/banner_paulsg.jpg\";\r\n    }\r\n  }\r\n\r\n  //Function for hamburger icon to open up the navigation menu during mobile view.\r\n  function hamburger() {\r\n    document.querySelector(\"#hamburger\").addEventListener(\"click\", menu);\r\n    function menu() {\r\n      const nav = document.querySelector(\"#nav\");\r\n      const hamburger = document.querySelector(\"#hamburger\");\r\n\r\n      if (nav.classList.contains(\"nav--reveal\")) {\r\n        nav.classList.remove(\"nav--reveal\");\r\n        hamburger.classList.remove(\"hamburger-container-open\");\r\n      } else {\r\n        nav.classList.add(\"nav--reveal\");\r\n        hamburger.classList.add(\"hamburger-container-open\");\r\n      }\r\n    }\r\n  }\r\n\r\n  //Function to generate and display social icons for the external links such as Facebook, Twitter etc.\r\n  function socialIcons() {\r\n    const postATags = document.querySelectorAll(\".single-posts-body a\");\r\n    const newSpan = document.createElement('span');\r\n    postATags.forEach(function(aTag) {\r\n\r\n      if (aTag.innerText === \"facebook\" || aTag.innerText === \"Facebook\" || aTag.innerText === \"FACEBOOK\") {\r\n        newSpan.setAttribute('class', 'facebook-icon');\r\n        aTag.prepend(newSpan);\r\n      }\r\n    });\r\n  }\r\n\r\n  imageBanner();\r\n  hamburger();\r\n  socialIcons();\r\n});\r\n\n\n//# sourceURL=webpack:///./js/app.js?");

/***/ }),

/***/ "./scss/imports.scss":
/*!***************************!*\
  !*** ./scss/imports.scss ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("throw new Error(\"Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\\nModuleNotFoundError: Module not found: Error: Can't resolve './images/original-fb-icon.png' in 'C:\\\\Web-Development\\\\blusaphir-theme\\\\scss'\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:925:10\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\lib\\\\NormalModuleFactory.js:401:22\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\lib\\\\NormalModuleFactory.js:130:21\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\lib\\\\NormalModuleFactory.js:224:22\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\neo-async\\\\async.js:2830:7\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\neo-async\\\\async.js:6877:13\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\lib\\\\NormalModuleFactory.js:214:25\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\Resolver.js:213:14\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\Resolver.js:285:5\\n    at eval (eval at create (C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:15:1)\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\UnsafeCachePlugin.js:44:7\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\Resolver.js:285:5\\n    at eval (eval at create (C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:15:1)\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\Resolver.js:285:5\\n    at eval (eval at create (C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:27:1)\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\DescriptionFilePlugin.js:67:43\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\Resolver.js:285:5\\n    at eval (eval at create (C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:16:1)\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\Resolver.js:285:5\\n    at eval (eval at create (C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:27:1)\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\DescriptionFilePlugin.js:67:43\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\Resolver.js:285:5\\n    at eval (eval at create (C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:16:1)\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\Resolver.js:285:5\\n    at eval (eval at create (C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:15:1)\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\DirectoryExistsPlugin.js:27:15\\n    at C:\\\\Web-Development\\\\blusaphir-theme\\\\node_modules\\\\webpack\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\CachedInputFileSystem.js:85:15\\n    at processTicksAndRejections (internal/process/task_queues.js:75:11)\");\n\n//# sourceURL=webpack:///./scss/imports.scss?");

/***/ })

/******/ });