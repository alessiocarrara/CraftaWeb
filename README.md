# 🌐 <a href="https://craftaweb.it/" target="_blank">CraftaWeb</a>

## 📋 Overview

**CraftaWeb** is a personal portfolio website built with a **dark/liquid glass** aesthetic, designed to convey professionalism and modernity. The project is built entirely with PHP, HTML, CSS and JavaScript, with no backend framework dependencies.

---

## 🗂️ Project structure

```
craftaweb/
├── assets/
│   ├── css/
│   │   ├── style.css          # Main site styles
│   │   ├── sidebar.css        # Sidebar styles (desktop + mobile)
│   │   └── footer.css         # Footer styles
│   └── img/                   # Images and logos
├── js/
│   ├── script.js              # Sidebar logic, parallax, smooth scroll
│   └── ticker.js              # Dynamic ticker speed calculation
├── res/
│   └── header.php             # HTML head + CSS/JS includes + libraries
├── widget/
│   ├── sidebar.php            # Sidebar component
│   └── footer.php             # Footer component
├── index.php                  # Main page
└── .htaccess                  # Apache configuration (URL rewriting, security)
```

---

## 🧩 Page sections

| Section | Description |
|---|---|
| About me | Short personal introduction |
| My services | Three cards describing the services offered |
| Technologies | Infinite animated ticker with technology logos |
| Contact me | Direct link to the contact email address |

---

## 🛠️ Technologies used

### Frontend
- **HTML5/CSS3** — structure and styles;
- **PHP** — minimal template engine (header, sidebar, footer includes);
- **JavaScript** — sidebar toggle, smooth scroll, mobile parallax;
- **jQuery** — used for dynamic ticker animation duration calculation;
- **Bootstrap 5** — responsive grid and utilities.

### Fonts & Icons
- **Google Fonts** — headings, body text and sidebar;
- **Material Symbols Rounded** — UI icons;
- **Font Awesome** — additional icons;
- **SimpleIcons CDN** — technology logos in the ticker.

### Server
- **Apache** with `.htaccess` for:
  - Clean URL rewriting (removing `.php` extension from URLs);
  - Automatic 301 redirect from `/page.php` to `/page`;
  - Sensitive file protection (`.htaccess`, `.sql`, `.log`, etc.);
  - Directory listing disabled;
  - HTTP security headers (CSP, HSTS, X-Frame-Options, etc.).

---

## 🎨 Design system

The site adopts a **dark glass morphism / liquid glass** aesthetic with the following main CSS variables:

```css
--primary-color: #786cff;   /* Main purple */
--primary-deep:  #5b4ddb;   /* Deep purple */
--accent:        #eacb3d;   /* Yellow accent */
--dark-bg:       #0e0f1a;   /* Dark background */
```

### Key visual components
- **Glass card** — cards with `backdrop-filter: blur(20px)`, semi-transparent border and hover lift + glow effect;
- **Liquid glass sidebar** — on mobile it becomes a top-bar with glass effect and glowing borders;
- **Section dividers** — animated SVG waves between sections;
- **Tech ticker** — infinite scrolling strip with technology logos, speed dynamically calculated based on content width;
- **Mobile parallax** — subtle parallax effect on the background while scrolling.

---

## 📱 Responsive Design

The layout adapts to three main breakpoints:

| Breakpoint | Behaviour |
|---|---|
| `> 1024px` | Fixed lateral sidebar, collapsible with toggle |
| `≤ 1024px` | Sidebar becomes a top-bar with hamburger menu and overlay |
| `≤ 768px` | Single column layout, reduced padding, parallax active |
| `≤ 480px` | Further typography and spacing optimisation |

---

## 🔒 Security

The `.htaccess` file implements several layers of protection:

- **Content Security Policy (CSP)** — explicit whitelist of allowed sources for scripts, styles, fonts and images;
- **HSTS** — HTTPS enforcement with `max-age=31536000`;
- **X-Frame-Options: SAMEORIGIN** — clickjacking prevention;
- **X-Content-Type-Options: nosniff** — MIME sniffing prevention;
- **Permissions-Policy** — disables unnecessary browser APIs (camera, microphone, geolocation, etc.);
- **Sensitive file blocking** — `.htaccess`, `.htpasswd`, `.ini`, `.log`, `.sh`, `.sql` are not accessible via HTTP.

---

## 📄 License

© 2026 **CraftaWeb** — All rights reserved.

---

<p align="center">Made with ❤️ by <a href="mailto:info@craftaweb.it">Alessio Carrara</a></p>

---

# 🌐 <a href="https://craftaweb.it/" target="_blank">CraftaWeb</a> 🇮🇹

## 📋 Panoramica

**CraftaWeb** è un sito web di presentazione personale costruito con un'estetica **dark/liquid glass**, pensato per trasmettere professionalità e modernità. Il progetto è sviluppato interamente in PHP, HTML, CSS e JavaScript, senza dipendenze da framework backend.

---

## 🗂️ Struttura del progetto

```
craftaweb/
├── assets/
│   ├── css/
│   │   ├── style.css          # Stili principali del sito
│   │   ├── sidebar.css        # Stili della sidebar (desktop + mobile)
│   │   └── footer.css         # Stili del footer
│   └── img/                   # Immagini e loghi
├── js/
│   ├── script.js              # Logica sidebar, parallax, smooth scroll
│   └── ticker.js              # Calcolo dinamico velocità del ticker
├── res/
│   └── header.php             # HTML head + inclusione CSS/JS + librerie
├── widget/
│   ├── sidebar.php            # Componente sidebar
│   └── footer.php             # Componente footer
├── index.php                  # Pagina principale
└── .htaccess                  # Configurazione Apache (riscrittura URL, sicurezza)
```

---

## 🧩 Sezioni della pagina

| Sezione | Descrizione |
|---|---|
| Chi sono | Breve presentazione personale |
| I miei servizi | Tre card con i servizi offerti |
| Tecnologie utilizzate | Ticker animato con i loghi delle tecnologie utilizzate |
| Contattami | Link diretto alla email di contatto |

---

## 🛠️ Tecnologie utilizzate

### Frontend
- **HTML5/CSS3** — struttura e stili;
- **PHP** — template engine minimale (include di header, sidebar, footer);
- **JavaScript** — sidebar toggle, smooth scroll, parallax su mobile;
- **jQuery** — utilizzato per il calcolo dinamico della durata del ticker;
- **Bootstrap 5** — griglia responsive e utilità.

### Font & Icone
- **Google Fonts** — titoli, corpo testo e sidebar;
- **Material Symbols Rounded** — icone interfaccia;
- **Font Awesome** — icone aggiuntive;
- **SimpleIcons CDN** — loghi tecnologie nel ticker.

### Server
- **Apache** con file `.htaccess` per:
  - Riscrittura URL puliti (rimozione `.php` dall'URL);
  - Redirect 301 automatico da `/pagina.php` a `/pagina`;
  - Protezione file sensibili (`.htaccess`, `.sql`, `.log`, ecc.);
  - Disabilitazione directory listing;
  - Header di sicurezza HTTP (CSP, HSTS, X-Frame-Options, ecc.).

---

## 🎨 Design system

Il sito adotta un'estetica **dark glass morphism/liquid glass** con le seguenti variabili CSS principali:

```css
--primary-color: #786cff;   /* Viola principale */
--primary-deep:  #5b4ddb;   /* Viola scuro */
--accent:        #eacb3d;   /* Giallo accento */
--dark-bg:       #0e0f1a;   /* Sfondo scuro */
```

### Componenti visivi chiave
- **Glass card** — card con `backdrop-filter: blur(20px)`, bordo semi-trasparente e hover con lift + glow;
- **Liquid glass sidebar** — su mobile diventa una top-bar con effetto vetro e bordi luminosi;
- **Section dividers** — onde SVG animate tra le sezioni;
- **Tech ticker** — striscia infinita con i loghi delle tecnologie, velocità calcolata dinamicamente in base alla larghezza del contenuto;
- **Parallax mobile** — effetto parallasse leggero sullo sfondo durante lo scroll.

---

## 📱 Responsive Design

Il layout si adatta a tre breakpoint principali:

| Breakpoint | Comportamento |
|---|---|
| `> 1024px` | Sidebar fissa laterale, collassabile con toggle |
| `≤ 1024px` | Sidebar diventa top-bar con menu hamburger e overlay |
| `≤ 768px` | Layout a colonna singola, padding ridotti, parallax attivo |
| `≤ 480px` | Ulteriore ottimizzazione tipografia e spaziatura |

---

## 🔒 Sicurezza

Il file `.htaccess` implementa diversi livelli di protezione:

- **Content Security Policy (CSP)** — whitelist esplicita di sorgenti per script, stili, font e immagini;
- **HSTS** — forzatura HTTPS con `max-age=31536000`;
- **X-Frame-Options: SAMEORIGIN** — prevenzione clickjacking;
- **X-Content-Type-Options: nosniff** — prevenzione MIME sniffing;
- **Permissions-Policy** — disabilitazione API browser non necessarie (camera, microfono, geolocalizzazione, ecc.);
- **Blocco file sensibili** — `.htaccess`, `.htpasswd`, `.ini`, `.log`, `.sh`, `.sql` non accessibili via HTTP.

---

## 📄 Licenza

© 2026 **CraftaWeb** — Tutti i diritti riservati.

---

<p align="center">Fatto con ❤️ da <a href="mailto:info@craftaweb.it">Alessio Carrara</a></p>

