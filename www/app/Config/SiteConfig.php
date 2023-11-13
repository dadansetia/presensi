<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class SiteConfig extends BaseConfig 
{
	public $siteName = "SMA Negeri 1 Lakbok";
	private $keyEncryption = "VjhgjbZ29Opfdxqm7IvCKL4b384AwR51"; // ganti sesuai kata hati dengan 32 karakter
	private $apiKey = "";
	private $secretKey = "";
	private $publicCaptcha = "";
	private $privateCaptcha = "";
	private $publicTurnstile = "";
	private $privateTurnstile = "";

}
