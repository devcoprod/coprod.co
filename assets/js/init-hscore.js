import $ from 'jquery';
import 'bootstrap';

// global.$ = $;
//

/*
* HSCore
* @version: 2.0.0 (Mon, 25 Nov 2019)
* @requires: jQuery v3.0 or later
* @author: HtmlStream
* @event-namespace: .HSCore
* @license: Htmlstream Libraries (https://htmlstream.com/licenses)
* Copyright 2020 Htmlstream
*/
'use strict';

$.extend({
	HSCore: {
		init: function () {
			$(document).on('ready', function () {
				// Botostrap Tootltips
				$('[data-toggle="tooltip"]').tooltip();
				
				// Bootstrap Popovers
				$('[data-toggle="popover"]').popover();
            });
            console.log('HSCore.init');
		},
		
		components: {}
	}
});

$.HSCore.init();
