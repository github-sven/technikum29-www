<?php
	$seiten_id = 'ibm1130';
	$version = '$Id: ibm1130.php 271 2013-04-23 19:23:24Z heribert $';
	$titel = 'IBM 1130 Elektronische Rechenanlage';
	
	require "../../lib/technikum29.php";
?>
	
	<h2><b>IBM 1130</b></h2>
	
	
	<div class="box center clear-after">
		<img src="/shared/photos/rechnertechnik/ibm-register.jpg"  width="860" height="309" />	
	</div>
	<p>Seit Dezember 2013 sind wir im Besitz einer schönen und auch sehr interessanten "Elektronischen Rechenanlage" von IBM. Dieser Typ wurde 1965 zum ersten Mal ausgeliefert. Die Anlage war vorwiegend für Wissenschaftler, Ingenieure und Mathematiker konzipiert.<br>
		An die Anlage ist u.a. das "AMPEX TMZ" Magnetbandlaufwerk (Digital Tape Memory System) angeschlossen, für welches wir dringend noch Manuals (Schaltpläne usw.) suchen.<br>
		<br>
IBM hat schon ab 1964/65 mit der SLT-Technik (Solid Logic Technology) die SMD-Technik entwickelt (SMD: Surface-Mounted-Device, deutsch: Oberflächenmontiertes Bauelement). Erst Mitte der 80er Jahre hat sich diese Technik mit den vielen Vorteilen langsam durchgesetzt. Siehe auch Reparatur-Blog vom 30.9.2014.<br>
Unsere Anlage ist nach langer Reparaturzeit als Lochkartenrechner mittlerweile voll funktionsfähig. Die Instandsetzung des Plattenlaufwerkes ist nun unsere Aufgabe.
</p>
	
	<div class="box center clear-after">
		<img src="/shared/photos/rechnertechnik/ibm-1130.jpg" alt="IBM 1130 Elektronische Rechenanlage" width="860" height="606" />
		<p class="bildtext"><b>IBM 1130</b>, vorne rechts IBM 1131 Prozessor, links Speichererweiterung, hinten links IBM 1442 Lochkarteneinheit (Leser/Stanzer), rechts IBM 1132 Drucker.</p>
	</div>
			<div class="box clear">
			<div class="desc-left no-copyright">
			<a class="popup" href="/shared/photos/rechnertechnik/ibm-1130-konsole.jpg">
				<img src="/shared/photos/rechnertechnik/ibm-1130-konsole.jpg" alt="Nahaufnahme" width="352" height="288" />
			</a>	
</div>			
Alle Bilder lassen sich vergrößern.<br><br>
In nebenstehendem Bild 1 ist die Tastatur mit Kugelkopf-Schreibmaschine sowie die Konsole und das Anzeigepannel zu sehen. Die Tastatur ist keine Neuentwicklung sondern stammt aus dem Lochkartenstanzer 029 und dekodiert noch mechanisch.<br>
Die kleinstmögliche Anlagenkonfiguration ist ohne Zusatzspeicher (linker Teil der Front), ohne Drucker, ohne Wechselplatte und arbeitet anstelle mit Lochkarten mit den preiswerteren Lochstreifen (siehe Bild 3). Das ist dann in etwa die Ausstattung einer Classic-PDP8 mit Teletype-Drucker und entsprechenden Lochstreifengeräten.<br>
Da der aufwändige und komfortable Prozessor der 1130 damit restlos unterfordert ist, wurde diese Anlage in der Regel mit mehr Peripherie verkauft. 

			
			<div class="box clear">
			</div>
			<div class="desc-left no-copyright">
			<a class="popup" href="/shared/photos/rechnertechnik/1130-memory.jpg">
				<img src="/shared/photos/rechnertechnik/1130-memory.jpg" alt="8k-Kernspeicher" width="352" height="264" />
			</a>
			</div></div>
			Der Drucker wurde von der Tabelliermaschine IBM-407 aus den 50er Jahren übernommen. 
			Er liefert mit 80 Zeilen pro Minute zwar ein gutes Druckbild doch wurde die Kombination von Hightech-Elektronik und langsamer 50er Jahre-Mechanik wohl im Hinblick eines günstigen Verkaufspreises gewählt. <br><br>
			Im Bild 2 ist ein kompletter 8K x 16 Bit Kernspeicherblock mitsamt der Ansteuer- und Auslese-Elektronik zu sehen. Wie die restliche Elektronik mit den SLT-Steckkarten ist auch die Speichereinheit sehr kompakt und deutlich weniger voluminös als bei allen Konkurrenten der damaligen Zeit. Hier setzte IBM, bekannt durch seine vielen Patente, Maßstäbe. Die mit abgebildete Streichholzschachtel dient nur zum Größenvergleich.
			<br>
			<div class="box clear">	
			<div class="desc-left no-copyright">
			<a class="popup" href="/shared/photos/rechnertechnik/facit4000.jpg">
				<img src="/shared/photos/rechnertechnik/facit4000.jpg" alt="Lochstreifengeräte" width="352" height="137" />
			</a>
			</div></div>
			
			Auch die gehören zu unserer Anlage: Facit Lochstreifengeräte:<br>
			Aufwickler Type 4015, Stanzer Type 4060, Leser Type 4001 und Stanzerelektronik Type 5104.<br>
			</p>
		
		<br>
		<small>Diese Anlage wurde uns freundlicherweise vom <a href="http://www.fitg.de">FITG (Frankfurt)</a> übereignet.</small></p>

		<div class="clear"></div>
		
		<h3 id="blog-ibm">Reparatur-Blog</h3>
		<p class="small">
		Wie schon für den UNIVAC Rechner 9200 werden wir auch für diese IBM Anlage einen Reparatur-Blog erstellen. Die Schwierigkeit bei der Instandsetzung des Rechners liegt darin, dass er damals, mitte der 60er Jahre, sehr fortschrittlich aufgebaut war: Hier wurden kaum noch herkömmliche Transistoren verwendet, sondern sogenannte <b>SLT</b>-Bausteine (Solid Logic Technology). Das sind kleine Keramit-"ICs" (keine integrierten Schaltungen im heutigen Sinne), in welchen die Transistoren, Dioden und Widerstände, eben noch lokalisierbar, untergebracht wurden. Diese Bausteine sind nicht mehr erhältlich und müssen bei defekten praktisch "repariert" werden, was sehr aufwändig ist. Die fortschrittliche IBM-Technik von damals ist daher heute für die Instandsetzung ein großer Nachteil. Zur gleichen Zeit baute z.B. BULL noch mit großformatigen Pertinax-Platinen und Germanium-Transistoren. Zwei Welten, wie sie unterschiedlicher nicht sein konnten!<br>
		<br>
		</small>
	
		<div class="desc-left">
		<a class="popup" href="/shared/photos/rechnertechnik/ibm-1130-board.jpg">
	<img src="/shared/photos/rechnertechnik/ibm-1130-board.jpg" alt="Modul der IBM1130" width="195" height="247" /></a>
	<p class="small">Typisches <b>SLT-Modul</b>. Den Schaltplan hat IBM auf Schnell- druckern hergestellt. Nachteil: Schwer lesbar da alle Logik- elemente gleich aussehen.<br>
	Vergrößern: Bild anklicken!</p></div>
		
		<p class="small">
		Die Zeitinvestitionen für ein solches Vorhaben sind riesig. Zum Glück weiß man vorher nicht, was auf einem zukommt (siehe BULL Gamma 55: über 30 Fehler!). Sonst würde manch eine Reparatur gar nicht erst begonnen werden.<br>
		Der Blog beginnt hier und geht auf einer Extraseite weiter (siehe unten).<br><br>
		
		
		<b>Dezember 2013:</b> Wie bei "neuen" Anlagen üblich, werden diese erst einmal gründlich gesäubert und von den verklebten oder zerfallenen Schaumgummimatten (zur Schalldämmung) befreit. Danach erfolgt der grobe optische Test auf Vollständigkeit der Anlage.<br><br>
		
		<b>30.12.2013:</b> Die Neugierde ist groß, daher wird am Anfang viel Zeit investiert! Nachdem die Installation des Memory´s mit 32 kB Kapazität (bei einer Wortbreite von 16 Bit) erfolgt ist, kam der erste Einschaltvorgang (ohne Peripherie). Keine Sicherung verabschiedete sich, keine Rauchwolken stiegen empor....immerhin. Die Netzteilspannungen waren o.k. Nur der Konsolendrucker, eine IBM Kugelkopfschreibmaschine, machte lautstark einen dauernden Wagenrücklauf. Also schnell wieder ausschalten......<br><br>
		
		<b>2.1.2014:</b> Der Konsolendrucker musste ausgebaut und separat placiert werden.<br> Um die Anlage zu schonen wurde er unmittelbar an die Netzspannung angeschlossen. Nach ca. 3 Stunden Suchen war der Fehler gefunden: 4 durch Federn gehaltene Blättchen (kaum sichtbar) waren durch verharztes Öl unbeweglich. Nach der "Entfettung" und neuer Ölzufuhr (W40) war der Fehler behoben.<br><br>
		
		<b>4.1.2014:</b> Da der Konsolendrucker nun ruhig und gemächlich läuft, konnten die ersten Versuche gestartet werden Informationen in den Speicher zu schreiben und auszulesen. Es braucht schon Zeit, bis man diese Manipulationen beherrscht. Voreilig kann man sagen: Der Speicher funktioniert zumindest etwas......<br><br>
		
		<b>6.1.2014:</b> Nachdem langsam die manuelle Bedienung des Speichers klar wird, zeigt sich, dass mindestens 2 Fehler vorhanden sind:<br>
		1.  Eine kontinuierliche Eingabe Adresse für Adresse läuft falsch<br>
		2.  Im "oberen" Bereich des Speichers entstehen Paritätsfehler, d.h. 2 von 15 Bits fehlen. Das fängt ja gut an.....<br>
		
		</small>
		
		<p><a class="go" href="/de/geraete/ibm1130-blog.php"><b>Hier geht es zur Fortsetzung des Blogs</b></a>	
	
		
