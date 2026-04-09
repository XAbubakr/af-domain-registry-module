<?php
namespace AryanIct\DomainsReseller\Registrar\AryanIctcom\Calls;
use AryanIct\DomainsReseller\Registrar\AryanIctcom\Core\Call;

/**
 * Description of GetNameServers
 *
 * @author Abubakr Sediq <support@x.com.af>
 * @link https://x.com.af
 */
class SaveEmailForwarding extends Call
{
    public $action = "domains/:domain/email";
    
    public $type = parent::TYPE_POST;
}
