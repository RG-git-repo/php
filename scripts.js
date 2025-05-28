// Menu functionality
document.querySelectorAll('.menu a').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);

        // Update active class on menu items
        document.querySelectorAll('.menu li').forEach(li => {
            li.classList.remove('active');
        });
        this.parentElement.classList.add('active');

        // Show the correct content section
        document.querySelectorAll('.content-section').forEach(section => {
            section.classList.remove('active');
        });
        document.getElementById(targetId).classList.add('active');
    });
});

// Theme toggle functionality
const themeToggle = document.getElementById('themeToggle');
if (themeToggle) {
    // Set initial state from localStorage
    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('dark');
        themeToggle.checked = true;
    }
    themeToggle.addEventListener('change', function () {
        if (this.checked) {
            document.body.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else {
            document.body.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        }
    });
}

// User dropdown functionality
const userInfo = document.getElementById('userInfo');
const userDropdown = document.getElementById('userDropdown');
const userName = document.getElementById('userName');
if (userInfo && userDropdown && userName) {
    userName.addEventListener('click', function (e) {
        e.stopPropagation();
        userInfo.classList.toggle('open');
    });
    // Hide dropdown when clicking outside
    document.addEventListener('click', function (e) {
        if (!userInfo.contains(e.target)) {
            userInfo.classList.remove('open');
        }
    });
}

// Optional: handle logout click
const logoutBtn = document.getElementById('logoutBtn');
if (logoutBtn) {
    logoutBtn.addEventListener('click', function (e) {
        e.preventDefault();
        alert('Logged out!');
        // Add your logout logic here
    });
}
