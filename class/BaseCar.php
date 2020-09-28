<?php


class BaseCar
{
    protected function sentInformation($message)
    {
        if (defined('SENT_PROCESS_ON_EMAIL') && SENT_PROCESS_ON_EMAIL) {
            Mail::sendMail(CLIENT_EMAIL, 'setTypeEngine', $message);
        }
        
        if (defined('LOG_PROCESS') && LOG_PROCESS) {
            Logger::getLogger('processBuildCar')->log($message);
        }
    }
}
