let body = document.getElementsByTagName("body");
let ad = body[0].getElementsByTagName("div");
for (let i = 0; i < ad.length; i++) {
    if (ad[i].innerText.includes(
        "Do you want to support owner of this site? " +
        "Click here and donate to his account some amount, " +
        "he will be able to use it to pay for any of our services, " +
        "including removing this ad.")) {
        ad[i].style.display = 'none';
    }
}
