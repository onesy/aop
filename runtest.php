<?php

include("AOP/AopClient.php");
include("AOP/AopEncrypt.php");
include("AOP/EncryptParseItem.php");
include("AOP/EncryptResponseData.php");
include("AOP/SignData.php");
include("AOP/Request/AlipayDataDataserviceBillDownloadurlQueryRequest.php");
include("AOP/Request/AlipayTradeAppPayRequest.php");
include("AOP/Request/AlipayTradeCloseRequest.php");
include("AOP/Request/AlipayTradeFastpayRefundQueryRequest.php");
include("AOP/Request/AlipayTradeQueryRequest.php");
include("AOP/Request/AlipayTradeRefundRequest.php");
include("AOP/Request/AlipayTradeCreateRequest.php");
$config = include("Tests/config.php");
$aop = new \AOP\AopClient();
$aop->signType = "RSA2";
$aop->appId = $config['alipay_config']['app_id'];
$aop->rsaPrivateKey = $config['alipay_config']['alipay_private_key'];
$aop->alipayrsaPublicKey = $config['alipay_config']['alipay_public_key'];
$create_bid_request = new AOP\Request\AlipayTradeAppPayRequest();
$create_bid_request->setBizContent(json_encode([
    'out_trade_no' => "otn" . date("YmdHis"),
    'seller_id' => $config['alipay_config']['partner'],
    'total_amount' => 0.01,
    'subject' => 'guimi test',
    'body' => 'guimi coin'
]));
$create_bid_request->setNotifyUrl("http://devapi.guimiapp.com/v1/aop_notify");
$response = $aop->sdkExecute($create_bid_request);
echo $response;