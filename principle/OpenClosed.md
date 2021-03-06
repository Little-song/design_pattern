# 开放-封闭原则

## 两个特征

1. 对于扩展时开放的(Open for extension)
2. 对于更改时封闭的(Closed for modification)

## 考虑的问题

怎样的设计才能面对需求的改变却可以保持相对稳定，从而使得系统可以在第一个版本以后不断推出新的版本呢？
开放-封闭给我们答案。

## 摘录

绝对的对修改关闭是不可能的，无论模块是多么的‘封闭’，都会存在一些无法对之封闭的变化。既然不可能完全封闭，设计人员必须对于他设计的模块应该对哪种变化封闭做出选择，他必须先猜测出最有可能发生的变化种类，然后构造抽象来隔离那些变化。

在我们最初编写代码时，假设变化不会发生。当变化发生时，我们就创建抽象来隔离以后发生的同类变化。

面对需求，对程序的改动是通过增加新代码进行的，而不是更改现有的代码。

开放-封闭原则是面向对象设计的核心所在。遵循这个原则可以带来面向对象技术所声称的巨大好处，也就是可维护、可扩展、可复用、灵活性好。开发人员应该仅对程序中呈现出频繁变化的那些部分做出抽象，然而，对于应用程序中的每个部分都刻意地进行抽象同样不是一个好主意。拒绝不成熟的抽象和抽象本身一样重要。

## 如何使用开放-封闭原则

1. 通过接口或者抽象类约束扩展，在抽象中的方法应该都是public的；
2. 参数类型引用对象应尽量的使用接口或者抽象类而不是具体的类；
3. 一旦抽象层确定后就尽量的保持稳定，不要修改；
4. 不应该有两个不同的变化出现在同一个接口或者抽象类中，类必须做到低内聚高耦合。

## 我的理解

在简单工厂模式和策略模式中，都有一个抽象类，这个类就是开放的，扩展它时，增加子类即可。封闭应该指的是抽象类尽量不要修改，或者是已实现的子类不要修改。
