function greeting() 
{
    window.alert("Good day!");
}

function changeText(obj) {
    var msg = obj.textContent;
    document.getElementById("content").innerHTML = msg;
}

function bmi() {
    var h = document.getElementById("height").value;
    var w = document.getElementById("weight").value;
    var result = w / (h/100)**2;
    document.getElementById("bmiresult").innerHTML = result.toFixed(2);
}

function changeTV() {
    var tv = document.getElementById("tvselect");
    var tvText = tv.options[tv.selectedIndex].text;
    var vid = tv.options[tv.selectedIndex].value;
    console.log(tvText, vid);
}
