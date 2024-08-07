# ClearML Utils

ClearML Utils è un tool interno progettato per facilitare agli amministratori e sviluppatori la gestione e l'utilizzo delle macchine di serving e dei servizi Enqueue Task e Ondemand. Questo strumento permette:

- Agli amministratori di registrare una nuova macchina per il serving.
- Agli sviluppatori di registrare un nuovo task utilizzabile dagli utenti finali per il servizio di enqueue task.
- Agli sviluppatori di registrare un endpoint per l'uso tramite il servizio on-demand.
- La visualizzazione dei log delle chiamate sia per il servizio di enqueue task che per il servizio on-demand.

## Funzionalità

### Per gli Amministratori

#### Registrazione di una Nuova Configurazione di Serving Machine

Per rendere una nuova macchina di serving disponibile agli utenti finali, seguire i seguenti passi:

1. Accedere all'applicazione tramite l'URL: [http://192.168.1.52:9000](http://192.168.1.52:9000).
2. Navigare alla pagina **Serving Machine Mappings** e cliccare su **Nuovo**.
3. Inserire il **Serving Machine Task ID** e l’**URL di base** della macchina (ad esempio `http://192.168.x.x:8080/serve`).
4. Premere **Salva**.

### Per gli Sviluppatori

#### Enqueue Task

Per mettere a disposizione un task per il servizio di enqueue task, seguire questi passaggi:

1. Creare e parametrizzare il task su ClearML.
2. Copiare l'**ID del task** (disponibile in alto a destra nella pagina del task su ClearML).
3. Accedere all'applicazione tramite l'URL: [http://192.168.1.52:9000](http://192.168.1.52:9000).
4. Andare nella sezione **Task Mappings** e cliccare su **Nuovo**.
5. Inserire il **Task ID** e il **nome della coda di default** sul quale eseguire il task.
6. Premere **Salva**.

L'applicazione genererà un hash del task ID, che sarà utilizzato dagli utenti finali per chiamare questo servizio, eliminando la necessità di conoscere il vero ID del task.

#### Registrazione Servizio On-Demand

Per rendere disponibile un servizio tramite Node-RED, seguire questi passaggi:

1. Accedere all'applicazione tramite l'URL: [http://192.168.1.52:9000](http://192.168.1.52:9000).
2. Andare nella sezione **Endpoint Mappings** e cliccare su **Nuovo**.
3. Inserire il **Serving Machine Task ID** e il **nome dell'endpoint** (uguale a quello della linea di comando).
4. Premere **Salva**.

L'applicazione genererà un hash del serving machine task ID, che sarà utilizzato dagli utenti finali insieme al nome dell'endpoint per chiamare questo servizio.

### Visualizzazione dei Log

È possibile visualizzare i log delle chiamate effettuate ai servizi Enqueue e On-Demand seguendo questi passaggi:

1. Accedere all'applicazione tramite l'URL: [http://192.168.1.52:9000](http://192.168.1.52:9000).
2. Navigare alle sezioni **Log servizi On-Demand** e **Log servizi Enqueue Task**.

### Sezioni di Log Disponibili

- **Log servizi On-Demand**: Visualizza i log delle chiamate effettuate ai servizi on-demand.
- **Log servizi Enqueue Task**: Visualizza i log delle chiamate effettuate ai servizi di enqueue task.

---