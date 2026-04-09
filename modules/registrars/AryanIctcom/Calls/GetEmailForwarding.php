<?php
namespace AryanIct\DomainsReseller\Registrar\AryanIctcom\Calls;
use AryanIct\DomainsReseller\Registrar\AryanIctcom\Core\Call;

/**
 * Description of GetEmailForwarding
 *
 * @author Abubakr Sediq <support@x.com.af>
 * @link https://x.com.af
 */
class GetEmailForwarding extends Call
{
    public $action = "domains/:domain/email";
    
    public $type = parent::TYPE_GET;
}
