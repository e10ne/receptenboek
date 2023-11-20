# receptenboek

Opdracht 1 (dag 1)

Frontend

Voordat je begint, maak een NIEUWE repo aan en zorg dat je Jeroen uitnodigd als reviewer. Geef even een headsup als je dit gedaan hebt zodat Jeroen niet weer vergeet deze te accepteren. :-) (post je repo hier in de comments).

We gaan namelijk tijdens deze case weer via GIT werken zodat we fijn samen kunnen werken.

Bouw een frontend pagina voor het specifieke recept (je mag hiervoor Nicepage gebruiken: , maar uiteraard mag je ook zelf wat in elkaar zetten)

- De pagina heeft een titel met de naam van het recept.
- De pagina heeft een lijst met ingredienten.
- De pagina heeft de bereidingswijze (stapsgewijs).
- Zorg dat de HTML en CSS zo veel mogelijk uit elkaar is (HTML file en CSS file).

Opdracht 1 EXTRA:EXTRA FRONTEND:

- Bouw een frontend pagina voor de verschillende recepten (maak een dummy aan ter illustratie tot we data hebben).
- De pagina heeft een titel: “Recepten”
- De pagina heeft een layout waarin minimaal 3 recepten getoond kunnen worden.
- Extra; toon alle recepten uit je database. (dit doen we later)
- De recepten worden enkel deels getoond, je moet door kunnen klikken naar een vervolg pagina voor het recept. (die je in opdracht 1 hebt gebouwd).
- Extra; toon een plaatje boven het recept om het er wat mooier uit te laten zien.

LET OP: SPENDEER NIET TEVEEL TIJD AAN DE FRONTEND!

Opdracht 2 (dag 2)

Database:
- Voor de database gebruiken we MySQL via PHPMyAdmin. Een andere database mag, maar dan bestaat er een kans dat we geen directe hulp kunnen bieden. Blijf dus als je hier niet zeker genoeg over bent bij MySQL. Deze staat via XAMPP automatisch geinstalleerd.
- Maak een database waarin we de verschillende recepten kunnen bewaren.
- Maak een tabel: “recepten” of “recipes”

Een Recept heeft minimaal:
- Naam van recept,
- korte beschrijving,
- bereidingswijze
- EXTRA: ingrediënten (eventueel met een koppel tabel!)
- Extra: file locatie voor de afbeelding van het recept (en alles wat je verder van “extra’s op pakt en nodig hebt).
- Zorg dan ook dat de file in een aparte folder komt te staan!
- Kies de juiste data typen voor elk veld in de database.



Opdracht 3 (Dag 2)

Backend (PHP)
- Maak een connectie met de database.
- Maak een Database call om alle verschillende recepten op te halen. (Titel en korte beschrijving).
- Maak een Database call om een specifiek recept op te vragen.
- Zorg ervoor dat als je op een specifiek recept klikt, je automatisch naar de tweede HTML pagina gaat met de volledige tekst van het specifieke recept.
- Koppel de frontend en de backend
- Toon nu in plaats van de dummy een recept afkomstig uit de database op de recepten pagina.
- Toon nu in plaats van de dummy een echt recept afkomstig uit de database op de specifieke recept pagina.

Database:
- Voeg een “timestamp” toe aan de recepten tabel om bij te houden wanneer het recept is opgeslagen. Zorg ervoor dat dit automatisch gaat met de default value.



Opdracht 4: (Dag 3)
- Voeg ingrediënten toe aan de database in een aparte tabel
- Koppel deze aan het juist recept middels een koppel tabel



EXTRA OPDRACHTEN:

- Maak een extra pagina aan om recepten toe te voegen en sla deze ook op in je database (veilig).
- Maak een extra pagina aan om categorieën toe te voegen, en verwerk deze op de pagina maar ook in de database.
