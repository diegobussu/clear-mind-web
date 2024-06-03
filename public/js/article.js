document.addEventListener("DOMContentLoaded", function() {
    var articles = document.querySelectorAll('.help-article');
    articles.forEach(function(article) {
        var title = article.querySelector('h4');
        var content = article.querySelector('p');
        title.addEventListener('click', function() {
            // Masquer tous les autres articles
            articles.forEach(function(otherArticle) {
                var otherContent = otherArticle.querySelector('p');
                if (otherArticle !== article && otherContent.style.display !== "none") {
                    otherContent.style.display = "none";
                }
            });

            // Afficher ou masquer le contenu de l'article actuel
            if (content.style.display === "none" || content.style.display === "") {
                content.style.display = "block";
            } else {
                content.style.display = "none";
            }
        });
    });
});