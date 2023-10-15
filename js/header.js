    // --- toggle the genres dropdown --- //
    // const dropdownMenu = document.querySelector("#dropdown-menu");
    // const dropdownBtn = document.querySelector("#dropdown-toggle");
    // // open the dropdown when click on "genres"
    // dropdownBtn.addEventListener("click", function(event){
    //     dropdownMenu.classList.toggle("hidden");
    //     event.stopPropagation();
    // });
    // // close the dropdown when click outside 
    // document.addEventListener("click", function(event){
    //     if(!dropdownMenu.contains(event.target)){
    //         dropdownMenu.classList.add("hidden");
    //     }
    // });

    // --- toggle the login sidenav --- //
    const sideNav = document.querySelector("#sidenav-container");
    const openSideNav = document.querySelector("#open-nav");
    // open the nav when click on "login"
    openSideNav.addEventListener("click", function(event){
        sideNav.classList.add("active");
        event.stopPropagation();
    });
    // click outside the login nav to close it
    document.addEventListener("click", function(event){
        if(!sideNav.contains(event.target) && !openSideNav.contains(event.target)){
            sideNav.classList.remove("active");
        }
    });