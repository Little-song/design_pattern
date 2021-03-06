# 依赖倒转原则

## 解释

抽象不应该依赖于细节，细节应该依赖于抽象，即针对接口编程，不要对实现编程。

> 抽象就是接口或者抽象类，细节就是实现类

## 问题由来

类A直接依赖类B，假如要将类A改为依赖类C，则必须通过修改类A的代码来达成。这种场景下，类A一般是高层模块，负责复杂的业务逻辑；类B和类C是低层模块，负责基本的原子操作；假如修改类A，会给程序带来不必要的风险。

## 解决方案

将类A修改为依赖接口I，类B和类C各自实现接口I，类A通过接口I间接与类B或者类C发生联系，则会大大降低修改类A的几率。

## 原则

- 高层模块不应该依赖低层模块，两个都应该依赖抽象。
- 抽象不应该依赖细节，细节应该依赖抽象。

## 其他解释

通俗点就是说变量或者传参数，尽量使用抽象类、接口。

> 接口负责定义public属性和方法，并且声明与其他对象依赖关系。
> 抽象类负责公共构造部分的实现，实现类准确的实现业务逻辑。

## 我的理解

PHP中的PDO接口就是典型的符合这一原则，想要连接Mysql数据库，不是直接调用mysql函数，而是通过PDO接口连接，若要换Oricle数据库，只需更改PDO接口的属性参数即可。
