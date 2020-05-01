<?php
session_start();
session_destroy();
session_start();
?>

<pre>
<?php
print_r($_SESSION);
?>
</pre>