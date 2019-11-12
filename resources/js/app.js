/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// Register $ global var for jQuery
/*import $ from 'jquery';
window.$ = window.jQuery = $;*/


// Import jQuery Plugins
//import 'jquery-ui/ui/widgets/datepicker.js';


//window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*const app = new Vue({
    el: '#app',
});*/

$(document).ready(function(){

    var url = window.location.href;
    if (url.includes('loginError')){
        $('#loginModal').modal('show')
    }

    $(window).on('resize', function () {

    });

    /*****************************/

    /* Mobile menu */

    $('.mobile_menu_icon').on('click', function (e) {
        e.preventDefault();
    });

    $('a.scroll').click(function(e) {
        e.preventDefault(); // prevent hard jump, the default behavior
        var hash = this.hash;

        var headerHeight = $('#global_header').height() + 50;

        // perform animated scrolling by getting top-position of target-element and set it as scroll target
        $('html, body').animate({
            scrollTop: $(hash).offset().top - headerHeight
        }, 1000, function(){
            if($(window).width() < 768) {
                $('.mobile_menu_icon').trigger('click');
            }
        });


    });


});
