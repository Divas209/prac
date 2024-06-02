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
        setTimeout(tm, 1000);
    }


</script>
<body>
    <div class = "cont_left">
        <div class ="con1">d</div>
    </div>
    <div class = "cont_right">
        <div class = "con2">
            <div class = "toolbar_l">
                <div class ="toolbar_item_l">dsa</div>
                <div class ="toolbar_item_l">dsa</div>
                <div class ="toolbar_item_l">dsa</div>
                <div class ="toolbar_item_l">dsa</div>
            </div>
            <div class = "toolbar_r"'>
                <div class ="toolbar_item_menu" id = "toolbar_item_menu" onmouseover="changeItem()" onmouseout="rechangeItem()">меню</div>
            </div>
        </div>
        <div class = "con3">
            <div class = "te">
                dasd
                dasdsada
                adf
            </div>

            <div class = "menu_bar" id = "menu_bar" onmouseover="changeItem()" onmouseout="rechangeItem()">
                <form action="">
                    <input type="button" value="перерыв">
                    <input type="button" value="уход">
                </form>
            </div>

        </div>
        <div class = "con4">
            d
        </div>
    </div>
</body>
</html>