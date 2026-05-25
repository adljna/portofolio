<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Health Burden Clustering | Project Detail</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700;1,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/project-detail-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/clustering-health.css') }}">
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
                    Data Analyst Project · Clustering · RStudio
                </div>

                <h1>Health Burden Clustering in <span>South Korea</span> Using K-Means</h1>

                <p class="hero-desc">
                    A clustering analysis project using South Korea health statistics from 2022 to identify disease
                    burden patterns through preprocessing, outlier handling, min-max normalization, PCA dimensionality
                    reduction, K-Means clustering, Elbow Method, and Silhouette validation.
                </p>

                <div class="hero-actions">
                    <a href="#process" class="primary-btn">Explore Process</a>
                    <a href="#insights" class="secondary-btn">View Insights</a>

                    <a href="https://github.com/zakyalkhair/Final-Project-ADD" class="secondary-btn github-btn"
                        target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-github"></i>
                        GitHub
                    </a>
                </div>
            </div>

            <div class="hero-visual reveal delay-1" aria-label="Clustering summary visualization">
                <div class="cluster-hero-card">
                    <div class="cluster-card-top">
                        <div>
                            <span class="mini-label">Best Cluster Setup</span>
                            <strong>K = 3</strong>
                        </div>
                    </div>

                    <div class="cluster-map" aria-label="PCA cluster plot illustration">
                        <div class="axis x-axis"></div>
                        <div class="axis y-axis"></div>

                        <span class="point c1" style="left: 22%; top: 64%;"></span>
                        <span class="point c1" style="left: 26%; top: 70%;"></span>
                        <span class="point c1" style="left: 32%; top: 61%;"></span>
                        <span class="point c1" style="left: 35%; top: 76%;"></span>
                        <span class="point c1" style="left: 41%; top: 68%;"></span>
                        <span class="centroid centroid-1" style="left: 31%; top: 67%;">C1</span>

                        <span class="point c2" style="left: 28%; top: 26%;"></span>
                        <span class="point c2" style="left: 36%; top: 31%;"></span>
                        <span class="point c2" style="left: 44%; top: 24%;"></span>
                        <span class="point c2" style="left: 48%; top: 35%;"></span>
                        <span class="point c2" style="left: 38%; top: 41%;"></span>
                        <span class="centroid centroid-2" style="left: 39%; top: 31%;">C2</span>

                        <span class="point c3" style="left: 66%; top: 43%;"></span>
                        <span class="point c3" style="left: 72%; top: 49%;"></span>
                        <span class="point c3" style="left: 78%; top: 38%;"></span>
                        <span class="point c3" style="left: 84%; top: 55%;"></span>
                        <span class="point c3" style="left: 69%; top: 60%;"></span>
                        <span class="centroid centroid-3" style="left: 74%; top: 49%;">C3</span>

                        <span class="axis-label pc1">PC1</span>
                        <span class="axis-label pc2">PC2</span>
                    </div>

                    <div class="cluster-legend">
                        <span><i class="legend-dot cluster-one"></i> Higher burden</span>
                        <span><i class="legend-dot cluster-two"></i> Better access</span>
                        <span><i class="legend-dot cluster-three"></i> Lower burden</span>
                    </div>

                    <div class="mini-score-bars">
                        <div class="score-row">
                            <span>K=3</span>
                            <div class="track">
                                <div class="fill c3-fill" style="width: 100%;"></div>
                            </div>
                            <strong>0.33965</strong>
                        </div>

                        <div class="score-row">
                            <span>K=4</span>
                            <div class="track">
                                <div class="fill c2-fill" style="width: 94.5%;"></div>
                            </div>
                            <strong>0.321</strong>
                        </div>

                        <div class="score-row">
                            <span>K=5</span>
                            <div class="track">
                                <div class="fill c1-fill" style="width: 96.6%;"></div>
                            </div>
                            <strong>0.328</strong>
                        </div>
                    </div>
                </div>
                <div class="floating-card card-two">
                    <span>Method</span>
                    <strong>PCA + K-Means</strong>
                </div>
            </div>
        </section>

        <section class="metrics-strip reveal">
            <article>
                <span>Country Focus</span>
                <strong>South Korea</strong>
            </article>
            <article>
                <span>Dataset Year</span>
                <strong>2022</strong>
            </article>
            <article>
                <span>Best Cluster Count</span>
                <strong>K = 3</strong>
            </article>
            <article>
                <span>Silhouette Score</span>
                <strong>0.33965</strong>
            </article>
        </section>

        <section class="content-section two-column" id="process">
            <div class="section-copy reveal">
                <span class="section-kicker">01 · Workflow</span>
                <h2>From health statistics to interpretable disease burden clusters</h2>
                <p>
                    The analysis filters the Global Health Statistics dataset to South Korea in 2022, selects health
                    burden and healthcare access indicators, prepares the data for clustering, reduces dimensionality
                    with PCA, then evaluates K-Means cluster quality using Elbow and Silhouette methods.
                </p>
            </div>

            <div class="pipeline-card reveal delay-1">
                <div class="pipeline-step">
                    <span>01</span>
                    <div>
                        <h3>Data Filtering</h3>
                        <p>
                            Focused the dataset on South Korea for 2022 and retained disease burden and healthcare
                            access indicators for clustering analysis.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>02</span>
                    <div>
                        <h3>Preprocessing</h3>
                        <p>
                            Checked missing values, encoded categorical columns, inspected distributions, removed
                            outliers using IQR, and normalized numeric features with min-max scaling.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>03</span>
                    <div>
                        <h3>PCA Feature Reduction</h3>
                        <p>
                            Applied Principal Component Analysis to project the normalized indicators into PC1 and PC2
                            for easier visualization and clustering interpretation.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>04</span>
                    <div>
                        <h3>K-Means Exploration</h3>
                        <p>
                            Tested K-Means with k=3, k=4, and k=5 using fixed seed and nstart=25 to reduce the risk of
                            local optimum initialization.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>05</span>
                    <div>
                        <h3>Cluster Validation</h3>
                        <p>
                            Compared the tested cluster counts using Elbow Method and average Silhouette Score, then
                            selected k=3 as the most interpretable result.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section glass-section">
            <div class="section-heading reveal">
                <span class="section-kicker">02 · Tools & Approach</span>
                <h2>The project emphasizes preprocessing quality before clustering</h2>
                <p>
                    Since K-Means is sensitive to scale and outliers, the analysis gives strong attention to feature
                    preparation before model validation. The pipeline combines R-based data wrangling, exploratory
                    visualization, dimensionality reduction, and unsupervised cluster evaluation.
                </p>
            </div>

            <div class="method-grid">
                <article class="method-card reveal">
                    <span>Environment</span>
                    <strong>RStudio + R Markdown</strong>
                    <p>
                        The analysis is documented in R Markdown with code, explanation, plots, and clustering outputs
                        in one reproducible workflow.
                    </p>
                    <div class="method-tags">
                        <span>RStudio</span>
                        <span>Rmd</span>
                    </div>
                </article>

                <article class="method-card reveal delay-1">
                    <span>Wrangling</span>
                    <strong>dplyr + readr</strong>
                    <p>
                        Used filtering, column selection, missing-value checks, encoding, and summary statistics to form
                        a cleaner analysis dataset.
                    </p>
                    <div class="method-tags">
                        <span>dplyr</span>
                        <span>readr</span>
                        <span>factor encoding</span>
                    </div>
                </article>

                <article class="method-card reveal delay-2">
                    <span>Preparation</span>
                    <strong>IQR + Min-Max Scaling</strong>
                    <p>
                        Outlier handling and normalization were applied so clustering is less dominated by extreme
                        values or different feature scales.
                    </p>
                    <div class="method-tags">
                        <span>IQR</span>
                        <span>Min-Max</span>
                    </div>
                </article>

                <article class="method-card reveal delay-3">
                    <span>Clustering</span>
                    <strong>PCA + K-Means</strong>
                    <p>
                        PCA supports two-dimensional visualization, while K-Means segments disease burden records based
                        on similarity in the reduced feature space.
                    </p>
                    <div class="method-tags">
                        <span>PCA</span>
                        <span>K-Means</span>
                        <span>factoextra</span>
                    </div>
                </article>
            </div>
        </section>

        <section class="content-section" id="results">
            <div class="section-heading reveal">
                <span class="section-kicker">03 · Results</span>
                <h2>Three clusters gave the clearest segmentation among tested settings</h2>
                <p>
                    K=3 was selected because the Elbow Method suggested a slowing WCSS reduction after three clusters,
                    and the average Silhouette Score was highest for k=3 compared with k=4 and k=5.
                </p>
            </div>

            <div class="insight-dashboard reveal">
                <div class="insight-dashboard-tabs" aria-label="Clustering result dashboard tabs">
                    <button class="dashboard-tab active" type="button" data-dashboard="validation">
                        Validation
                    </button>
                    <button class="dashboard-tab" type="button" data-dashboard="pca">
                        PCA Cluster Map
                    </button>
                    <button class="dashboard-tab" type="button" data-dashboard="interpretation">
                        Cluster Reading
                    </button>
                </div>

                <div class="insight-dashboard-panel active" id="dashboard-validation">
                    <div class="dashboard-two-column">
                        <article class="chart-card validation-card">
                            <div class="card-title">
                                <h3>Silhouette Comparison</h3>
                                <span>higher is better</span>
                            </div>

                            <div class="silhouette-chart">
                                <div class="silhouette-row best">
                                    <span>K=3</span>
                                    <div class="silhouette-track">
                                        <div style="width: 100%;"></div>
                                    </div>
                                    <strong>0.33965</strong>
                                </div>

                                <div class="silhouette-row">
                                    <span>K=4</span>
                                    <div class="silhouette-track">
                                        <div style="width: 94.5%;"></div>
                                    </div>
                                    <strong>0.321</strong>
                                </div>

                                <div class="silhouette-row">
                                    <span>K=5</span>
                                    <div class="silhouette-track">
                                        <div style="width: 96.6%;"></div>
                                    </div>
                                    <strong>0.328</strong>
                                </div>
                            </div>

                            <div class="elbow-mini-chart" aria-label="Elbow method WCSS illustration">
                                <div class="elbow-point" style="left: 8%; top: 10%;"><span>K1</span></div>
                                <div class="elbow-point" style="left: 27%; top: 35%;"><span>K2</span></div>
                                <div class="elbow-point elbow" style="left: 46%; top: 56%;"><span>K3</span></div>
                                <div class="elbow-point" style="left: 65%; top: 67%;"><span>K4</span></div>
                                <div class="elbow-point" style="left: 84%; top: 73%;"><span>K5</span></div>
                                <span class="elbow-label">Elbow point around K=3</span>
                            </div>
                        </article>

                        <article class="result-card">
                            <span>Main Result</span>
                            <h3>K=3 balances separation and interpretability.</h3>
                            <p>
                                K=4 and K=5 create more detailed groups, but their Silhouette Scores are lower than K=3.
                                This suggests that adding more clusters increases complexity without improving the
                                mathematical separation enough to justify the extra segments.
                            </p>
                            <p>
                                The selected setup uses PCA components as clustering inputs, so the final cluster
                                reading
                                is based on PC1 and PC2 patterns rather than raw indicators alone.
                            </p>
                        </article>
                    </div>
                </div>

                <div class="insight-dashboard-panel" id="dashboard-pca">
                    <div class="dashboard-two-column">
                        <article class="chart-card pca-card">
                            <div class="card-title">
                                <h3>PCA Cluster Map</h3>
                                <span>illustrated PC1 vs PC2 separation</span>
                            </div>

                            <div class="large-cluster-map">
                                <div class="axis x-axis"></div>
                                <div class="axis y-axis"></div>

                                <span class="point c1" style="left: 18%; top: 66%;"></span>
                                <span class="point c1" style="left: 24%; top: 72%;"></span>
                                <span class="point c1" style="left: 31%; top: 61%;"></span>
                                <span class="point c1" style="left: 39%; top: 73%;"></span>
                                <span class="cluster-area area-one"></span>
                                <span class="centroid centroid-1" style="left: 30%; top: 68%;">C1</span>

                                <span class="point c2" style="left: 26%; top: 25%;"></span>
                                <span class="point c2" style="left: 37%; top: 34%;"></span>
                                <span class="point c2" style="left: 45%; top: 27%;"></span>
                                <span class="point c2" style="left: 50%; top: 39%;"></span>
                                <span class="cluster-area area-two"></span>
                                <span class="centroid centroid-2" style="left: 40%; top: 32%;">C2</span>

                                <span class="point c3" style="left: 66%; top: 43%;"></span>
                                <span class="point c3" style="left: 74%; top: 52%;"></span>
                                <span class="point c3" style="left: 81%; top: 38%;"></span>
                                <span class="point c3" style="left: 86%; top: 56%;"></span>
                                <span class="cluster-area area-three"></span>
                                <span class="centroid centroid-3" style="left: 76%; top: 49%;">C3</span>

                                <span class="axis-label pc1">PC1</span>
                                <span class="axis-label pc2">PC2</span>
                            </div>
                        </article>

                        <article class="result-card">
                            <span>PCA Reading</span>
                            <h3>PC1 and PC2 make the health burden structure easier to visualize.</h3>
                            <p>
                                The report interprets PC1 as being related to disease level and hospital bed
                                availability,
                                while PC2 is influenced by disease mortality. Using two principal components helps show
                                the relative separation between burden and access patterns.
                            </p>
                        </article>
                    </div>
                </div>

                <div class="insight-dashboard-panel" id="dashboard-interpretation">
                    <div class="cluster-reading-grid">
                        <article class="cluster-reading-card c-one">
                            <span>Cluster 1</span>
                            <strong>Higher burden, lower capacity</strong>
                            <p>
                                Mean PC1 = -0.5131 and PC2 = -0.9342. This group is interpreted as having higher disease
                                prevalence and lower healthcare capacity, leading to larger health burden.
                            </p>
                        </article>

                        <article class="cluster-reading-card c-two">
                            <span>Cluster 2</span>
                            <strong>Higher burden, better access</strong>
                            <p>
                                Mean PC1 = -0.5207 and PC2 = 0.9090. This group still shows notable disease burden, but
                                relatively better healthcare service capacity helps control the impact.
                            </p>
                        </article>

                        <article class="cluster-reading-card c-three">
                            <span>Cluster 3</span>
                            <strong>Lower or more controlled burden</strong>
                            <p>
                                Mean PC1 = 1.1176 and PC2 = -0.0233. This group is interpreted as having lower or more
                                controlled disease prevalence and lighter overall health impact.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section visual-gallery-section" id="insights">
            <div class="section-heading reveal">
                <span class="section-kicker">04 · Visual Insights</span>
                <h2>The analysis turns health indicators into clearer segment-level insight</h2>
                <p>
                    Instead of using report screenshots, the portfolio page summarizes the clustering outputs through
                    custom CSS visuals: validation bars, PCA scatter illustration, cluster interpretation cards, and
                    feature preparation highlights.
                </p>
            </div>

            <div class="insight-visual-grid">
                <article class="insight-card-custom reveal">
                    <span>Feature Scope</span>
                    <strong>Health burden + access indicators</strong>
                    <div class="feature-chip-list">
                        <span>Disease Name</span>
                        <span>Prevalence Rate</span>
                        <span>Mortality Rate</span>
                        <span>Healthcare Access</span>
                        <span>Doctors per 1000</span>
                        <span>Hospital Beds per 1000</span>
                    </div>
                </article>

                <article class="insight-card-custom reveal delay-1">
                    <span>Validation Logic</span>
                    <strong>Elbow + Silhouette were used together</strong>
                    <p>
                        Elbow Method checks whether additional clusters still reduce WCSS meaningfully, while Silhouette
                        evaluates separation and cohesion. Both support K=3 as the final choice.
                    </p>
                </article>

                <article class="insight-card-custom reveal delay-2">
                    <span>Portfolio Value</span>
                    <strong>Shows unsupervised learning decision-making</strong>
                    <p>
                        The project demonstrates more than running K-Means: it explains why preprocessing, PCA, and
                        validation are necessary before interpreting cluster results.
                    </p>
                </article>
            </div>
        </section>

        <section class="content-section business-section">
            <div class="section-heading reveal">
                <span class="section-kicker">05 · Takeaways</span>
                <h2>What this project communicates as a data analytics portfolio case</h2>
                <p>
                    The project highlights the ability to prepare real-world health data, validate unsupervised models,
                    and translate cluster output into a clear interpretation of disease burden and healthcare access.
                </p>
            </div>

            <div class="takeaway-grid clustering-takeaway-grid">
                <article class="takeaway-card reveal">
                    <span>01</span>
                    <h3>Preprocessing matters</h3>
                    <p>
                        Encoding, IQR-based outlier handling, and min-max normalization stabilize clustering for
                        mixed-scale health indicators.
                    </p>
                </article>

                <article class="takeaway-card reveal delay-1">
                    <span>02</span>
                    <h3>K=3 is clearer</h3>
                    <p>
                        Three clusters provide the best balance between mathematical separation, visual clarity, and
                        interpretability compared with K=4 and K=5.
                    </p>
                </article>

                <article class="takeaway-card reveal delay-2">
                    <span>03</span>
                    <h3>PCA supports storytelling</h3>
                    <p>
                        Reducing the feature space into PC1 and PC2 makes cluster separation easier to show and explain
                        in a portfolio context.
                    </p>
                </article>

                <article class="takeaway-card reveal delay-3">
                    <span>04</span>
                    <h3>Useful segmentation</h3>
                    <p>
                        The final clusters help compare disease prevalence, mortality patterns, and healthcare access
                        capacity within the South Korea 2022 health dataset.
                    </p>
                </article>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const $ = (selector, parent = document) => parent.querySelector(selector);
            const $$ = (selector, parent = document) => Array.from(parent.querySelectorAll(selector));

            const revealItems = $$(".reveal");

            if ("IntersectionObserver" in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("is-visible");
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.16
                });

                revealItems.forEach((item) => observer.observe(item));
            } else {
                revealItems.forEach((item) => item.classList.add("is-visible"));
            }

            const navLinks = $$(".nav-pills a");
            const sections = ["overview", "process", "results", "insights"]
                .map((id) => document.getElementById(id))
                .filter(Boolean);

            function updateActiveNav() {
                let current = "overview";

                sections.forEach((section) => {
                    if (window.scrollY >= section.offsetTop - 180) {
                        current = section.id;
                    }
                });

                navLinks.forEach((link) => {
                    link.classList.toggle("active", link.getAttribute("href") === `#${current}`);
                });
            }

            window.addEventListener("scroll", updateActiveNav, {
                passive: true
            });

            updateActiveNav();

            const dashboardTabs = $$(".dashboard-tab");
            const dashboardPanels = $$(".insight-dashboard-panel");

            dashboardTabs.forEach((button) => {
                button.addEventListener("click", () => {
                    const selectedDashboard = button.dataset.dashboard;

                    dashboardTabs.forEach((item) => item.classList.remove("active"));
                    dashboardPanels.forEach((panel) => panel.classList.remove("active"));

                    button.classList.add("active");
                    document.getElementById(`dashboard-${selectedDashboard}`)?.classList.add(
                        "active");
                });
            });
        });
    </script>
</body>

</html>
