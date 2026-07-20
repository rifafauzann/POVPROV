document.addEventListener('DOMContentLoaded', () => {
    // Mobile menu toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navMenu = document.querySelector('.nav-menu');
    const navActions = document.querySelector('.nav-actions');

    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', () => {
            // Simple toggle for mobile view
            if (navMenu.style.display === 'block') {
                navMenu.style.display = 'none';
                navActions.style.display = 'none';
            } else {
                navMenu.style.display = 'block';
                navActions.style.display = 'flex';
                navActions.style.flexDirection = 'column';
                navActions.style.marginTop = '20px';
                
                // Style nav menu for mobile
                navMenu.querySelector('ul').style.flexDirection = 'column';
                navMenu.querySelector('ul').style.gap = '15px';
                navMenu.style.position = 'absolute';
                navMenu.style.top = '80px';
                navMenu.style.left = '0';
                navMenu.style.right = '0';
                navMenu.style.backgroundColor = 'white';
                navMenu.style.padding = '20px';
                navMenu.style.boxShadow = '0 10px 15px rgba(0,0,0,0.1)';
            }
        });
    }

    // Toggle active state for "Pilih Hari" in Jadwal section
    const dayCircles = document.querySelectorAll('.day-circle');
    dayCircles.forEach(circle => {
        circle.addEventListener('click', () => {
            dayCircles.forEach(c => c.classList.remove('active'));
            circle.classList.add('active');
        });
    });

    // Toggle active state for Kesehatan Filters
    const kFilters = document.querySelectorAll('.k-filter');
    kFilters.forEach(filter => {
        filter.addEventListener('click', () => {
            kFilters.forEach(f => f.classList.remove('active'));
            filter.classList.add('active');
        });
    });
});
