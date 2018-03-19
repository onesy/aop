<?php

return [
    'alipay_config' => [
        //合作身份者ID，签约账号，以2088开头由16位纯数字组成的字符串
        'partner' => '',
        //app_id
        'app_id' => '',

        'alipay_private_key' => '',

        'alipay_public_key' => '',
        'service' => '',
        'seller_id' => '',
        //签名方式 不需修改
        'sign_type' => strtoupper('RSA2'),
        //字符编码格式 目前支持 gbk 或 utf-8
        'input_charset' => strtolower('utf-8'),
        //访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
        'transport' => 'https',
        'notify_url' => ''
    ],
];