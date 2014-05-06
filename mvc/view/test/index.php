<html>
<style>
h1{
font-family:georgia;
font-style:italic;
}
</style>
<body>
<h1><?php print $data ?></h1>
<p>Controller: <?php print $controller ?></p>
<p>Action: <?php print $action ?></p>

<?php echo $this->render("powerd_by_glbligo"); ?>

</body>
</html>