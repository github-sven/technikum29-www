<?php
	/* Die seiten-ID dient zur Identifikation der Seite */
	/* im Menü. Bitte nicht verändern. */
	$seiten_id = 'robotik';
	$version = '$Id: robotik$';
	/* Der Titel wird im Browserfenster angezeigt */
	$titel = 'Robotik Workshop im technikum29 und an Schulen';

$sidebar_content = <<<SIDEBAR_ENDE

<div class="text-block">
	Seite zuletzt aktualisiert:
	<br>20.9.2017
</div>

<div class="spacing"></div>

<div class="bild-block">
	<a href="https://goo.gl/maps/Rq4Ep" title="5min Fußweg vom Bahnhof Kelkheim-Hornau"><img src="wegskizze-bahnhof.png" style="width:100%"></a>
	<p class="bildtext">Das technikum29 ist 4 Minuten vom <a href="http://www.rmv.de/auskunft/bin/jp/stboard.exe/dn?input=3004295&time=00:56&maxJourneys=10&dateBegin=28.06.15&dateEnd=12.12.15&selectDate=&productsFilter=1111111111111111&start=yes&dirInput=&view=STATIONINFO">Bahnhof Kelkheim-Hornau</a> entfernt und auch mit Bus 263 gut erreichbar.</p>
</div>

<div class="bild-block">
	<a class="popup" href="2-roboter.jpg">
		<img src="2-roboter.jpg" />
	</a>
	<p class="bildtext">Roboter bestückt mit 3 Motoren und bis zu 5 Sensoren.</p>
</div>

<div class="text-block">
	<strong>Robotik in der Schule:</strong>
	<p>Das technikum29 sponsert je einen Robotik-Workshop an folgenden Schulen: Eichendorffschule (EDS), Kelkheim sowie Albert-Einstein-Schule (AES), Schwalbach. Hier werden für die 6. Klassen zwei Stunden pro Woche angeboten und von den Schülern mit Begeisterung angenommen! 
	<br><br>
	Siehe auch: <a href="http://www.aesmtk.de/cms/index.php/49-ueber-uns/mint/765-robotik-workshop-begeistert-sechstklaessler-der-aes"> Robotik-Workshop begeistert Sechstklässler der AES</a> </p>
</div>

Neueste Presseberichte:<br><br>
<a href="FAZ-24.6.2017.pdf"> Tüfteln, bis der Robo spurt</a> FAZ vom 24.6.2017


SIDEBAR_ENDE;
	
	require "../lib/technikum29.php";
?>

<header class="teaser">
	<h2>
	<span class="subtext">Spaßig-intelligente Alternative für die Ferien:</span>
	Roboter programmieren
	</h2>
	<img class="no-copyright" src="header-bild.jpg">
</header>


<div class="cols">

<div class="leftcol">

<h3>Fun for Future:</h3>

<p>Es sind nicht die Pop- oder Sportstars, welche unsere Zivilisation weiter bringen sondern Menschen die sich mit den intelligenten MINT-Fächern beschäftigen. Roboter zu bauen und programmieren macht Spaß, da man hier richtig kreativ "spielen" kann. Ganz nebenbei wirken diese Fähigkeiten in Zukunft als Jobmotoren.</p> 

<div class="box center nomargin-bttom">
<img src="aes-gruppe-2017.jpg" width="405"  height="205"/> 
<div class="small">Die AES-Robotik-Gruppe</div>
</div>

<p>
In dem Workshop lernst du mit einer <b>grafischen Methode</b>, wie man Programme erstellt. Du erfährst, wie der Roboter exakt deine Anweisungen ausführt. Wenn alle Sensoren im Einsatz sind, kann sich der Roboter mühelos in einem fremden Umfeld bewegen. Er findet sich sogar in einem Labyrinth zurecht!<br>

Es gibt per Programmierung unendlich viele Möglichkeiten, den Roboter "intelligent" zu machen.<br><br>

Der Workshop richtet sich an <b>technikinteressierte Schüler(innen)</b> im Alter von <b>11 bis 13 Jahren</b>. Es gibt Kurse für Anfänger und welche für Fortgeschrittene.</p>

<div class="box center nomargin-bottom">
<img  src="aug.2017-1.jpg" width="300"   height="275"/> 
<div class="small">"Kein simples Programm...."</div>
</div>



<h3>Inhalt</h3>
<ul>
<li>Erklärung der Sensoren. Selbstständiges lineares Programmieren nach Vorgaben. Einführung von Schleifen. Eigenes Planen und Testen von Programmen.
<li>Programmverzweigungen, Unterprogramme und parallel laufende Programme (Multitasking), spezielle Programmiertechniken. Interrupts.
<li>Linie fahren. Programmierte Navigation, Farben erkennen, Linien zählen mit Sprachwiedergabe. Zufallsgeneratoren einbinden, gewürfelte Töne.
<li>Datenleitungen, Variable speichern und verwenden, Mathe-Block. Sensorwerte anpassen, Zählen, vergleichen, logische Entscheidungen Treffen, im Raum navigieren, Spiele entwickeln usw. 

</ul>


</div><!--/leftcol -->

<div class="rightcol">

<p>Das Grundprinzip lautet: Es soll auch Spaß machen! Das Niveau wird dem Alter der Schüler angepasst.<br>
Hier beispielhaft einige Aufgaben, die man nach ca. 5-6 Unterrichtsstunden lösen kann: <a class="go" href="/robotik/blatt4.pdf" target="_blank">Aufgabenblatt 4 (PDF)</a> <br>
Keine Angst, das wird ja alles besprochen....und zwischendurch gibt es immer wieder Wettbewerbe mit Schoklolade als Gewinn.</p>

<h3>Voraussetzungen</h3>
<p>Im Einführungskurs sind keine Programmierkenntnisse erforderlich. Du erfährst und lernst alles hier. Du benötigst allerdings Geduld, auch mal Durchhaltevermögen, musst <b>teamfähig sein</b> und solltest <b>Spaß am logischen Denken haben</b>! Im Kurs für Fortgeschrittene sind die grundlegenden Kenntnisse der EV3-Programmierung erforderlich. Er baut auf unsere Einführungskurse auf.</p>
<div class="box center nomargin-bottom">
<img src="aug.2017-3.jpg" width="330"  height="246"/> 
<div class="small">"Macht einfach Spaß...."</div>
</div>
<h3>Bedingungen und Kosten</h3>
<p>Pro Kurs können 10 Schüler teilnehmen. Je zwei Teilnehmer programmieren einen Roboter mit dem System LEGO MINDSTORMS Education EV3. Das Material wird während der Kurszeit zur Verfügung gestellt. Die Roboter sind eventuell bereits zum Teil aufgebaut, so dass dann mehr Zeit für die Programmierung vorhanden ist.<br>
Die Kursgebühr für den Ferienkurs (10 Zeitstunden) beträgt 40 Euro.</p>


<h3>Termine</h3><br>

<font color="#FF0000"><b>Herbstferien:</b></font><br>
<b>Einführungskurs</b>: 9.10. bis 13.10. Teilnehmer:<br> <i> Jasper, Carl, Marc, Amelie, Meryem, Gereon, Julian, Simon, Sebastian und Patrick.</i><br>
<b>Fortsetzungskurs</b>: 16.10. bis 20.10. Dieser setzt die Kenntnisse des Einführungskurses voraus.  Teilnehmer: <i>3-mal Maximilian, David, Bjarne, Joel, Finley, Tobias, Julian und Yash.</i><br>Die Kurse laufen jeweils von 14:00 bis 16:00 Uhr.<br>


<font color="#FF0000"><b>Osterferien 2018:</b></font><br>
In Planung ist ein Einführungskurs von Di. 3.4. bis Sa. 7.4.2018 jeweils von 14:00 bis 16:00 Uhr.<br>

<h3>Anmeldung und Vormerkung</h3>  
<p>
per E-Mail an <a class="email" href="mailto:post@technikum29.de">post@technikum29.de</a>
</p>

</div><!-- /rightcol -->
</div><!-- /cols -->
<div class="clear cols">

<p><b>Erstaunlicherer Erfolg ehemaliger Teilnehmer des Robotik-Workshops:</b>
Vor drei Jahren wurde das "Fundament" hier im <i>technikum29</i> gelegt. Die Kids, mittlerweile Jugendliche der 9. Klasse, entdeckten ihre Begeisterung für die Robotik. Bei dem Deutschlandfinale der WRO (World Robot Olympiad) gewannen sie am 17./18. Juni 2017 den 2. Platz und haben sich damit für das Weltfinale in Costa Rica qualifiziert. Weitere Einzelheiten siehe: 
<a class="go" href= "http://www.themindfactory.de" target="_blank">THE MINDFACTORY 2.0</a>. </p>


	<div  class="box bordered nomargin-bottom" id="3D">
	
	
	<div class="box left">
	<img src="arduino.jpg" width="220"  height="171"/> 
<div class="small">Arduino-Zähler, Einführungsbeispiel</div></div>

<p class="bildtext"><big><big>Das Arduino-Labor: Physical-Computing & Robotics</big></big> </p>

	Neu im technikum29: Für Schüler ab Klasse 8 bieten wir quasi eine Fortsetzung des Robotik-Workshops auf deutlich höherem Niveau an, siehe <a href="/physical-computing" target="_blank"> Physical-Computing & Robotics </a>.

</div>

		<div  class="box bordered nomargin-bottom" id="geburtstag">
	<p class="bildtext"><big><big>Geburtstags-Event für Kids ab 10</big></big> <br><br>
	Das technikum29 bietet für 8 bis 12 Kinder und Jugendliche ab dem Alter von ca. 10 Jahren einen Geburtstags-Event der besonderen Art an: <br>
	Zunächst erfolgt eine altersgemäße interaktive Führung durch die Epochen der Computerwelten. Hier werden die Kids immer mit einbezogen und können die Computer-Dinosaurier selbst bedienen. Dabei passen wir den "Tiefgang" dem Alter der Teilnehmer an.<br>
	Nach einer kleinen Pause experimentieren die Kids in Gruppen an wirklich interessanten Projekten die so viel Spaß machen, dass das Ende der "Feier" schwer fällt. Für den Workshop sollten die Teilnehmer jedoch mindestens 11 Jahre alt sein.<br>
	Eine abwechslungsreiche und intelligente Alternative zu den sonst üblichen Geburtstagspartys. Dauer ca. 2 bis 3 Stunden.</p>
</div>


