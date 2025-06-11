<!doctype html>
<html>
    <head>
        <title>HTML with PHP</title>
    </head>
    <body>
        <?PHP $name = $_POST['name']; ?>
        <h1>My Name is <?php echo $name; ?></h1>
        
        <p>Here I am trying to use HTML and PHP Tags together</p>
        
        <p>In our PHP Code I have declared a variable named $name and it has value as <?php echo $name ?></p>
        
        <pre>
            My 
                    Name
                            Is

                    stored in

                    PHP


Variable
        <?php print $name; ?>
        </pre>
    </body>
</html>