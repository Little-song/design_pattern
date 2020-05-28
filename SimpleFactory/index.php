<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>简单工厂模式</title>
</head>
<body>
    <form action="" >
        <label for="num1">值1：</label>
        <input id="num1" name="num1" type="text"><br/><br/>

        <label for="operator">运算符：</label
        ><input id="operator" name="operator" type="text"><br/><br/>

        <label for="num2">值2：</label>
        <input id="num2" name="num2" type="text"><br/><br/>

        <div class="result">结果是：<span></span></div><br/>

        <button type="button">计算</button>
        
    </form>

    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.js"></script>

    <script>
        $('button').on('click',function(){
            var form = document.querySelector("form");
            var data = new FormData(form);
            $.ajax({
                url: 'handle.php',
                data: data,
                type: 'POST',
                cache: false,
                processData: false,
                contentType: false,
                success: function(res){

                }
            })
        })
    </script>


</body>
</html>