var d=new Date();
var d2=d.toDateString();
var greet=prompt("please enter your name");
var hrs=d.getHours();
function showTime(){
if(hrs<=12){
    document.write("Good Morning");
}
else if(hrs>=12 && hrs<=16){
    document.write("Good Afternoon");
}
else{
    document.write("Good Evening");
}
}
document.write(d2);
document.write("<br>");
showTime();

