<?php  namespace SynergyWholesale\Commands;

use SynergyWholesale\Types\AuDomain;

class InitiateAUCORCommand implements Command
{
	/** @var \SynergyWholesale\Types\AuDomain */
	protected $domain;

	public function __construct(AuDomain $domain)
	{
		$this->domain = $domain;
	}

	public function getRequestData()
	{
		return array('domainName' => strval($this->domain));
	}
}
