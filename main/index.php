<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<script>
    alert('dsad')
    function changeItem(){
        document.getElementById("menu_bar").style.visibility = 'visible';

    }
    function tm(){
        document.getElementById('menu_bar').style.visibility = 'hidden';
    }
    function rechangeItem() {
        setTimeout(tm, 3000);
    }
</script>
<body>
    
    <div class = "cont_left">
        <div class ="con1">d</div>
        <?php
            require_once 'conn.php';
            $sql = "SELECT 'name', 'surename' FROM 'user'";
            $res = mysqli_query($connect, $sql);
            if($res == false){
                echo "no";
            }
            while($row = mysqli_fetch_array($res)){
                echo '<div class ="con1">'.$row['name'].' '.$row['surename'].'</div>';
            }
        ?>
    </div>
    <div class = "cont_right">
        <div class = "con2">
            <div class = "toolbar_l">
                <form action="" class ="toolbar_item_l_date">
                    <input type="text" value="фио">
                    <div class ="toolbar_item_l"><input type="date"></div>
                    по
                    <div class ="toolbar_item_l"><input type="date"></div>
                    <input type="submit" value = "найти">
                </form>
            </div>
            <div class = "toolbar_r">
                <div class ="toolbar_item_menu" id = "toolbar_item_menu" onmouseover="changeItem()" onmouseout="rechangeItem()">меню</div>
            </div>
        </div>
        <div class = "con3">
            <div class = "te">
                dasd
                dasdsada
                adf
            </div>

            <div class = "menu_bar" id = "menu_bar">
                <form action="" class = "out_buttons">
                    <input type="button" class ="out_button_item" value="перерыв">
                    <input type="button" class ="out_button_item" value="уход">
                </form>
            </div>

        </div>
        <div class = "con4">
            ds
        </div>
    </div>
</body>
</html>