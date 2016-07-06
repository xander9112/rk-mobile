import Component from 'Component';
import $ from 'jquery';

export default class NavBar extends Component {
	constructor (root, options) {
		super(root, options);
	}

	get _defaultOptions () {
		"use strict";

		return {
			activeClass: 'active'
		}
	}

	initialize () {
		"use strict";

		super.initialize();
	}

	_cacheNodes () {
		"use strict";

		this.nodes = {
			items:        this.root.find('.nav.navbar-nav a'),
			navBarToggle: this.root.find('.navbar-toggle')
		};
	}

	_bindEvents () {
		"use strict";

		this.nodes.items.on('click', (event) => {
			event.preventDefault();

			let item = $(event.currentTarget);
			let id = item.attr('href');
			let parent = item.parent();

			// location.hash = id;

			parent.addClass(this.options.activeClass);
			parent.siblings().removeClass(this.options.activeClass);

			this.scrollTo($(id).position().top);

			this.nodes.navBarToggle.trigger('click');
		});
	}

	scrollTo (offset = 0, speed = 800) {
		$('html, body').animate({
			scrollTop: offset
		}, speed)
	}

	_ready () {
		"use strict";

		this.navBarHeight = this.root.outerHeight(true);

		if (location.hash) {
			let hash = $(location.hash);

			if (hash.length) {
				this.scrollTo(hash.position().top - this.navBarHeight, 1);
			}
		}
	}
}
