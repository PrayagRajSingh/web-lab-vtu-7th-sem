<html>
    <head>
        <title>Pattern matching using python </title>
    </head>
    <body>
        <?php
        $res=shell_exec("python states.py");
        $states=explode("\n",$res);
        echo "Statement is :<b> $states[4]</b><br/>";
        echo "Word that end with xas :<b> $states[0]</b><br/>";
        echo "Word that start with k  end with s (case sensitive)  :<b> $states[1]</b><br/>";
        echo "Word that start with M  end with s   :<b> $states[2]</b><br/>";
        echo "Word that end with a  :<b> $states[3]</b>";
     ?>
    </body>
</html>