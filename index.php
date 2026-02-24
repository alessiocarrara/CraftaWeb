<?php
include 'res/header.php';
include 'widget/sidebarWidget.php';
?>

<!-- MAIN CONTENT -->
<main class="main-content">
    <div class="container-fluid">
        <!-- Header -->
        <header class="dashboard-header">
            <div class="logo-title justify-content-center d-flex align-items">
                <img src="assets/img/craftaweb-logo-bg.png" alt="CraftaWeb">
            </div>
        </header>

        <!-- CHI SONO SECTION -->
        <div id="chi-sono" class="who-am-i-section">
            <div class="who-am-i-title">
                <span class="material-symbols-rounded" style="color: #786cff;">person</span>
                <h1>Chi sono</h1>
            </div>

            <div class="who-am-i-card">
                <p>
                    Mi chiamo Alessio e sono uno sviluppatore web.<br>
                    Appassionato di tecnologia fin da sempre, da oltre due anni trasformo questa passione in soluzioni
                    digitali moderne, funzionali e su misura, con l'obiettivo di crescere costantemente e mettermi
                    sempre alla prova.
                </p>
            </div>
        </div>

        <!-- I MIEI SERVIZI SECTION -->
        <div id="servizi" class="services-section">
            <div class="services-title">
                <span class="material-symbols-rounded" style="color: #786cff;">service_toolbox</span>
                <h1>I miei servizi</h1>
            </div>

            <div class="row g-4">
                <!-- SVILUPPO WEB & APPLICAZIONI -->
                <div class="col-md-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <span class="material-symbols-rounded">web</span>
                        </div>
                        <h3>Sviluppo Web & Applicazioni</h3>
                        <p>
                            Realizzo siti web e applicazioni professionali, veloci e ottimizzati per offrire
                            un’esperienza utente fluida su ogni dispositivo.
                            Ogni progetto nasce da un’analisi attenta delle esigenze del cliente e si trasforma in una
                            soluzione digitale su misura.
                        </p>
                    </div>
                </div>

                <!-- SOFTWARE GESTIONALI, DATABASE & CRUSCOTTI AZIENDALI -->
                <div class="col-md-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <span class="material-symbols-rounded">database</span>
                        </div>
                        <h3>Software Gestionali, Database & Cruscotti Aziendali</h3>
                        <p>
                            Progetto e sviluppo software gestionali personalizzati, database strutturati e cruscotti di
                            monitoraggio per aziende e professionisti che vogliono organizzare, controllare e
                            valorizzare i propri dati.

                            Realizzo soluzioni su misura che semplificano la gestione operativa, automatizzano i
                            processi e trasformano le informazioni in strumenti decisionali concreti.
                        </p>
                    </div>
                </div>

                <!-- MANUTENZIONE E ASSISTENZA SU RICHIESTA -->
                <div class="col-md-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <span class="material-symbols-rounded">home_repair_service</span>
                        </div>
                        <h3>Manutenzione e Assistenza su Richiesta</h3>
                        <p>
                            Offro servizi di manutenzione tecnica su richiesta per siti web, gestionali, database e
                            applicazioni personalizzate.

                            Intervengo quando serve, senza vincoli contrattuali obbligatori, garantendo rapidità,
                            competenza e soluzioni mirate.
                        </p>
                    </div>
                </div>
            </div>

            <div id="tecnologie" class="tech-section">
                <div class="tech-title">
                    <span class="material-symbols-rounded" style="color: #786cff;">code</span>
                    <h1>Tecnologie utilizzate</h1>
                </div>


                <div class="tech-card">
                    <marquee height="100" width="100%" behavior="scroll" direction="up" scrollamount="2"
                        onmouseover="this.stop();" onmouseout="this.start();">
                        <div class="tech-symbols">
                            <img src="https://cdn.simpleicons.org/html5" height="100" alt="HTML5">
                            <img src="https://cdn.simpleicons.org/css" height="100" alt="CSS">
                            <img src="https://cdn.simpleicons.org/javascript" height="100" alt="JavaScript">
                            <img src="https://cdn.simpleicons.org/bootstrap" height="100" alt="Bootstrap">
                            <img src="https://cdn.simpleicons.org/jquery" height="100" alt="jQuery">
                            <img src="https://cdn.simpleicons.org/php" height="100" alt="PHP">
                            <img src="https://cdn.simpleicons.org/php" height="100" alt="PHP">
                            <img src="https://cdn.simpleicons.org/php" height="100" alt="PHP">
                            <img src="https://cdn.simpleicons.org/php" height="100" alt="PHP">
                            <img src="https://cdn.simpleicons.org/php" height="100" alt="PHP">
                        </div>
                    </marquee>
                </div>

            </div>
        </div>
    </div>
</main>

</body>

</html>