
function nextPic(start, end){
    // get the current index of the picture
    var index = parseInt(document.getElementById("picture").title);
    
    if (index == end){
        index = start;
    } else{
        index = index + 1;
    }
    document.getElementById("picture").innerHTML = "<img src= 'images/" + index
                                                   + ".jpg' width='47%'/>";
    document.getElementById("picture").title = index;

}


function prePic(start, end){
    var index = parseInt(document.getElementById("picture").title);

    if (index == start){
        index = end;
    } else{
        index = index - 1;
    }
    document.getElementById("picture").innerHTML = "<img src= 'images/" + index
                                                   + ".jpg' width='47%'/>";
    document.getElementById("picture").title = index;
}
