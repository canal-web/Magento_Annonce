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
}
