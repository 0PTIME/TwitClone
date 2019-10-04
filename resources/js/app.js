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

    $('#mediaUploadId').click(function(){
        $('#tweetComposerMediaUpload').click();
    });

    $('#submitFormId').click(function(){
        document.getElementById('textInput').innerText = document.getElementById('conetenteditable').innerText;
        document.tweetCompFU.submit();
    });
    $('#submitFormTwoId').click(function(){
        document.getElementById('textInputTwo').innerText = document.getElementById('conetenteditableTwo').innerText;
        document.tweetCompFUTwo.submit();
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

    $('form[name="deleteForm"]').one('submit', function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form. 
        var form = $(this);
        var url = form.attr('action'); 
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data){                
                if(data !== "fail"){
                    var ele = document.getElementById(data);
                    ele.parentNode.removeChild(ele);
                }
                else{
                    alert("You didn't make this :O");
                }
            },
            error: function(){
                alert("error :(");
            },
        });    
    });

    $('form[name="followForm"]').submit(function(e){
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data){
            },
            error: function(){
                alert("error :(");
            },
        });
    })

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

    $('form[name="tweetCompFU"]').submit(function(e){        
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
                    form.find('span')[0].classList.add('greenText');
                    if(isNaN(currVal)){
                        currVal = 1;
                    }
                    else{
                        currVal += 1;
                    }
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

    $('#tweetComposerMediaUpload').change(function(){
        readURL(this);
    });

    $('#pollOpenId').click(function(){
        document.getElementById('mainContentId').style.display = 'none';
        document.getElementById('pollContentId').style.display = 'block';
    });

    $('#pollCloseId').click(function(){
        document.getElementById('mainContentId').style.display = 'block';
        document.getElementById('pollContentId').style.display = 'none';
    });

    $('.pollDisplayOption').one('click', function(){
        var option = $(this).attr('id').split('.');
        $("<input />").attr("type", "hidden").attr("name", "option").attr("value", option[1]).appendTo('form[name="pollSubmissionForm"]');        
        $(this).find('button').trigger('click');
    });
    
    $('form[name="pollSubmissionForm"]').submit(function(e){
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action'); 
        console.log(form);
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data){
                if(data === '1'){
                    form.find('iframe')[0].contentDocument.location.reload(true);
                    form.find('iframe')[0].style.display = "block";
                    form.find('.pollDisplayOptions')[0].style.display = "none";
                }
            },
            error: function(){
                alert("error :(")
            },
        });
    });
});



function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();        
        reader.onload = function (e) {
            $('#tempPicLocation').attr('src', e.target.result);
        }        
        reader.readAsDataURL(input.files[0]);
        $('#tempPicLocation')[0].style.display = 'block';
    }
}
