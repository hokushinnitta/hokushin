document.addEventListener('DOMContentLoaded', function () {
    var themeToggle = document.getElementById('theme-toggle');
    var navbar = document.getElementById('navbar');
    var currentTheme = localStorage.getItem('theme') || 'light';
    
    if (currentTheme === 'dark') {
        document.documentElement.setAttribute('data-bs-theme', 'dark');
        navbar.setAttribute('data-bs-theme', 'dark');
    } else {
        document.documentElement.setAttribute('data-bs-theme', 'light');
        navbar.setAttribute('data-bs-theme', 'light');
    }

    themeToggle.addEventListener('click', function () {
        if (navbar.getAttribute('data-bs-theme') === 'light') {
            document.documentElement.setAttribute('data-bs-theme', 'dark');
            navbar.setAttribute('data-bs-theme', 'dark');
            localStorage.setItem('theme', 'dark');
        } else {
            document.documentElement.setAttribute('data-bs-theme', 'light');
            navbar.setAttribute('data-bs-theme', 'light');
            localStorage.setItem('theme', 'light');
        }
    });
});
