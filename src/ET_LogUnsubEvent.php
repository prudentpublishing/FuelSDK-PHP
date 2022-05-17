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
}
?>