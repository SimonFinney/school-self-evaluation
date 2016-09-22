/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
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
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	var _util = __webpack_require__(1);
	
	var app = (0, _util.getElement)('[data-app]'); // TODO: Comments
	
	var styleButtons = (0, _util.getElements)('[data-class]', app);
	var subnavigationLinks = (0, _util.getElements)('.sub-menu a', app);
	
	var currentStyleClass = void 0;
	
	function toggleSubnavigationFocus(event) {
	  var isFocusEvent = event.type === 'focus';
	
	  var subnavigationMenu = event.target.parentNode.parentNode;
	
	  isFocusEvent ? subnavigationMenu.setAttribute('data-active', '') : subnavigationMenu.removeAttribute('data-active');
	}
	
	function toggleStyles(event) {
	  var styleButton = event.target;
	  var styleClass = styleButton.getAttribute('data-class');
	
	  if (currentStyleClass) {
	    app.classList.remove(currentStyleClass);
	  }
	
	  if (styleClass) {
	    app.classList.add(styleClass);
	  }
	
	  currentStyleClass = styleClass;
	  localStorage.setItem('class', currentStyleClass);
	}
	
	function init() {
	  currentStyleClass = localStorage.getItem('class');
	
	  if (currentStyleClass) {
	    app.classList.add(currentStyleClass);
	  }
	
	  (0, _util.forEachElement)(styleButtons, function (styleButton) {
	    return styleButton.addEventListener('click', toggleStyles);
	  });
	
	  // Handles tabbing through the subnavigation
	  (0, _util.forEachElement)(subnavigationLinks, function (subnavigationLink) {
	    subnavigationLink.addEventListener('focus', toggleSubnavigationFocus);
	    subnavigationLink.addEventListener('blur', toggleSubnavigationFocus);
	  });
	}
	
	init();

/***/ },
/* 1 */
/***/ function(module, exports) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.forEachElement = forEachElement;
	exports.getElement = getElement;
	exports.getElements = getElements;
	exports.toggleElement = toggleElement;
	exports.getRequest = getRequest;
	function httpRequest(type, url, callback, dataToSend) {
	  var data = dataToSend || {};
	  var xmlHttpRequest = new XMLHttpRequest();
	
	  xmlHttpRequest.onreadystatechange = function () {
	    if (xmlHttpRequest.readyState === 4 && xmlHttpRequest.status === 200) {
	      var response = xmlHttpRequest.responseText;
	      callback(JSON.parse(response));
	    }
	  };
	
	  xmlHttpRequest.open(type, url, true);
	  xmlHttpRequest.send(JSON.stringify(data));
	}
	
	function forEachElement(elements, callback) {
	  [].forEach.call(elements, function (element) {
	    return callback(element);
	  });
	}
	
	function getElement(selector) {
	  var parentElement = arguments.length <= 1 || arguments[1] === undefined ? document : arguments[1];
	
	  return parentElement.querySelector(selector);
	}
	
	function getElements(selector) {
	  var parentElement = arguments.length <= 1 || arguments[1] === undefined ? document : arguments[1];
	
	  return parentElement.querySelectorAll(selector);
	}
	
	function toggleElement(element, condition) {
	  var elementToToggle = element;
	  elementToToggle.hidden = condition;
	}
	
	function getRequest(url, callback) {
	  httpRequest('GET', url, callback);
	}

/***/ }
/******/ ]);
//# sourceMappingURL=bundle.js.map