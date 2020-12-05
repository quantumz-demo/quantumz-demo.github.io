
<?php
ob_start();
?>
<title> Quantumz | Portfolio</title>


<div>Hi portfolio</div>

<?php
$content = ob_get_contents();
ob_end_clean();
require(__DIR__."/includes/template.php");

