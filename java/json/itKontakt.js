var xhr = new XMLHttpRequest();

xhr.onload = function() {

    responseObject = JSON.parse(xhr.responseText);

    var newContent = '';
    for (var i = 0; i < responseObject.events.length; i++) {
        newContent += '<div class="event">';
        newContent += '<p><b>' + responseObject.events[i].rad1 + '</b><br>';
        if(responseObject.events[i].rad2) {
            newContent += responseObject.events[i].rad2 + '<br>';
        }
        if(responseObject.events[i].rad3) {
            newContent += responseObject.events[i].rad3 + '<br>';
        }
        if(responseObject.events[i].rad4) {
            newContent += responseObject.events[i].rad4 + '</p> ';
        }
        newContent += '</div>';
    }

    document.getElementById('content').innerHTML = newContent;

};

xhr.open('GET', '../java/json/data/dataitkontakt.json', true);
xhr.send(null);