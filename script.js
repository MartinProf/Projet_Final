  
function openNav() {
    document.getElementById("sidenavElement").style.display = "block";
    document.getElementById("centreElement").style.marginLeft = "15%";
    document.getElementById("sidenavElement").style.width = "15%";
    document.getElementById("openbtnElement").style.display = 'none';
}

function closeNav() {
    document.getElementById("sidenavElement").style.display = "none";
    document.getElementById("centreElement").style.marginLeft = "0%";
    document.getElementById("openbtnElement").style.display = "inline-block";
}
