<?php
/**
 * Created by PhpStorm.
 * User: suhanyu
 * Date: 2019-01-31
 * Time: 16:47
 */

namespace HttpTest\controller;

use HttpTest\common\component\BaseController;
use HttpTest\common\traits\CommunicatorConfigTrait;
use HttpTest\servant\PHPTest\HttpTest\Obj\Servant as TarsServiceServant;

class AccessController extends BaseController
{
    use CommunicatorConfigTrait;

    /**
     * @desc 获取用户
     */
    public function getUser()
    {
        return [
            'name' => 'suhanyujie',
            'age'  => 27,
            'home' => 'JiangXi',
        ];
    }

    /**
     * @desc 作为客户端，调用tars服务
     */
    public function userRegiste()
    {
        $config = $this->tarsClientConfig();
        //$config->setIVersion($this->iVersion);//默认为3，调java时，传1
        $config->setIVersion(3);
        $serviceServ = new TarsServiceServant($config);
        $paramStr = json_encode([
            '_service'=>'User.AccessService@userLogin',
        ], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
        $ret = $serviceServ->apply($paramStr,$result);
        // 返回为1，表示正常
        if ($ret != 1) {
            return [
                'status'=>$ret,
                'msg'=>'异常',
            ];
        } else {
            return [
                'status' => $ret,
                'data'   => json_decode($result, true),
                'msg'    => 'ok',
            ];
        }
    }
}
