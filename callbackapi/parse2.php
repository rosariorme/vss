<?php
include 'parseConfig.php';
include 'parseObject.php';
include 'parseQuery.php';
include 'parseUser.php';
include 'parseFile.php';
include 'parsePush.php';
include 'parseGeoPoint.php';
include 'parseACL.php';
include 'parseCloud.php';
class parseRestClient{

		echo 'Deepak Yadav';

	private $_appid = '2CCH95YinvXsss6GyUysQercURxkfZ885tpjATos';
	private $_masterkey = 'LB0ep78r436ZXmz5bJ4FMm6OsgDWi0vZbBk6OIKT';
	private $_restkey = 'JuKovnLAcYDp5ckek4IKgyPgBZKrKqijIqXCi9PK';
	private $_parseurl = '';
	public $data;
	public $requestUrl = '';
	public $returnData = '';
	public function __construct(){
		$parseConfig = new parseConfig;
		$this->_appid = $parseConfig::APPID;
    	$this->_masterkey = $parseConfig::MASTERKEY;
    	$this->_restkey = $parseConfig::RESTKEY;
    	if(empty($this->_appid) || empty($this->_restkey) || empty($this->_masterkey)){
			$this->throwError('You must set your Application ID, Master Key and REST API Key');
		}
		
		echo 'Deepak Yadav';

	}
	
	
}
class ParseLibraryException extends Exception{
	public function __construct($message, $code = 0, Exception $previous = null) {
		//codes are only set by a parse.com error
		if($code != 0){
			$message = "parse.com error: ".$message;
			echo '<p>Hello World</p>';
		}
		parent::__construct($message, $code, $previous);
	}
	public function __toString() {
		return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
	}
}
?>