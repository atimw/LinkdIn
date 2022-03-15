<?php
$names = array('Joe','Erin','Theresa','Lewis');
usort($names, function($a, $b){
   return $a[1] <=> $b[1]; 
});
?>
<pre>
    <?php print_r($names);?>
</pre>