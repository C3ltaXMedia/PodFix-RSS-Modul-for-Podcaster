<?php 
/**
*	Easy RSS feed
*	@dev Michael McCouman jr.
*   @year 2008 - 2013
**/
header("Content-type: text/xml"); 
//RSS Feed Header:
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; 
echo "<rss version=\"2.0\" xmlns:itunes=\"http://www.itunes.com/dtds/podcast-1.0.dtd\" xmlns:dc=\"http://purl.org/dc/elements/1.1/\" xmlns:content=\"http://purl.org/rss/1.0/modules/content/\">\n";

// Binde Angaben aus Install ein:
include './-/inc/install.php';

//Einbinden der DB Daten:
include './-/inc/db.inc.php';

//Erstelle Kanal des Podcast Feeds: 
echo "<channel>\n";
echo "<title>".$Podcastname."</title>\n";
echo "<link>".$Podcastlink."</link>\n";
echo "<itunes:subtitle>".$PodSubtitle."</itunes:subtitle>\n";;
echo "<itunes:summary>".$PodDescript."</itunes:summary>\n";
echo "<description>".$PodDescript."</description>\n";
echo "<language>".$PodLanguarge."</language>\n";
echo "<copyright>".$PodCopyright."</copyright>\n";
echo "<itunes:owner>\n";
echo 	"<itunes:name>".$PodAuthor."</itunes:name>\n";
echo 	"<itunes:email>".$PodcastMail."</itunes:email>\n";
echo "</itunes:owner>\n";
echo "<managingEditor>".$PodcastMail."(".$PodAuthor.")</managingEditor>\n";
echo "<itunes:author>".$PodAuthor."</itunes:author>\n";
echo "<image>\n";
echo "   <url>".$PodRSSimg."</url>\n";
echo "   <title>".$Podcastname."</title>\n";
echo "   <link>".$Podcastlink."</link>\n";
echo "</image>\n";
echo "<itunes:image href=\"".$Podcastimg."\" />\n";
echo "<pubDate>Fri, 10 Aug 2012 20:52:19 +0000</pubDate>\n";
echo "<lastBuildDate>Fri, 10 Aug 2012 20:52:19 +0000</lastBuildDate>\n";
echo "<generator>Podfix RSS</generator>\n";
echo "<itunes:explicit>".$Inhaltex."</itunes:explicit>\n";
echo "<itunes:category text=\"Government &amp; Organizations\">\n";
echo "<itunes:category text=\"Non-Profit\" />\n";
echo "</itunes:category>\n";
echo "<itunes:category text=\"Science &amp; Medicine\">\n";
echo "<itunes:category text=\"Social Sciences\" />\n";
echo "</itunes:category>\n";
echo "<itunes:category text=\"Technology\">\n";
echo "<itunes:category text=\"Podcasting\" />\n";
echo "</itunes:category>\n";
echo "<itunes:category text=\"Society &amp; Culture\" />\n";
echo "<category>Non-Profit</category>\n";
echo "<category>Social Sciences</category>\n";
echo "<category>Podcasting</category>\n";
echo "<category>Society &amp; Culture</category>\n";

//Warnung DB Angeschaltet
error_reporting(E_ALL);

//Baue Verbindung auf:
$dbh  = mysql_connect ($SQLhost, $SQLuser, $SQLpass);
mysql_select_db( $SQLhostdb ) or die("<div style='color:#f00; border:1px solid #a00; padding:10px;'>Auswahl der Datenbank fehlgeschlagen</div>");

//Gehe in DB und suche nach den XML Daten:
$SqlSelect = "SELECT link, titel, text, tag FROM rss LIMIT 0,20"; 
    $result = mysql_query($SqlSelect); 
	
	//Fehler wenn Abfrage nicht möglich
    if (!$result)    {   die('Invalid query: ' . mysql_error());    } 
    
	//Erzeuge Ausgaben <items> aus datenbank
    while ($row = mysql_fetch_assoc($result)) {    

?> 
<item>
 <pubDate><?php echo $row['tag']; ?></pubDate>
 <title>Int<?php echo $row['titel']; ?></title>
 <link>http://localhost/RSS/audio/<?php echo $Pod_name; echo $Pod_dote; echo $row['link']; ?>.mp3</link>
 <guid>http://localhost/RSS/audio/<?php echo $Pod_name; echo $Pod_dote; echo $row['link']; ?>.mp3</guid>
<dc:creator><?php echo $PodAuthor; ?></dc:creator>
<itunes:author><?php echo $PodAuthor; ?></itunes:author>
<itunes:explicit>no</itunes:explicit>
<comments>http://localhost/RSS/rss.php</comments>
<itunes:keywords></itunes:keywords>
<category>Wikidesign</category>
<category>Skins</category>
<itunes:subtitle><?php echo $row['text']; ?></itunes:subtitle>
<itunes:summary><?php echo $row['text']; ?></itunes:summary>
<description><?php echo $row['text']; ?></description>
<enclosure url="http://localhost/RSS/audio/<?php echo $Pod_name; echo $Pod_dote; echo $row['link']; ?>.mp3" length="5242880" type="audio/mpeg" />
<itunes:duration>00:03:15</itunes:duration>
</item>
<?php
//Ende </Item>

} 

mysql_free_result($result); 
mysql_close($dbh); 

//Ende XML
echo "</channel>\n";
echo "</rss>\n";
?> 