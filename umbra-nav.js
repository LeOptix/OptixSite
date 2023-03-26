    const navItems = document.querySelectorAll('.nav-item');
        navItems.forEach(navItem => {
            const link = navItem.querySelector('a');
            var link2 = link.href.replace('index.html', '')
            if(window.location.href==link.href || window.location.href==link2) {
                navItem.classList.add("active");
            }
        });