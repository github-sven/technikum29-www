<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de">
<head><!--#set var="title"        value="Telefunken T 40W"
   --><!--#set var="location"     value="telefunkent40w"
   --><!--#set var="part"         value="extra"
   --><!--#set var="url_en"       value="devices/telefunken_t40w.shtm"
   --><!--#set var="title_en"     value="Telefunken T 40W"
   --><!--#set var="prev"         value="/de/kommunikationstechnik/rundfunk.shtm"
   --><!--#set var="prev_title"   value="Rundfunk"
   --><!--#set var="next"         value=""
   --><!--#set var="next_title"   value=""
   --><title>technikum29 - <!--#echo var="title" --></title>

    <!--#include virtual="/de/inc/head.inc.shtm" -->
    <meta name="t29.this.SVN" content="$Id$" />

    <!-- Kram fuer das Transparenz-Zeug -->
    <script type="text/javascript" src="/shared/js/slider/slider.js"></script>
    <link rel="stylesheet" type="text/css" href="/shared/js/slider/slider.css" />
    <script type="text/javascript">
	//<!-- setup
	var slider = new Array();
	slider[1] = new Object();
	slider[1].min = 0;
	slider[1].max = 100;
	slider[1].val = 0;
	slider[1].playerStepTimeout = 100; // ms
	slider[1].playerStepDistance = 1.6; // in min/max/val-Einheiten!
	slider[1].playerStopLabel = "Animation stoppen";
	slider[1].playerStartLabel = "Animation starten";
	slider[1].playerRepeatLabel = "Animation wiederholen"
	slider[1].playerAutoReverse = false;
	slider[1].playerAutoStart = true;
	slider[1].playerRepeatFromMin = true;
	slider[1].onchange = setTransparency;

	function setTransparency(val, blubb) {
		val = val / 100; // normierung auf [0,1]
		// bereits ab 0.75 ist der Kasten nicht mehr zu sehen
		setOpacity("zu",            -val/0.75 + 1);
		// ab 0.75 erscheint die Beschriftung, hoch 3 potenziert
		setOpacity("beschriftung",  Math.pow(val - 0.75, 3)*64 );
		// alternativ ein linearer Zuwachs:
		//setOpacity("beschriftung",  (val-0.75)*4  );
		//document.getElementById("zu").style.opacity = 1-val;
		//document.getElementById("beschriftung").style.opacity = val / 2;
	}

	function setOpacity(id, value) {
		if(value >= 1) value = 1.0;
		if(value <= 0) value = 0;
		document.getElementById(id).style.opacity = value;
		if(document.all) {
			// IE 7 kann (immer!) noch kein opacity, daher ein
			// haessliches workaround:
			document.getElementById(id).style.setAttribute("filter", "alpha(opacity="+Math.round(100*value)+")", 0);
			if(value == 1.0)
				// der filter zerschiesst alpha-Transparenz -- noch ein workaround
				document.getElementById(id).style.removeAttribute("filter", 0);
		}
	}
	// -->
    </script>
</head>
<body>
<!--#echo encoding="none" var="heading" -->
<div id="content">
    <h2><!--#echo var="title" --></h2>

    <div class="box center">
      <div id="rel">
        <img id="offen" src="/shared/photos/kommunikationstechnik/telefunken_t40w/offen.jpg"
             alt="Telefunken T40W: Sicht auf die Elektronik/das Innenleben" />
        <img id="zu" src="/shared/photos/kommunikationstechnik/telefunken_t40w/geschlossen.jpg"
             alt="Telefunken T40W: Sicht auf das geschlossene Geh�use" />
        <img id="beschriftung" src="/shared/photos/kommunikationstechnik/telefunken_t40w/beschriftung.de.png"
             alt="Telefunken T40W Legende: Beschriftung der Verst�rkerstufen, R�hren, etc." />
      </div>
      <div id="controls">
         <noscript>Bitte aktivieren sie in ihrem Browser JavaScript, um
           die Animation betrachten zu k�nnen.</noscript>
         <div class="cols">
           <div class="leftcol">
             <input type="button" value="Abspielen" id="slider-button1" />
             <div class="slider" id="slider01">
                <div class="left"></div><div class="right"></div>
                <img src="/shared/js/slider/img/knob.png" width="31" height="15" />
             </div>
           </div><!--left-->
           <div class="rightcol">
               Benutzen sie den Schieberegler, um einen Einblick in das
               Ger�t erhalten zu k�nnen, oder klicken sie auf "Animation
               starten"
           </div><!--right--> 
           <div class="clear"></div>
         </div><!--cols-->
       </div><!--controls-->
    </div>

    <p>Das 1929 hergestellte Telefunken Ger�t Type 40W ist insbesondere im Aufbau sehr �sthetisch und klar gegliedert. Technik war zu dieser Zeit auch f�r gebildete Laien absolut transparent und bis in die Einzelheiten nachvollziehbar. Daf�r musste man im Komfort Abstriche machen: So konnte man z.B. die gew�nschte Lautst�rke nur durch geschickte Kombination von Antennenanpassung (links) und R�ckkopplung (rechts) einstellen. War die R�ckkopplung zu gro�, so wurde aus dem Rundfunkempf�nger schnell ein "St�rsender", was sich durch lautes Pfeifen bemerkbar machte.</p>
	
	<div class="box center">
         <img src="/shared/photos/kommunikationstechnik/telefunken_t40w/unterseite.jpg" width="750" height="388" alt="Unterseite des Telefunken 40W" />
		 </div>
		 <p>Auch "von unten" kann sich das Ger�t sehen lassen. Anstelle eines Chassis aus Blech wurde eine Hartpapierplatte verwendet. Die Verbindungen wurden teilweise durch aufgenietete Leiterbahnen realisiert. Ein Verfahren, welches erst Mitte der 50er Jahre wieder aufgegriffen wurde und zu den "gedruckten Schaltungen" f�hrte. In dieser Hinsicht war der Emp�nger seiner Zeit weit voraus.</p>


</div><!-- content -->
<!--#include virtual="/de/inc/menu.inc.shtm" -->
</body>
</html>