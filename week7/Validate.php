<html>
    <head>
        <title>Validate</title>
    </head>
    <body>
        <?php
        $email = $_POST["email"];
        $url = $_POST["url"];
        $phone = $_POST["phone"];
        
        if (preg_match("/[a-zA-z0-9.-]+\@[a-zA-z0-9.-]+.[a-zA-Z]+/", email)) {
            print "Valie email = $email <br>";
        } else {
            print "Invalid email = $email <br>";
        }
                
        if (preg_match("/^http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)
                 *\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)$/", $url)) {
            print "Valid url = $url <br>";
        } else {
            print "Invalid url = $url <br>";
        }
        
        if (preg_match("/(09|01)\d{8,10}/", $phone)) {
            print "valid phone = $phone <br>";
        } else {
            print "Invalid phone = $phone <br>";
        }
        ?>
    </body>
</html>