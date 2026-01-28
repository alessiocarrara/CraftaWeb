<?php
include 'res/header.php';
include 'widget/sidebarWidget.php';
?>

<!-- Main Content -->
<main class="main-content">
    <div class="container-fluid">
        <!-- Header -->
        <header class="dashboard-header">
            <div class="logo-title justify-content-center d-flex align-items">
                <img src="assets/img/craftaweb-logo-bg.png" alt="CraftaWeb">
            </div>
            <div class="header-actions">
                <a href="#" class="action-btn">
                    <i class="fas fa-plus"></i> Nuovo Progetto
                </a>
            </div>
        </header>

        <!-- Stats Grid -->
        <div class="stats-grid">
            <div class="stat-card">
                <h3>Progetti Attivi</h3>
                <div class="value">12</div>
                <div class="trend positive">
                    <i class="fas fa-arrow-up"></i> +2 questo mese
                </div>
                <i class="fas fa-layer-group stat-icon"></i>
            </div>
            <div class="stat-card">
                <h3>Richieste in Attesa</h3>
                <div class="value">5</div>
                <div class="trend text-warning">
                    <i class="fas fa-clock"></i> Da revisionare
                </div>
                <i class="fas fa-envelope-open-text stat-icon"></i>
            </div>
            <div class="stat-card">
                <h3>Guadagni Mensili</h3>
                <div class="value">€2.4k</div>
                <div class="trend positive">
                    <i class="fas fa-arrow-up"></i> +15% vs scorso mese
                </div>
                <i class="fas fa-euro-sign stat-icon"></i>
            </div>
            <div class="stat-card">
                <h3>Clienti Totali</h3>
                <div class="value">48</div>
                <div class="trend positive">
                    <i class="fas fa-user-plus"></i> +4 nuovi
                </div>
                <i class="fas fa-users stat-icon"></i>
            </div>
        </div>

        <!-- Services / Offerings Showcase -->
        <div class="services-section">
            <div class="section-header">
                <div>
                    <h2 class="section-title">I Miei Servizi</h2>
                    <p class="text-secondary small mb-0">Soluzioni digitali su misura per il tuo business</p>
                </div>
                <a href="#" class="btn btn-sm btn-outline-primary">Dettagli Offerta</a>
            </div>
            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Sviluppo Web</h3>
                    <p>Realizzazione di siti web moderni, veloci e responsivi utilizzando le ultime tecnologie.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> HTML5 & CSS3 Avanzato</li>
                        <li><i class="fas fa-check"></i> React / Vue / PHP</li>
                        <li><i class="fas fa-check"></i> Performance Ottimizzate</li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>Progettazione di interfacce utente intuitive e coinvolgenti che migliorano l'esperienza.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Prototipazione Figma</li>
                        <li><i class="fas fa-check"></i> Design Systems</li>
                        <li><i class="fas fa-check"></i> Animazioni & Interazioni</li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>SEO & Marketing</h3>
                    <p>Strategie per aumentare la visibilità online e raggiungere il target di riferimento.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Ottimizzazione SEO</li>
                        <li><i class="fas fa-check"></i> Social Media Integration</li>
                        <li><i class="fas fa-check"></i> Analytics & Report</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Recent Projects -->
        <div class="projects-section">
            <div class="section-header">
                <h2 class="section-title">Progetti Recenti</h2>
                <a href="#" class="btn btn-sm btn-outline-light">Vedi tutti</a>
            </div>
            <div class="table-responsive">
                <table class="table table-dark table-hover custom-table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Progetto</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Data Scadenza</th>
                            <th scope="col">Stato</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>E-commerce Redesign</td>
                            <td>Mario Rossi</td>
                            <td>15 Feb 2026</td>
                            <td><span class="status-badge status-active">In Corso</span></td>
                            <td><button class="btn btn-sm btn-link text-white"><i
                                        class="fas fa-ellipsis-h"></i></button></td>
                        </tr>
                        <tr>
                            <td>Landing Page Startup</td>
                            <td>Giulia Bianchi</td>
                            <td>20 Feb 2026</td>
                            <td><span class="status-badge status-pending">In Attesa</span></td>
                            <td><button class="btn btn-sm btn-link text-white"><i
                                        class="fas fa-ellipsis-h"></i></button></td>
                        </tr>
                        <tr>
                            <td>Blog Personale</td>
                            <td>Luca Verdi</td>
                            <td>10 Gen 2026</td>
                            <td><span class="status-badge status-completed">Completato</span></td>
                            <td><button class="btn btn-sm btn-link text-white"><i
                                        class="fas fa-ellipsis-h"></i></button></td>
                        </tr>
                        <tr>
                            <td>App Gestionale</td>
                            <td>Studio Legale X</td>
                            <td>01 Mar 2026</td>
                            <td><span class="status-badge status-active">In Corso</span></td>
                            <td><button class="btn btn-sm btn-link text-white"><i
                                        class="fas fa-ellipsis-h"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

</body>

</html>