<?php
class Mageme_UrlRedirect_Model_Observer extends Mage_Core_Model_Abstract
{
    public function sendUrl($observer){
        $result = $observer->getResult();
        $result['redirect_url'] = 'http://google.com';
        echo htmlspecialchars(json_encode($result), ENT_NOQUOTES);
        exit;
    }
}