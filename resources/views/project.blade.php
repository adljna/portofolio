<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nailah Adlina | Personal Website</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700;1,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/project-gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio-shared.css') }}">
</head>

<body class="gallery-page">
    <div class="bg-fixed"></div>
    <div class="noise"></div>

    <x-portfolio-navbar active="project" />

    <main class="page">
        <section class="gallery-hero reveal">
            <div>
                <h1 class="gallery-title">Project <span>Gallery</span></h1>
            </div>

            <div>
                <p class="gallery-desc">
                    A compact collection of projects across data analytics, machine learning, data engineering,
                    web development, and IT governance-related work.
                </p>
            </div>
        </section>

        <section class="gallery-controls reveal">
            <div class="filter-tabs" aria-label="Project filters">
                <button class="filter-btn active" type="button" data-filter="all">
                    <i class="fa-solid fa-border-all"></i>
                    All
                </button>

                <button class="filter-btn" type="button" data-filter="data">
                    <i class="fa-solid fa-chart-line"></i>
                    Data Analytics
                </button>

                <button class="filter-btn" type="button" data-filter="engineering">
                    <i class="fa-solid fa-database"></i>
                    Data Engineering
                </button>

                <button class="filter-btn" type="button" data-filter="ux">
                    <i class="fa-solid fa-code"></i>
                    UX Design
                </button>
            </div>

            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" id="projectSearch" placeholder="Search project, tools, or keyword...">
            </div>
        </section>

        <section class="project-grid" id="projectGrid">
            <article class="project-card reveal" data-category="data"
                data-keywords="power bi dashboard balanced scorecard kpi etl business intelligence monitoring">
                <a href="{{ route('projects.powerbi') }}" class="project-open" aria-label="Open Power BI project">↗</a>

                <div class="project-image">
                    <span class="project-category">
                        <i class="fa-solid fa-chart-pie"></i>
                        Business Intelligence
                    </span>
                    <img src="{{ asset('images/project1.webp') }}" alt="IT Balanced Scorecard Dashboard project">
                </div>

                <div class="project-body">
                    <div class="project-tags">
                        <span>Power BI</span>
                        <span>ETL</span>
                        <span>KPI</span>
                    </div>

                    <h2>IT Balanced Scorecard Dashboard</h2>
                    <p>
                        A dashboard development project that translates IT Balanced Scorecard perspectives into
                        measurable KPI monitoring for head office and branch performance, using mockup data, ETL, and
                        Power BI
                        reporting.
                    </p>
                </div>
            </article>

            <article class="project-card reveal" data-category="data"
                data-keywords="blu bca digital sentiment analysis google play review nlp machine learning python logistic regression">
                <a href="{{ route('projects.blu') }}" class="project-open" aria-label="Open blu project">↗</a>

                <div class="project-image">
                    <span class="project-category">
                        <i class="fa-solid fa-brain"></i>
                        ML / NLP
                    </span>
                    <img src="{{ asset('images/project3.webp') }}" alt="blu sentiment analysis project">
                </div>

                <div class="project-body">
                    <div class="project-tags">
                        <span>Python</span>
                        <span>NLP</span>
                        <span>ML</span>
                    </div>

                    <h2>Sentiment Analysis of blu by BCA Digital on Google Play Reviews</h2>
                    <p>
                        An end-to-end Natural Language Processing project that transforms Google Play reviews into
                        sentiment
                        insights, product pain points, and model-driven classification using Indonesian text
                        preprocessing,
                        TF-IDF, and machine learning.
                    </p>
                </div>
            </article>

            <article class="project-card reveal" data-category="data"
                data-keywords="indonesian news sentiment analysis ali khamenei nlp indobert python ner tf-idf media analytics">
                <a href="{{ route('projects.ali') }}" class="project-open"
                    aria-label="Open news sentiment project">↗</a>

                <div class="project-image">
                    <span class="project-category">
                        <i class="fa-solid fa-newspaper"></i>
                        Data / NLP
                    </span>
                    <img src="{{ asset('images/project2.webp') }}" alt="Indonesian news sentiment analysis project">
                </div>

                <div class="project-body">
                    <div class="project-tags">
                        <span>IndoBERT</span>
                        <span>Python</span>
                        <span>NER</span>
                    </div>

                    <h2>Indonesian News Sentiment Analysis</h2>
                    <p>
                        Pipeline NLP untuk artikel berita Indonesia, mencakup sentiment analysis, NER,
                        POS tagging, dan eksplorasi narasi media.
                    </p>
                </div>
            </article>

            <article class="project-card reveal" data-category="engineering"
                data-keywords="data lakehouse etl medallion architecture mysql python kimball data warehouse fact dimension">
                <a href="{{ route('projects.etl') }}" class="project-open"
                    aria-label="Open data lakehouse project">↗</a>

                <div class="project-image">
                    <span class="project-category">
                        <i class="fa-solid fa-database"></i>
                        Engineering
                    </span>
                    <img src="{{ asset('images/project4.webp') }}" alt="Data Lakehouse project">
                </div>

                <div class="project-body">
                    <div class="project-tags">
                        <span>Python</span>
                        <span>MySQL</span>
                        <span>Lakehouse</span>
                    </div>

                    <h2>Data Lakehouse Design</h2>
                    <p>
                        Desain pipeline ETL berbasis Medallion Architecture dari operational data menjadi
                        fact dan dimension tables.
                    </p>
                </div>
            </article>

            <article class="project-card reveal" data-category="data"
                data-keywords="k-means clustering health burden south korea rstudio pca silhouette elbow method data science">
                <a href="{{ route('projects.clustering') }}" class="project-open"
                    aria-label="Open clustering project">↗</a>

                <div class="project-image">
                    <span class="project-category">
                        <i class="fa-solid fa-circle-nodes"></i>
                        Data Science
                    </span>
                    <img src="{{ asset('images/project5.webp') }}" alt="Health burden clustering project">
                </div>

                <div class="project-body">
                    <div class="project-tags">
                        <span>K-Means</span>
                        <span>RStudio</span>
                        <span>PCA</span>
                    </div>

                    <h2>Health Burden Clustering</h2>
                    <p>
                        Analisis clustering data health burden Korea Selatan menggunakan K-Means,
                        PCA, Elbow Method, dan Silhouette Score.
                    </p>
                </div>
            </article>
            <article class="project-card reveal delay-2" data-category="data"
                data-keywords="knowledge graph neo4j graph data science music contributor network wikidata dbpedia sparql louvain betweenness jaccard">
                <a href="{{ route('projects.music-graph-knowledge') }}" class="project-open"
                    aria-label="Open music graph project">↗</a>

                <div class="project-image">
                    <span class="project-category">
                        <i class="fa-solid fa-diagram-project"></i>
                        Knowledge Graph
                    </span>

                    <img src="{{ asset('images/project6.webp') }}"
                        alt="Music contributor knowledge graph project" loading="lazy" decoding="async">
                </div>

                <div class="project-body">
                    <div class="project-tags">
                        <span>Neo4j</span>
                        <span>SPARQL</span>
                        <span>GDS</span>
                    </div>

                    <h3 class="project-title">Music Contributor Network Analysis</h3>

                    <p class="project-desc">
                        Knowledge graph project untuk memodelkan jaringan lagu, artis, genre, record label, dan negara
                        menggunakan Wikidata, DBpedia, Neo4j, dan Graph Data Science.
                    </p>
                </div>
            </article>
        </section>


        <div class="empty-state" id="emptyState">
            <h3>No project found</h3>
            <p>Try another category or keyword.</p>
        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const revealElements = document.querySelectorAll(".reveal");

            if ("IntersectionObserver" in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("is-visible");
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.12
                });

                revealElements.forEach((element) => observer.observe(element));
            } else {
                revealElements.forEach((element) => element.classList.add("is-visible"));
            }

            const filterButtons = document.querySelectorAll(".filter-btn");
            const searchInput = document.getElementById("projectSearch");
            const projectCards = document.querySelectorAll(".project-card");
            const emptyState = document.getElementById("emptyState");

            let activeFilter = "all";

            function filterProjects() {
                const searchValue = searchInput.value.toLowerCase().trim();
                let visibleCount = 0;

                projectCards.forEach((card) => {
                    const category = card.dataset.category;
                    const keywords = card.dataset.keywords.toLowerCase();
                    const text = card.innerText.toLowerCase();

                    const matchCategory = activeFilter === "all" || category === activeFilter;
                    const matchSearch = !searchValue || keywords.includes(searchValue) || text.includes(
                        searchValue);

                    if (matchCategory && matchSearch) {
                        card.classList.remove("is-hidden");
                        visibleCount++;
                    } else {
                        card.classList.add("is-hidden");
                    }
                });

                emptyState.classList.toggle("show", visibleCount === 0);
            }

            filterButtons.forEach((button) => {
                button.addEventListener("click", () => {
                    filterButtons.forEach((btn) => btn.classList.remove("active"));
                    button.classList.add("active");

                    activeFilter = button.dataset.filter;
                    filterProjects();
                });
            });

            searchInput.addEventListener("input", filterProjects);
        });
    </script>
</body>

</html>
