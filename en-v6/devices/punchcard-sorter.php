<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head><!--#set var="title"        value="The function of the punch card sorter"
   --><!--#set var="location"     value="punchcard-sorter"
   --><!--#set var="part"         value="extra"
   --><!--#set var="url_de"       value="geraete/lochkartensortierer-funktion.shtm"
   --><!--#set var="title_de"     value="Die Funktion der Sortiermaschine"
   --><!--#set var="prev"         value="/en/computer/punchcard.shtm#Sorters"
   --><!--#set var="prev_title"   value="Punch card computing: IBM 082, IBM 083"
   --><!--#set var="next"         value=""
   --><!--#set var="next_title"   value=""
   --><title>technikum29 - <!--#echo var="title" --></title>

    <!--#include virtual="/en/inc/head.inc.shtm" -->
    <meta name="DC.Title" content="technikum29 - <!--#echo var="title" -->" />
    <meta name="DC.Subject" content="Lochkartensortieralgorithmus" />
	<meta name="t29.SVN" content="$Id$" />
    <meta name="t29.germanoriginal" content="v5.7.19" />
    <meta name="t29.thistranslation" content="09.04.2008/v5.7.22" />
    <meta name="t29.comment" content="Udos Berichtigungen eingefuegt" />
</head>
<body>
<!--#echo encoding="none" var="heading" -->
<div id="content">
    <h2><!--#echo var="title" --></h2>

    <p>Only people who are born prior to 1960 may have knowledge of the punch card machines. We would like to give you an example of these historic machines' functionality.</p>

    <p>If we had a list of customer names to be sorted, we would first give each customer a three digit customer number. We can then sort this list in numerical (ascending) order or sort by their names.</p>
    
    <p>If we would sort the customer names manually, the cards would initially be sorted by the 100's decimal place into 10 piles. Subsequently each of the 10 piles would be sorted by the 10's decimal place into 10 piles. Finally each of the piles would be sorted by the 1's decimal place.</p>
    
    <div class="box center">
        <img src="/shared/photos/rechnertechnik/grafiken/lochkartensortierer.en.gif" width="700" height="531" alt="Diagram about the function of the card sorter" />
    </div>
    
    <p>Machine sorting can not use this procedure since we would need an unlimited number of sorting compartments (pockets). Thus it sorts the other way around, from the 1's decimal place to the 100's decimal place. In summary, in each step (2-4, according to the diagram), there would be a maximum of only 10 card decks per sort.</p>

    <p>Summing up, this yields the basic rules of mechanical sorting, as the punch card collator uses them:</p>

    <ul>
        <li>The elements which have to be sorted are treated as decimal numbers, each number is broken down in its decimal places</li>
        <li>The sorting algorithm starts with the least significant digit and ends with the most significant one</li>
        <li>The sorting algorithm needs as many loops as the number of digits in each number (three loops in this case)</li>
    </ul>

</div><!--content-->
<!--#include virtual="/en/inc/menu.inc.shtm" -->
</body>
</html>