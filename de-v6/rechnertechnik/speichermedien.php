<?php
	$seiten_id = 'speichermedien';
	$version = '$Id$';
	$titel = 'Historische (interne) Speichermedien';
	
	require "../../lib/technikum29.php";
?>
<h2>Speichermedien</h2>

<p>
	Wir beschreiben hier ein paar Speichertypen, die in den Rechnern des technikum29 verwendet werden. Es handelt sich um Arbeits- bzw. Festwertspeicher, die aufgrund ihrer Größe sehr anschaulich sind. Allgemein ist zu bemerken, dass das Problem des Speicherns von Daten und Programmen in der Frühzeit der Computer sehr viel größer war als der Bau leistungsfähiger diskreter Prozessoren. Hier war viel Phantasie gefragt; so kam es zu sehr originellen Lösungen.<br>
	Heute wie vor 50 Jahren waren (sind) folgende charakteristische Größen wichtig:
</p>

<ul>
	<li>Zykluszeit</li>
	<li>Packungsdichte</li>
	<li>Kosten/Bit (heute Kosten/MB)</li>
	<li>Verlustleistung</li>
</ul>

<p>Man unterscheidet geometrisch:</p>

<ul>
	<li>Eindimensionale Anordnung (z.B. Laufzeitleitung)</li>
	<li>Zweidimensionale Anordung (z.B. Trommel-/Plattenspeicher)</li>
	<li>Dreidimensionale Anordnung (z.B. Kernspeicher, Zahl der Ebenen entspricht der Wortlänge)</li>
</ul>

<p>Physikalisch hat man folgende Prinzipien verwendet: Elektrostatische Ladung (Speicherröhren), Ausbreitung von Schallwellen (Laufzeitleitungen), Ferromagnetismus (Kernspeicher, Magnetdrahtspeicher, Trommel-/Plattenspeicher), Holographie (optische Speicher). Die größte Bedeutung und die weiteste Verbreitung hatten die ferromagnetischen Speicher.</p>

<h3 id="laufzeitspeicher">Laufzeitspeicher des BULL GAMMA 3 Röhrenrechners</h3>
<div class="box center manuelle-bildbreite" style="width: 670px">
	<img src="/shared/photos/rechnertechnik/speichermedien/bull-gamma-3-laufzeitspeicher.jpg" alt="Fotografie eines Laufzeitspeichers" width="435" height="338" /><img src="/shared/photos/rechnertechnik/speichermedien/bull-gamma-3-laufzeitspeicher-gross.jpg" alt="Details des Laufzeitspeicherfotos" style="margin-left: 6px;" width="228" height="338" />
	<p class="bildtext"><b>Verzögerungsspeicher</b></p></div>
		<p>Ein wirklich historischer Speicher, der vor der Zeit der Kernspeicher zum Einsatz kam. Er wurde auch mit "Verzögerungsspeicher" oder "Verzögerungslinie" bezeichnet. <br/>
		Im Prinzip besteht er aus einer Kette von vielen LC-Gliedern, die jeweils als Tiefpass geschaltet sind. In diesen bewegen sich Impulse langsamer als in normalen Leitern. Durch die starke Dämpfung der Impulse nach dem Durchlaufen der Verzögerungsleitung ist eine Regeneration notwendig. Dazu dienen insgesamt 12 Röhrenverstärker. Am Ende der Kette werden die  Informationen nochmals verstärkt und wieder am Beginn der Kette eingelesen. Sie laufen permanent durch die Verzögerungsleitung und sind damit gespeichert.</br>
		Das hier abgebildete Speichermodul kann gerade mal eine 12-stellige Dezimalzahl speichern. Es ist offensichtlich, dass Speicherplatz zu den Frühzeiten des Computers sehr viel Raum und Energie beanspruchte und auch extrem teuer war.
		</p>


<h3 id="magnetostriktion">Laufzeitspeicher: Magnetostriktion</h3>

<div class="box center manuelle-bildbreite" style="max-width: 860px">
	<img src="/shared/photos/rechnertechnik/speichermedien/laufzeitspeicher.jpg" alt="Fotografie eines Laufzeitspeichers" width="421" height="393" />
	<img src="/shared/photos/rechnertechnik/speichermedien/laufzeitspeicher-details.jpg" alt="Details des Laufzeitspeicherfotos" style="margin-left: 3px;" width="421" height="393" />
	<p class="bildtext"><b>1 KB Laufzeitspeicher</b></p></div>
	
		<p>Wenn sich (Ultra-)Schall ausbreitet, benötigt er Zeit zum Durchlaufen des Mediums. In dieser Zeit ist der Schall "gespeichert".
		   <br/>Durch Magnetostriktion (kurzes Zusammenziehen eines Drahtes, wenn ihn ein starkes Magnetfeld umgibt) werden quasi Schallimpulse auf einen (zusammengerollten) Draht gegeben. Diese Information l&auml;uft mit der Schallgeschwindigkeit (des Materials) bis zum Ende und wird dort wieder in Stromimpulse umgewandelt. Jetzt w&auml;re die Information verloren, wenn man sie nicht aufbereiten und wieder am Anfang des Drahtes eingeben w&uuml;rde.</p>
		<p>Die Daten laufen damit permanent "im Kreis" und k&ouml;nnen, wenn sie den Draht verlassen, gelesen und ver&auml;ndert werden. Je l&auml;nger der Draht ist, desto gr&ouml;&szlig;er ist die Speicherkapazit&auml;t.</p>
		<p>Es handelt sich um einen fl&uuml;chtigen Speicher mit relativ langer Zugriffszeit. Wird der Rechner abgeschaltet, sind alle Daten weg.</p>
		<p>Im Prinzip ist ein solcher Speicher ein analoges "Schieberegister". So wurde von der deutschen Firma DIEHL (Rechnersysteme) der Ultraschallspeicher der Rechner "Combitron" bzw. "Combitronic" im Nachfolgemodell "Algotronic" durch eine Kette von Schieberegistern ersetzt. Die Umlaufzeit wird jetzt durch die Taktfrequenz und nicht durch die physikalische Laufzeit des Drahtes bestimmt. Siehe <a class="go" href="/de-v6/geraete/diehl-combitronic.php">"Diehl-Combitronic"</a></p> 


<h3 id="kernspeicher">Kernspeicher</a></h3>

<div class="box center manuelle-bildbreite" style="width: 694px;">
	<img src="/shared/photos/rechnertechnik/speichermedien/triumph-kernspeicher.jpg" alt="Kernspeicher von Triumph" width="694" height="520" />
	<p class="bildtext"><b>Triumph Kernspeicher</b></p>
		<p>Ein besonders anschaulicher Kernspeicher wurde von der Firma "Triumph" ca. 1961 hergestellt. Die gesamte Karte (ca. 16cm x 20 cm) speichert genau 144 Bit (= 144 Kerne). Das sind gerade 12 W&ouml;rter mit einer Länge von je 12 Bit. Also ca. 26 cm&sup2; Fl&auml;che f&uuml;r jedes Wort !!!<br>Unten ist ein Ausschnitt dieses Speichers abgebildet.</p>
	
	
	<img src="/shared/photos/rechnertechnik/speichermedien/kernspeicher-ausschnitt.jpg" alt="Ausschnitt des Kernspeichers" width="694" height="90" />
	<div class="bildtext">
		<p>Während der Triumph-Speicher noch von Hand gefädelt wurde, ist der untenstehende Speicher bereits maschinell gefädelt worden.</p>
	</div>
</div>

<div class="box center auto-bildbreite">
	<img src="/shared/photos/rechnertechnik/speichermedien/kernspeicher-univac.jpg" alt="Kernspeicher auf einem Modul der Univac-Anlage" width="550" height="420" />
	<p class="bildtext">
	   Dieser Kernspeicher (Bj. 1969), aufgenommen im Gegenlichtverfahren, speichert im Hochgeschwindigkeitsdrucker der UNIVAC Anlage genau eine Zeile Text (92 Zeichen). Die Kerne sind gerade noch zu erkennen.
	</p>
</div>

<div class="box center auto-bildbreite">
   <img src="/shared/photos/rechnertechnik/speichermedien/kernspeicher.big.jpg" alt="Abbildung eines Kernspeichers im Vergleich zu einem Streichholz" width="629" height="443" />
   <p class="bildtext"><b>Speicherebene mit 16.000 Bit Kapazität</b></p></div>
   <!--class="bildtext-bildbreite" style="width: 629px">-->
	  <p>Die Kapazit&auml;t der Kernspeicher wurde immer gr&ouml;&szlig;er bei drastisch abnehmenden Volumen. Das Bild zeigt eine Ebene eines Speichers (Bj. ca. 1975-1978). Die Fl&auml;che entspricht der des 144-Bit-Speichers. Die Kerne sind mit blo&szlig;em Auge nicht mehr zu erkennen. In dieser Ebene befinden sich &uuml;ber 16000 Kerne. Nur in einer Vergr&ouml;&szlig;erung sind sie sichtbar. Der Speicherblock beinhaltet 16 Ebenen (= Wortlänge) mit insgesamt ca. 256000 Kernen, er kann also 32 kB speichern. Dazu wurde ein Volumen von ca. 2,5 dm&sup3; ben&ouml;tigt, das entspricht 2,5 Milcht&uuml;ten! Damit sind die Grenzen und auch das Ende dieser Speicher&auml;ra aufgezeigt.
	  <br/>Die Zugriffszeit sinkt mit der Verkleinerung des Ringkernes. Hier betr&auml;gt sie ca. 0,2 &micro;s. Wird die Information eines Kerns (links- oder rechtsdrehender Magnetismus steht f&uuml;r "0" bzw. "1") ausgelesen, so wird er dadurch entmagnetisiert. Damit der Inhalt dieses Bits nicht verloren geht muss er sofort wieder magnetisiert werden. Diese gesamte Zykluszeit liegt bei ca. 0,5 &micro;s. (Zum Vergleich: Bei einem 2 kB Laufzeitspeicher betr&auml;gt sie ca. 1 ms, also 2000-mal mehr! Bei einem Halbleiterspeicher von 1975 lag sie jedoch bereits unter 100 ns, war also 5-mal kleiner).</p>
	  <p>Kernspeicher haben einen entscheidenden Vorteil: Sie behalten ihr Ged&auml;chtnis. Man kann einen z.B. 1975 abgeschalteten Rechner heute wieder mit den Programmen starten, die zuletzt dort "abgelegt" wurden. Ein Booten ist nicht notwendig.
	  <br/>Noch lange nach der Zeit des Kernspeichers bezeichnete man den Arbeitsspeicher eines Rechners mit "Core" (Kern), obwohl l&auml;ngst Halbleiterchips verwendet wurden.</p>
   
  <h3 id="threaded-rom">Gefädeltes ROM, Festwertspeicher</h3>
  
<div class="box center auto-bildbreite">
	<a name="backlink-gefaedeltes-rom" href="/de-v6/geraete/gefaedeltes-rom.php"><img src="/shared/photos/rechnertechnik/speichermedien/nixdorf-rom-gesamt.jpg" alt="Gefädeltes ROM von Nixdorf" width="694" height="470" /></a>
	<p class="bildtext"><b>Nixdorf gefädeltes ROM</b></p></div>
		<p>Wenn man Mitte der 60er Jahre Programme, z.B. ein Betriebssystem, hardwaremäßig speichern wollte, stand man schon vor großen Problemen. Ausgehend von der Funktion des Kernspeichers ersann man sich ein ROM, in welchem das unveränderbare Programm abgelegt wurde. Dieses gefädelte ROM (Festwertspeicher) ist aus einer NIXDORF-WANDERER Logatronic Anlage (Bj. ca. 1966, der Vorgänger der Nixdorf 820 Anlage mit Stäbchenspeicher, s.u.). Es kann 2048 Wörter mit je 18 Bit generieren. <br>
		Wie man sieht, waren die Ingenieure und Techniker der Firma WANDERER perfektionistische Ästheten: Alle Transistoren in Reih´ und Glied, sowie Symmetrie zeichnen den Aufbau aus. Einen Detailausschnitt und genauere Erklärungen erhalten Sie durch Anklicken des Bildes.<br/>
		Bleibt noch anzumerken, dass solche "Fädelspeicher" auch in den Bordrechnern der
		Apollo-Raumkapseln eingesetzt wurden (entwickelt am MIT). </br> 
		</p>
	

<h3 id="staebchenspeicher">Stäbchenspeicher</h3>

<div class="box center auto-bildbreite">
	<a name="backlink-staebchenspeicher" href="/de-v6/geraete/staebchenspeicher.php"><img src="/shared/photos/rechnertechnik/speichermedien/gefaedeltes-rom.jpg" alt="Stäbchenspeicher von Nixdorf" width="692" height="379" /></a>
	<p class="bildtext"><b>Nixdorf Stäbchenspeicher</b></p></div>
		<p>NIXDORF wollte besonders flexibel sein und gestaltete ein ROM, welches man auch 		problemlos selbst fädeln konnte (und natürlich noch immer kann).
			 <br/>In diesen ROM´s wurde das ganze Betriebssystem des NIXDORF 820 - Rechners gespeichert (man brauchte 3 Stück dieser Module, Typ 177). Der Kunde konnte sich auch Programme selbst in leeren Programmträgern herstellen. Pro Modul (siehe Bild, hier geöffnet) waren das bis zu 4096 Wörter mit einer Länge von je 18 Bit. Das Gewicht des Moduls beträgt stolze 2,4 kg! Ein ordentliches Programm hatte auch ein ordentliches Gewicht!<br/>
			 Weil dies das am einfachsten zu verstehende ROM ist, welches man selbst herstellen konnte, gibt es genauere Erklärungen und weitere Bilder.
		</p>
		<p><a class="go" href="/de-v6/geraete/staebchenspeicher.php">Detailaufnahme betrachten</a></p>
	

<h3 id="magnetdrahtspeicher">Magnetdrahtspeicher</h3>

<div class="box left clear-after">
	<a href="/de-v6/geraete/magnetdrahtspeicher.php"><img src="/shared/photos/rechnertechnik/speichermedien/magnetdrahtspeicher.jpg" alt="Beschriftetes Photo: Aufbau des Magnetdrahtspeichers" width="340" height="303" /></a>
	<p class="bildtext"><b>Univac Magnetdrahtspeicher</b></p>
	
		<p>Dieser Speicher sollte den Kernspeicher ablösen. Mit Ankündigung der UNIVAC Serie 9000 (ca. 1965/66) stellte UNIVAC "eine technische Neuerung ersten Ranges" vor: Den Magnetdrahtspeicher, so der Text in der UNIVAC-Zeitschrift "Die Lochkarte" von 1967.</p><p>
		Im Rahmen eines Forschungs- und Entwicklungsauftrages des Goddard Space Flight Centers der Raumfahrtbehörde NASA erhielt UNIVAC 1964 den Auftrag ein Speichersystem zu entwickeln, das weniger als 1 Watt Leistung benötigt (ein Kernspeicher benötigt dafür 10-15 Watt), nicht zerstörendem Lesen (d.h. kein Wiedereinschreiben der gelesenen Information), hoher Speicherkapazität, kleiner Zykluszeit, sowie Funktionsfähigkeit bei Temperaturen von -20 bis +100 Grad Celsius.<br>
		Schon ein Jahr später (1965) konnte ein solches Speichersystem mit genialen Ideen entwickelt, gebaut und für Satelliten und Raumschiffe eingesetzt werden. Doch schon nach relativ kurzer Zeit kam die Ernüchterung: Der Speicher war sehr störanfällig.</br></p>
		<p>Interessante Einzelheiten sind hier zu lesen: <a class="go" href="/de-v6/geraete/magnetdrahtspeicher.php">Aufbau und Funktion des Magnetdrahtspeichers</a></p></div>


<h3 id="lochband">Lochband</h3>

<div class="box left clear-after">
   <img src="/shared/photos/rechnertechnik/speichermedien/lochband-combitron.jpg" alt="Lochband der Combitron" width="424" height="322" />
   <p class="bildtext"><b>Metall-Lochband</b></p>
	   <p>Wie in der Rubrik <a href="/de-v6/geraete/programmierbare.php">programmierbare Tischrechner der 2. Generation</a> beschrieben, benutzte die DIEHL Combitron einen Laufzeitspeicher. Der ist jedoch flüchtig. Das "Betriebssystem" war auf einem 2 spaltigen Lochband abgespeichert, wobei die linke Lochreihe nur die Taktspur ist. Nach dem Einschalten wurde das Lochband  mit der Geschwindigkeit per Fotozelle abgefühlt, welche die Information seriell optimal dicht in den ersten Teil des Laufzeitspeichers schrieb. Wie man erkennt, ist die Informationsdichte auf dem Lochband extrem gering. Aber das war ja auch die Steinzeit der programmierbaren Rechner.
   </p></div>
