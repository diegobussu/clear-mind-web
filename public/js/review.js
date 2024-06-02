const reviews = [
    {
        text: "Clear Mind a complètement transformé ma routine quotidienne. J'étais souvent submergée par le stress de mes études, mais maintenant, je me sens beaucoup plus organisée et sereine. Le suivi émotionnel m'a aidée à mieux comprendre mes humeurs et à les gérer efficacement.",
        author: "- Diana R.",
        image: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fappstore.svg?alt=media&token=7f9fee00-9bc8-467d-b747-941ef1a30e69",
        imageLeft: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fmemoji01.webp?alt=media&token=ede15636-19fd-4100-b207-4949b623acac"
    },
    {
        text: "Je n'étais pas sûr de l'utilité d'une application pour la santé mentale, mais Clear Mind m'a prouvé le contraire. Les outils d'organisation sont parfaits pour m'aider à rester concentré et productif, et le soutien psychologique est vraiment un plus. Je recommande à tous les étudiants !",
        author: "- Diego B.",
        image: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fplaystore.svg?alt=media&token=02ceec37-abe3-44db-8ab0-c62c48ca7f25",
        imageLeft: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fmemoji01.webp?alt=media&token=ede15636-19fd-4100-b207-4949b623acac"
    },
    {
        text: "Clear Mind m'a vraiment aidée à traverser une période difficile. La possibilité de parler à un psychologue via l'application a été un vrai soulagement. Les conseils et les outils sont super faciles à utiliser et très efficaces. Merci Clear Mind !",
        author: "- Céliane G.",
        image: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fappstore.svg?alt=media&token=7f9fee00-9bc8-467d-b747-941ef1a30e69",
        imageLeft: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fmemoji01.webp?alt=media&token=ede15636-19fd-4100-b207-4949b623acac"
    },
    {
        text: "Je n'avais jamais utilisé d'application pour gérer mon stress avant Clear Mind, et maintenant, je ne pourrais plus m'en passer. L'interface est intuitive et les fonctionnalités sont parfaitement adaptées à mes besoins. C'est comme avoir un coach personnel toujours avec moi.",
        author: "- Logos T.",
        image: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fplaystore.svg?alt=media&token=02ceec37-abe3-44db-8ab0-c62c48ca7f25",
        imageLeft: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fmemoji01.webp?alt=media&token=ede15636-19fd-4100-b207-4949b623acac"
    },
    {
        text: "J'adore le journal de suivi des émotions. Il m'a aidée à prendre conscience de mes schémas émotionnels et à mieux les gérer. Les outils de planification sont également super pratiques pour structurer mes journées. Clear Mind est un must have pour quiconque cherche à améliorer sa santé mentale.",
        author: "- Anatole G.",
        image: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fappstore.svg?alt=media&token=7f9fee00-9bc8-467d-b747-941ef1a30e69",
        imageLeft: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fmemoji01.webp?alt=media&token=ede15636-19fd-4100-b207-4949b623acac"
    },
    {
        text: "Clear Mind m'a aidé à trouver un équilibre entre mes études et ma vie personnelle. Les prompts de journaling sont vraiment inspirants et m'aident à rester positif. Le soutien psychologique disponible à tout moment est un vrai plus, surtout en période d'examens.",
        author: "- Chrisla T.",
        image: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fplaystore.svg?alt=media&token=02ceec37-abe3-44db-8ab0-c62c48ca7f25",
        imageLeft: "https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fmemoji01.webp?alt=media&token=ede15636-19fd-4100-b207-4949b623acac"
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
