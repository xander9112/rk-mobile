import 'babel-polyfill'
import $ from 'jquery'
import Application from './Application';

var $$ = $$ || {};

$(function () {
	$$.window = $(window);
	$$.body = $(document.body);
	$$.windowWidth = $$.window.width();
	$$.windowHeight = $$.window.height();

	$$.application = new Application();

	$$.ESCAPE_KEY_CODE = 27;

	$$.window.on('resize', function () {
		$$.windowWidth = $$.window.width();
		$$.windowHeight = $$.window.height();
	});
});
