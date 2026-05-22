
(function () {
    const data = window.PROJECT_PAGES?.[window.PROJECT_SLUG];
    if (!data) return;

    const $ = (selector) => document.querySelector(selector);
    const $$ = (selector) => Array.from(document.querySelectorAll(selector));
    const escape = (value) => String(value ?? "");

    document.title = `${data.accent} | Project Detail`;
    $('#eyebrow').innerHTML = `<span class="dot"></span>${escape(data.eyebrow)}`;
    $('#projectTitle').innerHTML = escape(data.title).replace(data.accent, `<span>${data.accent}</span>`);
    $('#projectDesc').textContent = data.description;
    $('#heroImage').src = data.heroImage;
    $('#heroImage').alt = data.accent;
    $('#visualLabel').textContent = data.visualLabel;
    $('#visualValue').textContent = data.visualValue;
    $('#floatOneLabel').textContent = data.floatOne[0];
    $('#floatOneValue').textContent = data.floatOne[1];
    $('#floatTwoLabel').textContent = data.floatTwo[0];
    $('#floatTwoValue').textContent = data.floatTwo[1];

    const githubBtn = $('#githubBtn');
    if (data.repoUrl) githubBtn.href = data.repoUrl;
    else githubBtn.style.display = 'none';

    $('#visualBars').innerHTML = data.visualBars.map(([label, value]) => `
        <div class="visual-bar-row">
            <span>${escape(label)}</span>
            <div class="track"><div class="fill" style="width:${Number(value)}%"></div></div>
            <strong>${escape(value)}</strong>
        </div>
    `).join('');

    $('#metricsStrip').innerHTML = data.metrics.map(([label, value], index) => `
        <article class="metric-card reveal delay-${index % 4}">
            <span>${escape(label)}</span>
            <strong>${escape(value)}</strong>
        </article>
    `).join('');

    $('#workflowTitle').textContent = data.workflowTitle;
    $('#workflowDesc').textContent = data.workflowDesc;
    $('#workflowSteps').innerHTML = data.workflow.map(([title, desc], index) => `
        <div class="pipeline-step reveal delay-${index % 4}">
            <span>${String(index + 1).padStart(2, '0')}</span>
            <div>
                <h3>${escape(title)}</h3>
                <p>${escape(desc)}</p>
            </div>
        </div>
    `).join('');

    $('#insightGrid').innerHTML = data.insights.map(([label, value, desc], index) => `
        <article class="insight-card reveal delay-${index % 4}">
            <span>${escape(label)}</span>
            <strong>${escape(value)}</strong>
            <p>${escape(desc)}</p>
        </article>
    `).join('');

    $('#resultsTitle').textContent = data.resultsTitle;
    $('#resultsDesc').textContent = data.resultsDesc;
    $('#resultList').innerHTML = data.results.map(([label, value]) => `
        <div class="result-chip">
            <span>${escape(label)}</span>
            <strong>${escape(value)}</strong>
        </div>
    `).join('');

    $('#chartTitle').textContent = data.chartTitle;
    $('#chartSub').textContent = data.chartSub;
    const max = Math.max(...data.chartData.map((item) => Number(item[1]) || 0));
    $('#chartBars').innerHTML = data.chartData.map(([label, value]) => {
        const width = max ? ((Number(value) / max) * 100).toFixed(2) : 0;
        return `
            <div class="bar-row">
                <span>${escape(label)}</span>
                <div class="track"><div class="fill" style="width:${width}%"></div></div>
                <strong>${escape(value)}</strong>
            </div>
        `;
    }).join('');

    $('#takeawayGrid').innerHTML = data.takeaways.map(([title, desc], index) => `
        <article class="takeaway-card reveal delay-${index % 4}">
            <span>0${index + 1}</span>
            <h3>${escape(title)}</h3>
            <p>${escape(desc)}</p>
        </article>
    `).join('');

    $('#imageGallery').innerHTML = data.gallery.map(([title, src, desc]) => `
        <article class="gallery-card reveal" data-src="${escape(src)}">
            <img src="${escape(src)}" alt="${escape(title)}">
            <div>
                <h3>${escape(title)}</h3>
                <p>${escape(desc)}</p>
            </div>
        </article>
    `).join('');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) entry.target.classList.add('is-visible');
        });
    }, { threshold: 0.12 });
    $$('.reveal').forEach((el) => observer.observe(el));

    const navLinks = $$('.nav-pills a');
    const sections = $$('main section[id]');
    function updateActiveNav() {
        let current = 'overview';
        sections.forEach((section) => {
            if (window.scrollY >= section.offsetTop - 180) current = section.id;
        });
        navLinks.forEach((link) => link.classList.toggle('active', link.getAttribute('href') === `#${current}`));
    }
    window.addEventListener('scroll', updateActiveNav, { passive: true });
    updateActiveNav();

    const modal = $('#imageModal');
    const modalImg = $('#modalImage');
    $$('.gallery-card').forEach((card) => {
        card.addEventListener('click', () => {
            modalImg.src = card.dataset.src;
            modal.classList.add('is-open');
        });
    });
    $('#modalClose').addEventListener('click', () => modal.classList.remove('is-open'));
    modal.addEventListener('click', (event) => {
        if (event.target === modal) modal.classList.remove('is-open');
    });
    window.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') modal.classList.remove('is-open');
    });
})();
