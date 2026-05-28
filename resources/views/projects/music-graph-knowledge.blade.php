<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project Detail | Music Graph Knowledge</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/project-detail-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/graph.css') }}">
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
                    Data Analytics Project · Knowledge Graph · Neo4j GDS
                </div>

                <h1>Music Contributor Network Analysis Using <span>Knowledge Graph</span></h1>

                <p class="hero-desc">
                    A graph analytics project that models songs, artists, genres, record labels, and countries as a
                    connected music ecosystem. The analysis combines Wikidata and DBpedia data, integrates contributor
                    relationships, and applies Neo4j Graph Data Science algorithms to uncover similarity, label
                    influence,
                    and natural music communities.
                </p>

                <div class="hero-actions">
                    <a href="#process" class="primary-btn">Explore Process</a>
                    <a href="#results" class="secondary-btn">View Findings</a>
                    <a href="https://github.com/adljna/Music-Knowledge-Graph" class="secondary-btn github-btn"
                        target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-github"></i>
                        GitHub
                    </a>

                    <a href="https://www.wikidata.org/wiki/User:Adljna/Analisis-Kontributor-Musik"
                        class="secondary-btn report-btn" target="_blank" rel="noopener noreferrer">
                        <i class="fa-solid fa-file-lines"></i> Report
                    </a>
                </div>
            </div>

            <div class="hero-visual reveal delay-1" aria-label="Music knowledge graph schema">
                <div class="phone-card">
                    <svg class="music-schema-svg" viewBox="0 0 760 560" role="img"
                        aria-label="Music contributor graph schema">
                        <defs>
                            <marker id="arrowhead" markerWidth="10" markerHeight="10" refX="8" refY="3"
                                orient="auto">
                                <polygon points="0 0, 10 3, 0 6" fill="#cfd5df"></polygon>
                            </marker>
                        </defs>

                        <!-- edges -->
                        <line x1="330" y1="275" x2="165" y2="120" stroke="#cfd5df"
                            stroke-width="3" marker-end="url(#arrowhead)" />
                        <line x1="385" y1="235" x2="560" y2="115" stroke="#cfd5df"
                            stroke-width="3" marker-end="url(#arrowhead)" />
                        <line x1="300" y1="330" x2="145" y2="470" stroke="#cfd5df"
                            stroke-width="3" marker-end="url(#arrowhead)" />

                        <line x1="350" y1="315" x2="580" y2="450" stroke="#cfd5df"
                            stroke-width="3" marker-end="url(#arrowhead)" />
                        <line x1="380" y1="310" x2="560" y2="400" stroke="#cfd5df"
                            stroke-width="3" marker-end="url(#arrowhead)" />
                        <line x1="385" y1="285" x2="570" y2="370" stroke="#cfd5df"
                            stroke-width="3" marker-end="url(#arrowhead)" />
                        <line x1="385" y1="260" x2="615" y2="340" stroke="#cfd5df"
                            stroke-width="3" marker-end="url(#arrowhead)" />

                        <!-- edge labels -->
                        <text x="163" y="120" fill="#ffffff" font-size="16" font-weight="600"
                            transform="rotate(45 180 180)">ORIGINATED_IN</text>
                        <text x="400" y="170" fill="#ffffff" font-size="16" font-weight="600"
                            transform="rotate(-37 458 182)">RELEASED_BY</text>
                        <text x="190" y="400" fill="#ffffff" font-size="16" font-weight="600"
                            transform="rotate(-43 205 380)">HAS_GENRE</text>

                        <text x="450" y="280" fill="#ffffff" font-size="16" font-weight="600"
                            transform="rotate(20 450 280)">COMPOSED</text>

                        <text x="430" y="300" fill="#ffffff" font-size="16" font-weight="600"
                            transform="rotate(25 430 300)">PRODUCED</text>

                        <text x="430" y="350" fill="#ffffff" font-size="16" font-weight="600"
                            transform="rotate(25 465 350)">PERFORMED</text>

                        <text x="430" y="365" fill="#ffffff" font-size="16" font-weight="600"
                            transform="rotate(30 440 365)">LYRICIST_OF</text>

                        <!-- nodes -->
                        <circle cx="330" cy="275" r="62" fill="#80a6d1"></circle>
                        <text x="330" y="286" text-anchor="middle" fill="#172033" font-size="26"
                            font-weight="700">Song</text>

                        <circle cx="150" cy="110" r="56" fill="#b89463"></circle>
                        <text x="150" y="120" text-anchor="middle" fill="#172033" font-size="24"
                            font-weight="700">Country</text>

                        <circle cx="575" cy="105" r="56" fill="#97b05c"></circle>
                        <text x="575" y="95" text-anchor="middle" fill="#172033" font-size="22"
                            font-weight="700">Record</text>
                        <text x="575" y="122" text-anchor="middle" fill="#172033" font-size="22"
                            font-weight="700">Label</text>

                        <circle cx="125" cy="485" r="56" fill="#2f6fd1"></circle>
                        <text x="125" y="497" text-anchor="middle" fill="#ffffff" font-size="24"
                            font-weight="700">Genre</text>

                        <circle cx="625" cy="400" r="58" fill="#ded48b"></circle>
                        <text x="625" y="412" text-anchor="middle" fill="#172033" font-size="24"
                            font-weight="700">Artist</text>
                    </svg>

                    <div class="bottom-insight-row">
                        <div class="bottom-insight">
                            <span>Top Bridge Label</span>
                            <strong>Universal Music Group</strong>
                            <p>Label with the highest betweenness centrality in the music network.</p>
                        </div>
                        <div class="bottom-insight">
                            <span>Largest Community</span>
                            <strong>89 nodes</strong>
                            <p>The biggest Louvain community detected from the projected graph.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="metrics-strip reveal">
            <article class="metric-card">
                <span>Data Sources</span>
                <strong>2</strong>
            </article>
            <article class="metric-card">
                <span>Node Types</span>
                <strong>5</strong>
            </article>
            <article class="metric-card">
                <span>Relation Types</span>
                <strong>7</strong>
            </article>
            <article class="metric-card">
                <span>GDS Algorithms</span>
                <strong>3</strong>
            </article>
        </section>

        <section class="content-section" id="process">
            <div class="section-heading reveal">
                <span class="section-kicker">01 · Workflow & Tools</span>
                <h2>Data integration first, then graph modeling.</h2>
                <p>
                    The workflow is framed as one connected pipeline: collect open music data, integrate both sources,
                    then transform the cleaned dataset into a Neo4j knowledge graph. The focus is not only the output,
                    but also the tools used at each stage.
                </p>
            </div>

            <div class="visual-dashboard">
                <article class="viz-card reveal">
                    <h3>Step 1 · Data Collection</h3>
                    <p>Retrieve music contributor metadata from public knowledge bases using SPARQL queries.</p>
                    <div class="viz-body flow-viz">
                        <div class="flow-step">
                            <span class="num">A</span>
                            <div><strong>Wikidata Query Service</strong><small>Collect songs, contributors, roles,
                                    genre, album, record label, country, and release date.</small></div>
                            <span class="out">SPARQL</span>
                        </div>
                        <div class="flow-step">
                            <span class="num">B</span>
                            <div><strong>DBpedia SPARQL Endpoint</strong><small>Use a second open data source to enrich
                                    and compare music metadata.</small></div>
                            <span class="out">SPARQL</span>
                        </div>
                        <div class="flow-step">
                            <span class="num">C</span>
                            <div><strong>CSV Export</strong><small>Store query results as structured tabular files
                                    before preprocessing.</small></div>
                            <span class="out">CSV</span>
                        </div>
                    </div>
                </article>

                <article class="viz-card reveal delay-1">
                    <h3>Step 2 · Data Integration Flow</h3>
                    <p>Integrate Wikidata and DBpedia into one graph-ready dataset using Python and Pandas.</p>
                    <div class="viz-body flow-viz">
                        <div class="flow-step">
                            <span class="num">1</span>
                            <div><strong>Load Data</strong><small>Read Wikidata and DBpedia CSV files.</small></div>
                            <span class="out">Pandas</span>
                        </div>
                        <div class="flow-step">
                            <span class="num">2</span>
                            <div><strong>Clean Text</strong><small>Lowercase, remove brackets, special characters,
                                    non-ASCII, and extra spaces.</small></div>
                            <span class="out">Python</span>
                        </div>
                        <div class="flow-step">
                            <span class="num">3</span>
                            <div><strong>Create Join Key</strong><small>Build song_clean and artist_clean for source
                                    matching.</small></div>
                            <span class="out">Keys</span>
                        </div>
                        <div class="flow-step">
                            <span class="num">4</span>
                            <div><strong>Outer Join</strong><small>Merge both datasets while keeping unmatched
                                    records.</small></div>
                            <span class="out">Merge</span>
                        </div>
                        <div class="flow-step">
                            <span class="num">5</span>
                            <div><strong>Data Fusion</strong><small>Combine overlapping columns into unified graph
                                    attributes.</small></div>
                            <span class="out">Final CSV</span>
                        </div>
                    </div>
                </article>

                <article class="viz-card viz-card-graph reveal delay-2">
                    <h3>Step 3 · Graph Model</h3>
                    <p>Represent music metadata as a network of entities and relationships inside Neo4j.</p>

                    <div class="graph-model-wrap">
                        <img src="{{ asset('images/projects/graph-model.webp') }}" alt="Music contributor graph model"
                            class="graph-model-image" loading="lazy" decoding="async">
                    </div>
                </article>

                <article class="viz-card reveal delay-3">
                    <h3>Step 4 · Graph Analytics</h3>
                    <p>Project the Neo4j graph into memory and run GDS algorithms for similarity, centrality, and
                        communities.</p>
                    <div class="viz-body flow-viz">
                        <div class="flow-step">
                            <span class="num">G</span>
                            <div><strong>Neo4j</strong><small>Store nodes and relationships as a music knowledge
                                    graph.</small></div>
                            <span class="out">Graph DB</span>
                        </div>
                        <div class="flow-step">
                            <span class="num">P</span>
                            <div><strong>Neo4j GDS Projection</strong><small>Load Artist, Song, RecordLabel, Genre, and
                                    Country into an in-memory graph.</small></div>
                            <span class="out">RAM</span>
                        </div>
                        <div class="flow-step">
                            <span class="num">A</span>
                            <div><strong>GDS Algorithms</strong><small>Use Jaccard Similarity, Betweenness Centrality,
                                    and Louvain Community Detection.</small></div>
                            <span class="out">GDS</span>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="content-section" id="results">
            <div class="section-heading reveal">
                <span class="section-kicker">02 · Algorithm Results</span>
                <h2>Graph algorithms reveal similarity, influence, and communities.</h2>
                <p>
                    The analysis uses Neo4j Graph Data Science to compare structurally similar songs,
                    identify influential record labels, and detect naturally connected music communities.
                </p>
            </div>

            <div class="visual-dashboard">
                <article class="viz-card reveal">
                    <h3>Top Jaccard Similarity</h3>
                    <p>Song pairs with the strongest structural overlap after filtering identical similarity scores.</p>
                    <div class="viz-body similarity-bars" id="similarityChart"></div>
                </article>

                <article class="viz-card reveal delay-1">
                    <h3>Louvain Community Size</h3>
                    <p>Bubble size represents the largest detected communities in the projected music graph.</p>
                    <div class="community-viz" aria-label="Louvain community bubble chart">
                        <div class="mini-network" id="miniNetwork"></div>
                        <div class="bubble one">89<small>emo rap</small></div>
                        <div class="bubble two">80<small>pop</small></div>
                        <div class="bubble three">60<small>electro</small></div>
                        <div class="bubble four">47<small>dance</small></div>
                        <div class="bubble five">46<small>mariachi</small></div>
                    </div>
                </article>

                <article class="viz-card viz-card-full reveal delay-2">
                    <h3>Record Label Bridge Score</h3>
                    <p>
                        Betweenness centrality identifies record labels that act as structural bridges across
                        artists, songs, and genres.
                    </p>
                    <div class="viz-body bar-chart" id="betweennessChart"></div>
                </article>
            </div>
        </section>

        <section class="content-section" id="insights">
            <div class="section-heading reveal">
                <span class="section-kicker">03 · Insights</span>
                <h2>The graph is strongest when framed as structural music analysis.</h2>
                <p>
                    The strongest portfolio angle is not to claim listener preference prediction, but to show how graph
                    structure can explain collaboration, production similarity, and label influence in a transparent
                    way.
                </p>
            </div>

            <div class="takeaway-grid">
                <article class="takeaway-card reveal">
                    <span>Recommendation Logic</span>
                    <h3>Similarity is based on shared ecosystem attributes.</h3>
                    <p>
                        Song pairs with high Jaccard scores can be interpreted as candidates for content-based
                        recommendation because they share contributors, labels, genres, or related entities.
                    </p>
                </article>
                <article class="takeaway-card reveal delay-1">
                    <span>Industry Network</span>
                    <h3>Bridge labels reveal structural influence.</h3>
                    <p>
                        High betweenness labels are not just highly connected; they sit between different parts of the
                        network and help connect otherwise separated music clusters.
                    </p>
                </article>
                <article class="takeaway-card reveal delay-2">
                    <span>Community Detection</span>
                    <h3>Genres emerge through connectivity patterns.</h3>
                    <p>
                        Louvain communities show that artist and genre groups can emerge naturally from graph
                        relationships, not only from manually assigned genre labels.
                    </p>
                </article>
            </div>
        </section>
    </main>

    <script>
        const betweennessData = [{
                label: 'Universal Music Group',
                value: 100,
                display: '14,148.93'
            },
            {
                label: 'Sony Music',
                value: 98,
                display: '13,895.81'
            },
            {
                label: 'RCA Records',
                value: 64,
                display: 'Top 3'
            },
            {
                label: 'Island Records',
                value: 56,
                display: 'Top 4'
            },
            {
                label: 'Atlantic Records',
                value: 49,
                display: 'Top 5'
            },
        ];

        const similarityData = [{
                label: 'sweet escape · wake up call',
                value: 100,
                display: '0.800'
            },
            {
                label: 'iplan · phuze',
                value: 100,
                display: '0.800'
            },
            {
                label: 'chant · heroes',
                value: 100,
                display: '0.800'
            },
            {
                label: 'heroes · maniac',
                value: 94,
                display: '0.750'
            },
            {
                label: 'faithful · heroes',
                value: 94,
                display: '0.750'
            },
        ];

        const createBarRow = ({
            label,
            value,
            display
        }) => `
            <div class="bar-row visual-bar-row">
                <span>${label}</span>
                <div class="track" aria-hidden="true">
                    <div class="fill" style="width:${value}%"></div>
                </div>
                <strong>${display}</strong>
            </div>
        `;

        const createChartRow = ({
            label,
            value,
            display
        }) => `
            <div class="chart-row">
                <span>${label}</span>
                <div class="chart-track" aria-hidden="true">
                    <div class="chart-fill" style="width:${value}%"></div>
                </div>
                <strong>${display}</strong>
            </div>
        `;

        const renderBars = (targetId, data, type = 'template') => {
            const target = document.getElementById(targetId);
            if (!target) return;
            target.innerHTML = data.map(type === 'custom' ? createChartRow : createBarRow).join('');
        };

        renderBars('betweennessChart', betweennessData);
        renderBars('similarityChart', similarityData, 'custom');

        const miniNetwork = document.getElementById('miniNetwork');
        const dots = [
            [8, 20],
            [12, 68],
            [18, 42],
            [24, 16],
            [28, 72],
            [32, 38],
            [38, 22],
            [42, 80],
            [47, 48],
            [52, 18],
            [56, 70],
            [61, 38],
            [66, 14],
            [71, 76],
            [76, 44],
            [82, 22],
            [86, 62],
            [91, 34],
            [16, 84],
            [34, 58],
            [69, 58],
            [88, 82]
        ];

        if (miniNetwork) {
            miniNetwork.innerHTML = dots.map(([left, top]) => `<i style="left:${left}%; top:${top}%;"></i>`).join('');
        }

        const revealElements = document.querySelectorAll('.reveal');
        const navLinks = document.querySelectorAll('.nav-pills a');
        const sections = document.querySelectorAll('main section[id]');

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.14
        });

        revealElements.forEach((element) => revealObserver.observe(element));

        const setActiveNav = () => {
            let current = 'overview';

            sections.forEach((section) => {
                const sectionTop = section.offsetTop - 130;
                if (window.scrollY >= sectionTop) current = section.id;
            });

            navLinks.forEach((link) => {
                link.classList.toggle('active', link.getAttribute('href') === `#${current}`);
            });
        };

        window.addEventListener('scroll', setActiveNav, {
            passive: true
        });
        setActiveNav();
    </script>
</body>

</html>
