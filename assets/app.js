/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */


// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
// import $ from 'jquery';

import $ from 'jquery';
// import 'popper.js'; imported by bootstrap !!
import 'bootstrap';

// used by webpack
global.$ = $;
// global.jQuery = jQuery;
// 

// testing ...
// import fancy from './fancy';

// // ./fancy
// export default function (exclamationCount){
//   return 'Hello world ' + '!'.repeat(exclamationCount);
// }

// 
// <!-- JS Implementing Plugins -->
// import './front/vendor/hs-header/dist/hs-header.min.js';
// import './front/js/hs-go-to.js';
// import './front/vendor/hs-unfold/dist/hs-unfold.min.js';
// import './front/js/hs-mega-menu.js';
// import './front/js/hs-show-animation.js';
// import './front/vendor/hs-file-attach/dist/hs-file-attach.min.js';
// import './front/js/hs-add-field.js';
// import './front/js/jquery.validate.js';
// import './front/js/jquery.mask.js';
// import './front/js/select2.full.js';
// import './front/js/quill.js';

// console.log(fancy(11));
console.log('Hello Webpack Encore! Dernière ligne de assets/app.js');

$('#avatarUploader').on('change', function(){
  console.log($('#avatarUploader').val());
  console.log($('#avatarUploader').attr('class'));
  console.log($('#avatarUploader').attr('data-hs-file-attach-options'));
}
);

