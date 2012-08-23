<!DOCTYPE html>
<html>
  
<head>
    
    <title>Keep Watching</title>

    <link rel="stylesheet" href="css/sc-player-minimal.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Creepster' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://jsfiddle.net/css/normalize.css" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="http://crisnoble.com/favicon.ico" type="image/x-icon" /> 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12216753-10']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>  
<body>

<?PHP
//connect to mysql database:
include 'connections.php'; 

//form and pass the query and store it as a result
$query="SELECT * FROM mixInfo ORDER BY date";
$result=mysql_query($query);
//count the number of rows
$num=mysql_numrows($result);

mysql_close();
?>

    <div id="header">
        <div id="headerContent">
            <img src="images/logo.png" class="logo" />
            <div class="sorter">Sort: 
                <span id="sortFresh"><a href="keepwatch.php">Freshest First</a></span>
                <span>/</span> 
                <span id="sortDope"><a href="keepwatch2.php">Oldest First</a></span>
            </div>
            <a href="http://mishkanyc.com/bloglin/" target="_blank"><img src="images/kweye.png" class="logo right" /></a>
        </div>
    </div>
    <div class="mainContent">
        <?php
        $i=0;
        while ($i < $num) {
            $title=mysql_result($result,$i,"title");
            $release=mysql_result($result,$i,"release");
            $tracklist=mysql_result($result,$i,"tracklist");
            $artist=mysql_result($result,$i,"artist");
            $date=mysql_result($result,$i,"date");
            $fileSoundCloud=mysql_result($result,$i,"fileSoundCloud");
            $fileBlog=mysql_result($result,$i,"fileBlog");
            echo "<div class=\"slide\">";
            echo "<img src=\"images/coverimages/kw".$release.".jpg\"/>";
            echo "<div class=\"details\">";
            echo "<div class=\"topInfo\">";
            echo "<h1>".$title."</h1><br/>";
            echo "<h1>".$artist."</h1></div>";
            echo "<div class=\"moreInfo\">";
            echo "<a href=\"".$fileSoundCloud."\" target=\"_blank\">download";
            echo "<img src=\"images/soundcloud.png\" class=\"icon\"/></a></div>";
            echo "<div class=\"moreInfo\">tracklist";
            echo "<div class=\"tracklist\">".$tracklist."</div></div>";
            echo "<a href=\"".$fileSoundCloud."\" class=\"sc-player\"></a>";
            echo "</div></div>";
            $i++;
        }

        ?>     
    </div>
    <div id="footer">
        <div id="footerContent">
            <span class="masthead"><a href="http://crisnoble.com" target="_blank">MKSHT x CRISNOBLE.COM</a></span>
            <span class="links">
                <a href="about.php" id="about">ABOUT</a> | 
                <a href="http://mishkanyc.com/bloglin/" target="_blank">BLOGLIN</a> | 
                <a href="http://soundcloud.com/bloglin" target="_blank">SOUNDCLOUD</a>
            </span>
        </div>
    </div>

    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/soundcloud.player.api.js"></script>
    <script type="text/javascript" src="js/sc-player.js"></script>

    <script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName('script')[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0012/0982.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
</body>
</html>