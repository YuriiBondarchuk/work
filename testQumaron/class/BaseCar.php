<?php


class BaseCar
{
    
    public $clientName = '';
    public $clientEmail = '';
    public $managerName = '';
    public $lastMessage = '';
    private $allCharacteristics = 'Your order: <br>';
    public $firstPathMessage = 'The car ordered by you is installed ';
    
    protected function sentInformation($message)
    {
        $message .= $this->lastMessage;
        if (defined('SENT_PROCESS_ON_EMAIL') && SENT_PROCESS_ON_EMAIL) {
            Mail::sendMail(CLIENT_EMAIL, 'setTypeEngine', $message);
        }
        
        if (defined('LOG_PROCESS') && LOG_PROCESS) {
            Logger::getLogger('processBuildCar')->log($message);
        }
    }
    
    protected function setAllCharacteristics($characteristic)
    {
        $this->allCharacteristics .= $characteristic . '<br>';
    }
    
    public function getAllCharacteristics()
    {
        return $this->allCharacteristics;
    }
    
    protected function setUserManagerData()
    {
        if (defined('CLIENT_NAME')) {
            $this->clientName = CLIENT_NAME;
        }
        if (defined('CLIENT_EMAIL')) {
            $this->clientEmail = CLIENT_EMAIL;
        }
        if (defined('MANAGER_NAME')) {
            $this->managerName = MANAGER_NAME;
        }
        if ( ! empty($this->clientName)) {
            $this->lastMessage = ' (client name: ' . $this->clientName;
        }
        if ( ! empty($this->managerName)) {
            $this->lastMessage .= ', you personal manager: ' . $this->managerName . ' )';
        } else {
            $this->lastMessage .= ' )';
        }
    }
}
