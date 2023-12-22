<?php
$json=file_get_contents("kktix.json");
$kktix=json_decode($json);
echo "<h4>".$kktix->title."</h4>";
echo "<div>".$kktix->updated."</div>";
echo "<ul>";
foreach($kktix->entry as $event){
echo "<li>".$event->title."</li>";
}
echo "</ul>";



?>