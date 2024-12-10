# Raport la lucrarea de lucru individual

## Descrierea lucrării de laborator
Lucrarea individuală reprezintă o oportunitate unică pentru studenți de a-și manifesta abilitățile creative și cunoștințele în dezvoltarea unei aplicații, fie pe partea de backend, fie pe partea de frontend, folosind cadre de lucru moderne.
Acest proiect are scopul de a îmbina cunoștințele teoretice acumulate în timpul cursurilor cu abilitățile practice dobândite în laboratoare și în timpul studiului individual.
Este un proces care ajută studenții nu doar să aprofundeze cunoștințele lor, ci și să se pregătească pentru o carieră viitoare în domeniul dezvoltării software, în care creativitatea, abilitățile și capacitatea de auto-învățare sunt foarte valorizate.

## Documentație scurtă a proiectului

### Descrierea proiectului
Aplicația Laravel oferă acum funcționalități pentru gestionarea sarcinilor:

- Vizualizarea listei de carti
- Adăugarea unei carti noi
- Editarea unei carti disponibile
- Vizualizarea detaliilor unei carti
- Ștergerea unei sarcini
- Autentificare și autorizare
- Protecție împotriva CSRF
- Gestionarea accesului utilizatorilor
- Crearea rutelor protejate
- Gestionarea rolurilor utilizatorilor

### Interfața aplicației
Interfața aplicației este simplă și intuitivă. Toate funcțiile sunt disponibile pe pagina principala home „Toate Cartile”,care este disponibila tuturor utilizatorilor. Acestea pot vedea toate cartile care sunt pe site in liber acces si citi informatii despre ele. La fel este si panelul pentru admin unde acesta pot efectua cu ușurință acțiunile necesare pentru adaugarea, editarea sau stergerii unei carti.

### Structura directoarelor și fișierelor

Aplicația Laravel conține următoarele directoare și fișiere:

- Controlerele aplicației.
- Paginile pentru vizualizarea, editarea, ștergerea și crearea sarcinilor în directorul `resources/views/books`.
- Modelele bazei de date.
- Fabricile pentru generarea automată a datelor de test, în `database/factories`.
- Migrațiile pentru crearea structurii bazei de date, în `database/migrations`.
- Seed-urile pentru popularea bazei cu date de test, în `database/seeders`.
- Rutele aplicației.
- Paginile pentru inregistrare, logare `resources/views/auth`.
- Policies: Politici pentru gestionarea accesului  `Policies/DashboardPolicy`.
- Migrațiile pentru crearea structurii bazei de date, în `database/migrations`.

##  Exemple de utilizare a proiectului cu atașarea capturilor de ecran sau a fragmentelor de cod
- exemplu de pagina principala 
![pagina principala care afiseaza toate cartile din libera vizualizare](screenshots/Captură%20de%20ecran%202024-12-10%20102409.png)

- exemplu de pagina principala 
![pagina principala care afiseaza toate cartile si link-uri la pagini de creare, editare, stergere doar pentru admin](screenshots/Captură%20de%20ecran%202024-12-10%20102709.png)

- exemplu de pagina cu creare de carte noua
![pagina de creare a unei noi carti](screenshots/Captură%20de%20ecran%202024-12-10%20102748.png)

- exemplu de pagina cu editarea unei carti existente
![pagina de creare a unei noi carti](screenshots/Captură%20de%20ecran%202024-12-10%20102844.png)

- exemplu de pagina inregistrare a contului
![pagina de inregistrare](screenshots/Captură%20de%20ecran%202024-12-10%20102619.png)

- exemplu de pagina cu login
![pagina de login](screenshots/Captură%20de%20ecran%202024-12-10%20102526.png)


##  Lista surselor utilizate
- database: https://cloud.google.com/architecture/database-migration-concepts-principles-part-1
- git: https://github.com/MSU-Courses/frameworks-for-web-development/tree/main/ro/08_orm_in_laravel
- laravel many-to-many: https://laravel.com/docs/11.x/eloquent-relationships
- CSRF Protection: https://laravel.com/docs/10.x/csrf
- Authentication: https://laravel.com/docs/10.x/authentication
- Authorization: https://laravel.com/docs/10.x/authorization
- Laravel Breeze: https://laravel.com/docs/10.x/authentication#introduction

