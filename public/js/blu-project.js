const data = window.BLU_PROJECT_DATA;

const $ = (selector, parent = document) => parent.querySelector(selector);
const $$ = (selector, parent = document) => [...parent.querySelectorAll(selector)];

function renderHeroBars() {
    const target = $("#heroMiniBars");
    if (!target) return;

    const values = [
        { label: "Positive", value: data.labeling.positive, total: data.labeling.used },
        { label: "Negative", value: data.labeling.negative, total: data.labeling.used },
        { label: "Neutral", value: data.labeling.neutral, total: data.labeling.used }
    ];

    target.innerHTML = values.map(item => {
        const percentage = Math.round((item.value / item.total) * 100);
        return `
            <div class="mini-bar-row">
                <span>${item.label}</span>
                <div class="track"><div class="fill" style="width:${percentage}%"></div></div>
                <strong>${percentage}%</strong>
            </div>
        `;
    }).join("");
}

function renderModelComparison() {
    const target = $("#modelComparisonChart");
    if (!target) return;

    target.innerHTML = data.performance.map(model => `
        <div class="bar-row">
            <span>${model.model}</span>
            <div class="track"><div class="fill" style="width:${model.accuracy}%"></div></div>
            <strong>${model.accuracy.toFixed(2)}%</strong>
        </div>
    `).join("");
}

function renderWordCloud() {
    const target = $("#wordCloudLite");
    if (!target) return;

    const max = Math.max(...data.topWords.map(item => item.freq));

    target.innerHTML = data.topWords.map(item => {
        const size = 14 + (item.freq / max) * 28;
        return `<span class="word-token" style="font-size:${size.toFixed(1)}px">${item.word}</span>`;
    }).join("");
}

function renderTfidfList() {
    const target = $("#tfidfList");
    if (!target) return;

    target.innerHTML = data.tfidf.slice(0, 8).map(item => `
        <div class="tfidf-item">
            <span>${item.word}</span>
            <strong>${item.score}</strong>
        </div>
    `).join("");
}

function renderNgrams() {
    const bigram = $("#bigramList");
    const trigram = $("#trigramList");

    if (bigram) {
        bigram.innerHTML = data.bigrams.map(item => `
            <div class="ngram-item">
                <span>${item.ngram}</span>
                <strong>${item.frequency}</strong>
            </div>
        `).join("");
    }

    if (trigram) {
        trigram.innerHTML = data.trigrams.map(item => `
            <div class="ngram-item">
                <span>${item.ngram}</span>
                <strong>${item.frequency}</strong>
            </div>
        `).join("");
    }
}

function renderPredictions() {
    const target = $("#predictionSamples");
    if (!target) return;

    target.innerHTML = data.reviews.map(review => `
        <article class="prediction-card">
            <p>“${review.text}”</p>
            <div class="prediction-meta">
                <span>Actual: ${review.actual}</span>
                <span>Predicted: ${review.predicted}</span>
                <span>${review.correct ? "Correct" : "Needs review"}</span>
            </div>
        </article>
    `).join("");
}

function setupTabs() {
    const buttons = $$(".tab-btn");
    const panels = $$(".tab-panel");

    buttons.forEach(button => {
        button.addEventListener("click", () => {
            buttons.forEach(item => item.classList.remove("active"));
            panels.forEach(panel => panel.classList.remove("active"));

            button.classList.add("active");
            $(`#${button.dataset.tab}`).classList.add("active");
        });
    });
}

function setupRevealAnimation() {
    const revealItems = $$(".reveal");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.16 });

    revealItems.forEach(item => observer.observe(item));
}

function setupActiveNavigation() {
    const sections = ["overview", "process", "results", "insights"]
        .map(id => document.getElementById(id))
        .filter(Boolean);

    const links = $$(".nav-pills a");

    function updateActive() {
        let current = "overview";

        sections.forEach(section => {
            const top = section.offsetTop - 180;
            if (window.scrollY >= top) {
                current = section.id;
            }
        });

        links.forEach(link => {
            link.classList.toggle("active", link.getAttribute("href") === `#${current}`);
        });
    }

    window.addEventListener("scroll", updateActive);
    updateActive();
}

function setupImageModal() {
    const modal = $("#imageModal");
    const modalImage = $("#imageModal img");
    const close = $("#closeModal");

    $$(".gallery-card img").forEach(image => {
        image.addEventListener("click", () => {
            modalImage.src = image.src;
            modalImage.alt = image.alt;
            modal.classList.add("is-open");
            modal.setAttribute("aria-hidden", "false");
        });
    });

    function closeModal() {
        modal.classList.remove("is-open");
        modal.setAttribute("aria-hidden", "true");
        modalImage.src = "";
    }

    close.addEventListener("click", closeModal);
    modal.addEventListener("click", event => {
        if (event.target === modal) closeModal();
    });

    window.addEventListener("keydown", event => {
        if (event.key === "Escape") closeModal();
    });
}

document.addEventListener("DOMContentLoaded", () => {
    renderHeroBars();
    renderModelComparison();
    renderWordCloud();
    renderTfidfList();
    renderNgrams();
    renderPredictions();

    setupTabs();
    setupRevealAnimation();
    setupActiveNavigation();
    setupImageModal();
});
