function addclick()
{

    var getnumber1=parseFloat(document.getElementById("num1").value);
    var getnumber2 =parseFloat(document.getElementById("num2").value);
    var result=getnumber1+getnumber2;
    console.log(result);
    document.getElementById("output").innerHTML=result;
}
function subclick()
{

    var getnumber1=parseFloat(document.getElementById("num1").value);
    var getnumber2 =parseFloat(document.getElementById("num2").value);
    var result=getnumber1-getnumber2;
    console.log(result);
    document.getElementById("output").innerHTML=result;
}
function multclick()
{

    var getnumber1=parseFloat(document.getElementById("num1").value);
    var getnumber2 =parseFloat(document.getElementById("num2").value);
    var result=getnumber1*getnumber2;
    console.log(result);
    document.getElementById("output").innerHTML=result;
}
function divclick()
{

    var getnumber1=parseFloat(document.getElementById("num1").value);
    var getnumber2 =parseFloat(document.getElementById("num2").value);
    var result=getnumber1/getnumber2;
    console.log(result);
    document.getElementById("output").innerHTML=result;
}