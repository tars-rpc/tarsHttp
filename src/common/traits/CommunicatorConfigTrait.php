<?php
/**
 * Created by PhpStorm.
 * User: suhanyu
 * Date: 2019-01-31
 * Time: 16:50
 */

namespace HttpTest\common\traits;

use Tars\client\CommunicatorConfig;

trait CommunicatorConfigTrait
{
    // 调用tars的服务时，需要用到的，跟服务名的一部分保持一致
    public $moduleName = 'TarsServer.User';

    /**
     * 客户端调用tars时基础调用配置
     * @param null $moduleName
     * @return CommunicatorConfig
     */
    public function tarsClientConfig($moduleName = null):CommunicatorConfig
    {
        $config = new CommunicatorConfig();
        $config->setLocator(ENVConf::$locator);
        $config->setModuleName($moduleName ?? $this->moduleName);
        return $config;
    }
}