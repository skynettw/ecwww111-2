function greeting() 
{
    window.alert("Good day!");
}

function changeText(obj) {
    var msg = obj;
    document.getElementById("content").innerHTML = msg;
    console.log(obj);
}