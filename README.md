# HallOfFameDB
## Aleksandar Aćimović
## 16919

Stranica koja vodi evidenciju o poznatim ličnostima.

# Spirala 1

Urađeno je:

- Napravljene skice za sve podstranice na stranici, oboje, i za standardne veličine ekrana kao i za mobilne uređaje.
- Sve napravljene stranice su responzivne i imaju grid-view.
- Pomoću media query-a je regulisan izgled za vecinu mobilnih uređaja
- Implementirane su sljedeće HTML forme:
    -Login
    -Contact
    -Add new celeb
- Meni webstranice je implementiran

Moguće je u nekim mobilnim verzijama da se meni ne moze kliknuti na sredinu, nisam siguran jel to do samog emulatora na chromu ili ne, nije se pojavilo na svim mobilnim verzijama.

Lista fajlova:
-add_celebs.html
-adminlogin.html
-contact.html
-home.html
-css/grid.css
-css/stil.css (panirano odvojiti stilove)
 
# Spirala 2

Urađeno je:
- Sva polja formi imaju validaciju koja je implementirana pomoću JavaScript-a
- Koristeći JavaScript implementirano:
    - Gallery on Click otvaranje slike
- AjaxLoad učitavanje stranica  

Galerija kada se kod manjih prozora bjezi na lijevo

Lista fajlova:
-add_celebs.html
-adminlogin.html
-contact.html
-home.html
-css/grid.css (sav still)
-css/stil.css (panirano odvojiti stilove)
-gallery.html (Galerija)
-index.html (odavde se loadaju sve ostale stranice)
-js/scripts.js (JavaScripte)
-img/celeb.jpg (slika testna)

# Spirala 3

Urađeno je:
-Login. Username: admin , Password: admin
-Serializacija i deserializacija XML. Omoguceno da admin unosi, brise i mjenja podatke.
-Prikazivanje podataka.
-CSV file download i save
-PDF file download
-Deploy na OpenShift(http://halloffame-wtproject.44fs.preview.openshiftapps.com/)

Lista fajlova(novi i modifikovani):
-add_celebs.php
-adminlogin.php
-adminpanel.php
-celeb.php
-contact.php
-editCeleb.php
-fpdf.php
-galler.php
-index.php
-Partials/addCeleb.php
-Partials/csvDownload.php
-Partials/delete.php
-Partials/edit.php
-Partials/header.php
-Partials/footer.php
-Partials/login.php
-Partials/logout.php
-Partials/pdfDownload.php
-fonts/ (fontovi za fpdf.php)