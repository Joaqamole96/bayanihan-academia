document.addEventListener("DOMContentLoaded", function() {
    const avatarIcon = document.getElementById('avatar-icon');
    const avatarDropdown = document.getElementById('avatar-dropdown');

    avatarIcon.addEventListener('click', function() {
        if (avatarDropdown.style.display === 'block') {
            avatarDropdown.style.display = 'none';
        } else {
            avatarDropdown.style.display = 'block';
        }
    });
});