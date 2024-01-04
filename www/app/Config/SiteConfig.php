<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class SiteConfig extends BaseConfig 
{
	public $siteName = "SMA Negeri 1 Lakbok";
	private $keyEncryption = "AwRvCKLdxqm7Ib384451VjhgjbZ29Opf"; // ganti sesuai kata hati dengan 32 karakter
	private $apiKey = ""; // Ganti dengan API key SMAN 1 Lakbok
	private $secretKey = ""; // Ganti dengan secret key SMAN 1 Lakbok
	private $publicCaptcha = "";
	private $privateCaptcha = "";
	private $publicTurnstile = "";
	private $privateTurnstile = "";

}
