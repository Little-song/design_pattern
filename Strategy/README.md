# 策略模式

## 需求描述

实现一个商场收银系统，营业员根据客户所购买商品的单价和数量，向客户收费。

## 目录框架

- `index.php`文件，前端页面，可以看作View，将数据发送到handle.php
- `handle_v1.0.php`文件，客户端（控制器），获取前端数据，调用策略模式的上下文类content
- `handle_v2.0.php`文件，v1.0的升级版，将switch判断移到model模型里
- `Model_v1.0`目录，存放策略模式的核心代码，一般是可复用、易扩展的代码
- `Model_v2.0`目录，v1.0的升级版，将switch判断移动到content类，去掉子类的构造函数

## Model_1.0与Model_2.0简单对比

1. Model_v1.0
    - Content类的构造函数传入的是一个Cash类对象
    - Content类相对较简洁，但在客户端需多做一步判断，在不同位置调用又需再写一次判断
    - 具体参数通过子类的构造方法传入，或者还可以先实例化子类，设置好属性，然后再将子类对象传入到Content类对象
    - 客户端需要引入许多策略子类
2. Model_v2.0
    - content类的构造函数传入的是一个字符串
    - 策略模式与简单工厂结合，将switch判断移到Content类，简化客户端使用，避免在许多地方出现判断
    - 客户端只需引入Content类
    - 客户端调用Content类传入活动类型返回收费子类，设置好子类属性，再调用子类方法即可

## 说明

这个系统后台策略模式已设计完成，前台index页面一些动效也做了,剩下前台提交数据到后台还没实现，暂时也不打算实现，这里就先讲一下思路。

前台点击确认按钮的时候添加该商品的数据（如数量、单价、优惠等）到cookie，一种商品对应一数组元素，等所有商品添加完了，点击计算金额，将cookie数据一同提交到后台，后台再根据数据设置参数。

> 因为每种商品都有活动类型，后台可能需要循环调用Content类。

## 一些摘录

看到一些网上对策略模式的讲解，我觉得有一个分析得比较有趣、形象。

就好比诸葛亮给赵云用的3个锦囊妙计。有3个妙计，分别是CashNormal，CashRebate，CashReturn。装在一个锦囊里，锦囊叫Content。赵云是干活的，也就是客户端调用者handle，从锦囊中取出一个妙计，然后执行。

> 具体可查阅该文章的策略模式部分：[设计模式重点版之策略模式](https://www.cnblogs.com/moveofgod/p/4078730.html)
