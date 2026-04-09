<?php
namespace AryanIct\DomainsReseller\Registrar\AryanIctcom\Calls;
use AryanIct\DomainsReseller\Registrar\AryanIctcom\Core\Call;

/**
 * Description of RegisterNameServer
 *
 * @author Abubakr Sediq <support@x.com.af>
 * @link https://x.com.af
 */
class RegisterNameServer extends Call
{
    public $action = "domains/:domain/nameservers/register";
    
    public $type = parent::TYPE_POST;
}
