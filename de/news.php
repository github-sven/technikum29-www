<?php
	$seiten_id = 'news';
	$version = '$Id$';
	$titel = 'Was gibt es Neues?';
	
	// muss noch restlos entfernt werden:
	$neues_menu = "";
    // ende der menue-Eintraege

	if(!require("../lib/news.php")) return; // keine verschachtelten Aufrufe
?>
    <h2>Was gibt es Neues?</h2>
	
	
	<p>Damit alle die öfters unsere Homepage besuchen einen schnellen Einblick in Neuigkeiten und Erweiterungen haben,
	wurde diese Rubrik eingeführt.</p>
	
	<br><br>
	
<ul class="news-feed news-ng">

<li><a href="/physical-computing">
	<h3>Januar 2017</h3><br>
    <img src="/shared/photos/start/arduino-1.jpg" width="153" height="144" /><br>
	Eine neue Website bereichert unseren Online-Auftritt:
	<b>Physical-Computing & Robotics</b> für Jugendliche ab ca. 14 Jahre
	
</a></li>


<li><a href="/de/kommunikationstechnik/faxtechnik.php#t32">
	<h3>Dezember 2016</h3><br>
    <img src="/shared/photos/kommunikationstechnik/siemens-t32.jpg" width="153" height="146" /><br>
	Sehr seltener Springschreiber (Fernschreiber), Siemens T32
	
</a></li>


<li><a href="/de/rechnertechnik/elektro-mechanik.php#logos">
	<h3>März 2016</h3><br>
    <img src="/shared/photos/rechnertechnik/olivetti-logos27-2.jpg" width="153" height="115" /><br>
	Die letzten rechneneden Maschinenmonster
	
</a></li>

<li><a href="/de/rechnertechnik/lgp30.php#lgp30">
	<h3>Oktober 2015</h3><br>
    <img src="/shared/photos/rechnertechnik/lgp30-1.jpg" width="153" height="68" /><br><br>
	Die LGP-30-Anlage ist jetzt im Museum
	
</a></li>

<li><a href="/de/rechnertechnik/univac9200.php#u9200">
	<h3>September 2015</h3><br>
    <img src="/shared/photos/rechnertechnik/u9200-1.jpg" width="153" height="73" /><br><br>
	Eine keline Sensation:<br>
	Die zweite UNIVAC 9200 im technikum29!
</a></li>


<li><a class="popup" href="/shared/photos/rechnertechnik/lgp-30.jpg">
	<h3>August 2015</h3>
    <img src="/shared/photos/rechnertechnik/lgp-30.jpg" width="153" height="121" />
	LGP-30, ein Röhrenrechner (ca. 1958) auf dem Transport zum technikum29. </a>
</li>

</ul>

