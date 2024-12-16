const iclass = document.querySelector(".iclass")
const sideBar = document.querySelector(".side-bar-mobile")

iclass.addEventListener("click", () => {
    if(sideBar.style.display === "flex"){
        sideBar.style.display = "none"
    }
    else{
        sideBar.style.display = "flex"
    }

})
