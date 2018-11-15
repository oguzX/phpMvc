function navHighlight(elem, home,active) {
    var url = location.href.split('/'),
        loc = url[url.length-2]+"/"+url[url.length-1],
        link = document.querySelectorAll(elem);
    for(var i =0 ;i<link.length;i++){
        var path = link[i].href.split('/'),
            page = path[path.length-2] +"/"+path[path.length-1];
        if (page == loc){
            console.log("asd");
            link[i].className += ' '+active;
        }
    }
}
navHighlight(".nav a","default/index","active");