<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ali Khamenei Sentiment Analysis | Project Detail</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700;1,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/project-detail-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ali-styling.css') }}">
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
                    Data Analytics Project · NLP · News Analytics
                </div>

                <h1>Sentiment Analysis of <span>Ali Khamenei’s Death</span> on Indonesian News Media</h1>

                <p class="hero-desc">
                    An NLP-based analysis of Indonesian online news coverage related to Ali Khamenei’s death. The
                    project transforms scraped articles into sentiment labels, linguistic tags, named entities, and
                    TF-IDF insights to understand media framing and recurring geopolitical narratives.
                </p>

                <div class="hero-actions">
                    <a href="#process" class="primary-btn">Explore Process</a>
                    <a href="#insights" class="secondary-btn">View Insights</a>

                    <a href="https://github.com/KurniaYufi/sentiment-analysis-kematian-ali-khamenei"
                        class="secondary-btn github-btn" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-github"></i>
                        View GitHub
                    </a>
                </div>
            </div>

            <div class="hero-visual reveal delay-1" aria-label="Project summary visualization">
                <div class="phone-card">
                    <div class="phone-top">
                        <div>
                            <span class="mini-label">Corpus Summary</span>
                            <strong>491 Indonesian News Articles</strong>
                        </div>
                    </div>

                    <div class="sentiment-donut-wrap">
                        <div class="sentiment-donut"
                            aria-label="Positive 54.4 percent, neutral 32.6 percent, negative 13 percent">
                            <div class="donut-core">
                                <div>
                                    <strong>54.4%</strong>
                                    <span>positive articles</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sentiment-mini-bars">
                        <div class="mini-bar-row">
                            <span>Positive</span>
                            <div class="track">
                                <div class="fill" style="width: 54.4%;"></div>
                            </div>
                            <strong>267</strong>
                        </div>

                        <div class="mini-bar-row">
                            <span>Neutral</span>
                            <div class="track">
                                <div class="fill neutral" style="width: 32.6%;"></div>
                            </div>
                            <strong>160</strong>
                        </div>

                        <div class="mini-bar-row">
                            <span>Negative</span>
                            <div class="track">
                                <div class="fill negative" style="width: 13%;"></div>
                            </div>
                            <strong>64</strong>
                        </div>
                    </div>

                    <div class="source-chip-grid">
                        <div class="source-chip">
                            <strong>100</strong>
                            <span>Antara</span>
                        </div>
                        <div class="source-chip">
                            <strong>99</strong>
                            <span>CNN</span>
                        </div>
                        <div class="source-chip">
                            <strong>96</strong>
                            <span>Detik</span>
                        </div>
                        <div class="source-chip">
                            <strong>96</strong>
                            <span>Kompas</span>
                        </div>
                        <div class="source-chip">
                            <strong>100</strong>
                            <span>Tribun</span>
                        </div>
                    </div>
                </div>

                <div class="floating-card card-one">
                    <span>Extracted Entities</span>
                    <strong>27,649</strong>
                </div>

                <div class="floating-card card-two">
                    <span>Top TF-IDF Term</span>
                    <strong>serangan</strong>
                </div>
            </div>
        </section>

        <section class="content-section two-column" id="process">
            <div class="section-copy reveal">
                <span class="section-kicker">01 · Workflow</span>
                <h2>From scraped news articles to structured NLP insights</h2>
                <p>
                    The project follows a complete NLP analytics pipeline: collecting article content from Indonesian
                    news platforms, cleaning the text, assigning sentiment labels, extracting linguistic structure, and
                    ranking important terms using TF-IDF.
                </p>
            </div>

            <div class="pipeline-card reveal delay-1">
                <div class="pipeline-step">
                    <span>01</span>
                    <div>
                        <h3>News Scraping</h3>
                        <p>
                            Collected article links and article content from Antara, CNN Indonesia, Detik, Kompas, and
                            Tribun using source-specific scraping workflows.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>02</span>
                    <div>
                        <h3>Text Preprocessing</h3>
                        <p>
                            Cleaned Indonesian article text by removing noise, tokenizing words, removing stopwords, and
                            applying stemming to produce analysis-ready text.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>03</span>
                    <div>
                        <h3>Sentiment Labeling</h3>
                        <p>
                            Assigned Positive, Neutral, and Negative labels using polarity-based sentiment scoring to
                            summarize the emotional direction of each article.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>04</span>
                    <div>
                        <h3>POS Tagging & NER</h3>
                        <p>
                            Extracted part-of-speech patterns and named entities to identify dominant actors, locations,
                            organizations, and geopolitical references.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>05</span>
                    <div>
                        <h3>TF-IDF Analysis</h3>
                        <p>
                            Ranked important unigrams, bigrams, and trigrams to uncover recurring terms and themes in
                            the media corpus.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section glass-section">
            <div class="section-heading reveal">
                <span class="section-kicker">02 · Analysis Scope</span>
                <h2>The project focuses on sentiment, entities, and media framing patterns</h2>
                <p>
                    Instead of only counting positive and negative articles, the analysis combines sentiment
                    distribution,
                    named entities, POS tags, and TF-IDF terms to understand what kind of narrative appears repeatedly
                    in
                    Indonesian news coverage.
                </p>
            </div>

            <div class="research-grid">
                <article class="research-card reveal">
                    <span>Sentiment Focus</span>
                    <strong>Positive, Neutral, Negative</strong>
                    <p>
                        Sentiment labels summarize the overall tone of each article and help compare how the coverage is
                        distributed across media sources.
                    </p>
                </article>

                <article class="research-card reveal delay-1">
                    <span>Entity Focus</span>
                    <strong>People, places, and geopolitical actors</strong>
                    <p>
                        Named Entity Recognition highlights recurring entities such as America, Israel, Trump, Iran, and
                        Indonesia in the article corpus.
                    </p>
                </article>

                <article class="research-card reveal delay-2">
                    <span>Term Focus</span>
                    <strong>TF-IDF narrative signals</strong>
                    <p>
                        TF-IDF ranking helps identify terms that carry stronger contextual importance, such as
                        “serangan”, “israel”, “trump”, and “amerika”.
                    </p>
                </article>
            </div>
        </section>

        <section class="content-section" id="results">
            <div class="section-heading reveal">
                <span class="section-kicker">03 · Results</span>
                <h2>Sentiment and entity results show a strong geopolitical narrative</h2>
                <p>
                    Positive sentiment appears as the largest class in the processed output, while the dominant terms
                    and
                    entities point toward international conflict, state actors, and regional political issues.
                </p>
            </div>

            <div class="insight-dashboard reveal">
                <div class="insight-dashboard-tabs" aria-label="Ali Khamenei project dashboard tabs">
                    <button class="dashboard-tab active" type="button" data-dashboard="sentiment">
                        Sentiment Split
                    </button>
                    <button class="dashboard-tab" type="button" data-dashboard="sources">
                        Media Sources
                    </button>
                    <button class="dashboard-tab" type="button" data-dashboard="entities">
                        Entities & Terms
                    </button>
                </div>

                <div class="insight-dashboard-panel active" id="dashboard-sentiment">
                    <div class="dashboard-two-column">
                        <article class="chart-card sentiment-dashboard-card">
                            <div class="card-title">
                                <h3>Overall Sentiment Distribution</h3>
                                <span>491 articles</span>
                            </div>

                            <div class="sentiment-donut-wrap">
                                <div class="sentiment-donut">
                                    <div class="donut-core">
                                        <div>
                                            <strong>267</strong>
                                            <span>positive</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sentiment-summary-grid">
                                <div class="sentiment-tile">
                                    <span>Positive</span>
                                    <strong>267</strong>
                                    <p>54.4% of articles</p>
                                </div>

                                <div class="sentiment-tile">
                                    <span>Neutral</span>
                                    <strong>160</strong>
                                    <p>32.6% of articles</p>
                                </div>

                                <div class="sentiment-tile">
                                    <span>Negative</span>
                                    <strong>64</strong>
                                    <p>13.0% of articles</p>
                                </div>
                            </div>
                        </article>

                        <article class="result-card">
                            <span>Main Interpretation</span>
                            <h3>Positive sentiment dominates, but the topic remains strongly geopolitical.</h3>
                            <p>
                                The sentiment output shows that Positive articles form the largest group. However, this
                                should not be interpreted as purely favorable personal sentiment. In a geopolitical news
                                corpus, positive polarity can also come from diplomatic wording, condolences, formal
                                statements, or non-hostile reporting language.
                            </p>
                            <p>
                                A stronger reading comes from combining sentiment with TF-IDF and NER. The dominant
                                terms and entities show that the article narratives are highly connected to conflict,
                                regional politics, and international actors.
                            </p>
                        </article>
                    </div>
                </div>

                <div class="insight-dashboard-panel" id="dashboard-sources">
                    <div class="dashboard-two-column">
                        <article class="chart-card source-comparison-card">
                            <div class="card-title">
                                <h3>Sentiment by News Source</h3>
                            </div>

                            <div class="source-stack-chart">
                                <div class="source-row">
                                    <span>Antara</span>
                                    <div class="stacked-track">
                                        <div class="seg-positive" style="width: 42%;"></div>
                                        <div class="seg-neutral" style="width: 37%;"></div>
                                        <div class="seg-negative" style="width: 21%;"></div>
                                    </div>
                                    <strong>100</strong>
                                </div>

                                <div class="source-row">
                                    <span>CNN</span>
                                    <div class="stacked-track">
                                        <div class="seg-positive" style="width: 56.6%;"></div>
                                        <div class="seg-neutral" style="width: 27.3%;"></div>
                                        <div class="seg-negative" style="width: 16.1%;"></div>
                                    </div>
                                    <strong>99</strong>
                                </div>

                                <div class="source-row">
                                    <span>Detik</span>
                                    <div class="stacked-track">
                                        <div class="seg-positive" style="width: 64.6%;"></div>
                                        <div class="seg-neutral" style="width: 25%;"></div>
                                        <div class="seg-negative" style="width: 10.4%;"></div>
                                    </div>
                                    <strong>96</strong>
                                </div>

                                <div class="source-row">
                                    <span>Kompas</span>
                                    <div class="stacked-track">
                                        <div class="seg-positive" style="width: 64.6%;"></div>
                                        <div class="seg-neutral" style="width: 29.2%;"></div>
                                        <div class="seg-negative" style="width: 6.2%;"></div>
                                    </div>
                                    <strong>96</strong>
                                </div>

                                <div class="source-row">
                                    <span>Tribun</span>
                                    <div class="stacked-track">
                                        <div class="seg-positive" style="width: 45%;"></div>
                                        <div class="seg-neutral" style="width: 44%;"></div>
                                        <div class="seg-negative" style="width: 11%;"></div>
                                    </div>
                                    <strong>100</strong>
                                </div>
                            </div>

                            <div class="stack-legend">
                                <span><i class="legend-dot positive"></i> Positive</span>
                                <span><i class="legend-dot neutral"></i> Neutral</span>
                                <span><i class="legend-dot negative"></i> Negative</span>
                            </div>
                        </article>

                        <article class="result-card">
                            <span>Source-Level Insight</span>
                            <h3>Kompas and Detik show the highest positive share, while Antara and Tribun are more
                                balanced.</h3>
                            <p>
                                Detik and Kompas have the strongest positive proportions in this output. Tribun is
                                almost
                                balanced between Positive and Neutral, while Antara has the largest negative share among
                                the five sources.
                            </p>
                            <p>
                                This comparison is useful as a portfolio insight, but it should be framed carefully:
                                sentiment polarity does not automatically prove editorial bias. It only shows how the
                                processed text is classified by the chosen sentiment method.
                            </p>
                        </article>
                    </div>
                </div>

                <div class="insight-dashboard-panel" id="dashboard-entities">
                    <div class="entity-dashboard-grid">
                        <article class="chart-card">
                            <div class="card-title">
                                <h3>Top Named Entities</h3>
                                <span>frequency</span>
                            </div>

                            <div class="entity-rank-list">
                                <div class="entity-rank-item">
                                    <span>Amerika</span>
                                    <div class="entity-track">
                                        <div class="entity-fill" style="width: 100%;"></div>
                                    </div>
                                    <strong>391</strong>
                                </div>

                                <div class="entity-rank-item">
                                    <span>Amerika Serikat</span>
                                    <div class="entity-track">
                                        <div class="entity-fill" style="width: 62.4%;"></div>
                                    </div>
                                    <strong>244</strong>
                                </div>

                                <div class="entity-rank-item">
                                    <span>Trump</span>
                                    <div class="entity-track">
                                        <div class="entity-fill" style="width: 40.9%;"></div>
                                    </div>
                                    <strong>160</strong>
                                </div>

                                <div class="entity-rank-item">
                                    <span>Ali</span>
                                    <div class="entity-track">
                                        <div class="entity-fill" style="width: 32.2%;"></div>
                                    </div>
                                    <strong>126</strong>
                                </div>

                                <div class="entity-rank-item">
                                    <span>Indonesia</span>
                                    <div class="entity-track">
                                        <div class="entity-fill" style="width: 23.5%;"></div>
                                    </div>
                                    <strong>92</strong>
                                </div>
                            </div>
                        </article>

                        <article class="chart-card">
                            <div class="card-title">
                                <h3>Top TF-IDF Terms</h3>
                                <span>term importance</span>
                            </div>

                            <div class="topic-bars">
                                <div class="topic-row">
                                    <span>serangan</span>
                                    <div class="topic-track">
                                        <div class="fill" style="width: 100%;"></div>
                                    </div>
                                    <strong>0.059</strong>
                                </div>

                                <div class="topic-row">
                                    <span>israel</span>
                                    <div class="topic-track">
                                        <div class="fill" style="width: 96.6%;"></div>
                                    </div>
                                    <strong>0.057</strong>
                                </div>

                                <div class="topic-row">
                                    <span>trump</span>
                                    <div class="topic-track">
                                        <div class="fill" style="width: 70.8%;"></div>
                                    </div>
                                    <strong>0.042</strong>
                                </div>

                                <div class="topic-row">
                                    <span>amerika</span>
                                    <div class="topic-track">
                                        <div class="fill" style="width: 69.6%;"></div>
                                    </div>
                                    <strong>0.041</strong>
                                </div>

                                <div class="topic-row">
                                    <span>ayatol</span>
                                    <div class="topic-track">
                                        <div class="fill" style="width: 68.2%;"></div>
                                    </div>
                                    <strong>0.041</strong>
                                </div>
                            </div>
                        </article>

                        <article class="chart-card">
                            <div class="card-title">
                                <h3>Entity Label Distribution</h3>
                                <span>top labels</span>
                            </div>

                            <div class="topic-bars">
                                <div class="topic-row">
                                    <span>GPE</span>
                                    <div class="topic-track">
                                        <div class="fill" style="width: 100%;"></div>
                                    </div>
                                    <strong>8,863</strong>
                                </div>

                                <div class="topic-row">
                                    <span>NOR</span>
                                    <div class="topic-track">
                                        <div class="fill" style="width: 86.9%;"></div>
                                    </div>
                                    <strong>7,698</strong>
                                </div>

                                <div class="topic-row">
                                    <span>PER</span>
                                    <div class="topic-track">
                                        <div class="fill" style="width: 69.2%;"></div>
                                    </div>
                                    <strong>6,137</strong>
                                </div>

                                <div class="topic-row">
                                    <span>ORG</span>
                                    <div class="topic-track">
                                        <div class="fill" style="width: 20.4%;"></div>
                                    </div>
                                    <strong>1,804</strong>
                                </div>

                                <div class="topic-row">
                                    <span>REG</span>
                                    <div class="topic-track">
                                        <div class="fill" style="width: 12.5%;"></div>
                                    </div>
                                    <strong>1,104</strong>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section visual-gallery-section" id="insights">
            <div class="section-heading reveal">
                <span class="section-kicker">04 · Visual Insights</span>
                <h2>The visual layer turns raw NLP output into an easier media analysis story</h2>
                <p>
                    Instead of showing static image files, this section uses custom HTML/CSS visualizations to summarize
                    the most important outputs: sentiment structure, dominant terms, POS distribution, and entity-heavy
                    narratives.
                </p>
            </div>

            <div class="visual-insight-grid">
                <article class="keyword-card reveal">
                    <span>TF-IDF Word Focus</span>
                    <strong>Conflict-related terms dominate the corpus</strong>

                    <div class="tfidf-cloud">
                        <span class="xl">serangan</span>
                        <span class="xl">israel</span>
                        <span class="lg">trump</span>
                        <span class="lg">amerika</span>
                        <span class="lg">ayatol</span>
                        <span class="md">tewas</span>
                        <span class="md">militer</span>
                        <span class="md">teheran</span>
                        <span class="md">amerika serikat</span>
                        <span class="md">pemimpin tertinggi iran</span>
                    </div>
                </article>

                <article class="keyword-card reveal delay-1">
                    <span>POS Structure</span>
                    <strong>Nouns dominate the linguistic structure</strong>

                    <div class="pos-ring-card">
                        <div class="pos-ring">
                            <div class="pos-ring-core">
                                <div>
                                    <strong>65.94%</strong>
                                    <span>NOUN</span>
                                </div>
                            </div>
                        </div>

                        <div class="pos-list">
                            <div>
                                <span>NOUN</span>
                                <strong>66,331</strong>
                            </div>
                            <div>
                                <span>VERB</span>
                                <strong>14,822</strong>
                            </div>
                            <div>
                                <span>PROPN</span>
                                <strong>6,887</strong>
                            </div>
                            <div>
                                <span>ADJ</span>
                                <strong>6,226</strong>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="keyword-card reveal delay-2">
                    <span>Narrative Reading</span>
                    <strong>The corpus is entity-rich and politically concentrated</strong>
                    <p>
                        The high number of GPE, NOR, and PER entities suggests that the articles are centered on
                        geopolitical actors, national identities, public figures, and state-level references.
                    </p>
                    <p>
                        This makes the project stronger than a simple sentiment dashboard because it also explains what
                        the sentiment is talking about.
                    </p>
                </article>
            </div>
        </section>

        <section class="content-section business-section">
            <div class="section-heading reveal">
                <span class="section-kicker">05 · Project Takeaways</span>
                <h2>What this project communicates as a data analytics portfolio case</h2>
                <p>
                    The strongest value of this project is not only the sentiment count, but the ability to connect text
                    mining outputs into a coherent media analysis narrative.
                </p>
            </div>

            <div class="takeaway-grid">
                <article class="takeaway-card reveal">
                    <span>01</span>
                    <h3>Builds an end-to-end NLP workflow</h3>
                    <p>
                        The project demonstrates scraping, preprocessing, sentiment scoring, POS tagging, NER, TF-IDF,
                        and visual communication in one complete pipeline.
                    </p>
                </article>

                <article class="takeaway-card reveal delay-1">
                    <span>02</span>
                    <h3>Shows media framing through multiple signals</h3>
                    <p>
                        Combining sentiment labels, entity extraction, and TF-IDF terms gives a stronger interpretation
                        than relying on sentiment classification alone.
                    </p>
                </article>

                <article class="takeaway-card reveal delay-2">
                    <span>03</span>
                    <h3>Highlights geopolitical narrative concentration</h3>
                    <p>
                        Dominant terms and entities such as America, Israel, Trump, and serangan show that the coverage
                        is strongly tied to international conflict themes.
                    </p>
                </article>

                <article class="takeaway-card reveal delay-3">
                    <span>04</span>
                    <h3>Creates portfolio-ready analytical storytelling</h3>
                    <p>
                        The output is easier to communicate because the results are translated into visual summaries,
                        source comparisons, and interpretation cards.
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
