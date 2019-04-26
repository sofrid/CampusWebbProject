var xhr = new XMLHttpRequest();
xhr.onload = function() {
    responseObject =JSON.parse(xhr.responseText);

    var newContent = '';
    for(var i = 0; i < responseObject.starta.length; i++){
        newContent += '<div class="vagledningContentData">';
        newContent += '<h4>' + responseObject.starta[i].name +'</h4>';
        newContent += '<p>' + responseObject.starta[i].work +'</p>';
        newContent += '<p>' + responseObject.starta[i].number +'</p>';
        newContent += '<p>' + responseObject.starta[i].email +'</p>';
        newContent += '</div>';
    }
document.getElementById('vagRight').innerHTML = newContent;
};

xhr.open('GET','../data/vagledning.json',true);
xhr.send(null);