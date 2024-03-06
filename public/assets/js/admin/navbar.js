    // Get references to the user menu button and user menu
    const userMenuButton = document.getElementById('user-menu-button');
    const userMenu = document.getElementById('user-dropdown');

    // Toggle the visibility of the user menu
    userMenuButton.addEventListener('click', () => {
        userMenu.classList.toggle('hidden');
    });

    // Close the user menu when clicking outside of it
    document.addEventListener('click', (event) => {
        if (!userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
            userMenu.classList.add('hidden');
        }
    });