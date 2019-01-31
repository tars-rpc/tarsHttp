<?php
/**
 * Created by PhpStorm.
 * User: suhanyu
 * Date: 2019-01-31
 * Time: 16:44
 */
return [
    'appName'         => 'PHPTest',
    'serverName'      => 'HttpTest',//发布服务器时需要注意使用此名称
    'objName'         => 'Obj',
    'withServant'     => false, //决定是服务端,还是客户端的自动生成
    'tarsFiles'       => array(
        './HttpService/TarsService.tars',
    ),
    'dstPath'         => '../src/servant',
    'namespacePrefix' => 'HttpTest\servant',// "HttpTest"是根据该项目的命名空间而定
];
