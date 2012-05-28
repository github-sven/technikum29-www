<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head><!--#set var="title"        value="Miscellaneous"
   --><!--#set var="location"     value="sonstiges"
   --><!--#set var="url_de"       value="sonstiges.shtm"
   --><!--#set var="prev"         value="computer/sotrage-media.shtm"
   --><!--#set var="prev_title"   value="Storage media"
   --><!--#set var="next"         value="development-projects.shtm"
   --><!--#set var="next_title"   value="Development Projects"
   -->
     <title>technikum29 - <!--#echo var="title" --></title>

    <!--#include virtual="/en/inc/head.inc.shtm" -->
    <meta name="t29.SVN" content="$Id: search.shtm 108 2009-08-19 17:20:00Z heribert $" />
    <meta name="t29.thistranslation" content="12.11.2009" />
    <meta name="t29.comment" content="Initial announcement" />	
</head>
<body>
<!--#echo encoding="none" var="heading" -->
<div id="content">
    <h2><!--#echo var="title" --></h2>

    <h3>Pianola</h3>
    <p>The technikum29 is quite versatile &ndash; beside all the communication
       and computer technology we also show very special exhibits: This is
       a fully executable pianola, year of manufacture about 1910-1915.</p>

    <p>
       It's a great experience see and hear such old jukeboxes, typically made
       only of natural materials like leather, gum, wood, bone glue, felt, metal, paper,
       ivory and glas.
       <br/>By assembling these elements on an intelligent way, one could
       build a simple mechanical machine which is especially impressive
       for today's people. Here at the technikum29, we will show you how
       this device works, we will explain the basic functionality and
       play challenging compositions. While having covers removed, you can
       even see the fascinating mechanics working.
    </p>

     <div class="box center">
       <img src="/shared/photos/kommunikationstechnik/pianola.jpg"
         alt="Picture of the Pianola" width="700" height="618" class="nomargin-bottom" />
     </div>
<h3 id="Q1"> technikum29 supports school projects:</h3>

<p>Microcontrollers revolutionize
and influence next to everything. How can schools participate on these
developments and perform successful and interesting projects?<br>
Six pupils of Q1 (12th year in school) of the Albert-Einstein secondary
school were looking for a suitable idea for their so called "project
week". This project should be connected to mathematics, physics and/or
computer science. This is where the technikum29 got involved. The idea
the pupils came up with was to connect technology from the 1950s with
modern equipment of 2012. Communication spanning time and technology.<br>
<div class="box left">
        <img src="/shared/photos/kommunikationstechnik/arduino1.jpg" width="606" height="335" />
       </div>
<p>Traditionally such projects required knowledge only accessible to
computer scientists, engineers and the like. Often they had to spend
weeks of reading data sheets, writing cryptic assembly code etc. How
things have changed! Since 2009 a cheap and versatile module named
"Arduino" is available - a controller based on the well known ATmega
328 chip featuring 32 kB of memory. Arduino boards are designed not
for the expert but for the layman and are the perfect base for
creative people, artists, designers etc.
 <br>
This project focuses on connecting computers to the "real world". The
small Arduino board can be programmed to be used as an interface for
nearly everything. The pupils decided to connect an early fax machine
(a Siemens KF108 made in 1958) to a modern PC.	 <br>
This fax machine is based on a rotating drum which holds the sheet of
paper to be transmitted to the receiving station. The picture is
scanned in a spiral movement by a photodetector that slowly moves in
parallel to the axis of the drum. Of course, this is incompatible with
more recent fax machines.

The Arduino was planned to act as the interface between this historic
device and a modern PC. Thus the pupils first had to learn how to
program such a micro controller which turned out to be quite difficult
for non-programmers. Nevertheless the software approach has its
advantages: It is more easily debugged compared with a traditional
hardware based interface. Thus it only took a single week to program
and interface the Arduino board to the Siemens fax.

<div class="box left">
        <img src="/shared/photos/kommunikationstechnik/arduino2.jpg" width="606" height="354" />
       </div>
	   
<p>The fax machine generates an auido signal with a frequency of 1.5 kHz
denoting black pixels to be transmitted. To convert this into a binary
signal with a 5V level an amplifier circuit is needed that is followed
by an RC-combination. In addition to that a synchronization signal is
necessary to signal the start of a new line being scanned. This is
generated utilizing a reed-contact that is triggered by a so called
"super magnet" that has been glued onto the axis of the scanner drum.
The reed-contact thus generates a signal for every revolution of the
drum which corresponds to a single line being scanned.<br>

The control program for the Arduino was developed by the pupils (the
source code can be found <a href="/de/lernprojekte/arduino-projekt-programme/"> >>HERE</a>). It allows the picture being scanned, a historic Mickey-Mouse drawing, to be transferred to the PC
where it is displayed slowly line by line with good resolution. 

The experiment was a full success and will inspire future projects.

<p class="small">*) Arduino: The name of this board derives from King "Arduino of
Ivrea" who lived in medieval times in northern Italy where the
controller was developed.</small> <br>

	 
	<h3 id="leander">Art in the Museum</h3> 

<p>The technikum29 motivates activities that get awards and prices. The latest
example is that of the young artist Leander A. Schwarzer who transforms
everyday things into pieces of art. He has developed pictures made from zippers
that can be opened thus giving the viewer the opportunity to modify the picture
itself.<br>
 His latest visit to the technikum29 has inspired him to make art from
and with punch cards which were the basis of industrialization in the 20th
century. First the "Terzett" (Trio) was created which consists of three punched
cards with these irreversible sentences:</p>

<div class="box left">
        <img src="/shared/photos/start/lk.jpg"  width="250" height="350" class="nomargin-bottom" />
		<p class="Bildtext small">Picture 1: 3 punch cards with text</p></div>
		
	ANOTHER WORLD IS POSSIBLE<br>
	IMPOSSIBLE IS NOTHING<br>
	IMAGINE ALL THE PEOPLE<br>
	<div class="box right">
        <img src="/shared/photos/start/leander.jpg" alt="Leander Schwarzer" width="313" height="239" class="nomargin-bottom" />
		<p class="Bildtext small">Picture 2: Leander A. Schwarzer punching cards on an IBM key punch</p>
		
		</div>

<p>These cards were hanged on a wall at a distance of 1-2 cm. During the day sun
rays create shadows of the punched and coded text on the wall behind the cards.
This work of art was awarded a price at the 32th grafics competition in Austria
(Innsbruck, 2011). This in turn motivated Mr. Schwarzer to continue his work
with punched cards. He spent several days at the technikum29 punching excerpts
from Marx' "Capital" thereby creating a pile of several hundred cards. These
were shown in the exhibition "A Symbol of Freedom" in Piacenza (Italy). Punched
cards transform contemporary slogans into visual paradoxes when they create
their unique shadows.</p>
<div class="box left">
        <img src="/shared/photos/start/lk-musik.jpg" alt="Musik aus Lochkarten" width="336" height="188" class="nomargin-bottom" />
		<p class="Bildtext small">Picture 3: Punched cards running through a "musical clock"</p>
		</div>

<p>Another work, "Fetish Character of commodities", concatenates the cards
containing Marx' text fragments. This string of cards is then pulled through a
mechanism like a musical clock that generates sounds controlled by the holes in
the cards. So, finally, the "Capital" is transformed into atmospheric sounds.</p><br>

	 
	 
	 
    <h3>Movie projector  "Dresden 1"</h3>

     <div class="box left clear-after">
        <img src="/shared/photos/kommunikationstechnik/kinomaschine.dresden1.jpg"
           alt="Photography of the movie projector Dresden 1" width="350" height="630" />

		<div class="bildtext">
          <p>The technikum29 has a movie projector from 1951 (there are
             more and even older projectors from the 1930s that are stored in the
             archive for lack of space).</p>
          <p>
             Movie projectors have always been very complex devices. At that time,
             the bright picture projection was archived with an arc light which was
             generated between two carbon pencils. The waste heat was deflected via a
             chimney pipe! <!-- stupid mode... -->
             Since the pencils got shorter and shorter while the movie went on, they
             had to be moved continously closer together for producing a constant
             luminosity. Otherwise the light goes out.
             <br/>We will repair this device to show an original newsreel from the 1960s.
         </p>
	   </div>
	</div>
		
	<h3 id="demo">Siemens Demonstration Computer</h3>
	<div class="box center">
        <img src="/shared/photos/rechnertechnik/siemens-democomputer.jpg" alt="Siemens demonstration educational computer CPU" width="700" height="587" />
		<p class="center"><b>Siemens educational computer</b></p>
	</div>

	<p>This demonstration model was build in 1973, when personal computers were not
	   invented for a long time yet. Engineers had to be trained to understand
	   computer architectures. Therefore, this big education model was constructed.
	   It is a giant implementation of a typical register machine where 126 lamps
	   display all registers, control, ALU and RAM, including the data flow.
	   Featuring a mutable clock pulse and only 4 bit word with, elementary opcodes
	   could be reproduced in a very illustrative way. The device can be toggled to
	   process one instruction or one cycle a time.
	<br>On the left side, the computer program could be directly "written" by plugging
	   cartidges labeled with assembly instruction mnemonics or numerical values
	   (immediate operands). On this cartiges the user could directly read the binary
	   value of the machine instruction which will be the content of the corresponding
	   random access field. As you might guess, the computer cannot change the program
	   memory without user interaction, so this model actually implements an Harvard
	   architecture, even though the (german) labels on the frontend suggest something
	   different.
	<br>The picture above shows a currently running program that adds memory cells. It
	   shows that computer word lengths do not limit the length of proccessable
	   numbers.
	<br>It is a wonderful device that can even be used today to understand the elementary
	   workflow of modern high end desktop CPUs.
    </p>	
	
</div><!-- end of content -->
<!--#include virtual="/en/inc/menu.inc.shtm" -->
</body>
</html>