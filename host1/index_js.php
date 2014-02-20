
<html>
    <head>
        <title>title</title>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script>
            function show_user()
           
            {
             $.post("get_user.php",{user:document.getElementById("lol").value},show);
            }
            function show(html)
            {
                 $("#status").html(html);
            }
        
        
        </script>
    </head>
    <body>
        <?php
        session_start();
        echo $_SESSION['login'];
        echo "<br>";
        ?>
        <input type="text" id="lol">
        <div id="status"></div>
        <button><input type="button" onClick='show_user()' value="get user">
    </body>
</html>
