<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>简单工厂模式</title>
</head>
<body>
    <form action="" >
        <!-- 输入值1 -->
        <label for="num1">值1：</label>
        <input id="num1" name="num1" type="text"><br/><br/>
        <!-- 输入运算符 -->
        <label for="operator">运算符：</label
        ><input id="operator" name="operator" type="text"><br/><br/>
        <!-- 输入值2 -->
        <label for="num2">值2：</label>
        <input id="num2" name="num2" type="text"><br/><br/>
        <!-- 计算结果 -->
        <div class="result">结果是：<span></span></div><br/>
        <!-- 计算按钮 -->
        <button type="button">计算</button>
    </form>

    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.js"></script>

    <script>
        // 点击发起运算请求
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
                    // 成功返回结果处理
                    $('.result span').text(res)
                }
            })
        })
    </script>

</body>
</html>