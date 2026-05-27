<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nailah Adlina | Personal Website</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio-shared.css') }}">
</head>

<body class="home-page">
    <div class="bg-fixed"></div>
    <x-portfolio-navbar active="about" />
    <main class="page">
        <section class="hero">
            <div class="hero-content">
                <div class="hero-title blur-text" data-animate-by="words">
                    Hi, I’m <br>
                    <span>Nailah Adlina!</span>
                </div>
                <div class="hero-desc">
                    <p>A third-year Information Systems student at Sepuluh Nopember Institute of Technology with a
                        strong interest in data analytics, business intelligence, and data-driven solutions.</p>
                </div>
                <div class="about-tags social-tags">
                    <a href="https://mailto:adljnaa@gmail.com" class="tag">
                        <i class="fas fa-envelope"></i> Email
                    </a>

                    <a href="https://www.linkedin.com/in/nailah-adlina/" class="tag">
                        <i class="fab fa-linkedin"></i> LinkedIn
                    </a>

                    <a href="https://github.com/adljna" class="tag">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                </div>
                <a href="#about" class="scroll-btn">
                    View More ↓
                </a>
            </div>
        </section>
        <section id="about" class="stack about">

            <div class="about-layout">

                <!-- TOP -->
                <div class="about-top">

                    <!-- LEFT -->
                    <div class="about-photo-card">
                        <img src="{{ asset('images/profile.webp') }}" alt="Profile photo">
                    </div>

                    <!-- RIGHT -->
                    <div class="about-info">
                        <h2 class="about-title">
                            Let’s Get To Know Me!
                        </h2>

                        <p class="about-text">
                            Hi, I’m Adlina, an Information Systems student who has been exploring different areas within
                            technology and business, from business processes, UX design, IT governance, IT service
                            management, to data-related fields. Through my coursework and projects, I gradually found
                            myself most interested in data analytics because I enjoy working with data, finding
                            patterns, and turning information into insights that can support better decision-making!

                            Lately, I have been focusing more on data analytics, visualization, machine learning, and
                            NLP projects as a way to deepen my skills and understand how data can be used to solve real
                            problems. I’m still continuously learning and exploring, but I’m excited to grow further in
                            this field and build more impactful data-driven solutions.
                        </p>
                    </div>

                </div>

                <!-- BOTTOM -->
                <div class="tech-card">
                    <h3 class="tech-title">Stack</h3>

                    <div class="stack-wrapper">

                        <div class="stack-group">
                            <h4>Data Analysis</h4>

                            <div class="stack-items">
                                <span class="stack-pill">
                                    <i class="devicon-python-plain"></i>
                                    Python
                                </span>

                                <span class="stack-pill">
                                    <img src="{{ asset('images/pandas.webp') }}" alt="Pandas">
                                    Pandas
                                </span>

                                <span class="stack-pill">
                                    <img src="{{ asset('images/numpy.webp') }}" alt="NumPy">
                                    NumPy
                                </span>

                                <span class="stack-pill">
                                    <i class="devicon-scikitlearn-plain"></i>
                                    Scikit-learn
                                </span>
                            </div>
                        </div>

                        <div class="stack-group">
                            <h4>Visualization</h4>

                            <div class="stack-items">
                                <div class="stack-items">

                                    <span class="stack-pill">
                                        <img src="{{ asset('images/pbi.webp') }}" alt="Power BI">
                                        Power BI
                                    </span>

                                    <span class="stack-pill">
                                        <img src="{{ asset('images/tableau.webp') }}" alt="Tableau">
                                        Tableau
                                    </span>

                                    <span class="stack-pill">
                                        <img src="{{ asset('images/matplotlib.webp') }}" alt="Matplotlib">
                                        Matplotlib
                                    </span>

                                    <span class="stack-pill">
                                        <img src="{{ asset('images/seaborn.webp') }}" alt="Seaborn">
                                        Seaborn
                                    </span>

                                </div>
                            </div>
                        </div>

                        <div class="stack-group">
                            <h4>Database & Tools</h4>

                            <div class="stack-items">
                                <span class="stack-pill">
                                    <img src="{{ asset('images/postgresql.webp') }}" alt="PostgreSQL">
                                    PostgreSQL
                                </span>

                                <span class="stack-pill">
                                    <i class="devicon-mysql-original"></i>
                                    MySQL
                                </span>

                                <span class="stack-pill">
                                    <img src="{{ asset('images/neo4j.webp') }}" alt="Neo4j">
                                    Neo4j
                                </span>

                                <span class="stack-pill">
                                    <i class="devicon-git-plain"></i>
                                    Git
                                </span>
                            </div>
                        </div>

                    </div>
                </div>

        </section>
        <section id="experience" class="stack experience">
            <div class="experience-inner">
                <div class="section-heading experience-heading"> Experiences
                    <p> Beyond academics, I take part in organizational initiatives, social activities, and
                        competitions. </p>
                </div>

                <div class="experience-circular-gallery" id="experienceGallery">
                    <article class="experience-gallery-card">
                        <div class="experience-gallery-image">
                            <img src="{{ asset('images/experience/mms.webp') }}"
                                alt="Astra Infra Toll Road Tangerang Merak">
                        </div>

                        <div class="experience-gallery-text">
                            <span>Jan - Feb 2026</span>
                            <h3>Astra Infra Toll Road Tangerang Merak</h3>
                            <h4>Operational Intern</h4>
                            <p>
                                Analyzed yearly toll road accident and tire burst incident data through cleaning,
                                categorization, and daily operational reporting to identify trends, risk patterns,
                                and
                                support monitoring and evaluation.
                            </p>
                        </div>
                    </article>

                    <article class="experience-gallery-card">
                        <div class="experience-gallery-image">
                            <img src="{{ asset('images/experience/assistant.webp') }}"
                                alt="Information Systems Teaching Assistant">
                        </div>

                        <div class="experience-gallery-text">
                            <span>Feb - Dec 2025</span>
                            <h3>Information Systems ITS</h3>
                            <h4>Teaching Assistant</h4>
                            <p>
                                Assisted 50+ students across Basic Programming, Data Structures & Algorithms, and
                                Enterprise System courses through tutorials, practical sessions, grading, debugging
                                support, and SAP ERP simulations.
                            </p>
                        </div>
                    </article>

                    <article class="experience-gallery-card">
                        <div class="experience-gallery-image">
                            <img src="{{ asset('images/experience/ise.webp') }}" alt="Head Marketing ISE! 2025">
                        </div>

                        <div class="experience-gallery-text">
                            <span>Apr - Dec 2025</span>
                            <h3>Informations Systems <br> Expo 2025</h3>
                            <h4>Head of Marketing</h4>
                            <p>
                                Led marketing strategy, team coordination, and campaign planning to expand event
                                visibility and audience reach. Directed digital campaigns contributing to 10M+ total
                                views and 100%+ audience engagement growth.

                            </p>
                        </div>
                    </article>

                    <article class="experience-gallery-card">
                        <div class="experience-gallery-image">
                            <img src="{{ asset('images/experience/hmsi.webp') }}"
                                alt="HMSI ITS Staff of Social Development">
                        </div>

                        <div class="experience-gallery-text">
                            <span>Mar - Dec 2025</span>
                            <h3>HMSI ITS</h3>
                            <h4>Staff of Social Development</h4>
                            <p>
                                Produced 2 SI Menyapa video contents with 17K+ total views and supported SINERGI
                                community service and SIMETRI IT teaching outreach programs.

                            </p>
                        </div>
                    </article>

                    <article class="experience-gallery-card">
                        <div class="experience-gallery-image">
                            <img src="{{ asset('images/experience/arkavidia.webp') }}" alt="UX Design Project">
                        </div>

                        <div class="experience-gallery-text">
                            <span>May 2025</span>
                            <h3>Arkavidia 9.0 ITB</h3>
                            <h4>Best Video Winner UX Design Competition</h4>
                            <p>
                                Selected as a finalist and awarded Best Video Winner in the UX Design Competition at
                                Arkavidia 9.0 ITB.
                            </p>
                        </div>
                    </article>

                    <article class="experience-gallery-card">
                        <div class="experience-gallery-image">
                            <img src="{{ asset('images/experience/ilits.webp') }}" alt="Ini Lho ITS! 2025">
                        </div>

                        <div class="experience-gallery-text">
                            <span>Sept 2024 - June 2025</span>
                            <h3>Ini Lho ITS! 2025</h3>
                            <h4>Expert Staff Marketing Strategist</h4>
                            <p>
                                Guided online marketing campaign planning and digital promotion strategies to
                                increase
                                audience engagement and enhance event visibility across social media platforms.
                            </p>
                        </div>
                    </article>
                </div>
            </div>

        </section>
        <section class="section-divider"> </section>
        <section id="project" class="stack project">

            <div class="section-title">Featured Projects</div>

            <div class="project-carousel-wrapper">
                <div class="project-carousel" id="projectCarousel">

                    <article class="project-carousel-card">
                        <a href="{{ route('projects.powerbi') }}" class="project-card-link"
                            aria-label="Open Power BI project">

                            <span class="project-link">
                                ↗
                            </span>

                            <img src="{{ asset('images/project1.webp') }}"
                                alt="Power BI IT Balanced Scorecard Dashboard">

                            <div class="project-overlay">
                                <h2>IT BSC Dashboard Development for Industrial Performance Monitoring</h2>
                                <p>
                                    Developed a Power BI IT Balanced Scorecard dashboard using 5-year data from 1 head
                                    office and 3 branches with 20 KPIs; designed KPI frameworks from annual reports to
                                    support data-driven decision making.
                                </p>

                                <div class="project-tags">
                                    <span>Power BI</span>
                                    <span>Business Intelligence</span>
                                    <span>ETL</span>
                                </div>
                            </div>
                        </a>
                    </article>

                    <article class="project-carousel-card">
                        <a href="{{ route('projects.ali') }}" class="project-card-link"
                            aria-label="Open NLP news sentiment project">
                            <span class="project-link">
                                ↗
                            </span>

                            <img src="{{ asset('images/project2.webp') }}"
                                alt="Indonesian news sentiment analysis project">

                            <div class="project-overlay">
                                <h2>Sentiment Analysis of Ali Khamenei's Death on Indonesian News Articles</h2>
                                <p>
                                    Built an NLP pipeline on 500 news articles across 5 news platforms using Python,
                                    IndoBERT, and Sastrawi; extracted 27,659 entities and identified dominant positive
                                    geopolitical sentiment.
                                </p>

                                <div class="project-tags">
                                    <span>NLP</span>
                                    <span>Python</span>
                                    <span>Text Analytics</span>
                                </div>
                            </div>
                        </a>
                    </article>

                    <article class="project-carousel-card">
                        <a href="{{ route('projects.blu') }}" class="project-card-link"
                            aria-label="Open blu sentiment project">
                            <span class="project-link">
                                ↗
                            </span>

                            <img src="{{ asset('images/project3.webp') }}"
                                alt="blu by BCA Digital sentiment analysis">

                            <div class="project-overlay">
                                <h2>Sentiment Analysis of blu by BCA Digital on Google Play Reviews</h2>
                                <p>
                                    Built a sentiment analysis model on 29K+ blu by BCA Digital reviews using NLP and
                                    machine learning. Achieved 85.07% accuracy with Logistic Regression.
                                </p>

                                <div class="project-tags">
                                    <span>NLP</span>
                                    <span>Machine Learning</span>
                                    <span>Python</span>
                                </div>
                            </div>
                        </a>
                    </article>

                    <article class="project-carousel-card">
                        <a href="{{ route('projects.etl') }}" class="project-card-link"
                            aria-label="Open data lakehouse project">
                            <span class="project-link">
                                ↗
                            </span>
                        </a>

                        <img src="{{ asset('images/project4.webp') }}" alt="Data lakehouse project">

                        <div class="project-overlay">
                            <h2>Data Lakehouse Design for Student Course Registration System</h2>
                            <p>
                                Designed an end-to-end Data Lakehouse system using MySQL, Python, and Kimball
                                dimensional modeling. Built a Medallion Architecture ETL pipeline from source tables
                                into warehouse-ready fact and dimension tables.
                            </p>

                            <div class="project-tags">
                                <span>Data Engineering</span>
                                <span>MySQL</span>
                                <span>Python</span>
                                <span>Medallion</span>
                            </div>
                        </div>
                        </a>
                    </article>

                    <article class="project-carousel-card">
                        <a href="{{ route('projects.clustering') }}" class="project-card-link"
                            aria-label="Open clustering project">
                            <span class="project-link">
                                ↗
                            </span>

                            <img src="{{ asset('images/project5.webp') }}" alt="Health burden clustering project">

                            <div class="project-overlay">
                                <h2>Health Burden Clustering in South Korea Using K-Means</h2>
                                <p>
                                    Performed clustering analysis on South Korea health burden data using K-Means,
                                    optimized with Elbow Method and Silhouette Score to identify variations in disease
                                    prevalence, mortality rates, and healthcare access.
                                </p>

                                <div class="project-tags">
                                    <span>Data Science</span>
                                    <span>Clustering</span>
                                    <span>RStudio</span>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>

                <div class="project-carousel-nav" aria-label="Project carousel navigation">
                    <button type="button" class="project-nav-arrow prev" id="projectPrevBtn"
                        aria-label="Previous project">
                        ←
                    </button>

                    <button type="button" class="project-nav-arrow next" id="projectNextBtn"
                        aria-label="Next project">
                        →
                    </button>
                </div>

                <div class="project-indicators" id="projectIndicators"></div>
            </div>


        </section>
    </main>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        /* =========================
           BLUR TEXT HERO
        ========================= */
        const blurTexts = document.querySelectorAll(".blur-text");

        blurTexts.forEach((textElement) => {
            const originalHTML = textElement.innerHTML;

            const parts = originalHTML
                .split(/(<br\s*\/?>)/gi)
                .map(part => {
                    if (part.match(/<br\s*\/?>/gi)) {
                        return part;
                    }

                    return part
                        .trim()
                        .split(/\s+/)
                        .filter(word => word.length > 0)
                        .map(word => {
                            return `<span class="blur-word">${word}&nbsp;</span>`;
                        })
                        .join("");
                })
                .join("");

            textElement.innerHTML = parts;

            const words = textElement.querySelectorAll(".blur-word");

            textElement.classList.add("is-ready");

            words.forEach((word, index) => {
                word.style.animationDelay = `${index * 0.12}s`;
            });
        });

        const navLinks = document.querySelectorAll(".nav-menu a");
        const sections = document.querySelectorAll("section[id]");

        function updateActiveNav() {
            let currentSection = "";

            sections.forEach((section) => {
                const sectionTop = section.offsetTop - 160;
                const sectionHeight = section.offsetHeight;

                if (
                    window.scrollY >= sectionTop &&
                    window.scrollY < sectionTop + sectionHeight
                ) {
                    currentSection = section.getAttribute("id");
                }
            });

            navLinks.forEach((link) => {
                link.classList.remove("active");

                if (link.getAttribute("href") === `#${currentSection}`) {
                    link.classList.add("active");
                }
            });
        }

        navLinks.forEach((link) => {
            link.addEventListener("click", function() {
                navLinks.forEach((nav) => nav.classList.remove("active"));
                this.classList.add("active");
            });
        });

        window.addEventListener("scroll", updateActiveNav);
        updateActiveNav();


        /* =========================
           PROJECT CAROUSEL
        ========================= */
        const projectCarousel = document.getElementById("projectCarousel");
        const projectCards = document.querySelectorAll(".project-carousel-card");
        const projectIndicators = document.getElementById("projectIndicators");
        const projectPrevBtn = document.getElementById("projectPrevBtn");
        const projectNextBtn = document.getElementById("projectNextBtn");

        if (projectCarousel && projectCards.length > 0 && projectIndicators) {
            let projectCurrent = 0;
            let startX = 0;
            let currentX = 0;
            let isDraggingProject = false;

            function createProjectIndicators() {
                projectIndicators.innerHTML = "";

                projectCards.forEach((_, index) => {
                    const indicator = document.createElement("button");
                    indicator.classList.add("project-indicator");

                    if (index === projectCurrent) {
                        indicator.classList.add("active");
                    }

                    indicator.addEventListener("click", () => {
                        projectCurrent = index;
                        updateProjectCarousel();
                    });

                    projectIndicators.appendChild(indicator);
                });
            }

            function updateProjectCarousel() {
                const cardWidth = projectCards[0].offsetWidth;
                const gap = 32;
                const offset = projectCurrent * (cardWidth + gap);

                projectCarousel.style.transform = `translateX(-${offset}px)`;

                projectCards.forEach((card, index) => {
                    card.classList.remove("active", "prev", "next");

                    if (index === projectCurrent) {
                        card.classList.add("active");
                    } else if (index === projectCurrent - 1) {
                        card.classList.add("prev");
                    } else if (index === projectCurrent + 1) {
                        card.classList.add("next");
                    }
                });

                const indicators = document.querySelectorAll(".project-indicator");

                indicators.forEach((indicator, index) => {
                    indicator.classList.toggle("active", index === projectCurrent);
                });

                if (projectPrevBtn) {
                    projectPrevBtn.disabled = projectCurrent === 0;
                }

                if (projectNextBtn) {
                    projectNextBtn.disabled = projectCurrent === projectCards.length - 1;
                }
            }

            function goToNextProject() {
                if (projectCurrent < projectCards.length - 1) {
                    projectCurrent++;
                    updateProjectCarousel();
                }
            }

            function goToPrevProject() {
                if (projectCurrent > 0) {
                    projectCurrent--;
                    updateProjectCarousel();
                }
            }

            projectNextBtn?.addEventListener("click", goToNextProject);
            projectPrevBtn?.addEventListener("click", goToPrevProject);

            projectCarousel.addEventListener("mousedown", (e) => {
                isDraggingProject = true;
                startX = e.clientX;
                projectCarousel.style.transition = "none";
            });

            window.addEventListener("mousemove", (e) => {
                if (!isDraggingProject) return;

                currentX = e.clientX - startX;

                const cardWidth = projectCards[0].offsetWidth;
                const gap = 32;
                const offset = projectCurrent * (cardWidth + gap);

                projectCarousel.style.transform = `translateX(calc(-${offset}px + ${currentX}px))`;
            });

            window.addEventListener("mouseup", () => {
                if (!isDraggingProject) return;

                isDraggingProject = false;
                projectCarousel.style.transition = "transform 0.65s cubic-bezier(0.22, 1, 0.36, 1)";

                if (currentX < -80) {
                    goToNextProject();
                } else if (currentX > 80) {
                    goToPrevProject();
                } else {
                    updateProjectCarousel();
                }

                currentX = 0;
            });

            projectCarousel.addEventListener("touchstart", (e) => {
                isDraggingProject = true;
                startX = e.touches[0].clientX;
                projectCarousel.style.transition = "none";
            });

            window.addEventListener("touchmove", (e) => {
                if (!isDraggingProject) return;

                currentX = e.touches[0].clientX - startX;

                const cardWidth = projectCards[0].offsetWidth;
                const gap = 32;
                const offset = projectCurrent * (cardWidth + gap);

                projectCarousel.style.transform = `translateX(calc(-${offset}px + ${currentX}px))`;
            });

            window.addEventListener("touchend", () => {
                if (!isDraggingProject) return;

                isDraggingProject = false;
                projectCarousel.style.transition = "transform 0.65s cubic-bezier(0.22, 1, 0.36, 1)";

                if (currentX < -80) {
                    goToNextProject();
                } else if (currentX > 80) {
                    goToPrevProject();
                } else {
                    updateProjectCarousel();
                }

                currentX = 0;
            });

            createProjectIndicators();
            updateProjectCarousel();

            window.addEventListener("resize", updateProjectCarousel);
        }


        /* =========================
           EXPERIENCE DRAG GALLERY
        ========================= */
        const experienceGallery = document.getElementById("experienceGallery");

        if (experienceGallery) {
            let isDraggingExperience = false;
            let experienceStartX = 0;
            let experienceScrollLeft = 0;
            let experienceVelocity = 0;
            let experienceLastX = 0;
            let experienceRAF;

            function updateExperienceCards() {
                const cards = experienceGallery.querySelectorAll(".experience-gallery-card");
                const galleryRect = experienceGallery.getBoundingClientRect();
                const centerX = galleryRect.left + galleryRect.width / 2;

                cards.forEach((card) => {
                    const rect = card.getBoundingClientRect();
                    const cardCenter = rect.left + rect.width / 2;
                    const distance = cardCenter - centerX;
                    const normalized = distance / centerX;

                    const rotate = normalized * -8;
                    const translateY = Math.abs(normalized) * 28;
                    const scale = 1 - Math.min(Math.abs(normalized) * 0.10, 0.10);
                    const opacity = 1 - Math.min(Math.abs(normalized) * 0.22, 0.22);

                    card.style.transform = `
                        translateY(${translateY}px)
                        rotateZ(${rotate}deg)
                        scale(${scale})
                    `;

                    card.style.opacity = opacity;
                });
            }

            function animateExperienceMomentum() {
                if (Math.abs(experienceVelocity) > 0.15) {
                    experienceGallery.scrollLeft -= experienceVelocity;
                    experienceVelocity *= 0.94;
                    updateExperienceCards();
                    experienceRAF = requestAnimationFrame(animateExperienceMomentum);
                }
            }

            experienceGallery.addEventListener("mousedown", (e) => {
                isDraggingExperience = true;
                experienceGallery.classList.add("is-dragging");

                experienceStartX = e.pageX;
                experienceLastX = e.pageX;
                experienceScrollLeft = experienceGallery.scrollLeft;
                experienceVelocity = 0;

                cancelAnimationFrame(experienceRAF);
            });

            window.addEventListener("mousemove", (e) => {
                if (!isDraggingExperience) return;

                e.preventDefault();

                const x = e.pageX;
                const walk = (x - experienceStartX) * 1.35;

                experienceGallery.scrollLeft = experienceScrollLeft - walk;
                experienceVelocity = x - experienceLastX;
                experienceLastX = x;

                updateExperienceCards();
            });

            window.addEventListener("mouseup", () => {
                if (!isDraggingExperience) return;

                isDraggingExperience = false;
                experienceGallery.classList.remove("is-dragging");

                animateExperienceMomentum();
            });

            experienceGallery.addEventListener("touchstart", (e) => {
                isDraggingExperience = true;

                experienceStartX = e.touches[0].pageX;
                experienceLastX = e.touches[0].pageX;
                experienceScrollLeft = experienceGallery.scrollLeft;
                experienceVelocity = 0;

                cancelAnimationFrame(experienceRAF);
            }, {
                passive: true
            });

            experienceGallery.addEventListener("touchmove", (e) => {
                if (!isDraggingExperience) return;

                const x = e.touches[0].pageX;
                const walk = (x - experienceStartX) * 1.25;

                experienceGallery.scrollLeft = experienceScrollLeft - walk;
                experienceVelocity = x - experienceLastX;
                experienceLastX = x;

                updateExperienceCards();
            }, {
                passive: true
            });

            experienceGallery.addEventListener("touchend", () => {
                isDraggingExperience = false;
                animateExperienceMomentum();
            });

            experienceGallery.addEventListener("scroll", updateExperienceCards);
            window.addEventListener("resize", updateExperienceCards);

            updateExperienceCards();
        }

    });
</script>

</html>
