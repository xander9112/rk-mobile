import Component from 'Component';

export default class Modal extends Component {
	constructor (root, options) {
		super(root, options);
	}

	get _defaultOptions () {
		"use strict";

		return {
			triggerClass: '.js-open-modal'
		}
	}

	initialize () {
		"use strict";

		super.initialize();
	}

	_cacheNodes () {
		"use strict";

		this.nodes = {
			title: this.root.find('.js-modal-title'),
			body:  this.root.find('.js-modal-body')
		};
	}

	_bindEvents () {
		"use strict";

		$(this.options.triggerClass).on('click', (event) => {
			event.preventDefault();

			let item = $(event.currentTarget);

			let title = item.data('title');
			let body = item.data('body');

			this.nodes.title.text(title);
			this.nodes.body.text(body);

			this.show();
		})
	}

	show () {
		this.root.modal('show');
	}

	hide () {
		this.root.modal('hide');
	}

	_ready () {
		"use strict";
		console.log('ready Class');
	}
}
