$(document).ready(function(){

    if(document.getElementById("pers") !== null){
    document.getElementById('submit').disabled = !document.getElementById("pers").checked;
    }

    $("#pers").click(function(){
        if (document.getElementById('password').value === document.getElementById('twopassword').value){
        
        document.getElementById('submit').disabled = !document.getElementById('pers').checked;
    }})
})