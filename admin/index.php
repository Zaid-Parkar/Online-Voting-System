<?php
require_once("header.php");
require_once("navigation.php");

if(isset($_GET['homepage']))
{
    require_once("./homepage.php") ;
}

else if(isset($_GET['addElectionPage']))
{
    require_once("add_elections.php") ;
}

else if(isset($_GET['addCandidatePage']))
{
    require_once("add_Candidate.php") ;
}

else if(isset($_GET['logoutpage']))
{
    require_once("logout.php") ;
}else if(isset($_GET['viewResult']))
{
    require_once("viewResults.php");
}


?>


<?php
require_once("footer.php")

?>