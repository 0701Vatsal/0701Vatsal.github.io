<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Logout</title>
    <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
</head>
<body>
    <h3>Home</h3>
    <hr>
    <a href="emp_login.php">Logout</a>
</body>
</html>