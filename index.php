<?php
// Get all headers
$headers = getallheaders();

// Get the username from X-Forwarded-User header
$username = $headers['X-Forwarded-User'] ?? 'Unknown User';

// Get initials for avatar
$initials = preg_replace('/[^A-Z]/', '', ucwords($username));
$initials = substr($initials, 0, 2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConfigPanel</title>
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Top banner -->
    <header>
        <h1>Config&nbsp;Panel</h1>
        <div class="user-info" id="userInfo">
            <span class="avatar" id="userInitials"><?php echo htmlspecialchars($initials); ?></span>
            <span class="user-name" id="userName"><?php echo htmlspecialchars($username); ?></span>
            <!-- Theme switch next to user info -->
            <label class="theme-switch" title="Toggle dark mode">
                <input type="checkbox" id="themeToggle" />
                <span class="slider"></span>
            </label>
            <div class="user-dropdown" id="userDropdown">
                <ul>
                    <li><a href="#" id="logoutBtn">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Container for menu and main content -->
    <div class="container">
        <!-- Left menu -->
        <nav class="menu">
            <ul>
                <li class="active"><a href="#dashboard">Dashboard</a></li>
                <li><a href="#releases">Releases</a></li>
                <li><a href="#builds">Builds</a></li>
                <li><a href="#logs">Logs</a></li>
            </ul>
        </nav>

        <!-- Main window -->
        <main class="content">
            <div id="dashboard" class="content-section active">
                <div class="dashboard-grid">
                    <div class="grid-header">
                        <div class="grid-cell">Project</div>
                        <div class="grid-cell">Status</div>
                        <div class="grid-cell">Version</div>
                        <div class="grid-cell">Last Updated</div>
                        <div class="grid-cell">Actions</div>
                    </div>
                    
                    <div class="grid-row">
                        <div class="grid-cell">Frontend Portal</div>
                        <div class="grid-cell"><span class="status active">Active</span></div>
                        <div class="grid-cell">v2.4.1</div>
                        <div class="grid-cell">12 May 2024</div>
                        <div class="grid-cell">
                            <button class="action-btn edit">Edit</button>
                            <button class="action-btn view">View</button>
                        </div>
                    </div>
                    
                    <div class="grid-row">
                        <div class="grid-cell">Authentication Service</div>
                        <div class="grid-cell"><span class="status pending">Pending</span></div>
                        <div class="grid-cell">v1.8.0</div>
                        <div class="grid-cell">10 May 2024</div>
                        <div class="grid-cell">
                            <button class="action-btn edit">Edit</button>
                            <button class="action-btn view">View</button>
                        </div>
                    </div>
                    
                    <div class="grid-row">
                        <div class="grid-cell">API Gateway</div>
                        <div class="grid-cell"><span class="status active">Active</span></div>
                        <div class="grid-cell">v3.2.0</div>
                        <div class="grid-cell">11 May 2024</div>
                        <div class="grid-cell">
                            <button class="action-btn edit">Edit</button>
                            <button class="action-btn view">View</button>
                        </div>
                    </div>
                    
                    <div class="grid-row">
                        <div class="grid-cell">Database Service</div>
                        <div class="grid-cell"><span class="status warning">Warning</span></div>
                        <div class="grid-cell">v4.0.2</div>
                        <div class="grid-cell">9 May 2024</div>
                        <div class="grid-cell">
                            <button class="action-btn edit">Edit</button>
                            <button class="action-btn view">View</button>
                        </div>
                    </div>
                    
                    <div class="grid-row">
                        <div class="grid-cell">Scheduler</div>
                        <div class="grid-cell"><span class="status inactive">Inactive</span></div>
                        <div class="grid-cell">v1.3.8</div>
                        <div class="grid-cell">5 May 2024</div>
                        <div class="grid-cell">
                            <button class="action-btn edit">Edit</button>
                            <button class="action-btn view">View</button>
                        </div>
                    </div>
                    
                    <div class="grid-row">
                        <div class="grid-cell">Analytics Engine</div>
                        <div class="grid-cell"><span class="status active">Active</span></div>
                        <div class="grid-cell">v2.1.0</div>
                        <div class="grid-cell">11 May 2024</div>
                        <div class="grid-cell">
                            <button class="action-btn edit">Edit</button>
                            <button class="action-btn view">View</button>
                        </div>
                    </div>
                    
                    <div class="grid-row">
                        <div class="grid-cell">Notification Service</div>
                        <div class="grid-cell"><span class="status pending">Pending</span></div>
                        <div class="grid-cell">v1.5.2</div>
                        <div class="grid-cell">8 May 2024</div>
                        <div class="grid-cell">
                            <button class="action-btn edit">Edit</button>
                            <button class="action-btn view">View</button>
                        </div>
                    </div>
                    
                    <div class="grid-row">
                        <div class="grid-cell">Cache Manager</div>
                        <div class="grid-cell"><span class="status active">Active</span></div>
                        <div class="grid-cell">v2.2.1</div>
                        <div class="grid-cell">10 May 2024</div>
                        <div class="grid-cell">
                            <button class="action-btn edit">Edit</button>
                            <button class="action-btn view">View</button>
                        </div>
                    </div>
                    
                    <div class="grid-row">
                        <div class="grid-cell">Logger Service</div>
                        <div class="grid-cell"><span class="status error">Error</span></div>
                        <div class="grid-cell">v1.0.7</div>
                        <div class="grid-cell">7 May 2024</div>
                        <div class="grid-cell">
                            <button class="action-btn edit">Edit</button>
                            <button class="action-btn view">View</button>
                        </div>
                    </div>
                    
                    <div class="grid-row">
                        <div class="grid-cell">Storage Service</div>
                        <div class="grid-cell"><span class="status active">Active</span></div>
                        <div class="grid-cell">v3.5.3</div>
                        <div class="grid-cell">12 May 2024</div>
                        <div class="grid-cell">
                            <button class="action-btn edit">Edit</button>
                            <button class="action-btn view">View</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="releases" class="content-section">
                <p>Releases content goes here.</p>
            </div>
            <div id="builds" class="content-section">
                <p>Builds content goes here.</p>
            </div>
            <div id="logs" class="content-section">
                <p>Logs content goes here.</p>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>Created: May 2025</p>
    </footer>

    <script src="scripts.js"></script>
    <script>
        // Fetch user information
        fetch('style.css')
            .then(response => response.json())
            .then(data => {
                document.getElementById('userName').textContent = data.username;
                document.getElementById('userInitials').textContent = data.initials;
            })
            .catch(error => console.error('Error fetching user info:', error));

        // Menu functionality
        const menuItems = document.querySelectorAll('.menu a');
        const contentSections = document.querySelectorAll('.content-section');

        menuItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();

                // Remove active class from all menu items
                menuItems.forEach(i => i.parentElement.classList.remove('active'));

                // Add active class to the clicked menu item
                this.parentElement.classList.add('active');

                // Hide all content sections
                contentSections.forEach(section => section.classList.remove('active'));

                // Show the clicked content section
                const target = this.getAttribute('href');
                document.querySelector(target).classList.add('active');
            });
        });
    </script>
</body>
</html>