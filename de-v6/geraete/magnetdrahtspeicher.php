<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de">
<head><!--#set var="title"        value="Aufbau und Funktion des Magnetdrahtspeichers"
   --><!--#set var="location"     value="plated-wire-storage"
   --><!--#set var="part"         value="extra"
   --><!--#set var="url_en"       value="devices/plated-wire-storage.shtm"
   --><!--#set var="title_en"     value="Plated wire storage"
   --><!--#set var="prev"         value="/de/rechnertechnik/speichermedien.shtm#magnetdrahtspeicher"
   --><!--#set var="prev_title"   value="Interne Speichermedien"
   --><!--#set var="next"         value=""
   --><!--#set var="next_title"   value=""
   --><title>technikum29 - <!--#echo var="title" --></title>

    <!--#include virtual="/de/inc/head.inc.shtm" -->
    <meta name="keywords" lang="de" content="" />
    <meta name="t29.this.version" content="v5.7.9" />
    <meta name="t29.this.date" content="13.10.2007" />
    <meta name="t29.this.comment" content="neu" />
</head>
<body>
<!--#echo encoding="none" var="heading" -->
<div id="content">
    <h2><!--#echo var="title" --></h2>

    <div class="box right">
        <img src="/shared/photos/rechnertechnik/grafiken/magnetdrahtspeicher-uebersicht.de.gif" alt="�bersichtsgrafik Magnetdrahtspeicher, die Positionen von Wortleitungen und beschichteten Dr�hten zeigend" />
    </div>

    <p>Kernspeicher waren in der Herstellung relativ teuer. Die Tatsache, dass beim Auslesen der Information der gespeicherte Inhalt gel�scht wird und daher ein Neuschreiben notwendig ist, vergr��ert die Zykluszeit (Auslesen und Neuschreiben). Halbleiterspeicher waren noch lange nicht serienreif und der Speicherinhalt verschwand mit dem Abschalten der Betriebsspannung.
    <p>Da die ersten Anlagen der 9000er Serie von UNIVAC (auch unsere 9300) mit Magnetdrahtspeichern aufgebaut wurden, beschreiben wir hier kurz ihre Funktion. 
	Physikalisch gesehen ist ein Magnetdrahtspeicher ein D�nnfilmspeicher. Er benutzt als Informationstr�ger einen zusammenh�ngenden Permalloy-Magnetfilm (81% Nickel, 19% Eisen) von etwa 1 Mikrometer, der sich auf einem Beryllium-Kupferdraht von ca. 0,13mm Durchmesser befindet.<br>
	Mit dem hier abgebildetem Ausschnitt k�nnte man also 4 W�rter mit je 3 Bit speichern.</p>

    <div class="box center" style="clear:right;">
        <img src="/shared/photos/rechnertechnik/grafiken/magnetdrahtspeicher-details.de.gif" alt="Detailgrafik Magnetdrahtspeicher, beschriftet" />
    </div>

    <p> Diese "Plated Wires" (beschichtete Dr�hte) wurden in Bahnen von "Word Straps" (Wort- bzw. Leseleitungen aus Kupfer) eingebettet. Jeder Kreuzungspunkt von Kupferband und Magnetdraht ist f�hig, eine bin�re Information (Bit) zu speichern. Der Magnetdraht ist die Bitlinie und als solcher Schreib- und Leselinie zugleich. Die Wortlinien bestehen aus d�nnen Kupferfolien und adressieren eine Mehrzahl von Bits. In Drahtrichtung sind die Magnetdr�hte nur schwer-, quer dazu jedoch leicht magnetisierbar<br/>
    Zum Lesen der Information wird durch die Leseleitungen, die vertikal zum Magnetdraht liegen, ein Stromimpuls geschickt. Das durch ihn erzeugte Magnetfeld versucht den magnetischen Vektor an dieser Stelle des Drahtes in Drahtrichtung auszulenken. In L�ngsrichtung ist die Magnetschicht des Drahtes aber nur schwer zu magnetisieren. Der Magnetvektor wird etwas ausgelenkt und kippt sofort wieder in seine Ursprungslage zur�ck. Dieses "Wackeln" induziert im Draht eine sehr kleine Spannung. Hier wurde ein Bit ausgelesen ohne den Zustand zu zerst�ren. Die gespeicherte Information ist nach dem Lesevorgang noch vorhanden (im Gegensatz zum Kernspeicher). Das Vorzeichen der induzierten Spannung gibt Auskunft dar�ber, ob hier eine "1" oder eine "0" gespeichert ist.<br/>

    <div class="box left">
        <img src="/shared/photos/rechnertechnik/grafiken/magnetdrahtspeicher-lesen.de.gif" alt="Kleine Grafik zum Lesevorgang (Impuls auf der Wortleitung)" />
    </div>
    <div class="box right">
        <img src="/shared/photos/rechnertechnik/grafiken/magnetdrahtspeicher-schreiben.de.gif" alt="Kleine Grafik zum Schreibvorgang (Impuls auf Wortleitung und den Dr�hten)" />
    </div>

    <p>Will man einen Zustand �ndern (Schreiben), so wird zus�tzlich zum Leseimpuls ein Stromimpuls durch den Draht geschickt. Wo beide Magnetfelder in zeitlicher Koninzidenz zusammentreffen wird die Richtung des Magnetfeldvektors ge�ndert (oder auch nicht, wenn er vorher schon "richtig" stand). Eine neue Information (hier ein Bit) wurde abgespeichert.</p></p>

    <p style="clear:both;">Im Prinzip war das eine geniale Idee, kein F�deln der Ringkerne, kurze Zykluszeit, preiswert und maschinell herzustellen...
    <br/>Doch man ahnt es schon: Der Aufbau war so empfindlich, dass schon bald viele Probleme auftraten; ein Horror f�r jede Firma, die diesen Speicher verwendete. Bei ganz alten Speichern konnte man die Dr�hte noch einzeln auswechseln, sp�ter wurde alles verklebt und eine Reparatur ist unm�glich. Anfang der 70er Jahre kamen gl�cklicherweise die ersten Halbleiterspeicher auf den Markt, so dass die meisten Rechner mit Magnetdrahtspeicher auf Halbleiterspeicher mit INTEL-Chip�s umger�stet wurden, so auch unsere UNIVAC 9400.</p>

</div><!--content-->
<!--#include virtual="/de/inc/menu.inc.shtm" -->
</body>
</html>