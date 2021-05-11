<?php
$TheForm = fopen("index.html", "r") or die("Failed to open file.");
?>
<html>
<body>

Thanks for your feedback!
Your title: <?php echo $_GET["title"]; ?><br>
Feedback: <?php echo $_GET["feedback"]; ?>

</body>
</html>