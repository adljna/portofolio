<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project Detail | ETL Medallion Pipeline</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700;1,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/project-detail-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/etl-lakehouse.css') }}">
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
                    Data Engineering Project · ETL · Lakehouse
                </div>

                <h1>Data Lakehouse Design for <span>Student Course Registration</span></h1>

                <p class="hero-desc">
                    An academic data engineering project that designs an end-to-end Data Lakehouse for ITS Formulir
                    Rencana Studi (FRS). The project starts from OLTP process analysis, then transforms operational
                    academic data into Bronze, Silver, and Gold layers for analytical reporting.
                </p>

                <div class="hero-actions">
                    <a href="#process" class="primary-btn">Explore Process</a>
                    <a href="#insights" class="secondary-btn">View Insights</a>

                    <a href="https://github.com/adljna/ETL-Medallion-ProsesFRS" class="secondary-btn github-btn"
                        target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-github"></i>
                        GitHub
                    </a>

                    <a href="https://drive.google.com/file/d/1W6zc-B4PPxk_BiXUOgdIL8IZz0H0XluC/view?usp=sharing"
                        class="secondary-btn report-btn" target="_blank" rel="noopener noreferrer">
                        <i class="fa-solid fa-file-lines"></i> Report
                    </a>
                </div>
            </div>

            <div class="hero-visual reveal delay-1" aria-label="ETL pipeline summary visualization">
                <div class="etl-hero-card">
                    <div class="etl-card-top">
                        <div>
                            <span class="mini-label">Pipeline Output</span>
                            <strong>Bronze · Silver · Gold Lakehouse</strong>
                        </div>
                        <span class="status-chip">FRS Domain</span>
                    </div>

                    <div class="medallion-flow" aria-label="OLTP to BI medallion flow">
                        <div class="medallion-node source">
                            <span>OLTP</span>
                            <strong>7</strong>
                            <small>source tables</small>
                        </div>

                        <div class="flow-arrow">→</div>

                        <div class="medallion-node bronze">
                            <span>Bronze</span>
                            <strong>CSV</strong>
                            <small>raw landing</small>
                        </div>

                        <div class="flow-arrow">→</div>

                        <div class="medallion-node silver">
                            <span>Silver</span>
                            <strong>Parquet</strong>
                            <small>cleaned data</small>
                        </div>

                        <div class="flow-arrow">→</div>

                        <div class="medallion-node gold">
                            <span>Gold</span>
                            <strong>13</strong>
                            <small>analytics tables</small>
                        </div>
                    </div>

                    <div class="layer-bars">
                        <div class="layer-bar-row">
                            <span>Bronze Ingestion</span>
                            <div class="track">
                                <div class="fill bronze-fill" style="width: 100%;"></div>
                            </div>
                            <strong>Raw</strong>
                        </div>

                        <div class="layer-bar-row">
                            <span>Silver Cleansing</span>
                            <div class="track">
                                <div class="fill silver-fill" style="width: 82%;"></div>
                            </div>
                            <strong>Clean</strong>
                        </div>

                        <div class="layer-bar-row">
                            <span>Gold Modeling</span>
                            <div class="track">
                                <div class="fill gold-fill" style="width: 92%;"></div>
                            </div>
                            <strong>Star</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="metrics-strip reveal">
            <article>
                <span>OLTP Source Tables</span>
                <strong>7</strong>
            </article>
            <article>
                <span>Business Processes</span>
                <strong>4</strong>
            </article>
            <article>
                <span>Dimension Tables</span>
                <strong>9</strong>
            </article>
            <article>
                <span>Fact Tables</span>
                <strong>4</strong>
            </article>
        </section>

        <section class="content-section two-column" id="process">
            <div class="section-copy reveal">
                <span class="section-kicker">01 · Workflow</span>
                <h2>From operational FRS data to analytics-ready warehouse tables</h2>
                <p>
                    The workflow follows a Medallion Architecture pattern. Raw OLTP data is preserved in Bronze,
                    standardized into Silver, and transformed into a Kimball-style dimensional model in Gold for
                    downstream Business Intelligence use.
                </p>
            </div>

            <div class="pipeline-card reveal delay-1">
                <div class="pipeline-step">
                    <span>01</span>
                    <div>
                        <h3>OLTP Process Analysis</h3>
                        <p>
                            Defined the FRS domain through four business processes: course enrollment, course drop,
                            study plan approval, and previous FRS access.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>02</span>
                    <div>
                        <h3>Bronze Layer Ingestion</h3>
                        <p>
                            Extracted operational tables from the OLTP database into raw CSV files while adding
                            extraction metadata for audit and reprocessing.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>03</span>
                    <div>
                        <h3>Silver Layer Cleansing</h3>
                        <p>
                            Standardized text, converted numeric and datetime fields, handled missing values, removed
                            duplicates, and stored cleaned data in Parquet format.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>04</span>
                    <div>
                        <h3>Gold Layer Modeling</h3>
                        <p>
                            Built dimensions and fact tables using star schema, business logic mapping, time dimension,
                            and SCD Type 2 for selected historical dimensions.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>05</span>
                    <div>
                        <h3>Incremental ETL Design</h3>
                        <p>
                            Designed CDC-inspired incremental extraction using timestamp columns and incremental loading
                            with append strategy for facts and SCD Type 2 handling for dimensions.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section glass-section">
            <div class="section-heading reveal">
                <span class="section-kicker">02 · Tools & Approach</span>
                <h2>The project emphasizes data engineering design, not only table transformation</h2>
                <p>
                    The implementation combines OLTP database design, dimensional modeling, Python-based ETL scripts,
                    Parquet storage, and incremental processing concepts to make the FRS dataset more structured,
                    traceable, and ready for analysis.
                </p>
            </div>

            <div class="tool-grid">
                <article class="tool-card reveal">
                    <span>Architecture</span>
                    <strong>Medallion Lakehouse</strong>
                    <p>
                        Bronze keeps raw data, Silver improves quality and consistency, while Gold stores
                        analytics-ready
                        tables for BI and reporting.
                    </p>
                    <div class="tool-tags">
                        <span>Bronze</span>
                        <span>Silver</span>
                        <span>Gold</span>
                    </div>
                </article>

                <article class="tool-card reveal delay-1">
                    <span>Modeling</span>
                    <strong>Kimball Star Schema</strong>
                    <p>
                        Each FRS business process is translated into grains, dimensions, facts, and consolidated star
                        schema tables.
                    </p>
                    <div class="tool-tags">
                        <span>Fact Tables</span>
                        <span>Dimensions</span>
                        <span>Bus Matrix</span>
                    </div>
                </article>

                <article class="tool-card reveal delay-2">
                    <span>Pipeline</span>
                    <strong>Python ETL Scripts</strong>
                    <p>
                        Separate Bronze, Silver, and Gold scripts handle extraction, cleansing, transformation, and
                        final Parquet storage.
                    </p>
                    <div class="tool-tags">
                        <span>Python</span>
                        <span>Pandas</span>
                        <span>Parquet</span>
                    </div>
                </article>

                <article class="tool-card reveal delay-3">
                    <span>Database Design</span>
                    <strong>MySQL OLTP + ERD</strong>
                    <p>
                        The source system is modeled as normalized OLTP tables with primary keys, foreign keys, DDL,
                        and relational integrity validation.
                    </p>
                    <div class="tool-tags">
                        <span>MySQL</span>
                        <span>phpMyAdmin</span>
                        <span>SQL DDL</span>
                    </div>
                </article>
            </div>
        </section>

        <section class="content-section" id="results">
            <div class="section-heading reveal">
                <span class="section-kicker">03 · Results</span>
                <h2>The final design produces a structured lakehouse for academic FRS analytics</h2>
                <p>
                    The final output is not just a set of files. It is a layered data architecture that preserves raw
                    data, standardizes analytical inputs, and creates Gold tables that can support monitoring of course
                    enrollment, drop activity, approval status, and FRS access behavior.
                </p>
            </div>

            <div class="insight-dashboard reveal">
                <div class="insight-dashboard-tabs" aria-label="ETL result dashboard tabs">
                    <button class="dashboard-tab active" type="button" data-dashboard="layers">
                        Layer Design
                    </button>
                    <button class="dashboard-tab" type="button" data-dashboard="warehouse">
                        Warehouse Model
                    </button>
                    <button class="dashboard-tab" type="button" data-dashboard="incremental">
                        Incremental ETL
                    </button>
                </div>

                <div class="insight-dashboard-panel active" id="dashboard-layers">
                    <div class="dashboard-two-column">
                        <article class="chart-card layer-composition-card">
                            <div class="card-title">
                                <h3>Layer Composition</h3>
                                <span>table/file output</span>
                            </div>

                            <div class="layer-composition-chart">
                                <div class="composition-row">
                                    <span>Bronze Sources</span>
                                    <div class="composition-track">
                                        <div class="composition-fill bronze-fill" style="width: 100%;"></div>
                                    </div>
                                    <strong>7</strong>
                                </div>

                                <div class="composition-row">
                                    <span>Silver Tables</span>
                                    <div class="composition-track">
                                        <div class="composition-fill silver-fill" style="width: 100%;"></div>
                                    </div>
                                    <strong>7</strong>
                                </div>

                                <div class="composition-row">
                                    <span>Dimensions</span>
                                    <div class="composition-track">
                                        <div class="composition-fill gold-fill" style="width: 100%;"></div>
                                    </div>
                                    <strong>9</strong>
                                </div>

                                <div class="composition-row">
                                    <span>Fact Tables</span>
                                    <div class="composition-track">
                                        <div class="composition-fill fact-fill" style="width: 44.4%;"></div>
                                    </div>
                                    <strong>4</strong>
                                </div>
                            </div>
                        </article>

                        <article class="result-card">
                            <span>Main Output</span>
                            <h3>Gold layer becomes the analytics-ready source for BI.</h3>
                            <p>
                                Bronze stores raw CSV outputs for traceability, Silver converts and standardizes the
                                data into Parquet, and Gold applies business logic through dimensions and fact tables.
                                This separation makes the pipeline easier to audit, maintain, and extend.
                            </p>
                        </article>
                    </div>
                </div>

                <div class="insight-dashboard-panel" id="dashboard-warehouse">
                    <div class="warehouse-grid">
                        <article class="chart-card warehouse-summary-card">
                            <div class="card-title">
                                <h3>Gold Layer Model</h3>
                                <span>13 analytics tables</span>
                            </div>

                            <div class="gold-ring-wrap">
                                <div class="gold-ring"
                                    aria-label="Gold layer contains 9 dimensions and 4 fact tables">
                                    <div class="gold-ring-core">
                                        <strong>13</strong>
                                        <span>gold tables</span>
                                    </div>
                                </div>

                                <div class="gold-legend">
                                    <span><i class="legend-dot dimension"></i> 9 Dimensions</span>
                                    <span><i class="legend-dot fact"></i> 4 Fact Tables</span>
                                </div>
                            </div>
                        </article>

                        <article class="chart-card table-list-card">
                            <div class="card-title">
                                <h3>Dimension Tables</h3>
                                <span>descriptive context</span>
                            </div>

                            <div class="table-chip-list">
                                <span>dim_mahasiswa</span>
                                <span>dim_kelas</span>
                                <span>dim_doswal</span>
                                <span>dim_frs</span>
                                <span>dim_semester</span>
                                <span>dim_waktu</span>
                                <span>dim_statusPengambilan</span>
                                <span>dim_statusDrop</span>
                                <span>dim_statusPersetujuan</span>
                            </div>
                        </article>

                        <article class="chart-card table-list-card">
                            <div class="card-title">
                                <h3>Fact Tables</h3>
                                <span>business events</span>
                            </div>

                            <div class="fact-list">
                                <div>
                                    <strong>fact_pengambilan_kelas</strong>
                                    <span>total SKS and course enrollment count</span>
                                </div>
                                <div>
                                    <strong>fact_drop_kelas</strong>
                                    <span>drop count and dropped course statistics</span>
                                </div>
                                <div>
                                    <strong>fact_rencana_studi</strong>
                                    <span>final FRS status per student and semester</span>
                                </div>
                                <div>
                                    <strong>fact_akses_frs</strong>
                                    <span>FRS access event tracking</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="insight-dashboard-panel" id="dashboard-incremental">
                    <div class="dashboard-one-column">
                        <article class="chart-card incremental-card">
                            <div class="card-title">
                                <h3>Incremental ETL Flow</h3>
                                <span>CDC-inspired processing</span>
                            </div>

                            <div class="incremental-flow">
                                <div class="incremental-step">
                                    <span>01</span>
                                    <strong>Detect Changes</strong>
                                    <p>Use timestamp fields such as TanggalPengajuan, TanggalPersetujuan, TanggalDrop,
                                        and Timestamp.</p>
                                </div>

                                <div class="incremental-step">
                                    <span>02</span>
                                    <strong>Extract Incrementally</strong>
                                    <p>Filter only new or changed rows instead of reloading the full dataset.</p>
                                </div>

                                <div class="incremental-step">
                                    <span>03</span>
                                    <strong>Transform Subset</strong>
                                    <p>Apply cleaning, validation, business mapping, and fact construction only to
                                        changed data.</p>
                                </div>

                                <div class="incremental-step">
                                    <span>04</span>
                                    <strong>Load Gradually</strong>
                                    <p>Append new fact records and update selected dimensions using SCD Type 2.</p>
                                </div>
                            </div>
                        </article>

                        <article class="result-card">
                            <span>Engineering Insight</span>
                            <h3>The pipeline is designed for historical tracking, not only one-time loading.</h3>
                            <p>
                                Incremental ETL makes the design more scalable because future academic periods can be
                                processed by detecting changes instead of rebuilding the whole warehouse. SCD Type 2
                                also
                                keeps historical changes in dimensions such as student and advisor information.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section visual-gallery-section" id="insights">
            <div class="section-heading reveal">
                <span class="section-kicker">04 · Business Process Coverage</span>
                <h2>Each fact table is tied to a clear FRS business process</h2>
                <p>
                    The Gold model is easier to explain because each fact table represents a measurable academic event.
                    This makes the project portfolio stronger than a generic ETL demo.
                </p>
            </div>

            <div class="business-process-grid">
                <article class="process-card reveal">
                    <span>01</span>
                    <h3>Pengambilan Kelas</h3>
                    <p>
                        Tracks each student-course enrollment event per semester, including total SKS and number of
                        courses taken.
                    </p>
                    <strong>fact_pengambilan_kelas</strong>
                </article>

                <article class="process-card reveal delay-1">
                    <span>02</span>
                    <h3>Drop Kelas</h3>
                    <p>
                        Captures course cancellation events to analyze dropped courses, total dropped SKS, and class
                        adjustment behavior.
                    </p>
                    <strong>fact_drop_kelas</strong>
                </article>

                <article class="process-card reveal delay-2">
                    <span>03</span>
                    <h3>Persetujuan Rencana Studi</h3>
                    <p>
                        Stores final study plan approval status, advisor context, IPS, total SKS, and semester-level FRS
                        information.
                    </p>
                    <strong>fact_rencana_studi</strong>
                </article>

                <article class="process-card reveal delay-3">
                    <span>04</span>
                    <h3>Akses FRS Sebelumnya</h3>
                    <p>
                        Records access events when students view previous study plan periods, useful for monitoring
                        historical FRS usage.
                    </p>
                    <strong>fact_akses_frs</strong>
                </article>
            </div>
        </section>

        <section class="content-section business-section">
            <div class="section-heading reveal">
                <span class="section-kicker">05 · Takeaways</span>
                <h2>What this project communicates as a data engineering portfolio case</h2>
                <p>
                    The project demonstrates the ability to translate an operational academic system into a structured,
                    layered, and analysis-ready data platform.
                </p>
            </div>

            <div class="takeaway-grid etl-takeaway-grid">
                <article class="takeaway-card reveal">
                    <span>01</span>
                    <h3>Clear data lineage</h3>
                    <p>
                        Each layer has a distinct role, making the data flow from OLTP extraction to analytical Gold
                        tables easier to audit and explain.
                    </p>
                </article>

                <article class="takeaway-card reveal delay-1">
                    <span>02</span>
                    <h3>Analytics-ready warehouse design</h3>
                    <p>
                        The Gold layer uses dimensions and facts to support FRS monitoring, enrollment analysis, drop
                        behavior, approval tracking, and access analytics.
                    </p>
                </article>

                <article class="takeaway-card reveal delay-2">
                    <span>03</span>
                    <h3>Engineering-oriented transformation</h3>
                    <p>
                        The project highlights practical transformation choices such as standardization, type
                        conversion,
                        deduplication, missing-value handling, and Parquet optimization.
                    </p>
                </article>

                <article class="takeaway-card reveal delay-3">
                    <span>04</span>
                    <h3>Prepared for future data growth</h3>
                    <p>
                        The incremental ETL concept prepares the pipeline for repeated academic periods without relying
                        only on full reload processing.
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
