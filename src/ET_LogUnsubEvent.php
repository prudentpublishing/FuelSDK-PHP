<?php namespace FuelSdk;

/**
 * ET_LogUnsubEvent - unsubscribe a subscriber and log an UnsubEvent in a Marketing Cloud account.
 */
class ET_LogUnsubEvent extends ET_CUDSupport
{
  /** 
	 * Initializes a new instance of the class and sets the obj property of parent.
	 */	
	function __construct()
	{
		$this->obj = "LogUnsubEvent";
	}

	/**
	 * Send this instance.
	 * @return ET_Post     Object of type ET_Post which contains http status code, response, etc from the POST SOAP service
	 */	
	public function Send()
	{
		$er = [
			'Name' => 'LogUnsubEvent',
			'Parameters' => $this->props,
		];
		$response = new ET_Execute($this->authStub, "ExecuteRequest", $er);
		return $response;
	}
}
?>