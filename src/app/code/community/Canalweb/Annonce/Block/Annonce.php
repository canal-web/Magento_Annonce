<?php
class Canalweb_Annonce_Block_Annonce extends Mage_Core_Block_Template {

    /**
     *  Fetch messages from back-office
     */
    public function getMessages() {
        $nbfields = 5;
        $messages = array();
        for ($i=1; $i <= $nbfields; $i++) {
            $path = 'annonce/messages/message'.$i;
            if(Mage::getStoreConfig($path)) {
                $messages[$i] = Mage::getStoreConfig($path);
            }
        }
        return $messages;
    }

    /**
     *  Get configuration parameters
     */
    public function getConf() {
        $activation = Mage::getStoreConfig('annonce/configuration/activation');
        $autoplay = Mage::getStoreConfig('annonce/configuration/autoplay');
        $speed = Mage::getStoreConfig('annonce/configuration/speed');
        $conf = array();
        $conf['activation'] = $activation ? $activation : 0;
        $conf['autoplay'] = $autoplay ? $autoplay : 0;
        $conf['speed'] = $speed ? $speed : 5000;
        return $conf;
    }
}
