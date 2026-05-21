<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">


    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            scroll-behavior: smooth;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
            color: #ffffff;
            overflow-x: hidden;
        }

        .bg-fixed {
            position: fixed;
            inset: 0;
            z-index: -1;
            background: url('/images/hero-bg.png') center / cover no-repeat;
        }

        .bg-fixed::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.25);
        }

        .navbar {
    position: fixed;
    top: 30px;
    right: 50px;
    z-index: 1000;
}

.nav-menu {
    width: fit-content;
    height: 52px;
    border-radius: 16px;
    background: rgba(255, 255, 255, 0.14);
    backdrop-filter: blur(18px);
    border: 1px solid rgba(255, 255, 255, 0.22);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
    padding: 6px;
    display: flex;
    align-items: center;
    gap: 6px;
}

.nav-menu a {
    height: 40px;
    padding: 0 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    border-radius: 12px;
    white-space: nowrap;
    transition: background 0.25s ease, color 0.25s ease, transform 0.25s ease;
}

.nav-menu a:hover {
    background: rgba(72, 122, 192, 0.45);
}

.nav-menu a.active {
    background: rgba(35, 108, 211, 0.82);
    color: #ffffff;
    box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.12);
}

        .page {
            position: relative;
        }

        .hero {
            position: sticky;
            top: 0;
            min-height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* vertical */
            align-items: center;
            /* horizontal */
            padding: 120px 64px;
            text-align: center;
        }

        .hero-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .stack {
            position: sticky;
            top: 0;
            min-height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 80px 64px;
        }

        .stack.about {
            clip-path: polygon(0 3%,
                    100% 12%,
                    100% 100%,
                    0 100%);
            background: rgba(255, 255, 255, 0.14);
            backdrop-filter: blur(22px);
            -webkit-backdrop-filter: blur(22px);
            border-top: 1px solid rgba(255, 255, 255, 0.25);
            box-shadow: 0 -40px 80px rgba(0, 0, 0, 0.35);
        }


        .about {
            z-index: 1;
        }

        .project {
            z-index: 2;
        }

        .experience {
            z-index: 3;
        }

        .contact {
            z-index: 4;
        }

        .hero-title {
            padding: 40px;
            font-size: 100px;
            line-height: 1.05;
            font-weight: 900;
            font-style: italic;
        }

        /* sembunyikan dulu sebelum JS selesai */
        .blur-text {
            visibility: hidden;
        }

        .blur-text.is-ready {
            visibility: visible;
        }

        .blur-text .blur-word {
            display: inline-block;
            opacity: 0;
            filter: blur(10px);
            transform: translateY(-50px);
            animation: blurReveal 0.7s ease forwards;
            will-change: transform, filter, opacity;
        }

        @keyframes blurReveal {
            0% {
                opacity: 0;
                filter: blur(10px);
                transform: translateY(-50px);
            }

            50% {
                opacity: 0.5;
                filter: blur(5px);
                transform: translateY(5px);
            }

            100% {
                opacity: 1;
                filter: blur(0);
                transform: translateY(0);
            }
        }

        .social-tags {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .social-tags .tag {
            display: flex;
            align-items: center;
            gap: 8px;

            padding: 10px 16px;
            border-radius: 20px;

            text-decoration: none;
            color: #ffffff;
            background: #fff;

            transition: 0.3s ease;
        }

        .social-tags .tag:hover {
            transform: translateY(-2px);
        }

        .hero-desc {
            font-size: 24px;
            font-weight: 500;
            max-width: 700px;
            margin: 0 auto 40px auto;
        }

        .scroll-btn {
            margin-top: 48px;
            font-size: 20px;
            color: #fff;
            text-decoration: none;
            opacity: 0.8;

            animation: float 2s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(6px);
            }
        }

        .section-title {
            font-size: 64px;
            font-style: italic;
            line-height: 1;
            font-weight: 700;
            letter-spacing: -3px;
            text-align: center;
        }

        .about-layout {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .about-top {
            margin-top: 20px;
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 40px;
            align-items: stretch;
        }

        .about-photo-card {
            align-items: center;
            justify-content: center;
        }

        .about-photo-card img {
            width: 100%;
            max-width: 400px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
        }

        .about-info {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 24px;
        }

        .about-left {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .about-title {
            font-size: 64px;
            line-height: 1;
            font-weight: 700;
            letter-spacing: -3px;
        }

        .about-content {
            display: flex;
            flex-direction: column;
            gap: 32px;
        }

        .about-text {
            font-size: 24px;
            line-height: 1.5;
            opacity: 1.0;
        }

        .about-tags {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .about-tags .tag {
            padding: 10px 20px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.22);
            backdrop-filter: blur(10px);
            font-size: 20px;
            white-space: nowrap;
        }

        .tech-card {
            width: 100%;
        }

        .tech-title {
            margin-bottom: 24px;
            font-size: 30px;
            font-weight: 600;
            color: #ffffff;
        }

        .stack-wrapper {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .stack-group {
            padding: 20px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        .stack-group h4 {
            margin-bottom: 16px;
            font-size: 24px;
            font-weight: 500;
            color: rgba(255, 255, 255);
        }

        .stack-items {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .stack-pill {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 999px;
            font-size: 22px;
            color: #ffffff;

            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.18);

            transition: 0.3s ease;
        }

        .stack-pill i {
            font-size: 22px;
        }

        .stack-pill:hover {
            transform: translateY(-2px);
            background: rgba(255, 255, 255, 0.18);
        }

        .stack-pill img {
            width: 20px;
            height: 20px;
            object-fit: contain;
        }

        .stack.project {
            margin-top: -35px;
            padding-top: 120px;
            padding-bottom: 100px;
            position: relative;
            z-index: 2;
            min-height: 110vh;
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            clip-path: polygon(0 8%, 100% 0, 100% 100%, 0 100%);
            border-top: 1px solid rgba(255, 255, 255, 0.25);
            box-shadow: 0 -40px 80px rgba(0, 0, 0, 0.35);
            overflow: hidden;
        }

        .stack.project::after {
            content: "";
            position: absolute;
            inset: 0;
            opacity: 0.04;
            pointer-events: none;
        }

        .project-carousel-wrapper {
            position: relative;
            width: 100%;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            perspective: 1200px;
            z-index: 3;
        }

        .project-carousel {
            position: relative;
            width: 72%;
            height: 82%;
            display: flex;
            align-items: center;
            gap: 32px;
            cursor: grab;
            transform-style: preserve-3d;
            transition: transform 0.65s cubic-bezier(0.22, 1, 0.36, 1);
        }

        .project-carousel:active {
            cursor: grabbing;
        }

        .project-carousel-card {
            position: relative;
            flex: 0 0 100%;
            height: 100%;
            border-radius: 28px;
            overflow: hidden;
            background: #000;
            box-shadow:
                0 40px 80px rgba(0, 0, 0, 0.35),
                inset 0 0 0 1px rgba(255, 255, 255, 0.12);

            opacity: 0.45;
            transform: scale(0.88) rotateY(25deg);
            transition:
                opacity 0.65s ease,
                transform 0.65s cubic-bezier(0.22, 1, 0.36, 1),
                filter 0.65s ease;
            filter: blur(2px);
        }

        .project-carousel-card.active {
            opacity: 1;
            transform: scale(1) rotateY(0deg);
            filter: blur(0);
        }

        .project-carousel-card.prev {
            opacity: 0.55;
            transform: scale(0.9) rotateY(-25deg);
            filter: blur(1.5px);
        }

        .project-carousel-card.next {
            opacity: 0.55;
            transform: scale(0.9) rotateY(25deg);
            filter: blur(1.5px);
        }

        .project-carousel-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .project-link {
            position: absolute;
            top: 24px;
            right: 24px;
            z-index: 5;
            padding: 10px 18px;
            border-radius: 15px;
            font-size: 20px;
            font-weight: 600;
            text-decoration: none;
            color: #fff;

            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.25);

            transition:
                transform 0.2s ease,
                background 0.2s ease,
                box-shadow 0.2s ease;
        }

        .project-link:hover {
            background: rgba(255, 255, 255, 0.28);
            transform: translateY(-1px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35);
        }

        .project-overlay {
            position: absolute;
            left: 32px;
            bottom: 32px;
            max-width: 500px;
            padding: 22px 26px;
            border-radius: 20px;
            background: linear-gradient(to top,
                    rgba(10, 25, 50, 0.25),
                    rgba(10, 25, 50, 0.35));
            backdrop-filter: blur(8px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
            color: #fff;
        }

        .project-overlay h2 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .project-tags {
            margin-top: 12px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .project-tags span {
            padding: 7px 12px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 600;
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        .project-indicators {
            position: absolute;
            bottom: 24px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 5;
        }

        .project-indicator {
            width: 15px;
            height: 15px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.8);
            cursor: pointer;
            transition:
                width 0.25s ease,
                background 0.25s ease,
                transform 0.25s ease;
        }

        .project-indicator.active {
            width: 30px;
            background: #fff;
            transform: scale(1.1);
        }

        .stack.project::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: -1px;
            height: 220px;
            pointer-events: none;
            z-index: 2;
        }

        .section-divider {
            position: relative;
            z-index: 3;
            width: 100%;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(228, 217, 148);
            border: 1px solid rgba(31, 42, 54, 0.12);
            border-bottom: 1px solid rgba(255, 255, 255, 0.10);

            overflow: hidden;
        }

        .section-divider::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 20% 50%, rgba(115, 156, 198, 0.18), transparent 30%),
                radial-gradient(circle at 80% 50%, rgba(228, 217, 148, 0.16), transparent 30%);
            pointer-events: none;
        }

        .stack.experience {
            position: relative;
            z-index: 4;
            margin-top: 0;
            min-height: 110vh;
            padding: 140px 64px 120px;

            display: flex;
            flex-direction: column;
            justify-content: center;

            background:
                linear-gradient(rgba(0, 0, 0, 0.22), rgba(0, 0, 0, 0.22)),
                url('/images/hero-bg.png') center / cover no-repeat;

            overflow: hidden;
        }

        .stack.experience::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 25% 20%, rgba(228, 217, 148, 0.25), transparent 28%),
                radial-gradient(circle at 80% 60%, rgba(115, 156, 198, 0.28), transparent 35%);
            backdrop-filter: blur(2px);
            -webkit-backdrop-filter: blur(2px);
            pointer-events: none;
            z-index: 0;
        }

        .experience-inner {
            position: relative;
            width: 100%;
            min-height: 100vh;
            padding: 110px 0 90px;
            overflow: hidden;
        }

        .experience-heading {
            font-size: 64px;
            font-style: italic;
            line-height: 1;
            font-weight: 700;
            letter-spacing: -3px;
            text-align: center;
            color: #ffffff;
            margin: 0 auto 52px;
        }

        .experience-heading p {
            text-align: center;
            font-style: normal;
            font-weight: 500;
            margin-top: 12px;
            color: rgba(255, 255, 255, 0.68);
            letter-spacing: 0px;
            font-size: 24px;
            line-height: 1.7;
        }

        .experience-circular-gallery {
            position: relative;
            width: 100vw;
            display: flex;
            align-items: center;
            gap: 86px;
            padding: 0 8vw;
            overflow-x: auto;
            overflow-y: hidden;
            cursor: grab;
            user-select: none;
            scroll-behavior: auto;
            scrollbar-width: none;
            perspective: 1200px;
        }

        .experience-circular-gallery::-webkit-scrollbar {
            display: none;
        }

        .experience-circular-gallery:active {
            cursor: grabbing;
        }

        .experience-gallery-card {
            flex: 0 0 360px;
            position: relative;
            transform-origin: center center;
            transition: transform 0.18s ease-out, opacity 0.18s ease-out;
        }

        .experience-gallery-image {
            width: 360px;
            height: 420px;
            overflow: hidden;
            border-radius: 22px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.14);
            box-shadow: 0 28px 70px rgba(0, 0, 0, 0.35);
        }

        .experience-gallery-image img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            pointer-events: none;
            filter: grayscale(100%) contrast(1.08);
            transition: filter 0.35s ease, transform 0.45s ease;
        }

        .experience-gallery-card:hover .experience-gallery-image img {
            filter: grayscale(0%) contrast(1);
            transform: scale(1.06);
        }

        .experience-gallery-text {
            margin-top: 26px;
            text-align: center;
        }

        .experience-gallery-text span {
            display: inline-block;
            margin-bottom: 10px;
            color: #e4d994;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.04em;
        }

        .experience-gallery-text h3 {
            margin: 0 0 8px;
            color: #ffffff;
            font-size: 25px;
            line-height: 1.15;
            font-weight: 700;
        }

        .experience-gallery-text h4 {
            margin: 0 0 12px;
            color: rgba(228, 217, 148, 0.9);
            font-size: 15px;
            font-weight: 600;
        }

        .experience-gallery-text p {
            width: 330px;
            margin: 0 auto;
            color: rgba(255, 255, 255, 0.66);
            font-size: 14px;
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .experience-inner {
                min-height: auto;
                padding: 88px 0 70px;
            }

            .experience-heading {
                width: min(100% - 32px, 1200px);
                margin-bottom: 36px;
            }

            .experience-circular-gallery {
                height: 540px;
                gap: 42px;
                padding: 0 7vw;
            }

            .experience-gallery-card {
                flex-basis: 280px;
            }

            .experience-gallery-image {
                width: 280px;
                height: 340px;
                border-radius: 20px;
            }

            .experience-gallery-text h3 {
                font-size: 21px;
            }

            .experience-gallery-text p {
                width: 260px;
                font-size: 13px;
            }
        }

        @media (max-width: 768px) {
            .experience-inner {
                width: min(100% - 28px, 1200px);
                padding: 88px 0;
            }

            .experience-gallery {
                gap: 18px;
            }

            .experience-item {
                flex-basis: 82vw;
                border-radius: 26px;
            }

            .experience-image {
                height: 220px;
            }

            .experience-content {
                padding: 24px;
            }

            .experience-content h3 {
                font-size: 21px;
            }

            .experience-nav {
                display: none;
            }
        }

        @media (max-width: 900px) {
            .stack {
                padding: 100px 24px;
            }

            .section-title {
                text-align: center;
                font-size: 30px;
            }

            .navbar {
                width: calc(100% - 32px);
            }

            .about-grid {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .about-left {
                align-items: center;
            }

            .about-photo {
                justify-content: center;
            }

            .about-tags {
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <div class="bg-fixed"></div>
    <nav class="navbar">
        <div class="nav-menu">
            <a href="#about" class="active">About</a>
            <a href="#project">Project</a>
            <a href="#experience">Experience</a>
        </div>
    </nav>

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
                        <img src="/images/profile.png" alt="Profile photo">
                    </div>

                    <!-- RIGHT -->
                    <div class="about-info">
                        <h2 class="about-title">
                            Let’s Get To Know Me!
                        </h2>

                        <p class="about-text">
                            Hi, I’m Adlina, someone who enjoys exploring data and transforming it into meaningful
                            insights through analytics, visualization, and machine learning projects. Through hands-on
                            projects and coursework in data analytics, NLP, and predictive analytics, I’ve developed a
                            strong interest in building data-driven solutions while maintaining a GPA of 3.88/4.00. I’m
                            also a fast learner who enjoys exploring new things, adapting to new environments and
                            technologies, and continuously growing both technically and personally.
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
                                    <img src="{{ asset('images/pandas.png') }}" alt="Pandas">
                                    Pandas
                                </span>

                                <span class="stack-pill">
                                    <img src="{{ asset('images/numpy.png') }}" alt="NumPy">
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
                                        <img src="{{ asset('images/pbi.png') }}" alt="Power BI">
                                        Power BI
                                    </span>

                                    <span class="stack-pill">
                                        <img src="{{ asset('images/tableau.png') }}" alt="Tableau">
                                        Tableau
                                    </span>

                                    <span class="stack-pill">
                                        <img src="{{ asset('images/matplotlib.png') }}" alt="Matplotlib">
                                        Matplotlib
                                    </span>

                                    <span class="stack-pill">
                                        <img src="{{ asset('images/seaborn.png') }}" alt="Seaborn">
                                        Seaborn
                                    </span>

                                </div>
                            </div>
                        </div>

                        <div class="stack-group">
                            <h4>Database & Tools</h4>

                            <div class="stack-items">
                                <span class="stack-pill">
                                    <img src="{{ asset('images/postgresql.png') }}" alt="PostgreSQL">
                                    PostgreSQL
                                </span>

                                <span class="stack-pill">
                                    <i class="devicon-mysql-original"></i>
                                    MySQL
                                </span>

                                <span class="stack-pill">
                                    <img src="{{ asset('images/neo4j.png') }}" alt="Neo4j">
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
        <section id="project" class="stack project">
            <div class="section-title">Academic Projects</div>
            <div class="project-carousel-wrapper">
                <div class="project-carousel" id="projectCarousel">

                    <article class="project-carousel-card">
                        <a href="https://link-ke-project-kamu.com" class="project-link" target="_blank"
                            rel="noopener">
                            View Project →
                        </a>
                        <img src="images/project1.png" alt="Project 1">

                        <div class="project-overlay">
                            <h2>IT BSC Dashboard Development for Industrial Performance Monitoring</h2>
                            <p>
                                Developed a Power BI IT Balanced Scorecard dashboard using 5-year data from 1 head
                                office and 3 branches with 20 KPIs; designed KPI frameworks from annual reports to
                                support data-driven decision making.
                            </p>

                            <div class="project-tags">
                                <span>Power BI</span>
                                <span>ETL</span>
                            </div>
                        </div>
                    </article>

                    <article class="project-carousel-card">
                        <a href="https://link-ke-project-kamu.com" class="project-link" target="_blank"
                            rel="noopener">
                            View Project →
                        </a>

                        <img src="images/project2.png" alt="Project 2">

                        <div class="project-overlay">
                            <h2>Sentiment Analysis of Ali Khamenei's Death on Indonesian News Articles</h2>
                            <p>
                                Built an NLP pipeline on 500 news articles across 5 news platforms using Python,
                                IndoBERT, and Sastrawi; extracted 27,659 entities and identified dominant positive
                                geopolitical sentiment (54.58%).
                            </p>

                            <div class="project-tags">
                                <span>NLP</span>
                                <span>Python</span>
                            </div>
                        </div>
                    </article>
                    <article class="project-carousel-card">
                        <a href="https://link-ke-project-kamu.com" class="project-link" target="_blank"
                            rel="noopener">
                            View Project →
                        </a>

                        <img src="images/project3.png" alt="Project 3">

                        <div class="project-overlay">
                            <h2>Sentiment Analysis of <br> blu by BCA Digital <br> on Google Play Reviews</h2>
                            <p>
                                Built a sentiment analysis model on 29K+ blu <br> by BCA Digital reviews using NLP and
                                machine learning. <br> Achieved 85.07% accuracy with Logistic Regression.
                            </p>

                            <div class="project-tags">
                                <span>NLP</span>
                                <span>Python</span>
                            </div>
                        </div>
                    </article>
                    <article class="project-carousel-card">
                        <a href="https://link-ke-project-kamu.com" class="project-link" target="_blank"
                            rel="noopener">
                            View Project →
                        </a>

                        <img src="images/project4.png" alt="Project 4">

                        <div class="project-overlay">
                            <h2>Data Lakehouse Design for Student Course Registration System</h2>
                            <p>
                                Designed an end-to-end Data Lakehouse system using MySQL, Python, and Kimball
                                dimensional modeling.
                                Built Medallion Architecture ETL pipeline processing 7 source tables into a Data
                                Warehouse with 4 fact tables and 9 dimension tables, implementing CDC and SCD for
                                incremental processing and historical tracking.

                            </p>

                            <div class="project-tags">
                                <span>Data Engineering</span>
                                <span>MySQL</span>
                                <span>Python</span>
                                <span>Medallion</span>
                            </div>
                        </div>
                    </article>
                    <article class="project-carousel-card">
                        <a href="https://link-ke-project-kamu.com" class="project-link" target="_blank"
                            rel="noopener">
                            View Project →
                        </a>

                        <img src="images/project5.png" alt="Project 5">

                        <div class="project-overlay">
                            <h2>Health Burden Clustering in South Korea Using K-Means</h2>
                            <p>
                                Performed clustering analysis on health burden data from South Korea using K-Means
                                algorithm, optimized with Elbow Method and Silhouette Score.
                                Analyzed clustering patterns to identify variations in disease prevalence, mortality
                                rates, and healthcare access.
                            </p>

                            <div class="project-tags">
                                <span>Data Science</span>
                                <span>RStudio</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="project-indicators" id="projectIndicators"></div>
            </div>
        </section>
        <section class="section-divider"> </section>
        <section id="experience" class="stack experience">
            <div class="experience-inner">
                <div class="section-heading experience-heading"> Experiences
                    <p> Beyond academics, I take part in organizational initiatives, social activities, and
                        competitions. </p>
                </div>

                <div class="experience-circular-gallery" id="experienceGallery">
                    <article class="experience-gallery-card">
                        <div class="experience-gallery-image">
                            <img src="{{ asset('images/experience/mms.jpeg') }}"
                                alt="Astra Infra Toll Road Tangerang Merak">
                        </div>

                        <div class="experience-gallery-text">
                            <span>Jan - Feb 2026</span>
                            <h3>Astra Infra Toll Road Tangerang Merak</h3>
                            <h4>Operational Intern</h4>
                            <p>
                                Analyzed yearly toll road accident and tire burst incident data through cleaning,
                                categorization, and daily operational reporting to identify trends, risk patterns, and
                                support monitoring and evaluation.
                            </p>
                        </div>
                    </article>

                    <article class="experience-gallery-card">
                        <div class="experience-gallery-image">
                            <img src="{{ asset('images/experience/assistant.jpeg') }}"
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
                            <img src="{{ asset('images/experience/ise.jpeg') }}" alt="Head Marketing ISE! 2025">
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
                            <img src="{{ asset('images/experience/hmsi.jpeg') }}"
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
                            <img src="{{ asset('images/experience/arkavidia.jpeg') }}" alt="UX Design Project">
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
                            <img src="{{ asset('images/experience/ilits.jpeg') }}" alt="Ini Lho ITS! 2025">
                        </div>

                        <div class="experience-gallery-text">
                            <span>Sept 2024 - June 2025</span>
                            <h3>Ini Lho ITS! 2025</h3>
                            <h4>Expert Staff Marketing Strategist</h4>
                            <p>
                                Guided online marketing campaign planning and digital promotion strategies to increase
                                audience engagement and enhance event visibility across social media platforms.
                            </p>
                        </div>
                    </article>
                </div>
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
