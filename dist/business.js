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
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/business.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/business.js":
/*!****************************!*\
  !*** ./src/js/business.js ***!
  \****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _modules_MobileMenu__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/MobileMenu */ \"./src/js/modules/MobileMenu.js\");\n/* harmony import */ var _modules_DesktopMenu__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/DesktopMenu */ \"./src/js/modules/DesktopMenu.js\");\n/* harmony import */ var _modules_ContactPopup__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/ContactPopup */ \"./src/js/modules/ContactPopup.js\");\n\r\n\r\n\r\n\r\n\r\n\r\nnew _modules_MobileMenu__WEBPACK_IMPORTED_MODULE_0__[\"default\"]();\r\nnew _modules_DesktopMenu__WEBPACK_IMPORTED_MODULE_1__[\"default\"]();\r\nnew _modules_ContactPopup__WEBPACK_IMPORTED_MODULE_2__[\"default\"]();\n\n//# sourceURL=webpack:///./src/js/business.js?");

/***/ }),

/***/ "./src/js/modules/ContactPopup.js":
/*!****************************************!*\
  !*** ./src/js/modules/ContactPopup.js ***!
  \****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nclass ContactPopup {\r\n    constructor() {\r\n        this.popup = document.querySelector('.contact-popup');\r\n        this.closeButton = document.querySelector('.contact-popup__close');\r\n        this.popupCover = document.querySelector('.contact-popup__cover');\r\n\r\n        this.events();\r\n    }\r\n\r\n    events() {\r\n        document.addEventListener('click', (event) => {\r\n            if (event.target.classList.contains('contact-button')) {\r\n                event.preventDefault();\r\n                // alert('hello');\r\n                this.popup.classList.remove('contact-popup--hidden');\r\n            }\r\n        });\r\n        \r\n        this.closeButton.addEventListener('click', (event) => {\r\n            this.popup.classList.add('contact-popup--hidden');\r\n        });\r\n        \r\n        this.popupCover.addEventListener('click', (event) => {\r\n            this.popup.classList.add('contact-popup--hidden');\r\n        });\r\n    }\r\n}\r\n\r\n/* harmony default export */ __webpack_exports__[\"default\"] = (ContactPopup);\n\n//# sourceURL=webpack:///./src/js/modules/ContactPopup.js?");

/***/ }),

/***/ "./src/js/modules/DesktopMenu.js":
/*!***************************************!*\
  !*** ./src/js/modules/DesktopMenu.js ***!
  \***************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nclass DesktopMenu {\r\n    constructor() {\r\n        // set top panel to default\r\n        this.topPanel = document.querySelector('.hero__top');\r\n        this.topPanel.classList.remove('hero__top--fixed');\r\n\r\n        this.hero = document.querySelector('.hero');\r\n\r\n        this.events();\r\n    }\r\n\r\n    events() {\r\n        document.addEventListener('scroll', (event) => {\r\n            if (window.scrollY >= this.hero.offsetHeight / 2) {\r\n                this.topPanel.classList.add('hero__top--fixed');\r\n            } else {\r\n                this.topPanel.classList.remove('hero__top--fixed');\r\n            }\r\n            // console.log(window.scrollY, ' - ', this.hero.offsetHeight);\r\n        });\r\n    }\r\n}\r\n\r\n/* harmony default export */ __webpack_exports__[\"default\"] = (DesktopMenu);\n\n//# sourceURL=webpack:///./src/js/modules/DesktopMenu.js?");

/***/ }),

/***/ "./src/js/modules/MobileMenu.js":
/*!**************************************!*\
  !*** ./src/js/modules/MobileMenu.js ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nclass MobileMenu {\r\n    constructor() {\r\n        this.menuButton = document.querySelector('.menu-button');\r\n        this.mainMenu = document.querySelector('.hero__nav');\r\n\r\n        this.events();\r\n    }\r\n\r\n    events() {\r\n        this.menuButton.addEventListener('click', () => {\r\n            this.toggleMenu();\r\n        });\r\n\r\n        this.mainMenu.addEventListener('click', (event) => {\r\n            if (event.target.classList.contains('main-nav__link')) {\r\n                this.toggleMenu();\r\n            }\r\n        })\r\n    }\r\n\r\n    toggleMenu() {\r\n        this.mainMenu.classList.toggle('hero__nav--shown');\r\n        this.menuButton.classList.toggle('menu-button--close');\r\n    }\r\n}\r\n\r\n/* harmony default export */ __webpack_exports__[\"default\"] = (MobileMenu);\n\n//# sourceURL=webpack:///./src/js/modules/MobileMenu.js?");

/***/ })

/******/ });