<?php
	$seiten_id = 'robotik-ferienkurs';
	$version = '$Id: robotik$';
	$titel = 'Ferienkurs "Robotik" mit Lego-Robotern im technikum29 und an Schulen in Kelkheim und Schwalbach';

$sidebar_content = <<<SIDEBAR_ENDE

<div class="text-block alertbox">
	Seite zuletzt aktualisiert:
	<br>19.06.2015
</div>

<div class="spacing"></div>

<div class="bild-block">
	<a href="https://goo.gl/maps/Rq4Ep" title="5min Fußweg vom Bahnhof Kelkheim-Hornau""><img src="wegskizze-bahnhof.png" style="width:100%"></a>
	<p class="bildtext">Das technikum29 ist 5 Minuten vom <a href="http://www.rmv.de/auskunft/bin/jp/stboard.exe/dn?input=3004295&time=00:56&maxJourneys=10&dateBegin=28.06.15&dateEnd=12.12.15&selectDate=&productsFilter=1111111111111111&start=yes&dirInput=&view=STATIONINFO">Bahnhof Kelkheim-Hornau</a> entfernt und auch mit Bus 263 gut erreichbar.</p>
</div>


<div class="bild-block">
	<a href="roboter.jpg" class="popup"><img src="roboter.jpg" style="max-width:100%" alt="Roboter" /></a>
	<p class="bildtext">Bestückt mit 3 Motoren und 5 Sensoren: <a href="roboter.jpg" class="popup">LEGO Mindstorms-Roboter</a></p>
</div>


<div class="bild-block">
	<a href="http://www.fnp.de/lokales/main-taunus-kreis/Lego-Roboter-werden-zu-Rechenkuenstlern;art676,1000098" target="blank">
		<img src="hk.jpg" width="210" height="135" alt="Frankfurter Neue Presse" />
	</a>
	<p class="bildtext">Einige Schüler beim Entwickeln eines neuen Programms</p>
</div>

<div class="text-block">
	<b>Zeitungsecho</b>
	<ul>
	<li>Kelkheimer Zeitung vom 28.07.2014: <a href="Kelkheimer-Zeitung.pdf">Roboter in den Ferien programmieren</a>
	<li>Höchster Kreisblatt vom 14.04.2015: <a href="http://www.fnp.de/lokales/main-taunus-kreis/Junge-Roboter-fahren-zwischen-alten-Computern-Slalom;art676,1352844" target="blank">Junge Roboter fahren zwischen alten Computern Slalom</a>
	<li>Frankfurter Neuen Presse vom 25.08.2014: <a href="http://www.fnp.de/lokales/main-taunus-kreis/Lego-Roboter-werden-zu-Rechenkuenstlern;art676,1000098" target="blank">Lego-Roboter werden zu Rechenkünstlern</a>
	</ul>
</div>


<div class="bild-block">
	<a class="popup" href="2-roboter.jpg">
		<img src="2-roboter.jpg" width="210" height="146" />
	</a>
</div>

<div class="text">
<strong>Robotik in der Schule:</strong>
<p>Das technikum29 sponsert je einen Robotik-Workshop an folgenden Schulen: Albert-Einstein-Schule, Schwalbach sowie Eichendorffschule, Kelkheim. Hier werden für die Klassen 6/7 zwei Stunden pro Woche angeboten und von den Schülern mit Begeisterung angenommen! Die nächsten Workshops beginnen am 24.9.2015 (EDS) bzw. 28.9.2015 (AES). Anmeldung an der jeweiligen Schule.</p>
</div>


SIDEBAR_ENDE;
	
	require "../lib/technikum29.php";
?>

<header class="teaser">
	<h2>
	<span class="subtext">Spaßig intelligente Altenrative für die Ferien:</span>
	Roboter bauen und programmieren
	</h2>
	<img class="no-copyright" src="header-bild.jpg">
</header>


<div class="cols">

<div class="leftcol">

<p>Fun for Future: Roboter werden in Zukunft eine immer größere Bedeutung haben. Diese zu bauen und programmieren macht Spaß, da man hier richtig kreativ "spielen" kann. In dem <b>Ferienworkshop</b> lernst du mit einer grafischen Methode, wie man Programme erstellt.
<br>Du erfährst, wie der Roboter exakt deine Anweisungen ausführt. Wenn alle Sensoren im Einsatz sind, kann sich der Roboter mühelos in einem fremden Umfeld bewegen. Er findet sich sogar in einem Labyrinth zurecht!<br>

<p>
<a href="ferienkurs.jpg" class="popup"><img src="ferienkurs.jpg" style="max-width:100%" /></a>

<p>
Als Mars-Rover sucht er selbstständig nach Objekten und nähert sich ihnen vorsichtig an. So scannt er eine unbekannte Fläche ab. Er kann auch tanzen, die Länge von Strecken vermessen oder auf "Straßen" navigieren.<br>
Es gibt per Programmierung unendlich viele Möglichkeiten, den Roboter "intelligent" zu machen.</p>

</div><!--/leftcol -->
<div class="rightcol">

<p>Der Workshop richtet sich an <b>technikinteressierte Schüler(innen)</b> im Alter von <b>11 bis 13 (14) Jahren</b>, sowohl intelligente Einsteiger als auch Fortgeschrittene. Er findet im <a href="/" class="go">technikum29</a> in Kelkheim-Hornau statt.
Es gibt Einsteiger- und Fortgeschrittenenkurse.

<h3>Inhalt</h3>
<ul>
<li>Aufbau der Roboter, Erklärung der Sensoren.
<li>Selbstständiges lineares Programmieren nach Vorgaben. Einführung von Schleifen. Eigenes Planen und Testen von Programmen.
<li>Programmverzweigungen, Unterprogramme und parallel laufende Programme (Multitasking), spezielle Programmiertechniken. Interrupts.
<li>Linie fahren. Programmierte Navigation, Mars-Rover sucht Objekte, Farben erkennen, Sprachaufzeichnung, Linien zählen, Roboter zeichnet Figuren (Robograph), Datenleitungen, Variablen speichern und verwenden, Mathe-Block. Zählen, Vergleichen, logische Entscheidungen Treffen usw.
</ul>
<p>Das Grundprinzip lautet: Es soll vor allem Spaß machen! Das Niveau wird dem Alter der Schüler angepasst.

</div><!--/rightcol-->
</div><!--/cols -->

<div class="clear cols">

<div class="leftcol">
<h3>Vorraussetzungen</h3>
<p>Im Einsteigerkurs sind keine Programmierkenntnisse erforderlich. Du erfährst und lernst alles hier. Du benötigst allerdings Geduld, auch mal Durchhaltevermögen, musst teamfähig sein und solltest <b>Spaß am logischen Denken</b> haben! Im zweiten Kurs sind die grundlegenden Kenntnisse der EV3-Programmierung erforderlich. Er baut auf unsere Einführungskurse auf und eignet sich auch für 14-jährige Schüler.

<h3>Bedingungen und Kosten</h3>
<p>Pro Kurs können 10 Personen teilnehmen. Je zwei Teilnehmer bauen und programmieren einen Roboter mit dem System LEGO MINDSTORMS Education EV3. Das Material wird während der Kurszeit zur Verfügung gestellt.
Die Kursgebühr für den Ferienkurs beträgt 40 Euro pro Teilnehmer.


</div><!--/leftcol -->
<div class="rightcol">
<h3>Termine für die Sommerferien</h3>
<p>Terminvorschläge für die Sommerferien (jeweils 10 bis 12 Uhr, alternativ 14 bis 16 Uhr):

<ul>
 <li><b>Kurs für Einsteiger</b>
	<br>Montag 3.8. bis Freitag 7.8.
	<br><em>Bisher angemeldet:</em> Simon, Daniel, Rebekka, Tim, Felix
	<br>5 offene Plätze
 <li><b>Kurs für Fortgeschrittene</b>
	<br>Montag 24.8. bis Freitag 28.8.
	<br><em>Bisher angemeldet:</em> David, Tim
	<br>8 offene Plätze
</ul>


<p>Es ist sinnvoll, sich für die Kurse in den Sommerferien vormerken zu lassen! Wer zu den aufgeführten Terminen nicht kommen kann, hat die Möglichkeit selbst Terminvorschläge zu machen. Wir sind flexibel, sammeln die Wünsche und werden gegebenenfalls einen zweiten Einführungskurs anbieten.

<p><b>Anmeldung und Vormerkung</b> per E-Mail an <a class="email" href="mailto:post@technikum29.de">post@technikum29.de</a>

</div><!-- /rightcol -->
</div><!-- /cols -->

