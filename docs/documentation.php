<?php 
require '../includes/helpers.php';
getHead("Documentation");
include('parse-markdown.php');
$contents = file_get_contents('../README.md');
$parse = new Parsedown();
echo $parse->text($contents);
?>
</body>
</html>