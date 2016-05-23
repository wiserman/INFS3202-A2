/* Toggles the sidebar */
function toggleSidebar() {
    if (document.getElementById("sidebar").offsetWidth == 200) {
        closeSidebar();
    } else {
        openSidebar();
    }
}

/* Opens the sidebar */
function openSidebar() {
    document.getElementById("sidebar").style.width = "200px";
    document.getElementById("menu-button").className += "active";
}

/* Closes the sidebar */
function closeSidebar() {
    document.getElementById("sidebar").style.width = "0";
    document.getElementById("menu-button").className = "";
}