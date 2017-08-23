<?php


class AgentApi
{
    private $memberId = false;
    private $apiKey = false;

    /**
     * AgentApi constructor.
     */
    public function __construct($apiKey = false, $memberId = false)
    {
        $this->setApiKey($apiKey);
        $this->setMemberId($memberId);
    }

    /**
     * @return string
     */
    public function getKey()
    {
        if($this->memberId == false || $this->apiKey == false)
        {
            return 'no api_key or memberID';
        }

        return $this->memberId . md5($this->apiKey . $this->getDate()) . $this->getDate();
    }

    /**
     * @return false|string
     */
    public function getDate()
    {
        return date("His");
    }

    /**
     * @param $member
     */
    public function setMemberId($member)
    {
        $this->memberId = $member;
    }

    /**
     * @param $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }
}
