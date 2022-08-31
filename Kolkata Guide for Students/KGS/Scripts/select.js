function info(){
    var x = document.getElementsByClassName("selected");
    x[0].className = "";
    document.getElementById("info").className="selected";
    var y = document.getElementsByClassName("information");
    for(var i = 0; i < y.length; i++)
        y[i].style.display = "none";
    document.getElementById("college_about").style.display = "block";
}
function course(){
    var x = document.getElementsByClassName("selected");
    x[0].className = "";
    document.getElementById("course").className="selected";
    var y = document.getElementsByClassName("information");
    for(var i = 0; i < y.length; i++)
        y[i].style.display = "none";
    document.getElementById("college_courses").style.display = "block";
}
function admit(){
    var x = document.getElementsByClassName("selected");
    x[0].className = "";
    document.getElementById("admit").className="selected";
    var y = document.getElementsByClassName("information");
    for(var i = 0; i < y.length; i++)
        y[i].style.display = "none";
    document.getElementById("college_admit").style.display = "block";
}
function place(){
    var x = document.getElementsByClassName("selected");
    x[0].className = "";
    document.getElementById("place").className="selected";
    var y = document.getElementsByClassName("information");
    for(var i = 0; i < y.length; i++)
        y[i].style.display = "none";
    document.getElementById("college_place").style.display = "block";
}
function review(){
    var x = document.getElementsByClassName("selected");
    x[0].className = "";
    document.getElementById("review").className="selected";
    var y = document.getElementsByClassName("information");
    for(var i = 0; i < y.length; i++)
        y[i].style.display = "none";
	document.getElementById("college_review").style.display = "block";
}
function ug(){
    document.getElementsByClassName("selected2")[0].className="";
    document.getElementById("ug").className = "selected2";
    var y = document.getElementsByClassName("course_type");
    for(var i = 0; i < y.length; i++)
        y[i].style.display = "none";
    document.getElementById("ug_block").style.display = "block";
}
function pg(){
    document.getElementsByClassName("selected2")[0].className="";
    document.getElementById("pg").className = "selected2";
    var y = document.getElementsByClassName("course_type");
    for(var i = 0; i < y.length; i++)
        y[i].style.display = "none";
    document.getElementById("pg_block").style.display = "block";
}
function phd(){
    document.getElementsByClassName("selected2")[0].className="";
    document.getElementById("phd").className = "selected2";
    var y = document.getElementsByClassName("course_type");
    for(var i = 0; i < y.length; i++)
        y[i].style.display = "none";
    document.getElementById("phd_block").style.display = "block";
}
function bed(){
    document.getElementsByClassName("selected2")[0].className="";
    document.getElementById("bed").className = "selected2";
    var y = document.getElementsByClassName("course_type");
    for(var i = 0; i < y.length; i++)
        y[i].style.display = "none";
    document.getElementById("bed_block").style.display = "block";
}
function coc(){
    document.getElementsByClassName("selected2")[0].className="";
    document.getElementById("coc").className = "selected2";
    var y = document.getElementsByClassName("course_type");
    for(var i = 0; i < y.length; i++)
        y[i].style.display = "none";
    document.getElementById("coc_block").style.display = "block";
}