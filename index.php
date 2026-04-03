<?php
include 'res/header.php';
include 'widget/sidebar.php';
?>

<!-- MAIN CONTENT -->
<main class="main-content">
    <div class="container-fluid px-0">

        <!-- HEADER -->
        <header class="dashboard-header">
            <div class="logo-title justify-content-center d-flex align-items">
                <img src="assets/img/craftaweb-logo-bg.png" alt="CraftaWeb">
            </div>
        </header>

        <!-- DIVIDER 1 -->
        <div class="section-divider divider-top">
            <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="rgba(120,108,255,0.12)" />
                <path d="M0,55 C400,10 1000,70 1440,30 L1440,80 L0,80 Z" fill="rgba(120,108,255,0.07)" />
            </svg>
            <div class="divider-line">
                <span class="divider-dot"></span>
                <span class="divider-dot"></span>
                <span class="divider-dot"></span>
            </div>
        </div>

        <!-- CHI SONO -->
        <section id="chi-sono" class="who-am-i-section">
            <div class="who-am-i-inner">
                <div class="who-am-i-title">
                    <span class="material-symbols-rounded section-icon">person</span>
                    <h1>Chi sono</h1>
                </div>
                <div class="who-am-i-card">
                    <div class="card-glow"></div>
                    <p>
                        Mi chiamo <strong>Alessio</strong> e sono uno sviluppatore web.<br>
                        Appassionato di tecnologia fin da sempre, da oltre due anni trasformo questa passione in
                        soluzioni
                        digitali moderne, funzionali e su misura, con l'obiettivo di crescere costantemente e mettermi
                        sempre alla prova.
                    </p>
                </div>
            </div>
        </section>

        <!-- DIVIDER 2 -->
        <div class="section-divider">
            <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,20 C480,70 960,0 1440,50 L1440,80 L0,80 Z" fill="rgba(120,108,255,0.10)" />
                <path d="M0,45 C300,5 1100,65 1440,20 L1440,80 L0,80 Z" fill="rgba(91,77,219,0.07)" />
            </svg>
            <div class="divider-line">
                <span class="divider-dot"></span>
                <span class="divider-dot"></span>
                <span class="divider-dot"></span>
            </div>
        </div>

        <!-- I MIEI SERVIZI -->
        <section id="servizi" class="services-section">
            <div class="services-title">
                <span class="material-symbols-rounded section-icon">service_toolbox</span>
                <h1>I miei servizi</h1>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="service-card h-100">
                        <div class="card-glow"></div>
                        <div class="service-icon">
                            <span class="material-symbols-rounded">web</span>
                        </div>
                        <h3>Sviluppo Web & Applicazioni</h3>
                        <p>Realizzo siti web e applicazioni professionali, veloci e ottimizzati per offrire
                            un'esperienza utente fluida su ogni dispositivo.
                            Ogni progetto nasce da un'analisi attenta delle esigenze del cliente e si trasforma in una
                            soluzione digitale su misura.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card h-100">
                        <div class="card-glow"></div>
                        <div class="service-icon">
                            <span class="material-symbols-rounded">database</span>
                        </div>
                        <h3>Software Gestionali, Database & Cruscotti</h3>
                        <p>Progetto e sviluppo software gestionali personalizzati, database strutturati e cruscotti di
                            monitoraggio. Realizzo soluzioni su misura che semplificano la gestione operativa e
                            trasformano le informazioni in strumenti decisionali concreti.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card h-100">
                        <div class="card-glow"></div>
                        <div class="service-icon">
                            <span class="material-symbols-rounded">home_repair_service</span>
                        </div>
                        <h3>Manutenzione e Assistenza su Richiesta</h3>
                        <p>Offro servizi di manutenzione tecnica su richiesta per siti web, gestionali, database e
                            applicazioni personalizzate. Intervengo quando serve, senza vincoli contrattuali
                            obbligatori,
                            garantendo rapidità e soluzioni mirate.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- DIVIDER 3 -->
        <div class="section-divider">
            <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,60 C360,10 1080,70 1440,20 L1440,80 L0,80 Z" fill="rgba(120,108,255,0.12)" />
                <path d="M0,30 C500,75 900,15 1440,55 L1440,80 L0,80 Z" fill="rgba(120,108,255,0.06)" />
            </svg>
            <div class="divider-line">
                <span class="divider-dot"></span>
                <span class="divider-dot"></span>
                <span class="divider-dot"></span>
            </div>
        </div>

        <!-- TECNOLOGIE UTILIZZATE -->
        <section id="tecnologie" class="tech-section">
            <div class="tech-title">
                <span class="material-symbols-rounded section-icon">code</span>
                <h1>Tecnologie utilizzate</h1>
            </div>
            <div class="tech-ticker-wrapper">
                <div class="tech-ticker" id="techTicker">
                    <div class="tech-track">
                        <!-- Prima copia -->
                        <img src="https://cdn.simpleicons.org/html5" height="60" alt="HTML5">
                        <img src="https://cdn.simpleicons.org/css" height="60" alt="CSS">
                        <img src="https://cdn.simpleicons.org/javascript" height="60" alt="JavaScript">
                        <img src="https://cdn.simpleicons.org/bootstrap" height="60" alt="Bootstrap">
                        <img src="https://cdn.simpleicons.org/jquery" height="60" alt="jQuery">
                        <img src="https://cdn.simpleicons.org/mysql" height="60" alt="MySQL">
                        <img src="https://cdn.simpleicons.org/nodedotjs" height="60" alt="Node.js">
                        <img src="https://cdn.simpleicons.org/typescript" height="60" alt="TypeScript">
                        <img src="https://cdn.simpleicons.org/angular" height="60" alt="Angular">
                        <img src="https://cdn.simpleicons.org/dart" height="60" alt="Dart">
                        <img src="https://cdn.simpleicons.org/flutter" height="60" alt="Flutter">
                        <img src="https://cdn.simpleicons.org/dotnet" height="60" alt=".NET">
                        <img src="https://cdn.simpleicons.org/php" height="60" alt="PHP">
                        <img src="https://cdn.simpleicons.org/python" height="60" alt="Python">
                        <img src="https://cdn.simpleicons.org/wordpress" height="60" alt="WordPress">
                        <img src="https://cdn.simpleicons.org/moodle" height="60" alt="Moodle">
                        <img src="https://cdn.simpleicons.org/linux" height="60" alt="Linux">

                        <!-- COPIA DUPLICATA -->
                        <img src="https://cdn.simpleicons.org/html5" height="60" alt="HTML5">
                        <img src="https://cdn.simpleicons.org/css" height="60" alt="CSS">
                        <img src="https://cdn.simpleicons.org/javascript" height="60" alt="JavaScript">
                        <img src="https://cdn.simpleicons.org/bootstrap" height="60" alt="Bootstrap">
                        <img src="https://cdn.simpleicons.org/jquery" height="60" alt="jQuery">
                        <img src="https://cdn.simpleicons.org/mysql" height="60" alt="MySQL">
                        <img src="https://cdn.simpleicons.org/nodedotjs" height="60" alt="Node.js">
                        <img src="https://cdn.simpleicons.org/typescript" height="60" alt="TypeScript">
                        <img src="https://cdn.simpleicons.org/angular" height="60" alt="Angular">
                        <img src="https://cdn.simpleicons.org/dart" height="60" alt="Dart">
                        <img src="https://cdn.simpleicons.org/flutter" height="60" alt="Flutter">
                        <img src="https://cdn.simpleicons.org/dotnet" height="60" alt=".NET">
                        <img src="https://cdn.simpleicons.org/php" height="60" alt="PHP">
                        <img src="https://cdn.simpleicons.org/python" height="60" alt="Python">
                        <img src="https://cdn.simpleicons.org/wordpress" height="60" alt="WordPress">
                        <img src="https://cdn.simpleicons.org/moodle" height="60" alt="Moodle">
                        <img src="https://cdn.simpleicons.org/linux" height="60" alt="Linux">
                    </div>
                </div>
            </div>
        </section>

        <!-- DIVIDER 4 -->
        <div class="section-divider">
            <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,25 C600,75 900,10 1440,60 L1440,80 L0,80 Z" fill="rgba(120,108,255,0.11)" />
                <path d="M0,50 C350,5 1050,70 1440,35 L1440,80 L0,80 Z" fill="rgba(91,77,219,0.07)" />
            </svg>
            <div class="divider-line">
                <span class="divider-dot"></span>
                <span class="divider-dot"></span>
                <span class="divider-dot"></span>
            </div>
        </div>

        <!-- CONTATTAMI -->
        <section id="contattami" class="contact-section">
            <div class="contact-card">
                <div class="card-glow"></div>
                <div class="contact-title">
                    <span class="material-symbols-rounded section-icon">contact_mail</span>
                    <h1>Contattami</h1>
                </div>
                <p>
                    Per maggiori informazioni sui miei servizi o per richiedere un preventivo personalizzato,
                    ti invito a contattarmi via email. Descrivi brevemente il tuo progetto o la tua esigenza
                    e ti risponderò nel più breve tempo possibile con tutti i dettagli necessari.
                </p>
                <div class="address text-center mt-4">
                    <a href="mailto:craftaweb@gmail.com" class="contact-email-btn">
                        <span class="material-symbols-rounded">mail</span>
                        craftaweb@gmail.com
                    </a>
                </div>
            </div>
        </section>
    </div>

    <!-- FOOTER -->
    <?php include 'widget/footer.php'; ?>
</main>

<!-- #SECTION HIDDEN -->
<script id="g1h5gi">
    document.querySelectorAll('a[href^="#"]:not([data-bs-toggle])').forEach(anchor => {
        anchor.addEventListener("click", function (e) {

            const target = document.querySelector(this.getAttribute("href"));

            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: "smooth" });
                history.replaceState(null, null, " ");
            }
        });
    });
</script>

</body>

</html>