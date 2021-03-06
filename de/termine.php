<?php
/**
 * Die Termine-Seite wurde im Mai 2013 überlegt und von Sven vorgeschlagen.
 * Durch folgende Anweisung ist sie deaktiviert, ein Aufruf leitet zur
 * Startseite weiter (dort zum Anker "Termine"):
 **/
 
#	header("Location: /de/#Termine"); exit;

/**
 * Wenn obige "header(...)"-Zeile auskommentiert bzw entfernt wird, ist diese
 * Seite wieder aufrufbar.
 **/

	$seiten_id = 'termine';
	$version = '$Id: index.php 387 2013-05-08 09:58:11Z heribert $';
	$titel = 'Termine für Führungen';
	
	require "../lib/technikum29.php";
?>

	<!-- Bereiche "nur-auf-deutscher-seite" werden im Englischen nicht angezeigt -->
	<div class="nur-auf-deutscher-seite">
	<h2>Termine, Führungen und Events</h2>
	
	<!-- ggf. folgender Hinweis: -->
	<!--<span style="color:#E90015">Hinweis in eigener Sache: Bitte sehen Sie von Anfragen ab, da wir aus privaten Gründen keine Termine anbieten können.</span>-->

	
	<!--
	allgemeine Informationen über Führungen und Gruppenanmeldungen
	finden Sie Hinweise auf der <a href="index.php">Startseite</a>.<br>
	

	<p>Bitte bedenken Sie: Zu allen Terminen ist eine vorherige Anmeldung notwendig! Kontaktieren Sie uns
	bitte rechtzeitig per E-Mail: <a href="mailto:post@technikum29.de">post@technikum29.de</a><br>
	-->
	
		<!-- Zurzeit sind keine Führungen geplant. Kleingruppen können sich gerne melden, wir können die Termine mit Einzelinteressenten auffüllen. -->
		<!--	<font color="#FF0000">>>ausgebucht!</font> -->
	
	Die folgende Tabelle listet Gruppenanmeldungen und Events auf.
 </p>
	<br>
	</div><!-- Ende nur-auf-deutscher-seite -->

	<div class="termine">
	<table class="termine">
	<tr class="title">
		<th style="width:9em">Datum
		<th style="width:13em;">Titel
		<th style="width:11em;">Typ
		<th>Teilnehmer     
	<tr>

		<td>Fr, <b>16. März</b><br>15:00 Uhr
		<td>Computer-History und mehr...<br>
		<td>Geburtstags-Event<br>			
		<td>Florian wird 12!<br>
		<span style="color:#E90015">Termin leider gestrichen</span>
		
	<tr>
		<td>Mi, <b>21. März</b><br>14:00 Uhr
		<td>Computer-History<br>
		<td>Interaktive Führung<br>			
		<td>Kursfabrik Wiesbaden<br>
		<span style="color:#E90015">Termin leider gestrichen</span>
		
	<tr>
	
		<td>Fr, <b>25. Mai</b><br>
		<td>Computer-History<br>
		<td>Interaktive Führung<br>			
		<td>Absint GmbH<br>Saarbrücken<br>
		
	<tr>
	
	<td>Sa, <b>26. Mai</b><br>10:20 Uhr
		<td>Computer-History<br>
		<td>Workshop<br>			
		<td>St. Lioba Schule, Bad Nauheim<br>
		
	<tr>
	
	
		</table>
		</div> <br>
	
	<!--	**) Von der Rechenmaschine zum Rechenzentrum: Nichts hat sich je so rasant entwickelt wie die Computer- und EDV-Technik. Bei dieser interaktiven "Computer-History"-Führung erleben Sie als Besucher den Beginn dieser Ära anhand von tonnenschweren, noch funktionierenden Computer-Dinosauriern. Das ist einmalig in Deutschland und auch für Kids ab ca. 11 Jahre hochinteressant.<br> 
		Maximale Teilnehmerzahl: 16  -->
		
	<!--
	<h3>Weitere Angebote</h3>
	
	<div class="box termin clear-after">
		<h4>Robotik-Workshop in den Ferien für Kids von 11-13 Jahren</h4>
		
		<p>Hochinteressante Kurse, in welchen Roboter der neuesten Generation programmiert werden. Weitere Informationen unter <a href="/robotik" class="go">Robotik-Workshop</a></p>
		
	</div>
	
	
	<div class="box termin clear-after">
		<h4>Physical-Computing & Robotics für Jugendliche ab ca. 14 Jahre</h4>
		
		<p>Micro-Controller programmieren und intelligente Roboter bauen, siehe <a href="/physical-computing" class="go">Physical-Computing & Robotics</a><br>
		Die digitale Welt von heute und morgen verstehen.....</p>
		
	</div>
	
	
	<div class="box termin clear-after">
		<h4>Geburtstags-Event für Kids ab ca. 10 Jahren.</h4>
		
		<p>Computer-Dinosaurier hautnah erleben und anschließend selbst tolle Experimente ausführen. 2 bis 3 spannende Stunden für ca. 8 bis 12 technikbegeisterte Kids.
		
		
		<p><b>Weitere Informationen</b> <a class="go" href="/robotik/#geburtstag">Die intelligente Geburtstagsalternative!</a>
		<br><b>Termine</b> nach Absprache</p>
	</div>
	-->
	
