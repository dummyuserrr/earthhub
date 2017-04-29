function ratePostAsUseful(postid){
	var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }
    else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
            document.getElementById('postRating').innerHTML = xmlhttp.responseText.toString();
        }else{
            
        }
    }
    url = "/ratepostasuseful?p="+postid;
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

function ratePostAsNotUseful(postid){
	var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }
    else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
            document.getElementById('postRating').innerHTML = xmlhttp.responseText.toString();
        }else{
            
        }
    }
    url = "/ratepostasnotuseful?p="+postid;
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

function rateReplyAsUseful(replyid){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }
    else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
            document.getElementById('replyRating'+replyid).innerHTML = xmlhttp.responseText.toString();
        }else{
            
        }
    }
    url = "/ratereplyasuseful?p="+replyid;
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

function rateReplyAsNotUseful(replyid){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }
    else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
            document.getElementById('replyRating'+replyid).innerHTML = xmlhttp.responseText.toString();
        }else{
            
        }
    }
    url = "/ratereplyasnotuseful?p="+replyid;
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}