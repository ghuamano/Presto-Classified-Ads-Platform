# Presto - Piattaforma di Annunci Classificati

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-F28D1A?style=for-the-badge&logo=laravel&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![jQuery](https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white)
![Livewire](https://img.shields.io/badge/Livewire-4E56A6?style=for-the-badge&logoColor=white)
![Google Cloud](https://img.shields.io/badge/Google%20Cloud-4285F4?style=for-the-badge&logo=google-cloud&logoColor=white)
![Laravel Scout](https://img.shields.io/badge/Laravel%20Scout-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![TNTSearch](https://img.shields.io/badge/TNTSearch-FF5722?style=for-the-badge&logoColor=white)
![Laravel Fortify](https://img.shields.io/badge/Laravel%20Fortify-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Spatie](https://img.shields.io/badge/Spatie-4E56A6?style=for-the-badge&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)
![NPM](https://img.shields.io/badge/NPM-CB3837?style=for-the-badge&logo=npm&logoColor=white)


# Descrizione
Presto è una robusta piattaforma web per annunci classificati sviluppata con Laravel, che permette agli utenti di creare, gestire ed esplorare inserzioni di prodotti. Questa applicazione facilita la compravendita tra privati attraverso un'interfaccia intuitiva e accessibile, incorporando tecnologie avanzate per migliorare l'esperienza utente e la sicurezza.

# Funzionalità Principali

Gestione Annunci

Creazione di inserzioni con immagini multiple, titolo, descrizione e prezzo
Modifica ed eliminazione di annunci personali
Vista dettagliata del prodotto con informazioni complete

# Sistema di Categorie

Navigazione per categorie per facilitare le ricerche
Filtrazione degli annunci per categoria
Gestione delle categorie dal pannello amministratore
Autenticazione e Gestione Utenti

# Registrazione e accesso sicuri

Profili utente personalizzabili
Ruoli differenziati: utente, revisore e amministratore

# Pannello Amministrativo

Gestione di contenuti e utenti
Statistiche e metriche di utilizzo della piattaforma
Controllo di annunci e categorie
Sistema di Revisione

# Moderazione dei contenuti prima della pubblicazione

Pannello specifico per i revisori
Processo di approvazione/rifiuto degli annunci
Ricerca e Filtraggio

# Ricerca per parole chiave

Filtri avanzati per prezzo, data e caratteristiche
Ordinamento dei risultati secondo diversi criteri
Funzionalità Avanzate
Integrazione Google Cloud Vision API

# Analisi automatica delle immagini per rilevare contenuti inappropriati

Etichettatura automatica delle immagini per migliorare la ricerca
Rilevamento del testo nelle immagini per verificare le informazioni
Analisi di sicurezza per prevenire contenuti per adulti, violenti o inappropriati
Elaborazione delle Immagini

# Ridimensionamento e ottimizzazione automatici

Generazione di miniature per migliorare le prestazioni
Compressione senza perdita significativa di qualità
Sistema di Traduzione

# Supporto multilingua con traduzioni dinamiche

Interfaccia adattata a diverse lingue
Ottimizzazione SEO

# URL amichevoli per i motori di ricerca

Metadati ottimizzati per ogni annuncio
Sitemap dinamica per un'indicizzazione efficiente
Notifiche

# Sistema di avvisi via email

Notifiche in tempo reale sulla piattaforma
Interfaccia Responsiva

# Design adattabile a dispositivi mobili, tablet e desktop

Esperienza utente ottimizzata per diverse dimensioni di schermo

## Tecnologie Utilizzate

### Backend
- ⚙️ **Laravel** 12.x
- 🐘 **PHP** 8.2+

### Database
- 🛢️ **MySQL**

### Frontend
- 🎨 **Blade**
- 🌐 **Bootstrap 5**
- 📜 **JavaScript**
- 💎 **jQuery**
- 🟪 **Livewire 3.6**

## API e Servizi Cloud:
- ☁️ **Google Cloud Vision API**
- 🔍 **Laravel Scout**
- 🔧 **TNTSearch**
- 🔒 **Laravel Fortify**
- 🖼️ **Spatie Image**
- 📦 **Composer**, **NPM**

# Architettura

Il progetto segue un'architettura MVC (Model-View-Controller) secondo le pratiche standard di Laravel:

# Modelli: 

Rappresentano le entità principali (Utente, Annuncio, Categoria, ecc.)
Controller: Gestiscono la logica di business e il flusso di dati

# Viste: 
Template Blade per il rendering dell'interfaccia utente

# Middleware: 
Controllo degli accessi basato su ruoli e permessi

# Job: 
Elaborazione asincrona per attività intensive come l'analisi delle immagini
Eventi e Listener: Per funzionalità reattive come le notifiche

# Installazione


# Clona il repository
```sh
git clone https://github.com/yourusername/presto.git
cd presto
```

# Installa le dipendenze
```sh
composer install
npm install
```

# Configura l'ambiente
```sh
cp .env.example .env
php artisan key:generate
```

# Configura il database in .env
```sh
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=presto
# DB_USERNAME=root
# DB_PASSWORD=
```

# Configura Google Cloud Vision API
```sh
# GOOGLE_CLOUD_KEY_FILE=your-key-file.json
# GOOGLE_CLOUD_PROJECT_ID=your-project-id
```

# Esegui le migrazioni e i seeder
```sh
php artisan migrate --seed
```


# Compila gli asset
```sh
npm run dev
```


# Avvia il server
```sh
php artisan serve
```

# Configurazione Google Cloud Vision API
Per utilizzare la funzionalità di analisi delle immagini:

Crea un account di servizio in Google Cloud Platform
Scarica il file JSON delle credenziali
Posiziona il file nella posizione appropriata secondo la configurazione .env
Attiva Google Cloud Vision API nella console GCP

# Team di Sviluppo
Questo progetto è stato sviluppato da Aurora Piergentili, Alessandro Celona, Luca Coduti e Guillermo Huaman come progetto finale per Aulab Academy.

# Licenza
MIT
