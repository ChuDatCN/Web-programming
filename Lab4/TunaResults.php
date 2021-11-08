<html>
    <head><tilte>Tuna Cafe</tilte></head>
    <body>
    <font size = 4 color="blue"> Tuna Cafe Results Received</font>
    <?php
    $menu = array('Tuna Casserole' , 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');

    if (isset($_GET["prefer"])) {
        $prefer = $_GET["prefer"];
    }
        else $prefer = array();

    if (count($prefer) ==0 ){
        print 'Oh no! Please pick something as your favorite! ';
    }else {
        print '<br>Your selections were<u1>';
        foreach ($prefer as $item){
            print "<li>$menu[$item]</li>";
        }
        print '</u1>';
    }
    ?>
    </body>
</html>