<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700;1,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/project-detail-template.css">
</head>

<body>
    <div class="bg-fixed"></div>
    <div class="noise"></div>

    <header class="project-nav" id="top">
        <a href="{{ route('home') }}#project" class="brand-link">
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
                <div class="eyebrow" id="eyebrow"></div>
                <h1 id="projectTitle"></h1>
                <p class="hero-desc" id="projectDesc"></p>

                <div class="hero-actions">
                    <a href="#process" class="primary-btn">Explore Process</a>
                    <a href="#insights" class="secondary-btn">View Insights</a>
                    <a href="#" class="secondary-btn github-btn" id="githubBtn" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-github"></i>
                        View GitHub
                    </a>
                </div>
            </div>

            <div class="hero-visual reveal delay-1" aria-label="Project summary visualization">
                <div class="project-card-visual">
                    <img src="" alt="" id="heroImage">
                    <div class="visual-summary">
                        <span id="visualLabel"></span>
                        <strong id="visualValue"></strong>
                        <div class="visual-bars" id="visualBars"></div>
                    </div>
                </div>

                <div class="floating-card card-one">
                    <span id="floatOneLabel"></span>
                    <strong id="floatOneValue"></strong>
                </div>

                <div class="floating-card card-two">
                    <span id="floatTwoLabel"></span>
                    <strong id="floatTwoValue"></strong>
                </div>
            </div>
        </section>

        <section class="metrics-strip" id="metricsStrip"></section>

        <section class="content-section two-column" id="process">
            <div class="section-copy reveal">
                <span class="section-kicker">01 · Workflow</span>
                <h2 id="workflowTitle"></h2>
                <p id="workflowDesc"></p>
            </div>

            <div class="pipeline-card" id="workflowSteps"></div>
        </section>

        <section class="content-section">
            <div class="section-heading reveal">
                <span class="section-kicker">02 · Key Insights</span>
                <h2>What this project highlights.</h2>
                <p>Important numbers and project-specific insights are summarized into compact cards to make the story easier to scan.</p>
            </div>

            <div class="insight-grid" id="insightGrid"></div>
        </section>

        <section class="content-section" id="results">
            <div class="section-heading reveal">
                <span class="section-kicker">03 · Results</span>
                <h2 id="resultsTitle"></h2>
                <p id="resultsDesc"></p>
            </div>

            <div class="results-layout">
                <div class="chart-card reveal delay-1">
                    <div class="card-title">
                        <h3 id="chartTitle"></h3>
                        <span id="chartSub"></span>
                    </div>
                    <div class="bar-chart" id="chartBars"></div>
                </div>

                <div class="result-card reveal">
                    <div class="card-title">
                        <h3>Project Output</h3>
                        <span>summary</span>
                    </div>
                    <div class="result-list" id="resultList"></div>
                </div>
            </div>
        </section>

        <section class="content-section gallery-wrap" id="insights">
            <div class="section-heading reveal">
                <span class="section-kicker">04 · Visual Gallery</span>
                <h2>Visual evidence from the project.</h2>
                <p>Selected charts, dashboard/report screenshots, and visual outputs are displayed as a horizontal gallery.</p>
            </div>

            <div class="image-gallery" id="imageGallery"></div>
        </section>

        <section class="content-section">
            <div class="section-heading reveal">
                <span class="section-kicker">05 · Takeaways</span>
                <h2>What can be communicated from this project.</h2>
            </div>
            <div class="takeaway-grid" id="takeawayGrid"></div>
        </section>

        <section class="closing-section reveal">
            <span>Project Detail</span>
            <h2>Designed as a reusable portfolio template.</h2>
            <p>This page structure can be reused for other data analytics projects by only changing the content in <code>project-pages-data.js</code>.</p>
            <a href="{{ url('/#project') }}" class="primary-btn">Back to Projects</a>
        </section>
    </main>

    <div class="image-modal" id="imageModal" aria-hidden="true">
        <button id="modalClose" aria-label="Close image preview">×</button>
        <img src="" alt="Project visual preview" id="modalImage">
    </div>

    <script>
        window.PROJECT_SLUG = 'ali-khamenei';
    </script>
    <script src="/js/project-pages-data.js"></script>
    <script src="/js/project-detail-template.js"></script>
</body>

</html>
