<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project Detail | Power BI IT BSC Dashboard</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700;1,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/project-detail-template.css') }}">
</head>

<body>
    <div class="bg-fixed"></div>
    <div class="noise"></div>

    <header class="project-nav" id="top">
        <a href="{{ route('projects.gallery') }}" class="brand-link" aria-label="Back to portfolio projects">
            <span class="brand-back" aria-hidden="true">←</span>
            <span>Project</span>
        </a>

        <nav class="nav-pills" aria-label="Project navigation">
            <a href="#overview" class="active">Overview</a>
            <a href="#process">Process</a>
            <a href="#results">Results</a>
            <a href="#insights">Insights</a>
        </nav>
    </header>

    <main>
        <section class="hero-section" id="overview">
            <div class="hero-copy reveal">
                <div class="eyebrow">
                    <span class="dot"></span>
                    Extract Transform Load · Business Intelligence
                </div>

                <h1>
                    IT Balanced Scorecard Dashboard for <span>Industrial Performance Monitoring</span>
                </h1>

                <p class="hero-desc">
                    A dashboard development project that translates IT Balanced Scorecard perspectives into measurable
                    KPI monitoring for head office and branch performance, using mockup data, ETL, and Power BI
                    reporting.
                </p>

                <div class="hero-actions">
                    <a href="#process" class="primary-btn">Explore Process</a>
                    <a href="#insights" class="secondary-btn">View Dashboard</a>
                </div>
            </div>

            <div class="hero-visual reveal delay-1" aria-label="Project summary visualization">
                <div class="project-card-visual">
                    <img src="{{ asset('images/project1.webp') }}"
                        alt="Power BI IT Balanced Scorecard Dashboard preview">

                    <div class="visual-summary">
                        <span>Dashboard Scope</span>
                        <strong>IT BSC Monitoring</strong>

                        <div class="scope-stack">
                            <div class="scope-group">
                                <span class="scope-label">4 Perspectives</span>

                                <div class="perspective-list">
                                    <span>Customer Orientation</span>
                                    <span>Corporate Contribution</span>
                                    <span>Operational Excellence</span>
                                    <span>Future Orientation</span>
                                </div>
                            </div>
                            <div class="scope-meta-grid">
                                <div class="scope-meta-card">
                                    <span>Data Period</span>
                                    <strong>2020–2024</strong>
                                </div>

                                <div class="scope-meta-card">
                                    <span>Coverage</span>
                                    <strong>4 Branches</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="content-section two-column" id="process">
            <div class="section-copy reveal">
                <span class="section-kicker">01 · Workflow</span>
                <h2>From KPI framework to executive dashboard </h2>
                <p>
                    The project starts from reviewing the company’s annual report to define IT Balanced Scorecard
                    objectives, mapping relevant KPI indicators, preparing dummy KPI datasets based on the required
                    calculation metrics, building ETL in Power BI, and translating the framework into one integrated
                    dashboard covering four branches.

                </p>
            </div>

            <div class="pipeline-card">
                <div class="pipeline-step reveal">
                    <span>01</span>
                    <div>
                        <h3>KPI Definition</h3>
                        <p>
                            Reviewed the company’s annual report to define IT BSC-based KPI indicators across four
                            perspectives: Corporate Contribution, Customer Orientation, Operational Excellence, and
                            Future Orientation.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step reveal delay-1">
                    <span>02</span>
                    <div>
                        <h3>Data Preparation</h3>
                        <p>
                            Prepared KPI datasets based on the defined indicators, including calculation metrics,
                            time periods, branches, and perspective dimensions for four-branch analysis.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step reveal delay-2">
                    <span>03</span>
                    <div>
                        <h3>Power BI Modeling</h3>
                        <p>
                            Built the data model, relationships, and measures in Power BI to calculate and analyze
                            the defined KPI metrics.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step reveal delay-3">
                    <span>04</span>
                    <div>
                        <h3>Dashboard Design</h3>
                        <p>
                            Designed one dashboard to monitor IT BSC performance across four branches through KPI,
                            perspective, and time-based views.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section">
            <div class="section-heading reveal">
                <span class="section-kicker">02 · Key Insights</span>
                <h2>What this project highlights</h2>
            </div>

            <div class="insight-grid">
                <article class="insight-card reveal">
                    <span>KPI Coverage</span>
                    <strong>20 </strong>
                    <p>
                        The KPI framework covers four IT Balanced Scorecard perspectives: Corporate Contribution,
                        Customer Orientation, Operational Excellence, and Future Orientation.
                    </p>
                </article>

                <article class="insight-card reveal delay-1">
                    <span>Business View</span>
                    <strong>4 Locations</strong>
                    <p>
                        Dashboard design covers four locations, including Jakarta as the head office, to compare
                        performance across branches.
                    </p>
                </article>

                <article class="insight-card reveal delay-2">
                    <span>Decision Support</span>
                    <strong>Performance Monitoring</strong>
                    <p>
                        The dashboard helps stakeholders compare branch performance, track yearly trends, and monitor
                        KPI achievement more efficiently.
                    </p>
                </article>
            </div>
        </section>

        <section class="content-section" id="results">
            <div class="section-heading reveal">
                <span class="section-kicker">03 · Results</span>
                <h2>The dashboard turns KPI documentation into visual performance monitoring </h2>
                <p>
                    Instead of keeping KPI definitions as static tables, the project structures them into interactive
                    reporting layers that can support management review and operational evaluation.
                </p>
            </div>

            <div class="perspective-dashboard-showcase reveal">
                <div class="perspective-tabs" aria-label="IT BSC Perspective Selector">
                    <button class="perspective-tab active" type="button" data-perspective="corporate">
                        <span>01</span>
                        <div>
                            <strong>Corporate Contribution</strong>
                            <p>Business and strategic value</p>
                        </div>
                    </button>

                    <button class="perspective-tab" type="button" data-perspective="customer">
                        <span>02</span>
                        <div>
                            <strong>Customer Orientation</strong>
                            <p>User and service experience</p>
                        </div>
                    </button>

                    <button class="perspective-tab" type="button" data-perspective="operational">
                        <span>03</span>
                        <div>
                            <strong>Operational Excellence</strong>
                            <p>Efficiency and reliability</p>
                        </div>
                    </button>

                    <button class="perspective-tab" type="button" data-perspective="future">
                        <span>04</span>
                        <div>
                            <strong>Future Orientation</strong>
                            <p>Innovation and readiness</p>
                        </div>
                    </button>
                </div>

                <div class="perspective-preview">
                    <div class="dashboard-frame">
                        <img id="preview-image" src="{{ asset('images/projects/powerbi/cc.webp') }}"
                            alt="Corporate Contribution Dashboard View">
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section">
            <div class="section-heading reveal">
                <span class="section-kicker">04 · Takeaways</span>
                <h2>What can be communicated from this project</h2>
            </div>

            <div class="takeaway-grid">
                <article class="takeaway-card reveal">
                    <span>01</span>
                    <h3>Balanced structure</h3>
                    <p>
                        The IT BSC approach makes performance easier to evaluate from strategic, customer, operational,
                        and future-readiness views.
                    </p>
                </article>

                <article class="takeaway-card reveal delay-1">
                    <span>02</span>
                    <h3>Executive readability</h3>
                    <p>
                        KPI results are easier to communicate through compact visuals, scorecards, and perspective
                        pages.
                    </p>
                </article>

                <article class="takeaway-card reveal delay-2">
                    <span>03</span>
                    <h3>Reusable framework</h3>
                    <p>
                        The same dashboard structure can be expanded when real operational data becomes available.
                    </p>
                </article>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const $ = (selector) => document.querySelector(selector);
            const $$ = (selector) => Array.from(document.querySelectorAll(selector));

            const revealElements = $$('.reveal');

            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.12
                });

                revealElements.forEach((element) => observer.observe(element));
            } else {
                revealElements.forEach((element) => element.classList.add('is-visible'));
            }

            const navLinks = $$('.nav-pills a');
            const sections = $$('main section[id]');

            function updateActiveNav() {
                let current = 'overview';

                sections.forEach((section) => {
                    if (window.scrollY >= section.offsetTop - 180) {
                        current = section.id;
                    }
                });

                navLinks.forEach((link) => {
                    link.classList.toggle('active', link.getAttribute('href') === `#${current}`);
                });
            }

            window.addEventListener('scroll', updateActiveNav, {
                passive: true
            });

            updateActiveNav();

            const modal = $('#imageModal');
            const modalImg = $('#modalImage');
            const modalClose = $('#modalClose');
            const galleryCards = $$('.gallery-card');

            function openModal(src, alt) {
                if (!modal || !modalImg) return;

                modalImg.src = src;
                modalImg.alt = alt || 'Project visual preview';
                modal.classList.add('is-open');
                modal.setAttribute('aria-hidden', 'false');
            }

            function closeModal() {
                if (!modal || !modalImg) return;

                modal.classList.remove('is-open');
                modal.setAttribute('aria-hidden', 'true');

                setTimeout(() => {
                    if (!modal.classList.contains('is-open')) {
                        modalImg.src = '';
                    }
                }, 150);
            }

            galleryCards.forEach((card) => {
                card.setAttribute('tabindex', '0');
                card.setAttribute('role', 'button');

                card.addEventListener('click', () => {
                    const image = card.querySelector('img');
                    openModal(card.dataset.src, image?.alt);
                });

                card.addEventListener('keydown', (event) => {
                    if (event.key === 'Enter') {
                        const image = card.querySelector('img');
                        openModal(card.dataset.src, image?.alt);
                    }
                });
            });

            modalClose?.addEventListener('click', closeModal);

            modal?.addEventListener('click', (event) => {
                if (event.target === modal) {
                    closeModal();
                }
            });

            window.addEventListener('keydown', (event) => {
                if (event.key === 'Escape' && modal?.classList.contains('is-open')) {
                    closeModal();
                }
            });

            const perspectiveData = {
                corporate: {
                    image: "{{ asset('images/projects/powerbi/cc.webp') }}",
                    alt: "Corporate Contribution Dashboard View"
                },
                customer: {
                    image: "{{ asset('images/projects/powerbi/co.webp') }}",
                    alt: "Customer Orientation Dashboard View"
                },
                operational: {
                    image: "{{ asset('images/projects/powerbi/oe.webp') }}",
                    alt: "Operational Excellence Dashboard View"
                },
                future: {
                    image: "{{ asset('images/projects/powerbi/fo.webp') }}",
                    alt: "Future Orientation Dashboard View"
                }
            };

            const perspectiveTabs = document.querySelectorAll(".perspective-tab");
            const previewImage = document.getElementById("preview-image");

            perspectiveTabs.forEach((tab) => {
                tab.addEventListener("click", () => {
                    const selectedPerspective = tab.dataset.perspective;
                    const content = perspectiveData[selectedPerspective];

                    perspectiveTabs.forEach((item) => item.classList.remove("active"));
                    tab.classList.add("active");

                    previewImage.classList.add("is-changing");

                    setTimeout(() => {
                        previewImage.src = content.image;
                        previewImage.alt = content.alt;
                        previewImage.classList.remove("is-changing");
                    }, 180);
                });
            });
        });
    </script>
</body>

</html>
