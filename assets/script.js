/*=============== SEARCH BAR JS ===============*/
const toggleSearch = (search, button) => {
        const searchBar = document.getElementById(search),
            searchButton = document.getElementById(button)
    
        searchButton.addEventListener('click', () => {
            // We add the show-search class, so that the search bar expands
            searchBar.classList.toggle('show-search')
        })
    }
    toggleSearch('search-bar', 'search-button')

// var copy = document.querySelector(".logos-slide").cloneNode(true);
//         document.querySelector(".logos").appendChild(copy);

const menuBtn = document.querySelector(".menu-icon span");
        const searchBtn = document.querySelector(".search-icon");
        const cancelBtn = document.querySelector(".cancel-icon");
        const items = document.querySelector(".nav-items");
        const form = document.querySelector("form");
        menuBtn.onclick = ()=>{
        items.classList.add("active");
        menuBtn.classList.add("hide");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
        }
        cancelBtn.onclick = ()=>{
        items.classList.remove("active");
        menuBtn.classList.remove("hide");
        searchBtn.classList.remove("hide");
        cancelBtn.classList.remove("show");
        form.classList.remove("active"); 
        }
        searchBtn.onclick = ()=>{
        form.classList.add("active");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
        }