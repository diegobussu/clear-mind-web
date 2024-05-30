document.addEventListener('DOMContentLoaded', () => {
    
    document.querySelectorAll('.app-link').forEach(app => {
        app.addEventListener('click', function() {
            alert("Application bientôt disponible.")
        });
    }); 

});