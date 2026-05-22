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
    <link rel="stylesheet" href="{{ asset('css/blu-project.css') }}">
</head>

<body>
    <div class="bg-fixed"></div>
    <div class="noise"></div>

    <header class="project-nav" id="top">
        <a href="../project" class="brand-link" aria-label="Back to portfolio">
            <span class="brand-mark">NA</span>
            <span>Portfolio</span>
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
                    An end-to-end data analytics project that transforms Google Play reviews into sentiment insight,
                    product pain points, and model-driven classification using Indonesian text preprocessing,
                    TF-IDF, and machine learning.
                </p>

                <div class="hero-actions">
                    <a href="#workflow" class="primary-btn">Explore Process</a>
                    <a href="#insights" class="secondary-btn">View Insights</a>

                    <a href="https://github.com/adljna/Blu-SentimentAnalysis" class="secondary-btn github-btn" target="_blank"
                        rel="noopener noreferrer">
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
                            <small>clean reviews</small>
                        </div>
                    </div>

                    <div class="mini-bars" id="heroMiniBars"></div>
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
                <h2>From raw review to reliable sentiment model.</h2>
                <p>
                    The project uses a structured NLP pipeline: scraping, cleaning, hybrid labeling, feature
                    engineering,
                    model comparison, and evaluation. Each step is designed to reduce noisy labels and avoid data
                    leakage.
                </p>
            </div>

            <div class="pipeline-card reveal delay-1">
                <div class="pipeline-step">
                    <span>01</span>
                    <div>
                        <h3>Scraping</h3>
                        <p>Collect app reviews, rating, timestamp, and user interaction metadata.</p>
                    </div>
                </div>
                <div class="pipeline-step">
                    <span>02</span>
                    <div>
                        <h3>Preprocessing</h3>
                        <p>Clean text, normalize Indonesian words, remove noise, stopwords, and apply stemming.</p>
                    </div>
                </div>
                <div class="pipeline-step">
                    <span>03</span>
                    <div>
                        <h3>Hybrid Labeling</h3>
                        <p>Combine rating-based labels with text keyword signals to drop ambiguous/noisy reviews.</p>
                    </div>
                </div>
                <div class="pipeline-step">
                    <span>04</span>
                    <div>
                        <h3>TF-IDF & Modeling</h3>
                        <p>Train Logistic Regression, SVM, Naive Bayes, and Random Forest using train-only vocabulary.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section glass-section">
            <div class="section-heading reveal">
                <span class="section-kicker">02 · Labeling</span>
                <h2>Hybrid labeling keeps the dataset cleaner.</h2>
                <p>
                    Rating extremes are treated as stronger signals, while ambiguous 3-star reviews are filtered using
                    sentiment keywords and word count rules.
                </p>
            </div>

            <div class="label-grid">
                <article class="label-card positive reveal">
                    <span>Positive</span>
                    <strong>16,857</strong>
                    <p>Reviews with clear positive signals after filtering.</p>
                </article>
                <article class="label-card negative reveal delay-1">
                    <span>Negative</span>
                    <strong>7,676</strong>
                    <p>Reviews highlighting friction, failure, or app issues.</p>
                </article>
                <article class="label-card neutral reveal delay-2">
                    <span>Neutral</span>
                    <strong>221</strong>
                    <p>Ambiguous sentiment retained for labeling analysis.</p>
                </article>
                <article class="label-card dropped reveal delay-3">
                    <span>Dropped</span>
                    <strong>1,403</strong>
                    <p>Noisy or conflicting reviews removed before modeling.</p>
                </article>
            </div>
        </section>

        <section class="content-section" id="results">
            <div class="section-heading reveal">
                <span class="section-kicker">03 · Model Results</span>
                <h2>Logistic Regression became the best-performing model.</h2>
                <p>
                    Four baseline machine learning models were compared using Accuracy, Weighted F1, and
                    Cross-Validation F1.
                </p>
            </div>

            <div class="results-layout">
                <div class="chart-card reveal delay-1">
                    <div class="card-title">
                        <h3>Model Comparison</h3>
                        <span>Accuracy %</span>
                    </div>
                    <div id="modelComparisonChart" class="bar-chart"></div>
                </div>
                <div class="model-card reveal">
                    <div class="model-header">
                        <span>Best Model</span>
                        <strong>Logistic Regression</strong>
                    </div>
                    <div class="score-grid">
                        <div>
                            <span>Accuracy</span>
                            <strong>85.07%</strong>
                        </div>
                        <div>
                            <span>F1 Weighted</span>
                            <strong>0.8500</strong>
                        </div>
                        <div>
                            <span>CV Macro F1</span>
                            <strong>0.8598</strong>
                        </div>
                    </div>
                    <p>
                        The model performs better on positive sentiment, while negative reviews still require deeper
                        feature and topic-level analysis to reduce misclassification.
                    </p>
                </div>
            </div>
        </section>

        <section class="content-section visual-gallery-section" id="insights">
            <div class="section-heading reveal">
                <span class="section-kicker">04 · Visual Insights</span>
                <h2>Data stories behind the app reviews.</h2>
                <p>
                    Explore high-impact keywords, sentiment distribution, confusion matrix, and review patterns from the
                    project outputs.
                </p>
            </div>

            <div class="insight-tabs reveal">
                <button class="tab-btn active" data-tab="words">Top Words</button>
                <button class="tab-btn" data-tab="ngrams">N-Grams</button>
                <button class="tab-btn" data-tab="samples">Predictions</button>
            </div>

            <div class="tab-panel active" id="words">
                <div class="tfidf-list">
                    <h3>Top TF-IDF Signals</h3>
                    <div id="tfidfList"></div>
                </div>
                <div class="word-cloud-lite" id="wordCloudLite"></div>
            </div>

            <div class="tab-panel" id="ngrams">
                <div class="ngram-card">
                    <h3>Frequent Bigrams</h3>
                    <div id="bigramList"></div>
                </div>
                <div class="ngram-card">
                    <h3>Frequent Trigrams</h3>
                    <div id="trigramList"></div>
                </div>
            </div>

            <div class="tab-panel" id="samples">
                <div id="predictionSamples" class="prediction-grid"></div>
            </div>

            <div class="image-gallery">
                <article class="gallery-card reveal">
                    <img src="{{ asset('images/projects/blu/model_comparison.png') }}"
                        alt="Model comparison visualization">
                    <div>
                        <h3>Model Comparison</h3>
                        <p>Performance benchmark across machine learning models.</p>
                    </div>
                </article>
                <article class="gallery-card reveal delay-1">
                    <img src="{{ asset('images/projects/blu/confusion_matrix.png') }}"
                        alt="Confusion matrix visualization">
                    <div>
                        <h3>Confusion Matrix</h3>
                        <p>Correct and incorrect predictions across sentiment classes.</p>
                    </div>
                </article>
                <article class="gallery-card reveal delay-2">
                    <img src="{{ asset('images/projects/blu/wordcloud_per_sentimen.png') }}"
                        alt="Word cloud per sentiment">
                    <div>
                        <h3>Word Cloud</h3>
                        <p>Dominant words from each sentiment category.</p>
                    </div>
                </article>
                <article class="gallery-card reveal delay-3">
                    <img src="{{ asset('images/projects/blu/ngram_bigram_trigram.png') }}" alt="N-gram visualization">
                    <div>
                        <h3>N-Gram Patterns</h3>
                        <p>Common phrase-level signals from user reviews.</p>
                    </div>
                </article>
            </div>
        </section>

        <section class="content-section business-section">
            <div class="section-copy reveal">
                <span class="section-kicker">05 · Business Takeaways</span>
                <h2>What the reviews suggest for product improvement.</h2>
            </div>

            <div class="takeaway-grid">
                <article class="takeaway-card reveal">
                    <span>01</span>
                    <h3>Onboarding friction</h3>
                    <p>Terms like “verifikasi wajah”, “buka rekening”, and “video call” indicate issues around
                        registration and account setup.</p>
                </article>
                <article class="takeaway-card reveal delay-1">
                    <span>02</span>
                    <h3>Transaction experience</h3>
                    <p>Words such as “transfer”, “tarik tunai”, and “biaya admin” show that users frequently discuss
                        transaction costs and access.</p>
                </article>
                <article class="takeaway-card reveal delay-2">
                    <span>03</span>
                    <h3>App performance</h3>
                    <p>Negative patterns include “lambat”, “masuk”, and “gagal”, suggesting login, speed, and stability
                        as key monitoring areas.</p>
                </article>
            </div>
        </section>
    </main>

    <div class="image-modal" id="imageModal" aria-hidden="true">
        <button id="closeModal" aria-label="Close preview">×</button>
        <img src="" alt="Expanded project visualization">
    </div>

    <script src="{{ asset('js/project-data.js') }}"></script>
    <script src="{{ asset('js/blu-project.js') }}"></script>
</body>

</html>
