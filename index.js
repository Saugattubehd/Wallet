document.addEventListener("DOMContentLoaded", function () {
    const themeBtn = document.querySelector('.darkmd-btn');
    const body = document.body;
    const lightIcon = themeBtn.querySelector("span:nth-child(1)");
    const darkIcon = themeBtn.querySelector("span:nth-child(2)");

    // Load and apply the saved theme
    const savedTheme = localStorage.getItem('theme');

    if (savedTheme === 'dark') {
        body.classList.add('dark-theme');
        lightIcon.classList.remove('active'); 
        darkIcon.classList.add('active'); 
    } else {
        body.classList.remove('dark-theme');
        lightIcon.classList.add('active'); 
        darkIcon.classList.remove('active'); 
    }

    // Toggle dark mode and save it in localStorage
    themeBtn.addEventListener('click', function () {
        body.classList.toggle('dark-theme');

        // Toggle icons
        lightIcon.classList.toggle('active');
        darkIcon.classList.toggle('active');

        // Save theme to localStorage
        const newTheme = body.classList.contains('dark-theme') ? 'dark' : 'light';
        localStorage.setItem('theme', newTheme);
    });
});
