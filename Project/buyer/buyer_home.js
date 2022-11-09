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

function con1(){
    a=document.getElementById('container1');
    b=document.getElementById('container2');
    c=document.getElementById('container3');
    d=document.getElementById('container4');
    e=document.getElementById('container5');
    if(a.className==="container"){
        a.className+=" close";
        b.className="container";
    }
    else if(c.className==="container"){
        c.className+=" close";
        b.className="container";
    }
    else if(d.className==="container"){
        d.className+=" close";
        b.className="container";
    }
    else if(e.className==="container"){
        e.className+=" close";
        b.className="container";
    }
    else{
        a.className="container";
        b.className+=" close";
    }
}
function con2(){
    a=document.getElementById('container1');
    b=document.getElementById('container2');
    c=document.getElementById('container3');
    d=document.getElementById('container4');
    e=document.getElementById('container5');
    if(a.className==="container"){
        a.className+=" close";
        c.className="container";
    }
    else if(b.className==="container"){
        b.className+=" close";
        c.className="container";
    }
    else if(d.className==="container"){
        d.className+=" close";
        c.className="container";
    }
    else if(e.className==="container"){
        e.className+=" close";
        c.className="container";
    }
    else{
        a.className="container";
        c.className+=" close";
    }
}
function con3(){
    a=document.getElementById('container1');
    b=document.getElementById('container2');
    c=document.getElementById('container3');
    d=document.getElementById('container4');
    e=document.getElementById('container5');
    if(a.className==="container"){
        a.className+=" close";
        d.className="container";
    }
    else if(b.className==="container"){
        b.className+=" close";
        d.className="container";
    }
    else if(c.className==="container"){
        c.className+=" close";
        d.className="container";
    }
    else if(e.className==="container"){
        e.className+=" close";
        d.className="container";
    }
    else{
        a.className="container";
        d.className+=" close";
    }
}
function con4(){
    a=document.getElementById('container1');
    b=document.getElementById('container2');
    c=document.getElementById('container3');
    d=document.getElementById('container4');
    e=document.getElementById('container5');
    if(a.className==="container"){
        a.className+=" close";
        e.className="container";
    }
    else if(b.className==="container"){
        b.className+=" close";
        e.className="container";
    }
    else if(c.className==="container"){
        c.className+=" close";
        e.className="container";
    }
    else if(d.className==="container"){
        d.className+=" close";
        e.className="container";
    }
}
