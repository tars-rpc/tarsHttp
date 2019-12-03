# tarsHttp

## 前言
* tars的http端，可以作为http服务器调用，也可以作为client去调用tars server
* 注意 `src/controller` 下的控制器，只允许有一个层级，不允许新增文件夹
* 控制器的方法需要加`action`前缀！

## 安装
* `cd src`
* `composer install`

### 生成servant类文件
* 到项目根目录下
* `cd scropts`
* `chmod u+x ./tars2php.sh && ./tars2php.sh`

### 编译打包
* `composer deploy`

## tars编写
* 大括号后，需要加上分号

## 声明
* 代码库内容是基于tars官方的代码库，再次基础上进行开发的
