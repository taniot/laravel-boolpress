# Laravel BoolPress

CMS per la gestione di articoli

## Roadmap

- [x] Integrazione upload immagine in create
- [x] Creazione snippet JS per anteprima immagine upload - quando cambia immagine, cambia anteprima
- [x] Integrazione in edit dell'upload immagine e snippet anteprima
- [x] Gestione dei casi "edit" per la gestione dell'immagine
- [x] Gestione dei casi per la cancellazione di un post
- [x] Gestione categorie post - casi categorie post

### Casi "Edit"

- Post con immagine -> visualizzare immagine
- Post senza immagine -> non visualizzare immagine
- Eliminazione immagine prima di sostituzione (PostController)
- L'utente può selezionare se caricare o no immagine (checkbox?)
- Revisione PostController per gestione casi

### Casi Delete Post
- Quando cancelliamo un post, cancelliamo l'immagine associata


### Casi categorie Post
- Creazione tabella categorie (migration)
-- Popolare tabella categorie (seeder)
- Creazione chiave esterna post - categorie
-- modificare seeder creazione post con categorie
- Istruire laravel su come utilizzare le nuove istanze / relazioni (Model)


