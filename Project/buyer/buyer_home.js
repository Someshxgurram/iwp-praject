function responsive(){
    var y = document.getElementById("bars");
    if (y.className === "fa fa-bars") {
        y.className = "fa fa-close";
    }
    else {
        y.className = "fa fa-bars";
    }
    var x=document.getElementById("menu");
    if (x.className==="menu"){
        x.className+=" res"
    }
    else{
        x.className="menu"
    }
 
}
function choice(){
    var y = document.getElementById("choice");
    if (y.className === "fa fa-caret-square-o-right") {
        y.className = "fa fa-caret-square-o-left";
    }
    else {
        y.className = "fa fa-caret-square-o-right";
    }
    var x=document.getElementById("choicem");
    if (x.className==="choices"){
        x.className+=" main"
    }
    else{
        x.className="choices"
    }
}