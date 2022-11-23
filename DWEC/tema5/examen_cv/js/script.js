function setActiveNav() {
    const links = document.querySelectorAll("a")
    console.log("links", links);

    for (const link of links) {
        // if (window.location.toString().includes(link.href))
        link.classList.add("active")
        link.innerHTML = "A"
    }
}

setActiveNav()