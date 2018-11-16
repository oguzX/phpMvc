var siteURL;

$(document).ready(function () { // site javascript init area
    navHighlight(".nav a","default/index","active"); // adjust active menu item class
    siteURL = getSiteUrl();
});

function getSiteUrl() {
    var urlRaw = location.href.split('/'),
    url='';
    for (var i = 0;i<urlRaw.length-2;i++){
        url += urlRaw[i] +"/";
    }
    return url;
}

function navHighlight(elem, home,active) {
    var url = location.href.split('/'),
        loc = url[url.length-2]+"/"+url[url.length-1],
        link = document.querySelectorAll(elem);
    for(var i =0 ;i<link.length;i++){
        var path = link[i].href.split('/'),
            page = path[path.length-2] +"/"+path[path.length-1];
        if (page == loc){
            link[i].className += ' '+active;
        }
    }
}

function checkInput(elem) {
    var emptyInputCounter = 0;
    var inputs = document.querySelectorAll(elem);
        for (var i = 0; i < inputs.length; i++){
            if(inputs[i].value.trim()== ''){
                inputs[i].classList.add('border-danger');
                inputs[i].addEventListener("click",function(){
                    alert();
                });
                emptyInputCounter++;
            }
        }
        return emptyInputCounter;
}

function ajax(data,method,url) {
    $.ajax({
       method:method,
       url:url,
       data:data,
        success:function (result) {
            return result;
        },
        error:function (xhr,status,error) {
            console.log("AJAX ERROR ");
            console.log("ERROR :"+error);
            console.log("STATUS :"+status);
            console.log("_____________________");
        }
    });
}