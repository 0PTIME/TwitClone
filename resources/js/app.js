/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

jQuery('#ProfileUploadButton').click(function(){
    jQuery('#ProfileInputFile').click();
});






jQuery('.bigCoverTransparent').click(function(){
    document.getElementById('bigCoverupTransparent').style.display = "none";
    document.getElementById('sidebarCoverupTransparent').style.display = "none";
    
    document.getElementById('sidebarDropdownMenu').style.display = "none";
});
jQuery('.bigCoverOpacity').click(function(){
    document.getElementById('bigCoverupOpacity').style.display = "none";

    // document.getElementById('genericId').style.display = "none";    
    document.getElementById('showTweetComposition').style.display = "none";
});

jQuery('#moreButton').click(function(){
    document.getElementById('sidebarCoverupTransparent').style.display = "block";
    document.getElementById('sidebarDropdownMenu').style.display = "block";
});
jQuery('#bigTweetButtonId').click(function(){
    document.getElementById('bigCoverupOpacity').style.display = "block";
    document.getElementById('showTweetComposition').style.display = "block";
});

function showTweetImg(id){
    document.getElementById('bigCoverupOpacity').style.display = "block";
    document.getElementById('showTweetImg'+id).style.display = "block";
}



window.onscroll = function(){ stickyRightMain() };
var rightMain = document.getElementById('rightMain');
var bottomRightMain = document.getElementById('stickyId');
var sticky = bottomRightMain.offsetTop;

function stickyRightMain(){
    if(window.pageYOffset >= sticky){
        rightMain.classList.add('sticky');
    }
    else{
        rightMain.classList.remove('sticky');
    }
}





// jQuery('.bigCoverTransparent').click(function(){
//     document.getElementById('sidebarDropdownMenu').classList.toggle('show');
//     document.getElementById('sidebarCoverupTransparent').classList.toggle('show');
// });
// jQuery('.bigCoverOpacity').click(function(){
//     document.getElementById('showTweetComposition').classList.toggle('show');
//     document.getElementById('bigCoverupOpacity').classList.toggle('show');
// });


// jQuery('#moreButton').click(function(){
//     document.getElementById('sidebarDropdownMenu').classList.toggle('show');
//     document.getElementById('sidebarCoverupTransparent').classList.toggle('show');
// });
// jQuery('#bigTweetButtonId').click(function(){
//     document.getElementById('showTweetComposition').classList.toggle('show');
//     document.getElementById('bigCoverupOpacity').classList.toggle('show');
// });
// $(".bigCoverTransparent").on('click', function(event){
//     if(!event.toElement.classList.contains('sidebarMenuLinks')){
//         event.toElement.classList.toggle('show');
//     }
// });
// $(".bigCoverOpacity").on('click', function(event){
//     console.log(temp);
//     var temp = event.getElementById;
//     document.getElementById(temp).style.display = "none";
// });
// window.onclick = function(event) {
//     var classes = event.toElement.classList;
//     console.log(classes);
//     if (!event.toElement.classList.contains('tweetButton')) {
//         if(!event.toElement.classList.contains('temp')){
//             var dropdowns = document.getElementsByClassName("dropdown-content");
//             var i;
//             for (i = 0; i < dropdowns.length; i++) {
//                 var openDropdown = dropdowns[i];
//                 if (openDropdown.classList.contains('show')) {
//                     openDropdown.classList.remove('show');
//                 }
//             }
//         }
//     }
// }