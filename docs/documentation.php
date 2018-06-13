<?php 
require '../includes/helpers.php';
getHead("Documentation");
include('parse-markdown.php');
$contents = file_get_contents('../documentation.md');
$parse = new Parsedown();
echo $parse->text($contents);
?>
</body>
</html>