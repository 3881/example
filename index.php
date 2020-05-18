<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Voorbeeld van een ontwikkeltraject</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <article class="">
      <h1>Git is voor het beheren van een repository</h1>
      <p>Met git kunt je op de commandline je repository maken en beheren. Bestanden
        klaarzetten voor een commit (<i>stagen</i>) en vervolgens <i>commit</i> naar je repo. Elke
        keer als je commit heb een kopie van je projectbestanden en kun je altijd terug
        naar de vorige versie.</p>
      <p>Ook als je wat wilt experimenteren in dat geen probleem, want je kunt altijd
        terug naar de laatste goede versie. Eventueel lun je ook verder terug door een
        eerdere commit terug te halen. Dat doe je met een <i>revert</i>.</p>
    </article>
    <article class="">
      <h1>Stagen</h1>
      <p>Het klaarzetten van bestanden voor een commit doe je met stagen of add. Het git commando is:</p>
      <code>git add .</code>
      <p>De punt staat voor alle bestanden in het werkdirectory. Je kunt ook bepaalde
        bestanden toevoegen zodat niet alle bestanden tijdens de commit worden
        meegenomen. Bestanden die niet worden meegenomen in de commit blijven in de Repo verwijzen
        naar de vorige  versie in de vorig commit. Als ze nog niet eerder zijn gecommit dan blijven
         ze staan op status nieuw</p>
    </article>
    <article class="">
      <h1>Commiten</h1>
      <p>Het commiten van de de gestagede bestanden doe je met het commando:</p>
      <code>git commit -m "melding bij commit"</code>
      <p>Tussen de tekstquotes zet een tekst die aangeeft wat of waarom je hebt gecommit.</p>
    </article>
  </body>
</html>
