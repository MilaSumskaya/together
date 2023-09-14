$(document).ready(function(){
    // document.getElementById('submit').disabled = !document.getElementById('input').checked;
    document.getElementById('submit').disabled = !document.getElementById('pers').checked;
    $("#input").click(function(){
        reg();
    })
})

function reg(){
    if (document.getElementById('pers').checked || (document.getElementById('password').value === document.getElementById('twopassword').value)){
        
    document.getElementById('submit').disabled = !document.getElementById('input').checked;
    }
}