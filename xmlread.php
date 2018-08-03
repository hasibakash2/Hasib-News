<!DOCTYPE html>
<html>
<body>


<?php
$doc = new DOMDocument();
$doc->load( '1531932279.xml' );
 
$books = $doc->getElementsByTagName( "news" );
foreach( $books as $book )
{
	echo "<table>";
echo "<tr>";
echo "<td>";$authors = $book->getElementsByTagName( "id" );echo "</td>";
echo "<td>";$author = $authors->item(0)->nodeValue;echo "</td>";
 echo "</td>";
 echo "<tr>";
echo "<td>";$publishers = $book->getElementsByTagName( "headline" );echo "</td>";
echo "<td>";$publisher = $publishers->item(0)->nodeValue;echo "</td>";
 echo "</tr>";
 echo "</table>";
$titles = $book->getElementsByTagName( "body" );
$title = $titles->item(0)->nodeValue;
 
echo "$title - $author - $publisher\n";
}
?>


</body>
</html>