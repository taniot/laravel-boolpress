# Laravel BoolPress

CMS per la gestione di articoli

## Roadmap

- [x] Integrazione upload immagine in create
- [] Creazione snippet JS per anteprima immagine upload - quando cambia immagine, cambia anteprima
- [] Integrazione in edit dell'upload immagine e snippet anteprima
- [] Gestione dei casi "edit" per la gestione dell'immagine
- [] Gestione dei casi per la cancellazione di un post

### Casi "Edit"

- Post con immagine -> visualizzare immagine
- Post senza immagine -> non visualizzare immagine
- Eliminazione immagine prima di sostituzione (PostController)
- L'utente può selezionare se caricare o no immagine (checkbox?)
- Revisione PostController per gestione casi

### Casi Delete Post
- Quando cancelliamo un post, cancelliamo l'immagine associata
