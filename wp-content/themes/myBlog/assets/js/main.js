// add class to register block
let loginMenu = document.getElementById("login-menu");
if (loginMenu != null) {
    let loginMenuItems = loginMenu.getElementsByTagName("li");
    let registerBlock = loginMenuItems[loginMenuItems.length - 1]; // taking last item of loginMenuItems
    registerBlock.classList.add("register");
}
// logout button animation
let logout = document.getElementById('logout');
if (logout != null) {
    let logoutWrap = document.getElementById('logout-wrap');
    let logoutHover = document.getElementById('logoutHover');
    logoutWrap.addEventListener("mouseover", function () {
        logout.classList.add("opacity-zero");
        logout.style.color = '#ff914d';
        logoutHover.style.display = 'block';
        logoutHover.classList.remove("opacity-zero");

    });
    logoutWrap.addEventListener("mouseout", function () {
        logout.classList.remove("opacity-zero");
        logout.style.color = '#fff';

        logoutHover.classList.add("opacity-zero");
        logoutHover.style.display = 'none';

    })
}
//setting new href for authorization
let oldHrefDiv = document.getElementById('wc_show_hide_loggedin_username');
if (oldHrefDiv != null) {
    let oldHrefSpan = oldHrefDiv.getElementsByTagName('span');
    if (oldHrefSpan != null) {
        let text = oldHrefSpan[0].innerHTML;
        oldHrefSpan[0].innerHTML = "<a href='/login'>"+text+"</a>";
    }
}