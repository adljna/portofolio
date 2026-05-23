<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blu Sentiment Analysis | Project Detail</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/project-detail-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blu-results-insights.css') }}">
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
                    Data Analyst Project · NLP · Machine Learning
                </div>

                <h1>Sentiment Analysis of <span>blu by BCA Digital</span> on Google Play Reviews</h1>

                <p class="hero-desc">
                    An end-to-end Natural Language Processing project that transforms Google Play reviews into sentiment
                    insights, product pain points, and model-driven classification using Indonesian text preprocessing,
                    TF-IDF, and machine learning.
                </p>

                <div class="hero-actions">
                    <a href="#process" class="primary-btn">Explore Process</a>
                    <a href="#insights" class="secondary-btn">View Insights</a>

                    <a href="https://github.com/adljna/Blu-SentimentAnalysis" class="secondary-btn github-btn"
                        target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-github"></i>
                        View GitHub
                    </a>
                </div>
            </div>

            <div class="hero-visual reveal delay-1" aria-label="Project summary visualization">
                <div class="phone-card">
                    <div class="phone-top">
                        <div>
                            <span class="mini-label">Best Model</span>
                            <strong>Logistic Regression</strong>
                        </div>
                        <span class="status-chip">85.07%</span>
                    </div>

                    <div class="sentiment-ring" aria-hidden="true">
                        <div class="ring-core">
                            <span>24.5K</span>
                            <small>binary reviews</small>
                        </div>
                    </div>

                    <div class="mini-bars">
                        <div class="mini-bar-row">
                            <span>Positive</span>
                            <div class="track">
                                <div class="fill" style="width: 68.7%;"></div>
                            </div>
                            <strong>68.7%</strong>
                        </div>

                        <div class="mini-bar-row">
                            <span>Negative</span>
                            <div class="track">
                                <div class="fill" style="width: 31.3%;"></div>
                            </div>
                            <strong>31.3%</strong>
                        </div>
                    </div>
                </div>

                <div class="floating-card card-one">
                    <span>TF-IDF Features</span>
                    <strong>7,928</strong>
                </div>

                <div class="floating-card card-two">
                    <span>F1 Weighted</span>
                    <strong>0.8500</strong>
                </div>
            </div>
        </section>

        <section class="metrics-strip reveal">
            <article>
                <span>Scraped Reviews</span>
                <strong>29,542</strong>
            </article>
            <article>
                <span>Clean Dataset</span>
                <strong>24,533</strong>
            </article>
            <article>
                <span>Vocabulary Size</span>
                <strong>7,928</strong>
            </article>
            <article>
                <span>Accuracy</span>
                <strong>85.07%</strong>
            </article>
        </section>

        <section class="content-section two-column" id="process">
            <div class="section-copy reveal">
                <span class="section-kicker">01 · Workflow</span>
                <h2>From raw app reviews to a validated sentiment model</h2>
                <p>
                    The project follows an end-to-end NLP workflow: collecting Google Play reviews, cleaning
                    Indonesian text, creating binary sentiment labels, transforming text into TF-IDF features,
                    and evaluating multiple machine learning models.
                </p>
            </div>

            <div class="pipeline-card reveal delay-1">
                <div class="pipeline-step">
                    <span>01</span>
                    <div>
                        <h3>Review Scraping</h3>
                        <p>
                            Collected Blu app reviews from Google Play, including review text, rating, timestamp,
                            and user interaction metadata.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>02</span>
                    <div>
                        <h3>Text Preprocessing</h3>
                        <p>
                            Cleaned Indonesian review text by normalizing words, removing noise and stopwords,
                            and applying stemming.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>03</span>
                    <div>
                        <h3>Hybrid Labeling</h3>
                        <p>
                            Combined rating-based rules and sentiment keyword signals to build cleaner positive
                            and negative labels while filtering noisy reviews.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>04</span>
                    <div>
                        <h3>Feature Engineering</h3>
                        <p>
                            Converted cleaned review text into TF-IDF features using train-only vocabulary to
                            avoid data leakage.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>05</span>
                    <div>
                        <h3>Modeling & Evaluation</h3>
                        <p>
                            Trained and compared Logistic Regression, SVM, Naive Bayes, and Random Forest using
                            accuracy, weighted F1, and cross-validation scores.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section glass-section">
            <div class="section-heading reveal">
                <span class="section-kicker">02 · Labeling Strategy</span>
                <h2>Hybrid labeling was used to clarify sentiment in app review text</h2>
                <p>
                    Since the dataset comes from app reviews, the analysis focuses on positive and negative
                    sentiment because both classes provide clearer product feedback. Rating scores were used as
                    the initial signal, then review text was checked to handle neutral or ambiguous cases more
                    carefully.
                </p>
            </div>

            <div class="label-grid binary-label-grid">
                <article class="label-card positive reveal">
                    <span>Positive Signal</span>
                    <strong>Satisfaction</strong>
                    <p>
                        Reviews showing ease of use, successful transactions, convenience, or positive user
                        experience.
                    </p>
                </article>

                <article class="label-card negative reveal delay-1">
                    <span>Negative Signal</span>
                    <strong>Friction</strong>
                    <p>
                        Reviews showing failed processes, slow performance, login issues, or unreliable app
                        experiences.
                    </p>
                </article>

                <article class="label-card binary-focus reveal delay-2">
                    <span>Hybrid Rule</span>
                    <strong>Rating + Text</strong>
                    <p>
                        Rating scores helped form the initial label, while review content was used to validate
                        ambiguous sentiment.
                    </p>
                </article>

                <article class="label-card dropped reveal delay-3">
                    <span>Noise Control</span>
                    <strong>Filtered</strong>
                    <p>
                        Reviews with conflicting or unclear signals were removed to keep the training data cleaner.
                    </p>
                </article>
            </div>
        </section>

        <section class="content-section" id="results">
            <div class="section-heading reveal">
                <span class="section-kicker">03 · Model Results</span>
                <h2>Model performance was compared across multiple evaluation metrics.</h2>
                <p>
                    Four baseline machine learning models were evaluated using Accuracy, Weighted F1, and
                    5-fold Cross-Validation Macro F1 to compare both test performance and score consistency.
                </p>
            </div>

            <div class="model-result-grid">
                <article class="chart-card model-comparison-card best reveal">
                    <div class="model-card-head">
                        <span>01</span>
                        <div>
                            <h3>Logistic Regression</h3>
                            <p>Best overall balance</p>
                        </div>
                    </div>

                    <div class="metric-bars">
                        <div class="metric-line">
                            <span>Accuracy</span>
                            <div class="track">
                                <div class="fill" style="width: 85.07%;"></div>
                            </div>
                            <strong>85.07%</strong>
                        </div>

                        <div class="metric-line">
                            <span>Weighted F1</span>
                            <div class="track">
                                <div class="fill" style="width: 85%;"></div>
                            </div>
                            <strong>0.8500</strong>
                        </div>

                        <div class="metric-line">
                            <span>CV Macro F1</span>
                            <div class="track">
                                <div class="fill" style="width: 85.98%;"></div>
                            </div>
                            <strong>0.8598</strong>
                        </div>
                    </div>
                </article>

                <article class="chart-card model-comparison-card reveal delay-1">
                    <div class="model-card-head">
                        <span>02</span>
                        <div>
                            <h3>SVM LinearSVC</h3>
                            <p>Strong runner-up</p>
                        </div>
                    </div>

                    <div class="metric-bars">
                        <div class="metric-line">
                            <span>Accuracy</span>
                            <div class="track">
                                <div class="fill" style="width: 84.82%;"></div>
                            </div>
                            <strong>84.82%</strong>
                        </div>

                        <div class="metric-line">
                            <span>Weighted F1</span>
                            <div class="track">
                                <div class="fill" style="width: 84.8%;"></div>
                            </div>
                            <strong>0.8480</strong>
                        </div>

                        <div class="metric-line">
                            <span>CV Macro F1</span>
                            <div class="track">
                                <div class="fill" style="width: 85.17%;"></div>
                            </div>
                            <strong>0.8517</strong>
                        </div>
                    </div>
                </article>

                <article class="chart-card model-comparison-card reveal delay-2">
                    <div class="model-card-head">
                        <span>03</span>
                        <div>
                            <h3>Naive Bayes</h3>
                            <p>Stable text baseline</p>
                        </div>
                    </div>

                    <div class="metric-bars">
                        <div class="metric-line">
                            <span>Accuracy</span>
                            <div class="track">
                                <div class="fill" style="width: 84.46%;"></div>
                            </div>
                            <strong>84.46%</strong>
                        </div>

                        <div class="metric-line">
                            <span>Weighted F1</span>
                            <div class="track">
                                <div class="fill" style="width: 84.51%;"></div>
                            </div>
                            <strong>0.8451</strong>
                        </div>

                        <div class="metric-line">
                            <span>CV Macro F1</span>
                            <div class="track">
                                <div class="fill" style="width: 85.31%;"></div>
                            </div>
                            <strong>0.8531</strong>
                        </div>
                    </div>
                </article>

                <article class="chart-card model-comparison-card reveal delay-3">
                    <div class="model-card-head">
                        <span>04</span>
                        <div>
                            <h3>Random Forest</h3>
                            <p>Lowest overall score</p>
                        </div>
                    </div>

                    <div class="metric-bars">
                        <div class="metric-line">
                            <span>Accuracy</span>
                            <div class="track">
                                <div class="fill" style="width: 84.10%;"></div>
                            </div>
                            <strong>84.10%</strong>
                        </div>

                        <div class="metric-line">
                            <span>Weighted F1</span>
                            <div class="track">
                                <div class="fill" style="width: 84.13%;"></div>
                            </div>
                            <strong>0.8413</strong>
                        </div>

                        <div class="metric-line">
                            <span>CV Macro F1</span>
                            <div class="track">
                                <div class="fill" style="width: 84.90%;"></div>
                            </div>
                            <strong>0.8490</strong>
                        </div>
                    </div>
                </article>
            </div>

            <div class="result-card model-interpretation reveal">
                <span>Interpretation</span>
                <h3>The best model was selected from overall balance, not accuracy alone.</h3>
                <p>
                    Logistic Regression produced the strongest overall result, although the gap between models was
                    relatively small. This suggests that TF-IDF features already captured useful sentiment patterns,
                    while positive reviews were easier to classify than negative ones, which still required topic-level
                    analysis to better understand user friction.
                </p>
                </p>
            </div>
        </section>

        <section class="content-section visual-gallery-section" id="insights">
            <div class="section-heading reveal">
                <span class="section-kicker">04 · Visual Insights</span>
                <h2>Sentiment results are summarized into a product insight dashboard.</h2>
                <p>
                    The visualization layer focuses on the most useful business signals: overall sentiment split,
                    annual sentiment movement, recurring keywords, and the main complaint topics found in negative
                    reviews.
                </p>
            </div>

            <div class="insight-dashboard reveal">
                <div class="insight-dashboard-tabs" aria-label="Sentiment insight dashboard tabs">
                    <button class="dashboard-tab active" type="button" data-dashboard="sentiment">
                        Sentiment Split
                    </button>
                    <button class="dashboard-tab" type="button" data-dashboard="yearly">
                        Yearly Trend
                    </button>
                    <button class="dashboard-tab" type="button" data-dashboard="complaints">
                        Complaints
                    </button>
                </div>

                <div class="insight-dashboard-panel active" id="dashboard-sentiment">
                    <div class="sentiment-keyword-grid">
                        <article class="chart-card sentiment-dashboard-card">
                            <div class="card-title">
                                <h3>Sentiment Split</h3>
                            </div>

                            <div class="sentiment-donut-wrap compact">
                                <div class="sentiment-donut"
                                    aria-label="Positive sentiment 68.7 percent and negative sentiment 31.3 percent">
                                    <div class="donut-core">
                                        <strong>68.7%</strong>
                                        <span>positive</span>
                                    </div>
                                </div>

                                <div class="sentiment-legend">
                                    <div>
                                        <span class="legend-dot positive"></span>
                                        <p><strong>16,857</strong> positive reviews</p>
                                    </div>
                                    <div>
                                        <span class="legend-dot negative"></span>
                                        <p><strong>7,676</strong> negative reviews</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <div class="keyword-split-grid">
                            <article class="keyword-card sentiment-keyword-card positive-keyword-card">
                                <span>Positive Words</span>
                                <strong>Ease, utility, and successful experience</strong>

                                <div class="keyword-list positive">
                                    <span>bagus</span>
                                    <span>mudah</span>
                                    <span>transaksi</span>
                                    <span>bantu</span>
                                    <span>cepat</span>
                                    <span>fitur</span>
                                    <span>transfer</span>
                                    <span>ok</span>
                                </div>
                            </article>

                            <article class="keyword-card sentiment-keyword-card negative-keyword-card">
                                <span>Negative Words</span>
                                <strong>Access, speed, and reliability friction</strong>

                                <div class="keyword-list negative">
                                    <span>masuk</span>
                                    <span>susah</span>
                                    <span>lambat</span>
                                    <span>daftar</span>
                                    <span>gagal</span>
                                    <span>verifikasi</span>
                                    <span>transfer</span>
                                    <span>bug</span>
                                </div>
                            </article>
                        </div>

                        <article class="result-card dashboard-interpretation">
                            <span>Interpretation</span>
                            <h3>Positive sentiment dominates, but negative feedback is still important for product
                                improvement.</h3>
                            <p>
                                Most reviews express positive sentiment, supported by words related to ease of use,
                                successful transactions, and convenience. However, negative keywords point to recurring
                                friction in login, registration, verification, speed, and transaction reliability, which
                                are
                                critical flows for a digital banking app.
                            </p>
                        </article>
                    </div>
                </div>

                <div class="insight-dashboard-panel" id="dashboard-yearly">
                    <div class="yearly-dashboard">
                        <article class="result-card yearly-summary-card">
                            <span>Yearly Trend</span>
                            <h3>Monthly sentiment movement is aggregated into yearly review volume.</h3>
                            <p>
                                The monthly sentiment chart is simplified into annual positive and negative review
                                counts,
                                making the overall trend easier to compare across years. The 2026 value is treated as
                                partial-year data because the dataset only includes reviews up to the available month.
                            </p>
                        </article>

                        <article class="chart-card yearly-chart-card">
                            <div class="card-title">
                                <h3>Yearly Sentiment Volume</h3>
                                <span>Positive vs Negative Reviews</span>
                            </div>

                            <div class="yearly-bar-chart">
                                <div class="year-group">
                                    <span class="year-label">2021</span>
                                    <div class="year-bars">
                                        <div class="year-bar positive" style="height: 39.72%;"
                                            title="Positive: 2,354">
                                            <span>2,354</span>
                                        </div>
                                        <div class="year-bar negative" style="height: 23.59%;"
                                            title="Negative: 1,398">
                                            <span>1,398</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="year-group">
                                    <span class="year-label">2022</span>
                                    <div class="year-bars">
                                        <div class="year-bar positive" style="height: 100%;" title="Positive: 5,927">
                                            <span>5,927</span>
                                        </div>
                                        <div class="year-bar negative" style="height: 21.21%;"
                                            title="Negative: 1,257">
                                            <span>1,257</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="year-group">
                                    <span class="year-label">2023</span>
                                    <div class="year-bars">
                                        <div class="year-bar positive" style="height: 46.16%;"
                                            title="Positive: 2,736">
                                            <span>2,736</span>
                                        </div>
                                        <div class="year-bar negative" style="height: 29.37%;"
                                            title="Negative: 1,741">
                                            <span>1,741</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="year-group">
                                    <span class="year-label">2024</span>
                                    <div class="year-bars">
                                        <div class="year-bar positive" style="height: 49.13%;"
                                            title="Positive: 2,912">
                                            <span>2,912</span>
                                        </div>
                                        <div class="year-bar negative" style="height: 18.61%;"
                                            title="Negative: 1,103">
                                            <span>1,103</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="year-group">
                                    <span class="year-label">2025</span>
                                    <div class="year-bars">
                                        <div class="year-bar positive" style="height: 30.45%;"
                                            title="Positive: 1,805">
                                            <span>1,805</span>
                                        </div>
                                        <div class="year-bar negative" style="height: 28.45%;"
                                            title="Negative: 1,686">
                                            <span>1,686</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="year-group partial">
                                    <span class="year-label">2026*</span>
                                    <div class="year-bars">
                                        <div class="year-bar positive" style="height: 18.95%;"
                                            title="Positive: 1,123">
                                            <span>1,123</span>
                                        </div>
                                        <div class="year-bar negative" style="height: 8.28%;" title="Negative: 491">
                                            <span>491</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="yearly-legend">
                                <span><i class="legend-dot positive"></i> Positive reviews</span>
                                <span><i class="legend-dot negative"></i> Negative reviews</span>
                                <span class="partial-note">*2026 is partial-year data</span>
                            </div>
                        </article>

                        <div class="insight-grid yearly-insight-grid">
                            <article class="insight-card">
                                <span>Strongest Year</span>
                                <strong>2022</strong>
                                <p>
                                    2022 shows the highest positive review volume and the strongest positive share,
                                    indicating a period of stronger user reception.
                                </p>
                            </article>

                            <article class="insight-card">
                                <span>Risk Signal</span>
                                <strong>2025</strong>
                                <p>
                                    2025 has the most balanced positive-negative split, suggesting that user friction
                                    became
                                    more visible during this period.
                                </p>
                            </article>

                            <article class="insight-card">
                                <span>Partial Data</span>
                                <strong>2026</strong>
                                <p>
                                    2026 appears to recover toward a more positive share, but it should be interpreted
                                    carefully because the year is incomplete.
                                </p>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="insight-dashboard-panel" id="dashboard-complaints">
                    <div class="results-layout">
                        <article class="chart-card">
                            <div class="card-title">
                                <h3>Top Negative Topics</h3>
                                <span>Complaint Focus</span>
                            </div>

                            <div class="complaint-chart">
                                <div class="complaint-row">
                                    <span>Login / Account</span>
                                    <div class="complaint-track">
                                        <div style="width: 100%;"></div>
                                    </div>
                                    <strong>2,174</strong>
                                </div>
                                <div class="complaint-row">
                                    <span>Failed Transactions</span>
                                    <div class="complaint-track">
                                        <div style="width: 72.3%;"></div>
                                    </div>
                                    <strong>1,571</strong>
                                </div>
                                <div class="complaint-row">
                                    <span>Slow / Loading</span>
                                    <div class="complaint-track">
                                        <div style="width: 48.3%;"></div>
                                    </div>
                                    <strong>1,051</strong>
                                </div>
                                <div class="complaint-row">
                                    <span>Balance / Limit</span>
                                    <div class="complaint-track">
                                        <div style="width: 43.7%;"></div>
                                    </div>
                                    <strong>950</strong>
                                </div>
                                <div class="complaint-row">
                                    <span>Bug / App Error</span>
                                    <div class="complaint-track">
                                        <div style="width: 37.5%;"></div>
                                    </div>
                                    <strong>816</strong>
                                </div>
                                <div class="complaint-row">
                                    <span>Customer Service</span>
                                    <div class="complaint-track">
                                        <div style="width: 22.2%;"></div>
                                    </div>
                                    <strong>482</strong>
                                </div>
                            </div>
                        </article>

                        <article class="result-card">
                            <span>Main Insight</span>
                            <h3>Access and transaction reliability should be the main improvement focus.</h3>
                            <p>
                                The largest complaint topics are related to login or account access, failed
                                transactions,
                                and slow loading. For a digital banking app, these issues are critical because they
                                directly
                                affect user trust and the ability to complete core financial activities.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section business-section">

            <div class="section-heading reveal">
                <span class="section-kicker">05 · Business Takeaways</span>
                <h2>What the company can prioritize from the review analysis</h2>
                <p>
                    Based on the sentiment patterns and complaint topics, the review analysis highlights several
            product areas that should be prioritized to improve user trust, app reliability, and the overall
            digital banking experience.
            </div>

            <div class="takeaway-grid blu-takeaway-grid">
                <article class="takeaway-card reveal">
                    <span>01</span>
                    <h3>Fix login and account access first</h3>
                    <p>
                        Login, account, and verification issues are the largest negative topic, making them a critical
                        priority because they block users before they can fully use the app.
                    </p>
                </article>
                <article class="takeaway-card reveal delay-1">
                    <span>02</span>
                    <h3>Improve transaction reliability</h3>
                    <p>
                        Failed transaction complaints can directly reduce trust in a digital banking product, especially
                        when users mention transfer, balance, or payment-related problems.
                    </p>
                </article>
                <article class="takeaway-card reveal delay-2">
                    <span>03</span>
                    <h3>Reduce loading and performance friction</h3>
                    <p>
                        Words such as “lambat”, “loading”, and “gagal” suggest that speed and stability should be
                        monitored across critical flows like login and transactions.
                    </p>
                </article>
                <article class="takeaway-card reveal delay-3">
                    <span>04</span>
                    <h3>Clarify balance and limit communication</h3>
                    <p>
                        Balance and limit-related complaints indicate a need for clearer messages, better error states,
                        and more transparent explanations inside the app.
                    </p>
                </article>
            </div>
        </section>
    </main>

    <div class="image-modal" id="imageModal" aria-hidden="true">
        <button id="closeModal" aria-label="Close preview">×</button>
        <img src="" alt="Expanded project visualization">
    </div>

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

            const tabButtons = $$(".tab-btn");
            const tabPanels = $$(".tab-panel");

            tabButtons.forEach((button) => {
                button.addEventListener("click", () => {
                    tabButtons.forEach((item) => item.classList.remove("active"));
                    tabPanels.forEach((panel) => panel.classList.remove("active"));

                    button.classList.add("active");
                    document.getElementById(button.dataset.tab)?.classList.add("active");
                });
            });

            const modal = $("#imageModal");
            const modalImage = $("#imageModal img");
            const closeModalButton = $("#closeModal");

            function closeModal() {
                if (!modal || !modalImage) return;

                modal.classList.remove("is-open");
                modal.setAttribute("aria-hidden", "true");
                modalImage.src = "";
            }

            $$(".gallery-card img").forEach((image) => {
                image.addEventListener("click", () => {
                    if (!modal || !modalImage) return;

                    modalImage.src = image.src;
                    modalImage.alt = image.alt;
                    modal.classList.add("is-open");
                    modal.setAttribute("aria-hidden", "false");
                });
            });

            closeModalButton?.addEventListener("click", closeModal);

            modal?.addEventListener("click", (event) => {
                if (event.target === modal) {
                    closeModal();
                }
            });

            window.addEventListener("keydown", (event) => {
                if (event.key === "Escape") {
                    closeModal();
                }
            });

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
