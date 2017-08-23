<?php
require_once('AgentApi.php');

//get api key
$apiKey = 'key';
$memberId = 'memberId';
$apiKeyTool = new AgentApi($apiKey, $memberId);
$youApiKey = $apiKeyTool -> getKey();

//get new api key
$apiKeyTool -> setApiKey('you new key');
$apiKeyTool -> setMemberId('you new memberId');
$youApiKey = $apiKeyTool -> getKey();
