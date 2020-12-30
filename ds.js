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
			meta: {
				content: "about",
				title: "About DesignSchool.org",
				type: "page"
			}
		},
		changelog: {
			meta: {
				content: "changelog",
				title: "Design School changelog",
				type: "page"
			}
		},
		index: {
			meta: {
				content: "index",
				title: "Design School - For product designers",
				type: "page"
			}
		},
		leadership: {
			meta: {
				content: "leadership",
				title: "Design leadership course",
				type: "course"
			},
			objective: {
				meta: {
					content: "leadership/objective",
					title: "Your primary objective",
					type: "lesson"
				}
			},
			playbook: {
				meta: {
					content: "leadership/playbook",
					title: "Everyone's playbook is different",
					type: "lesson"
				}
			},
			priorities: {
				meta: {
					content: "leadership/priorities",
					title: "Priorities",
					type: "lesson"
				}
			},
			team: {
				meta: {
					content: "leadership/team",
					title: "team",
					type: "lesson"
				}
			}
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
		var pathSplit = path.split("/");
		var thisPage;
		// Is this a lesson?
		if (pathSplit[2] !== '' && pathSplit[2] !== undefined) {
			thisPage = data[pathSplit[1]][pathSplit[2]].meta;
		} else {
			// Account for homepage
			if (pathSplit[1] === '') { pathSplit[1] = 'index'; }
			// Set this page data
			thisPage = data[pathSplit[1]].meta;
		}
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