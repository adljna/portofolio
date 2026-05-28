<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project Detail | IndoneSaku</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/project-detail-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/indonesaku.css') }}">
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
            <a href="#research">Research</a>
            <a href="#solution">Solution</a>
        </nav>
    </header>

    <main class="indonesaku-page">
        <section class="hero-section indonesaku-hero" id="overview">
            <div class="hero-copy reveal">
                <div class="eyebrow">
                    <span class="dot"></span>
                    UX Design · Design Thinking · User Research · Usability Testing
                </div>

                <h1>IndoneSaku: A Digital Platform for <span>Traditional Art Performances</span></h1>

                <p class="hero-desc">
                    A mobile app concept designed to bridge traditional artists and audiences by centralizing
                    performance information, ticket purchasing, and cultural discovery in one accessible platform.
                </p>

                <div class="hero-actions">
                    <a href="#process" class="primary-btn">Explore Process</a>
                    <a href="#solution" class="secondary-btn">View Solution</a>
                    <a href="https://www.figma.com/proto/nRTltptESXJJEn6nfmsi2D/Prototype-IndoneSaku?node-id=7017-3437&t=aZotAq30IHNTO1yG-1&scaling=scale-down&content-scaling=fixed&page-id=0%3A850&starting-point-node-id=7017%3A3509"
                        class="secondary-btn github-btn" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-figma"></i>
                        Prototype
                    </a>
                </div>
            </div>

            <div class="hero-visual reveal delay-1" aria-label="IndoneSaku app preview">
                <div class="phone-image-frame">
                    <img src="{{ asset('images/projects/indonesaku/preview.webp') }}"
                        alt="IndoneSaku mobile app preview">
                </div>

                <div class="floating-card card-one">
                    <span>Main Issue</span>
                    <strong>Access Gap</strong>
                </div>

                <div class="floating-card card-two">
                    <span>Design Method</span>
                    <strong>2 Iterations</strong>
                </div>
            </div>
        </section>

        <section class="content-section two-column" id="process">
            <div class="section-copy reveal">
                <span class="section-kicker">01 · Design Process</span>
                <h2>Design Thinking was used to understand both audience and artist needs</h2>
                <p>
                    The project followed a design thinking approach across two iterations, starting from social media
                    observation and user research, then moving into problem definition, feature ideation, prototype
                    design, and testing.
                </p>
            </div>

            <div class="pipeline-card reveal delay-1">
                <div class="pipeline-step">
                    <span>01</span>
                    <div>
                        <h3>Empathize</h3>
                        <p>
                        <p>
                            Conducted social media observation, surveys, and in-depth interviews with audiences and
                            traditional
                            artists, then used empathy maps to identify key problems, needs, and pain points from both
                            perspectives.
                        </p>
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>02</span>
                    <div>
                        <h3>Define</h3>
                        <p>
                            Built user personas and journey maps to clarify problems around information access,
                            ticketing, promotion, and audience reach.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>03</span>
                    <div>
                        <h3>Ideate</h3>
                        <p>
                            Generated solution ideas from the insights gathered and prioritized five main features based
                            on the most repeated user
                            pain points.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>04</span>
                    <div>
                        <h3>Prototype</h3>
                        <p>
                            Designed mobile app screens and a visual system using a clean interface, cultural accents,
                            and simplified user flows.
                        </p>
                    </div>
                </div>

                <div class="pipeline-step">
                    <span>05</span>
                    <div>
                        <h3>Testing</h3>
                        <p>
                            Validated whether the proposed flow could help users discover performances and complete
                            ticket-related actions more easily.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section glass-section" id="research">
            <div class="section-heading reveal">
                <span class="section-kicker">02 · User Research</span>
                <h2>The main problem is not only interest, but limited and scattered access to information</h2>
                <p>
                    Research showed that people still have interest in traditional art performances, but they often face
                    difficulty finding centralized information, suitable schedules, and efficient ticketing access.
                </p>
            </div>

            <div class="indonesaku-chart-grid">
                <article class="chart-card reveal">
                    <div class="card-title">
                        <h3>Most Common Information Sources</h3>
                    </div>

                    <p class="chart-intro">
                        Social media is the most common source of information, followed by friends or relatives.
                    </p>

                    <div class="horizontal-chart">
                        <div class="chart-row">
                            <span>Social Media</span>
                            <div class="track">
                                <div class="fill" style="width: 100%;"></div>
                            </div>
                            <strong>78</strong>
                        </div>

                        <div class="chart-row">
                            <span>Friends/Relatives</span>
                            <div class="track">
                                <div class="fill" style="width: 91%;"></div>
                            </div>
                            <strong>71</strong>
                        </div>

                        <div class="chart-row">
                            <span>Pamphlets/Brochures</span>
                            <div class="track">
                                <div class="fill" style="width: 40%;"></div>
                            </div>
                            <strong>31</strong>
                        </div>

                        <div class="chart-row">
                            <span>Art Communities/Forums</span>
                            <div class="track">
                                <div class="fill" style="width: 32%;"></div>
                            </div>
                            <strong>25</strong>
                        </div>

                        <div class="chart-row">
                            <span>Advertisements</span>
                            <div class="track">
                                <div class="fill" style="width: 23%;"></div>
                            </div>
                            <strong>18</strong>
                        </div>
                    </div>
                </article>

                <article class="chart-card reveal delay-1">
                    <div class="card-title">
                        <h3>Barriers to Traditional Shows</h3>
                    </div>

                    <p class="chart-intro">
                        Limited access to information became the strongest reason.
                    </p>

                    <div class="horizontal-chart barrier-chart">
                        <div class="chart-row">
                            <span>Limited Access to Information</span>
                            <div class="track">
                                <div class="fill" style="width: 100%;"></div>
                            </div>
                            <strong>57</strong>
                        </div>

                        <div class="chart-row">
                            <span>Inaccessible Location</span>
                            <div class="track">
                                <div class="fill" style="width: 86%;"></div>
                            </div>
                            <strong>49</strong>
                        </div>

                        <div class="chart-row">
                            <span>Unsuitable Schedule</span>
                            <div class="track">
                                <div class="fill" style="width: 56%;"></div>
                            </div>
                            <strong>32</strong>
                        </div>

                        <div class="chart-row">
                            <span>No Shows Matching Preferences</span>
                            <div class="track">
                                <div class="fill" style="width: 42%;"></div>
                            </div>
                            <strong>24</strong>
                        </div>

                        <div class="chart-row">
                            <span>Price Does Not Fit Budget</span>
                            <div class="track">
                                <div class="fill" style="width: 16%;"></div>
                            </div>
                            <strong>9</strong>
                        </div>
                    </div>
                </article>
            </div>

            <div class="research-insight-grid">
                <article class="result-card reveal">
                    <span>Audience Insight</span>
                    <h3>Users need centralized discovery</h3>
                    <p>
                        Audiences often rely on social media, but information is scattered and difficult to compare
                        based on location, schedule, and personal preferences.
                    </p>
                </article>

                <article class="result-card reveal delay-1">
                    <span>Artist Insight</span>
                    <h3>Artists need better promotion and ticket management</h3>
                    <p>
                        Traditional artists still depend heavily on manual promotion and confirmation, making it harder
                        to reach wider audiences and manage attendee data systematically.
                    </p>
                </article>
            </div>
        </section>

        <section class="content-section" id="define">
            <div class="section-heading reveal">
                <span class="section-kicker">03 · Problem Definition</span>
                <h2>Two personas were created to represent the audience and artist perspectives</h2>
                <p>
                    The audience persona focuses on finding relevant performances and purchasing tickets easily, while
                    the artist persona focuses on promotion, audience reach, and efficient ticket sales.
                </p>
            </div>

            <div class="persona-grid">
                <article class="persona-card reveal delay-1">
                    <div class="persona-avatar audience">Z</div>
                    <div class = "persona-content">
                        <span>Audience Persona</span>
                        <h3>Ziza Gutawa</h3>
                        <p>
                            A university student interested in traditional art performances, but needs easier access to
                            reliable,
                            relevant, and location-based event information.

                        </p>
                    </div>
                </article>

                <article class="persona-card reveal delay-1">
                    <div class="persona-avatar artist">J</div>
                    <div>
                        <span>Artist Persona</span>
                        <h3>Joko Sumanto</h3>
                        <p>
                            A traditional artist who wants to bring his performances to a wider audience, but needs a
                            more
                            effective way to promote events, sell tickets, and manage audience data.
                        </p>
                    </div>
                </article>
            </div>
        </section>

        <section class="content-section visual-gallery-section" id="solution">
            <div class="section-heading reveal">
                <span class="section-kicker">04 · Solution</span>
                <h2>IndoneSaku combines event discovery, cultural education, and ticketing in one platform</h2>
                <p>
                    The proposed solution is not only a performance listing app, but also a bridge between audiences who
                    want to explore traditional arts and artists who need a more accessible digital channel.
                </p>
            </div>

            <div class="solution-layout">
                <div class="feature-list reveal">
                    <article class="feature-card">
                        <span>01</span>
                        <div>
                            <h3>Personalized Home</h3>
                            <p>
                                Recommends performances based on interest, location, and shows the user may like.
                            </p>
                        </div>
                    </article>

                    <article class="feature-card">
                        <span>02</span>
                        <div>
                            <h3>Search</h3>
                            <p>
                                Helps users find performances through category, location, schedule, and preference-based
                                filtering.
                            </p>
                        </div>
                    </article>

                    <article class="feature-card">
                        <span>03</span>
                        <div>
                            <h3>Ticket Purchase</h3>
                            <p>
                                Simplifies reservation and payment flows so users do not need to confirm tickets
                                manually.
                            </p>
                        </div>
                    </article>

                    <article class="feature-card">
                        <span>04</span>
                        <div>
                            <h3>Enseniklopedia</h3>
                            <p>
                                Provides accessible articles to increase public understanding of traditional Indonesian
                                arts.
                            </p>
                        </div>
                    </article>

                    <article class="feature-card">
                        <span>05</span>
                        <div>
                            <h3>Create Performance</h3>
                            <p>
                                Allows artists to upload events, manage ticket sales, and reach audiences through a
                                digital platform.
                            </p>
                        </div>
                    </article>
                </div>

                <div class="solution-preview reveal delay-1">
                    <div class="phone-image-frame solution-image-frame">
                        <img src="{{ asset('images/projects/indonesaku/preview.webp') }}"
                            alt="IndoneSaku prototype screens">
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section iteration-section" id="iteration">
            <div class="section-heading reveal">
                <span class="section-kicker">05 · Iteration & UX Improvement</span>
                <h2>Usability testing helped us refine the experience through feature improvements</h2>
                <p>
                    Initial testing revealed several usability issues, so we used user feedback to improve the features
                    and refine the interaction flow. After these improvements, we conducted a second round of testing
                    using Maze task scenarios and a User Experience Questionnaire to evaluate the updated prototype.
                </p>
            </div>

            <div class="iteration-layout">
                <article class="testing-summary-card reveal">
                    <div class="card-title">
                        <h3>Maze Task Scenario Result</h3>
                    </div>

                    <div class="success-highlight">
                        <span>Overall Success Rate</span>
                        <strong>100%</strong>
                        <p>All testers successfully completed the assigned task scenarios.</p>
                    </div>

                    <div class="task-metric-grid">
                        <article>
                            <span>Task 1</span>
                            <h4>Use Calendar</h4>
                            <div class="task-stats">
                                <p><strong>0%</strong> Missclick</p>
                                <p><strong>6.5s</strong> Avg. Duration</p>
                            </div>
                        </article>

                        <article>
                            <span>Task 2</span>
                            <h4>Read Artist Profile</h4>
                            <div class="task-stats">
                                <p><strong>28.6%</strong> Missclick</p>
                                <p><strong>9.9s</strong> Avg. Duration</p>
                            </div>
                        </article>

                        <article>
                            <span>Task 3</span>
                            <h4>Search & Buy Ticket</h4>
                            <div class="task-stats">
                                <p><strong>18.5%</strong> Missclick</p>
                                <p><strong>47.7s</strong> Avg. Duration</p>
                            </div>
                        </article>

                        <article>
                            <span>Task 4</span>
                            <h4>Read Encyclopedia Article</h4>
                            <div class="task-stats">
                                <p><strong>11.1%</strong> Missclick</p>
                                <p><strong>7.6s</strong> Avg. Duration</p>
                            </div>
                        </article>
                    </div>
                </article>

                <article class="ueq-card reveal delay-1">
                    <div class="card-title">
                        <h3>UEQ Comparison</h3>
                    </div>

                    <p class="chart-intro">
                        The second iteration showed stronger results across most UX dimensions, especially in
                        perspicuity, dependability, and attractiveness.
                    </p>

                    <div class="ueq-chart">
                        <div class="ueq-row">
                            <span>Novelty</span>
                            <div class="ueq-bars">
                                <div class="ueq-track">
                                    <div class="ueq-fill iteration-two" style="width: 62%;"></div>
                                </div>
                                <div class="ueq-track light">
                                    <div class="ueq-fill iteration-one" style="width: 60%;"></div>
                                </div>
                            </div>
                            <strong>Excellent</strong>
                        </div>

                        <div class="ueq-row">
                            <span>Stimulation</span>
                            <div class="ueq-bars">
                                <div class="ueq-track">
                                    <div class="ueq-fill iteration-two" style="width: 84%;"></div>
                                </div>
                                <div class="ueq-track light">
                                    <div class="ueq-fill iteration-one" style="width: 84%;"></div>
                                </div>
                            </div>
                            <strong>Excellent</strong>
                        </div>

                        <div class="ueq-row">
                            <span>Dependability</span>
                            <div class="ueq-bars">
                                <div class="ueq-track">
                                    <div class="ueq-fill iteration-two" style="width: 69%;"></div>
                                </div>
                                <div class="ueq-track light">
                                    <div class="ueq-fill iteration-one" style="width: 60%;"></div>
                                </div>
                            </div>
                            <strong>Excellent</strong>
                        </div>

                        <div class="ueq-row">
                            <span>Efficiency</span>
                            <div class="ueq-bars">
                                <div class="ueq-track">
                                    <div class="ueq-fill iteration-two" style="width: 61%;"></div>
                                </div>
                                <div class="ueq-track light">
                                    <div class="ueq-fill iteration-one" style="width: 57%;"></div>
                                </div>
                            </div>
                            <strong>Good</strong>
                        </div>

                        <div class="ueq-row">
                            <span>Perspicuity</span>
                            <div class="ueq-bars">
                                <div class="ueq-track">
                                    <div class="ueq-fill iteration-two" style="width: 73%;"></div>
                                </div>
                                <div class="ueq-track light">
                                    <div class="ueq-fill iteration-one" style="width: 47%;"></div>
                                </div>
                            </div>
                            <strong>Excellent</strong>
                        </div>

                        <div class="ueq-row">
                            <span>Attractiveness</span>
                            <div class="ueq-bars">
                                <div class="ueq-track">
                                    <div class="ueq-fill iteration-two" style="width: 82%;"></div>
                                </div>
                                <div class="ueq-track light">
                                    <div class="ueq-fill iteration-one" style="width: 67%;"></div>
                                </div>
                            </div>
                            <strong>Excellent</strong>
                        </div>
                    </div>

                    <div class="ueq-legend">
                        <span><i class="legend-two"></i> Iteration 2</span>
                        <span><i class="legend-one"></i> Iteration 1</span>
                    </div>
                </article>
            </div>

            <div class="improvement-grid">
                <article class="improvement-card reveal">
                    <span>01</span>
                    <h3>Clearer navigation flow</h3>
                    <p>
                        Calendar, search, ticketing, artist profile, and encyclopedia flows were refined to make
                        key actions easier to find and complete.
                    </p>
                </article>

                <article class="improvement-card reveal delay-1">
                    <span>02</span>
                    <h3>More understandable interface</h3>
                    <p>
                        The improvement in perspicuity shows that users could understand the interface and task
                        direction more easily in the second iteration.
                    </p>
                </article>

                <article class="improvement-card reveal delay-2">
                    <span>03</span>
                    <h3>Better ticketing experience</h3>
                    <p>
                        The ticket purchase flow was tested as the longest task, helping us identify where users
                        needed clearer steps and reduced friction.
                    </p>
                </article>

                <article class="improvement-card reveal delay-3">
                    <span>04</span>
                    <h3>Stronger overall usability</h3>
                    <p>
                        A 100% task success rate indicated that the improved prototype could support users in
                        completing the core experience.
                    </p>
                </article>
            </div>
        </section>

        <section class="content-section business-section">
            <div class="section-heading reveal">
                <span class="section-kicker">06 · Project Takeaways</span>
                <h2>What this project contributes from a UX and cultural access perspective</h2>
                <p>
                    IndoneSaku positions digital product design as a way to reduce access barriers, support artists, and
                    make traditional performances easier to discover for younger audiences.
                </p>
            </div>

            <div class="takeaway-grid indonesaku-takeaway-grid">
                <article class="takeaway-card reveal">
                    <span>01</span>
                    <h3>Centralize scattered information</h3>
                    <p>
                        The app addresses the main research finding by gathering performance information into one
                        searchable platform.
                    </p>
                </article>

                <article class="takeaway-card reveal delay-1">
                    <span>02</span>
                    <h3>Simplify ticket access</h3>
                    <p>
                        A clearer ticket flow reduces manual confirmation and helps users complete the purchase process
                        more efficiently.
                    </p>
                </article>

                <article class="takeaway-card reveal delay-2">
                    <span>03</span>
                    <h3>Support traditional artists</h3>
                    <p>
                        Artists gain a digital space to promote shows, manage sales, and record audience data more
                        systematically.
                    </p>
                </article>

                <article class="takeaway-card reveal delay-3">
                    <span>04</span>
                    <h3>Encourage cultural discovery</h3>
                    <p>
                        The encyclopedia feature helps users understand traditional arts, not only consume events as
                        transactions.
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
            const sections = ["overview", "process", "research", "solution"]
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
        });
    </script>
</body>

</html>
