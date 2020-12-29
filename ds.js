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
	// DATA
	// -------------------------------------------------------------
	var data = {
		about: {
			content: "about",
			title: "About DesignSchool.org"
		},
		changelog: {
			content: "changelog",
			title: "Design School changelog"
		},
		index: {
			content: "index",
			title: "Design School - For product designers"
		}
	};
	// -------------------------------------------------------------
	// VARIABLES
	// -------------------------------------------------------------
	var modalTimer;
	// -------------------------------------------------------------
	// PRIVATE FUNCTIONS
	// -------------------------------------------------------------
	function init() {
		// Load main content
		contentLoad();
		// Load edit modal
		fetchHtml('/content/modal.html', '.modal');
		// Edit link event
		document.querySelector('.edit').addEventListener('click', function(e) {
			e.preventDefault();
			modalShow();
		});
	}
	function contentLoad() {
		var path = window.location.pathname;
		var pathSplit = path.split("/")
		// Account for homepage
		if (pathSplit[1] === '') { pathSplit[1] = 'index'; }
		// Check for data
		var thisPage = data[pathSplit[1]];
		if (thisPage === undefined) {
			return fetchHtml('/content/404.html', 'article');
		}
		// Load content from data object
		fetchHtml('/content/' + thisPage.content + '.html', 'article');
		// Set title
		return document.title = thisPage.title;
	}
	function fetchHtml(file, el) {
		// Fetch HTML
		fetch(file).then(response => {
			return response.text();
		}).then(data => {
			document.querySelector(el).innerHTML = data;
		});
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