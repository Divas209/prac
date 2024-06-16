<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<script>
    var s = 0;
    var m = 0;
    var h = 0;
    function timer(){
        document.getElementById('elem').textContent =  h+":"+m+":"+s;
        if(s>59){
            s=0;
            m=m+1;
        }
        if(m>59){
            m=0;
            h=h+1;
        }
        s=s+1;
        vis();
    }
    function vis(){
        setTimeout(timer, 1000);
    }

</script>
<body>
    <div class = "stat">
        <div class = "text1">
            время перерыва
            <div id = "tiem1">
                <div id = "elem">
                    <script>    
                        timer()
                    </script>
                </div>
            </div>
        </div>
        <form action="../">
            <input type="submit" value = "закончить перерыв">
        </form>
        
    </div>
</body>
</html>