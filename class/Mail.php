<?php

class Mail
{
    
    public static function sendMail($email, $subject, $message)
    {
        if (defined('SENT_PROCESS_ON_EMAIL') && SENT_PROCESS_ON_EMAIL) {
            return mail($email, $subject, $message);
        }
        return false;
    }
}
