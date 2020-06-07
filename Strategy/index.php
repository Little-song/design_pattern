<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>策略模式</title>
    <link rel="stylesheet" type="text/css" href="../public/layui/css/layui.css" />

    <style>
        form { position: relative; }
        ul > li { margin-left: 55px; display: block; }
        .add-btn-group { position: absolute; top: 32px; left: 250px; }
        .rebate { display: none; }
        .return-back { display: none; }
        .return-back > .layui-form-item > .layui-inline > .layui-form-label { width: 35px; }
    </style>
</head>
<body>
    <form action="#" class="layui-form">

        <div class="layui-form-item">
            <label class="layui-form-label" for="">价格：</label>
            <div class="layui-input-inline">
                <input name="price" class="layui-input" type="text" placeholder="请输入价格（元）">
            </div>    
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label" for="">数量：</label>
            <div class="layui-input-inline">
                <input name="num" class="layui-input" type="text" placeholder="请输入数量">
            </div>
        </div>

        <div class="layui-form-item add-btn-group">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="Add">确定</button>
                <button class="layui-btn layui-btn-primary" lay-submit lay-filter="back">回退</button>
                
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label" for="">活动类型:</label>
            <div class="layui-input-block">
                <input name="type"  type="radio" title="正常收费" value="原价" lay-filter="type" checked>
                <input name="type"  type="radio" title="打折促销" value="打折" lay-filter="type">
                <input name="type"  type="radio" title="满减活动" value="满减" lay-filter="type">
            </div>
        </div>

    
        <div class="rebate">
            <div class="layui-form-item">
                <label class="layui-form-label" for="">折扣：</label>
                <div class="layui-input-inline">
                    <input name="percent" class="layui-input" type="text" placeholder="请输入折扣（0-1之间）">
                </div>    
            </div>
        </div>

        <div class="return-back">
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label" for="">满</label>
                    <div class="layui-input-inline">
                        <input name="man" class="layui-input" type="text" placeholder="请输入满多少(￥)">
                    </div>   
                    <div class="layui-form-mid">减</div>
                    <div class="layui-input-inline">
                        <input name="jian" class="layui-input" type="text" placeholder="请输入减多少（￥）">
                    </div>    
                </div>
            </div>
        </div>
        

        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn layui-btn-primary">重置</button>
                <button class="layui-btn" lay-submit lay-filter="Demo">计算总额</button>
            </div>
        </div>

    </form>

    <ul></ul>

</body>
</html>
<script src="../public/layui/layui.js"></script>
<script>


layui.use(['form','jquery'], function(){
  var form = layui.form;
  var $ = layui.jquery;
  
  //监听确认提交
  form.on('submit(Add)', function(data){
    var price = data.field['price'];
    var num = data.field['num'];
    var type = data.field['type'];
    var percent = data.field['percent']; 
    var man = data.field['man']; 
    var jian = data.field['jian']; 

    var li = '';
    switch ( type ){
        case '打折':
            li = '<li>单价=>' + price + '元&nbsp;&nbsp;数量=>' + num + '&nbsp;&nbsp;折扣=>' + percent + '&nbsp;&nbsp;合计：' + (price*num)*percent + '</li>';
            break;
        case '满减':
            li = '<li>单价=>' + price + '元&nbsp;&nbsp;数量=>' + num + '&nbsp;&nbsp;满减=>满' + man + '减'+ jian +'&nbsp;&nbsp;合计：' + ((price*num)>=man?(price*num)-jian:(price*num)) + '</li>';
            break;
        default :
            li = '<li>单价=>' + price + '元&nbsp;&nbsp;数量=>' + num + '&nbsp;&nbsp合计：' + (price*num) + '</li>';
            break;
    }
    $('ul').append(li);
    return false;
  });

//监听回退按钮
form.on('submit(back)', function(data){
    $('ul li').last().remove();
    return false;
  });

  // 监听选中活动类型
  form.on('radio(type)', function(data){
    console.log(data.value); //被点击的radio的value值
    switch (data.value) {
        case '打折':
            $(".rebate").show();
            $(".return-back").hide();
            break;
        case '满减':
            // console.log($(".return"))
            $(".return-back").show();
            $(".rebate").hide();
            break;
        default :
            $(".rebate").hide();
            $(".return-back").hide();
            break;
    }
  });  

  //监听提交
  form.on('submit(Demo)', function(data){
    layer.msg(JSON.stringify(data.field));
    return false;
  });

});
</script>