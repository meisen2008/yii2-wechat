<?php
namespace moxun33\wechat;
/**
 * Created by PhpStorm.
 * Author: moxingxum
 * Date: 16/8/29
 * Time: 19:14
 */
use moxun33\wechat\sdk\WechatSdk;

class Wechat
{
    public  function sayHello(){
      $options = array(
            'token'=>'xiaobai', //填写你设定的key
            'encodingaeskey'=>'encodingaeskey', //填写加密用的EncodingAESKey，如接口为明文模式可忽略
            'appid'=>'wx90e6ca5aee2ee698', //填写高级调用功能的app id
    		'appsecret'=> 'ccb1773d81ca24794a22e426d5099337', //填写高级调用功能的密钥
        ); /*
        $weObj = new WechatSdk($options);
        $weObj->valid();//明文或兼容模式可以在接口验证通过后注释此句，但加密模式一定不能注释，否则会验证失败
        $type = $weObj->getRev()->getRevType();
        switch($type) {
            case WechatSdk::MSGTYPE_TEXT:
                $weObj->text("hello, I'm wechat")->reply();
                exit;
                break;
            case WechatSdk::MSGTYPE_EVENT:
                break;
            case WechatSdk::MSGTYPE_IMAGE:
                break;
            default:
                $weObj->text("help info")->reply();
        }
*/
        $weObj = new WechatSdk($options);
    }

}