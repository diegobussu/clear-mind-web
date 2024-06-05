const reviews = [
    {
        text: "Clear Mind a complètement transformé ma routine quotidienne. J'étais souvent submergée par le stress de mes études, mais maintenant, je me sens beaucoup plus organisée et sereine. Le suivi émotionnel m'a aidée à mieux comprendre mes humeurs et à les gérer efficacement.",
        author: "- Diana R.",
        image: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fappstore.svg?alt=media&token=7f9fee00-9bc8-467d-b747-941ef1a30e69",
        imageLeft: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2FMemoji-1.png?alt=media&token=b6e47358-b080-42ce-9f04-e5b36739bf63"
    },
    {
        text: "Je n'étais pas sûr de l'utilité d'une application pour la santé mentale, mais Clear Mind m'a prouvé le contraire. Les outils d'organisation sont parfaits pour m'aider à rester concentré et productif, et le soutien psychologique est vraiment un plus. Je recommande à tous les étudiants !",
        author: "- Diego B.",
        image: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fplaystore.svg?alt=media&token=02ceec37-abe3-44db-8ab0-c62c48ca7f25",
        imageLeft: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2FMemoji-2.png?alt=media&token=655c4f1c-62cd-4ff2-9f02-4de451306f68"
    },
    {
        text: "Clear Mind m'a vraiment aidée à traverser une période difficile. La possibilité de parler à un psychologue via l'application a été un vrai soulagement. Les conseils et les outils sont super faciles à utiliser et très efficaces. Merci Clear Mind !",
        author: "- Céliane G.",
        image: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fappstore.svg?alt=media&token=7f9fee00-9bc8-467d-b747-941ef1a30e69",
        imageLeft: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2FMemoji-3.png?alt=media&token=99bb6896-aff0-4194-bf0d-8b06a5420015"
    },
    {
        text: "Je n'avais jamais utilisé d'application pour gérer mon stress avant Clear Mind, et maintenant, je ne pourrais plus m'en passer. L'interface est intuitive et les fonctionnalités sont parfaitement adaptées à mes besoins. C'est comme avoir un coach personnel toujours avec moi.",
        author: "- Logos T.",
        image: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fplaystore.svg?alt=media&token=02ceec37-abe3-44db-8ab0-c62c48ca7f25",
        imageLeft: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2FMemoji-4.png?alt=media&token=2b3dc616-7016-4745-b592-2a8ff631c88e"
    },
    {
        text: "J'adore le journal de suivi des émotions. Il m'a aidée à prendre conscience de mes schémas émotionnels et à mieux les gérer. Les outils de planification sont également super pratiques pour structurer mes journées. Clear Mind est un must have pour quiconque cherche à améliorer sa santé mentale.",
        author: "- Anatole G.",
        image: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fappstore.svg?alt=media&token=7f9fee00-9bc8-467d-b747-941ef1a30e69",
        imageLeft: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2FMemoji-5.png?alt=media&token=42e963c8-86a7-4455-92c8-1ffc4c62bde6"
    },
    {
        text: "Clear Mind m'a aidé à trouver un équilibre entre mes études et ma vie personnelle. Les prompts de journaling sont vraiment inspirants et m'aident à rester positif. Le soutien psychologique disponible à tout moment est un vrai plus, surtout en période d'examens.",
        author: "- Chrisla T.",
        image: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fplaystore.svg?alt=media&token=02ceec37-abe3-44db-8ab0-c62c48ca7f25",
        imageLeft: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2FMemoj-6.png?alt=media&token=08de5f91-8f74-4a27-bf4b-c427db527bd1"
    }
];

function showReview(index) {
    document.getElementById('review-text').textContent = reviews[index].text;
    document.getElementById('review-author').textContent = reviews[index].author;
    document.getElementById('review-image').src = reviews[index].image;
    document.getElementById('review-image-left').src = reviews[index].imageLeft;
    const dots = document.getElementsByClassName('dot');
    for (let i = 0; i < dots.length; i++) {
        dots[i].classList.remove('active');
    }
    dots[index].classList.add('active');
}

showReview(0);
