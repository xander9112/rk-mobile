import $ from 'jquery';
import NavBar from './Components/NavBar';
import Modal from './Components/Modal';

export default class Application {
	constructor () {
		"use strict";

		this._initFunction();
	}

	_initFunction () {
		"use strict";

		new NavBar($('.js-nav-bar'), {});
		new Modal($('.js-info-modal'), {
			triggerClass: '.js-open-modal'
		});
	}
}
