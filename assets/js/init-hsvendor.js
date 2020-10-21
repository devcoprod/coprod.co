//
import $ from 'jquery';
import 'bootstrap';

// used by webpack-encore
global.$ = $;
//


import {HSFileAttach} from '../front/assets/vendor/hs-file-attach/src/js/hs-file-attach';

// 
// <!-- JS Implementing Plugins -->
// import './front/vendor/hs-header/dist/hs-header.min.js';
// import './front/js/hs-go-to.js';
// import './front/vendor/hs-unfold/dist/hs-unfold.min.js';
// import './front/js/hs-mega-menu.js';
// import './front/js/hs-show-animation.js';
// import '../front/assets/vendor/hs-file-attach/dist/hs-file-attach.min.js';
// import './front/js/hs-add-field.js';
// import './front/js/jquery.validate.js';
// import './front/js/jquery.mask.js';
// import './front/js/select2.full.js';
// import './front/js/quill.js';




//
// $(document).on('ready', function(){
$(function(){
// $(document).ready( function(){

    console.log('HSFileAttach.init');
    // initialization of custom file
    $('.js-file-attach').each(function () {
    var customFile = new HSFileAttach($(this));
    customFile.init();
    });

});
