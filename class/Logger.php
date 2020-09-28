<?php


class Logger
{
    
    public static $PATH = './Logs';
    protected static $loggers=array();
    
    protected $name;
    protected $file;
    protected $fp;
    
    public function __construct($name, $file = null)
    {
        $this->name = $name;
        $this->file = $file;
        
        $this->open();
    }
    
    public function open()
    {
        if (self::$PATH == null) {
            return;
        }
        
        $this->fp = fopen($this->file == null ? self::$PATH . '/' . $this->name . '.log' : self::$PATH . '/' . $this->file, 'a+');
    }
    
    public static function getLogger($name = 'root', $file = null)
    {
        if (defined('LOG_PROCESS') && LOG_PROCESS) {
            if ( ! isset(self::$loggers[$name])) {
                self::$loggers[$name] = new Logger($name, $file);
            }
        
            return self::$loggers[$name];
        }
    }
    
    public function log($message){
//        if(!is_string($message)){
//            $this->logPrint($message);
//
//            return ;
//        }
        
        $log='';
        
        $log.='['.date('D M d H:i:s Y',time()).'] ';
        
        $log.=$message;
        $log.="\n";
        
        $this->writeLog($log);
    }
    
    public function logPrint($obj){
        ob_start();
        
        print_r($obj);
        
        $ob=ob_get_clean();
        $this->log($ob);
    }
    
    protected function writeLog($string){
        fwrite($this->fp, $string);
    }
    
    public function __destruct(){
        fclose($this->fp);
    }
}
