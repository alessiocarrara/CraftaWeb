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
                <!-- Card 1 -->
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

                <!-- Card 2 -->
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

                <!-- Card 3 -->
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
        </div>
    </div>
</main>

</body>

</html>