function greeting() 
{
    window.alert("Good day!");
}

function changeText(obj) {
    var msg = obj;
    document.getElementById("content").innerHTML = msg;
    console.log(obj);
}

function bmi() {
    var h = document.getElementById("height").value;
    var w = document.getElementById("weight").value;
    var result = w / (h/100)**2;
    document.getElementById("bmiresult").innerHTML = result;
}