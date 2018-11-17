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
    return "http://localhost/blog";
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
    var countEmptyInput = 0;
    $(elem+" input[type=text]").each(function () {
        if($(this).val()==''){
            $(this).addClass('border-danger').click('click',function () {
                $(this).removeClass('border-danger');
            });
        }
    });
    $(elem + " textarea").each(function () {
        if($(this).val()==''){
            $(this).addClass('border-danger').click('click', function () {
                $(this).removeClass('border-danger');
            });
        }
    });
    return countEmptyInput;
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

$("#postaddButton").on('click',function () {
    var formName ="#"+$(this).parent().parent().attr("id");
    var emptyNumber = checkInput(formName);
    if(emptyNumber==0){
        var post = $.post(siteURL+"/post/postaddNow",{"title":$(formName+" input[name='title']").val(),"text":$(formName+" textarea").val()});
        post.done(function (result) {
            if(result==1){
                window.location = siteURL+"/post/post";
            }else{
                alert('Failed!');
            }
        });
    }
});
$("#posteditButton").on('click',function () {
    var formName ="#"+$(this).parent().parent().attr("id");
    var postid = $("#postid").val();
    var emptyNumber = checkInput(formName);
    if(emptyNumber==0){
        var post = $.post(siteURL+"/post/posteditNow",{"title":$(formName+" input[name='title']").val(),"text":$(formName+" textarea").val(),"postId":postid});
        post.done(function (result) {
            if(result==1){
                window.location = siteURL+"/post/post";
            }else{
                alert(result);
            }
        });
    }
});