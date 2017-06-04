/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';

	var _sendForm = __webpack_require__(1);

	var _sendForm2 = _interopRequireDefault(_sendForm);

	var _floatMenu = __webpack_require__(2);

	var _floatMenu2 = _interopRequireDefault(_floatMenu);

	var _modal_feed = __webpack_require__(3);

	var _modal_feed2 = _interopRequireDefault(_modal_feed);

	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

	$('.anchor').on('click', function (e) {
	  e.preventDefault();
	  $('html, body').animate({
	    scrollTop: $('a[name="' + this.hash.slice(1) + '"]').offset().top - 80
	  }, 1000);

	  var navigation = document.querySelector('#menu nav');

	  if (navigation.classList.contains('open')) {
	    navigation.classList.remove('open');
	  }
	});

	$('.flexslider').flexslider({
	  animation: 'slide',
	  controlsContainer: '.flexslider',
	  animationLoop: false
	});

	//Плавающее меню
	new _floatMenu2.default().init({
	  elem: document.getElementById('menu'),
	  height: 200,
	  first_class: 'menu_fixed_on_top',
	  second_class: 'float_menu'
	});

	// Отправка формы обратной связи скрипту для отправления по почте
	var data = {
	  name: 'input[name="name"]',
	  email: 'input[name="email"]',
	  telephone: 'input[name="telephone"]'
	};

	$(".fancybox").click(function () {
	  $(".fancybox").fancybox({
	    maxWidth: 800,
	    maxHeight: 600,
	    fitToView: false,
	    width: document.documentElement.clientWidth > 700 ? '80%' : '90%',
	    height: document.documentElement.clientWidth > 700 ? '40%' : '50%',
	    autoSize: false,
	    closeClick: false,
	    openEffect: 'fade',
	    closeEffect: 'fade'
	  });
	});

	document.querySelector('#menu .burger').addEventListener('click', function (e) {
	  var navigation = document.querySelector('#menu nav');

	  if (navigation.classList.contains('open')) {
	    navigation.classList.remove('open');
	  } else {
	    navigation.classList.add('open');
	  }
	});

	(0, _modal_feed2.default)();

/***/ }),
/* 1 */
/***/ (function(module, exports) {

	"use strict";

	Object.defineProperty(exports, "__esModule", {
	  value: true
	});

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var sendForm = function sendForm(id, dates, idMail) {
	  _classCallCheck(this, sendForm);

	  document.getElementById(id).addEventListener('submit', function () {

	    var data = {
	      name: document.querySelector(dates.name.value),
	      email: document.querySelector(dates.email.value),
	      telephone: document.querySelector(dates.telephone.value)
	    };

	    $("#application").submit(function () {
	      $.ajax({
	        type: "POST",
	        url: "mail.php",
	        data: data
	      }).done(function (value) {
	        var mail = document.getElementById(idMail);

	        mail.innerHTML = value;
	        mail.classList.remove('not_visible_mail');

	        setTimeout(function () {
	          $("#" + id).trigger("reset");
	          mail.classList.add('not_visible_mail');
	        }, 1000);
	      });

	      return false;
	    });
	  });
	};

	exports.default = sendForm;

/***/ }),
/* 2 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	  value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	// Принимает объект с настройками для меню
	var FloatMenu = function () {
	  function FloatMenu() {
	    _classCallCheck(this, FloatMenu);
	  }

	  _createClass(FloatMenu, [{
	    key: 'init',
	    value: function init(params) {
	      var _obj = {
	        elem: params.elem,
	        height: params.height,
	        first_class: params.first_class,
	        second_class: params.second_class,
	        active_class: params.first_class
	      };

	      if (window.pageYOffset > _obj.height) {
	        _obj.elem.classList.add(_obj.first_class);
	        _obj.elem.classList.add(_obj.second_class);
	      } else {
	        _obj.elem.classList.add(_obj.first_class);
	      }

	      window.addEventListener('scroll', function () {

	        if (window.pageYOffset > _obj.height && _obj.active_class === _obj.first_class) {
	          _obj.elem.classList.add(_obj.second_class);
	          _obj.active_class = _obj.second_class;
	        } else if (window.pageYOffset < _obj.height && _obj.active_class === _obj.second_class) {
	          _obj.elem.classList.remove(_obj.second_class);
	          _obj.active_class = _obj.first_class;
	        }
	      });
	    }
	  }]);

	  return FloatMenu;
	}();

	exports.default = FloatMenu;

/***/ }),
/* 3 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.default = init;
	exports.open_modalFeed = open_modalFeed;
	exports.close_modalFeed = close_modalFeed;

	function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

	function init() {
	  document.querySelector('#modal_feedback .modal_feed img').addEventListener('click', function (e) {
	    close_modalFeed();
	  });

	  [].concat(_toConsumableArray(document.querySelectorAll('.feed_open_fc'))).forEach(function (el) {
	    console.log(el);
	    el.addEventListener('click', function (e) {
	      e.preventDefault();
	      open_modalFeed();
	    });
	  });

	  send_mail();
	}

	function open_modalFeed() {
	  document.querySelector('#modal_feedback').classList.remove('close_modal_feed');
	}

	function close_modalFeed() {
	  document.querySelector('#modal_feedback').classList.add('close_modal_feed');
	}

	function send_mail() {
	  document.querySelector('#form_submit').addEventListener('click', function (e) {
	    e.preventDefault();

	    var data = {
	      name: document.querySelector('#form_name').value,
	      email: document.querySelector('#form_mail').value,
	      message: document.querySelector('#form_message').value
	    };

	    $.post('http://satgroup.kz/wp-content/themes/sat/mail.php', data).done(function (value) {
	      var mail = document.querySelector('#mail');
	      mail.innerHTML = value;
	      mail.classList.remove('not_visible_mail');

	      setTimeout(function () {
	        $('#modal_form_feedback').trigger("reset");
	        mail.classList.add('not_visible_mail');
	      }, 2000);
	    });

	    close_modalFeed();
	  });
	}

/***/ })
/******/ ]);