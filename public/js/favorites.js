// public/js/favorites.js
document.addEventListener('DOMContentLoaded', function() {
    const favoriteButtons = document.querySelectorAll('.favorite-btn');
    
    favoriteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const jobId = this.getAttribute('data-id');
            
            fetch(`/favorite/toggle/${jobId}`, { method: 'POST' })
                .then(response => response.json())
                .then(data => {
                    if (data.isFavorite) {
                        this.classList.add('active');
                    } else {
                        this.classList.remove('active');
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    });
});