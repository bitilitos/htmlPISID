<?php
$message = $_GET['message'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Alert Message</title>
</head>
<body>
<script>
    alert("<?php echo $message; ?>");
    window.location.href = "<?php echo $_SERVER['HTTP_REFERER']; ?>";
</script>
</body>
</html>
