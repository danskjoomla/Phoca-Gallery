<?php

$image = str_replace(");", "", $image);   // Fjern bestemt tekstpassage

$image= trim($image ," \t\n\r\0\x0B" );   // Fjern whitespace i ender

$image = preg_replace('/\s+/', '', $image);  // Fjern alle mellemrum i teksten


if ($month < date('n'))   // Fra måned til år
{
	$year=date('Y')+1;
}
else
{
	$year=date('Y');
}



			$html1 = $imageurl[0];                     //Traverse throug $imageurl
			$doc1 = new DOMDocument;
			$doc1->loadHTML($html1);
			$nodes = $doc1->getElementsByTagName('img');
			foreach ($nodes as $node) {
			if ($node->hasAttributes()) {
				foreach ($node->attributes as $a) {
					//echo $a->nodeName.': '.$a->nodeValue.'<br/>';
					if ($a->nodeName=="data-original")
					{
						$imageurl = $a->nodeValue;
					}
					}
				}
			}
			
			
			// Til musia.tpl
			<?php $selected_option = $item->field_hastime; if (selected_option[0] == "hastime"){ ?>
				<div class="datetime">
					<?php echo date("G:i",$item->field_date); ?>
				</div>
			<?php } ?>