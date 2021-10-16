# Event.ly

## Motywacja

Event.ly powstało jako narzędzie umożliwiające użytkownikom szukania innych ludzi
do wykonywania razem innych aktywności. Niezależnie czy ktoś szuka ludzi do pójścia 
do kina, czy na kilkudniową wycieczkę górską, event.ly sprawia, że nie jest to już problemem

## O event.ly

Event.ly to platforma pozwalająca użytkownikom na tworzenie i dołączanie do różnych wydarzeń.
Użytkownicy będą mogli wystawiać ogłoszenia, do których będą mogli dołączać inni użytkownicy.

Cele wydarzeń nie są z góry sprecyzowane; użytkownicy mają swobodę w tworzeniu dowolnych wydarzeń
tak długo jak nie kłóci się to z regulaminem platformy. 

Event.ly w obecnej iteracji jest stroną internetową z responsywnym design'em.

## Struktura aplikacji

### Użytkownik

Użytkownik będzie miał dostęp do następujących funkcji:

- Dodanie avatar'u
- Uzupełnienie danych o sobie
- Tworzenie wydarzeń
- Usuwanie stworzonych wydarzeń
- Zamykanie wydarzeń
- Obserwowanie i dołączanie do wydarzeń
- Wysyłanie wiadomości do innych użytkowników
- Bycia powiadomionym o obserwowanych wydarzeniach
- Usunięcie konta
- Panel użytkownika

### Wydarzenie

Wydarzenie będzie pewnego rodzaju ofertą. Będzie zawierać tytuł, zdjęcie, opis, limit osób i lokalizację.

Pod wydarzeniem będzie miejsce na komentarze, gdzie użytkownicy będą mogli dyskutować na temat wydarzenia.

### Tablica

Tablica to miejsce, gdzie wyświetlają się wydarzenia. Zawiera paginację oraz filtry,
dzięki którym można szukać interesujących nas wydarzeń

### Panel użytkownika

W tym miejscu użytkownik będzie mógł zarządzać swoim kontem.

#### Kategorie

Wydarzenia będą mogły być przypisane do kategorii, w celu ułatwienia użytkownikom wyszukiwania interesujących ich
ogłoszeń

#### Problemy związane z lokalizacją

Aby uniknąć problemów związanych z podawaniem dokładnej lokalizacji, użytkownicy będą widzieli jedynie przybliżoną
lokalizację wydarzenia.

Gdy data wydarzenia zbliży się na tyle, że twórca uzna że powinien podzielić się dokładną lokalizacją, będzie w stanie
zablokować wydarzenie ( uniemożliwić dołączanie )
i podzielić się dokładną lokalizacją.

Rozwiązanie takie to kompromis między prywatnością a praktycznością
( gdyby żadna lokalizacja nie była podana) użytkownicy nie wiedzieliby czy są w stanie dojechać na miejsce

## Architektura

Backend aplikacji będzie napisany przy użyciu MVC.   
Frontend aplikacji będzie kompilowany przy użyciu Laravel Mix i dołączany w odpowiednich miejscach na stronie.

## Technologie

Backend:

- Laravel
- MySQL

Frontend:

- SCSS
- HTML
- JS
- Alpine.js





