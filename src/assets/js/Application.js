import $ from 'jquery';
import NavBar from './Components/NavBar';

export default class Application {
	constructor () {
		"use strict";

		this._initFunction();
	}

	_initFunction () {
		"use strict";

		new NavBar($('.js-nav-bar'), {});
	}
}
