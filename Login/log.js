document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('log.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Login successful!');
            window.location.href = 'dashboard.html'; // Redirect to dashboard on success
        } else {
            alert('Login failed. Please check your credentials.');
        }
    })
    .catch(error => console.error('Error:', error));
});
