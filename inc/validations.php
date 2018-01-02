
<div class="text-primary"> 
	<p class="aih4"> 
<?php
$analyse = $_POST["parse"];
if(isset($analyse))
{
	
$parser=htmlspecialchars($_POST["parser"]);

	if(!empty(chop($parser)) && chop($parser!="") && $parser==true)
	
	{		 	
	echo "My dear friend after successfull analysis,I was able to analyse your input .<br> Amount of Content " . html_entity_decode($parser);
		}
		
		elseif ($parser!=true) {
			echo"My dear friend  am  so sorry i was unable to give  you result because your input is not a valid html/javascript tags.";
		}
		
		else
		{
			echo"My dear friend  am  so sorry i was unable to give  you result because no Content was entered.";
		}
		 	

}
?>
 </p>
 </div>