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

$(document).ready(function(){
    $('#ProfileUploadButton').click(function(){
        $('#ProfileInputFile').click();
    });

    $('#submitFormId').click(function(){
        document.getElementById('textInput').innerText = document.getElementById('conetenteditable').innerText;
        document.tweetForm.submit();
    });
    
    $('#moreButton').click(function(){
        document.getElementById('sidebarCoverupTransparent').style.display = "block";
        document.getElementById('sidebarDropdownMenu').style.display = "block";
    });

    $('.bigCoverTransparent').click(function(){
        console.log("you clicked this :)");
        
        document.getElementById('bigCoverupTransparent').style.display = "none";
        document.getElementById('sidebarCoverupTransparent').style.display = "none";
        document.getElementById('tweetCoverId').style.display = "none";
        
        document.getElementById('sidebarDropdownMenu').style.display = "none";
        var ele = document.getElementsByClassName('dropdown-content');
        for(var i = 0; i < ele.length; i++){
            ele[i].style.display = "none";
        }
    });

    $('.bigCoverOpacity').click(function(){
        document.getElementById('bigCoverupOpacity').style.display = "none";
      
        document.getElementById('showTweetComposition').style.display = "none";
    });

    $('#bigTweetButtonId').click(function(){
        document.getElementById('bigCoverupOpacity').style.display = "block";
        document.getElementById('showTweetComposition').style.display = "block";
    });

    $('.downArrWrapper').click(function(){
        var ele = $(this)[0].id+'down';        
        document.getElementById(ele).style.display = "block";
        document.getElementById('tweetCoverId').style.display = "block";
    })

    $('form[name="deleteForm"]').submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form. 
        var form = $(this);
        var url = form.attr('action'); 
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data){                
                if(data !== "fail"){
                    document.getElementById(data).style.display = 'none';
                }
                else{
                    alert("You didn't make this :O");
                }
            },
            error: function(){
                alert("error :(")
            },
        });    
    });

    $('form[name="likeForm"]').submit(function(e){        
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action'); 
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data){
                var currVal = parseInt(form.find('span').text());
                if(data === '1'){
                    form.find('span')[0].classList.add('redText');
                    if(isNaN(currVal)){
                        currVal = 1;
                    }
                    else{
                        currVal += 1;
                    }
                    console.log(currVal);
                    form.find('span').text(currVal);
                    var newSrc = form.find('img')[0].src.replace("Black", "Active");
                    form.find('img')[0].src = newSrc;
                }
                if(data === '0')
                {
                    form.find('span')[0].classList.remove('redText');
                    if(currVal == 1){
                        currVal = null;
                    }
                    else{
                        currVal -= 1;
                    }
                    console.log(currVal);
                    form.find('span').text(currVal);
                    var newSrc = form.find('img')[0].src.replace("Active", "Black");
                    form.find('img')[0].src = newSrc;
                }
            },
            error: function(){
                alert("error :(")
            },
        });
        
    });

    $('form[name="retweetForm"]').submit(function(e){        
        e.preventDefault();
        var form = $(this);
        console.log(form);
        var url = form.attr('action'); 
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data){
                var currVal = parseInt(form.find('span').text());
                if(data === '1'){
                    form.find('span')[0].classList.add('greenText');
                    if(isNaN(currVal)){
                        currVal = 1;
                    }
                    else{
                        currVal += 1;
                    }
                    console.log(currVal);
                    form.find('span').text(currVal);
                    var newSrc = form.find('img')[0].src.replace("Black", "Active");
                    form.find('img')[0].src = newSrc;
                }
                if(data === '0')
                {
                    form.find('span')[0].classList.remove('greenText');
                    if(currVal == 1){
                        currVal = null;
                    }
                    else{
                        currVal -= 1;
                    }
                    console.log(currVal);
                    form.find('span').text(currVal);
                    var newSrc = form.find('img')[0].src.replace("Active", "Black");
                    form.find('img')[0].src = newSrc;
                }
            },
            error: function(){
                alert("error :(")
            },
        });
        
    });
});




// function showTweetImg(id){
//     document.getElementById('bigCoverupOpacity').style.display = "block";
//     document.getElementById('showTweetImg'+id).style.display = "block";
// }

      
// window.onclick = function(event){
//     var classes = event.toElement.classList;
//     if(classes.contains('bigCoverTransparent')){
//         document.getElementById('tweetCoverId').style.display = "none";
//         var ele = document.getElementsByClassName('dropdown-content');
//         for(var i = 0; i < ele.length; i++){
//             ele[i].style.display = "none";
//         }
//     }
// }


// window.onscroll = function(){ stickyRightMain() };
// var rightMain = document.getElementById('rightMain');
// var bottomRightMain = document.getElementById('stickyId');
// var sticky = bottomRightMain.offsetTop;

// function stickyRightMain(){
//     if(window.pageYOffset >= sticky){
//         rightMain.classList.add('sticky');
//     }
//     else{
//         rightMain.classList.remove('sticky');
//     }
// }

// function submitForm(){
//     var contenteditalbe = document.getElementById('conetenteditable').innerText;
//     document.getElementById('textInput').innerText = contenteditalbe;
//     document.tweetForm.submit();
// }

// function showDropdownMenu(id){
//     document.getElementById('tweetCoverId').style.display = "block";
//     document.getElementById(id).style.display = "block";
// }