
<html>
    <head>
        <title>title</title>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script>
            function show()
            {
                var quer = document.getElementById("lol").value;
                
                $.ajax({url:"connect_bd.php", method:"POST",
                data: {query:quer},
                success:function(html){
                    $("#status").html(html);
                }
                });
            }
        
        
        
        </script>
    </head>
    <body>
        <input type="text" id="lol">
        <div id="status"></div>
        <button><input type="button" onClick='show()' value="Отправить запрос">
    </body>
</html>
