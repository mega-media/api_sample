<?php
require_once('AgentApi.php');
$apiHost = 'http://api.oh-gaming.com/api/';

$apiKey = ''; //you api_key
$memberId = ''; //you account

//get api key
$apiKeyTool = new AgentApi($apiKey, $memberId);
$youApiKey = $apiKeyTool->getKey();

//get new api key
$apiKeyTool->setApiKey('you new key');
$apiKeyTool->setMemberId('you new memberId');
$youNewApiKey = $apiKeyTool->getKey();


//Example 1 get lang list
//this api url : http://<api-server>/api/lang_list/{Key}

$exampleOneUrl = $apiHost . 'lang_list/' . $youApiKey;
$responseOne = $apiKeyTool->goCurl($exampleOneUrl);


//Example 2 get user info
//this api url : http://<api-server>/api/user_info/{Key}/{User}

$user = ''; //you member account
$exampleTwoUrl = $apiHost . 'user_info/' . $youApiKey . '/' . $user;
$responseTwo = $apiKeyTool->goCurl($exampleTwoUrl);
