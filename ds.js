"use strict";
// Prevent older IE console errors
if (!window.console) {
	var console = {
		log : function(){}
	}
}
// Design School global 
window.DS = function () {
	// -------------------------------------------------------------
	// VARIABLES
	// -------------------------------------------------------------
	var debounceRun = true;
	var debounceTimer;
	var modalTimer;
	var headerScrollPositions = {};
	// -------------------------------------------------------------
	// PRIVATE FUNCTIONS
	// -------------------------------------------------------------
	function init() {
		// Remember scroll position on course pages
		scrollPositionCache();
		// Edit link event
		document.querySelectorAll('.edit').forEach(function(editButton) {
			editButton.addEventListener('click', function(e) {
				e.preventDefault();
				modalShow();
			});
		});
		// Do we need to show an outline on the right?
		outlineCheck();
	}
	function modalEvents() {
		// Prevent clicks on .modal from bubbling up
		document.querySelector('.modal_backdrop .modal').addEventListener('click', function(e) {
			e.stopPropagation(); 
		});
		// Close link click
		document.querySelector('.modal_close').addEventListener('click', function(e) {
			e.preventDefault();
			modalHide();
		});
		document.querySelector('.modal_backdrop').addEventListener('click', function(e) {
			e.preventDefault();
			modalHide();
		});
	}
	function modalHide() {
		var modalBackdrop = document.querySelector('.modal_backdrop');
		// Remove show class
		_classRemove(modalBackdrop, 'show')
		// Brief time out for transition
		clearTimeout(modalTimer);
		modalTimer = setTimeout(function () {
			// Display hide
			modalBackdrop.style.display = 'none';
		}, 200);
	}
	function modalShow(size) {
		var modalBackdrop = document.querySelector('.modal_backdrop');
		// Display block
		modalBackdrop.style.display = 'block';
		// Brief time out for transition
		clearTimeout(modalTimer);
		modalTimer = setTimeout(function () {
			// Add show class
			_classAdd(modalBackdrop, 'show');
			// Events
			modalEvents();
		}, 200);
	}
	function outlineCheck() {
		if (document.body.classList.contains('class')) {
			var outline = '';
			document.querySelectorAll('article h3').forEach(function(header) {
				var id = header.id;
				var text = header.getElementsByTagName('span')[0].innerText || header.getElementsByTagName('span')[0].textContent;;
				outline += '<li><a href="#' + id + '" class="outline-' + id.replace(/[^a-z0-9]/gi,'') + '">' + text + '</a></li>';
			});
			document.querySelector('.outline ul').innerHTML = outline;
			return outlineOffsetUpdate();
		}
	}
	function outlineOffsetCheck() {
		document.addEventListener('scroll', _debounce(function _scroll() {
			var scrolled = parseInt(document.documentElement.scrollTop);
			var positions = headerScrollPositions;
			var currentHeader = '';
			// Loop through headerScrollPositions values and set outline active class
			for (var key in positions) {
				var headerPosition = parseInt(positions[key]);
				// skip loop if the property is from prototype
				if (!positions.hasOwnProperty(key)) continue;
				// If we haven't reached first section
				if (scrolled < 299) {
					currentHeader = Object.keys(headerScrollPositions)[0];
					break;
				}
				// Check value against current scroll position
				if (headerPosition < scrolled) {
					currentHeader = key;
				} else {
					break;
				}
			}
			if (currentHeader) {
				// Remove old active class
				document.querySelectorAll('.outline a').forEach(function(link) {
					_classRemove(link, 'active');
				});
				// Set new active class
				_classAdd(document.querySelector('.outline-' + currentHeader.replace(/[^a-z0-9]/gi,'')), 'active');
			}
		}, 100));
	}
	function outlineOffsetUpdate() {
		// Hard reset all values
		headerScrollPositions = [];
		// Loop through all headers
		document.querySelectorAll('article h3').forEach(function(header) {
			headerScrollPositions[header.id] = header.offsetTop;
		});
		return outlineOffsetCheck();
	}
	function scrollPositionCache() {
		var path = window.location.pathname;
		// If homepage clear scroll position cache
		if (path === '/') {
			return localStorage.setItem('course-scroll', 0);
		}
		var body = document.querySelector('body');
		var hash = window.location.hash;
		var pathSplit = path.split('/');
		var two = pathSplit[1];
		var three = pathSplit[2];
		// If hash exists in URL, jump there
		if (hash) {
			return body.scrollTop = document.querySelector(hash).offsetTop;
		}
		// Only save scroll position on course pages
		if (two !== '' && two !== undefined && two !== 'about' && two !== 'changelog' && three === '' || two !== '' && two !== undefined && two !== 'about' && two !== 'changelog' && three === undefined) {
			var top = localStorage.getItem('course-scroll');
			// If there is a saved value, use it
			if (top !== null) {
			  body.scrollTop = parseInt(top, 10);
			}
			// Save new value before your leave the page
			window.addEventListener('beforeunload', () => {
			  localStorage.setItem('course-scroll', body.scrollTop);
			});
		}
	}
	// -------------------------------------------------------------
	// HELPER METHODS
	// -------------------------------------------------------------
	function _classAdd(el, cl) {
		if (el) {
			if (el.classList) {
				el.classList.add(cl);
			} else {
				el.className += ' ' + cl;
			}
		}
	}
	function _classRemove(el, cl) {
		if (el) {
			if (el.classList) {
				el.classList.remove(cl);
			} else {
				el.className = el.className.replace(new RegExp('(^|\\b)' + cl.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
			}
		}
	}
	function _debounce(fn, delay) {
		if (debounceRun) {
			debounceRun = false;
			return function () {
				var context = this, 
					args = arguments;
				clearTimeout(debounceTimer);
				debounceTimer = setTimeout(function () {
					fn.apply(context, args);
					debounceRun = true;
				}, delay);
			};
		}
	}
	// -------------------------------------------------------------
	// PUBLIC FACING FUNCTIONS
	// -------------------------------------------------------------
	return {
		init: function() {
			if (document.readyState === 'complete') {
				init();
			} else {
				window.addEventListener('load', init, false);
			}
		}
	};
} ();
window.DS.init();