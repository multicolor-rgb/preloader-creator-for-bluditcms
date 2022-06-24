
window.addEventListener("load", () => {
    setTimeout(
        () => { document.querySelector("#preload").classList.add("hidePreload") }, 500)

    setTimeout(() => { document.querySelector("#preload").style.display = "none" }, 700)

});