<?php
namespace AryanIct\DomainsReseller\Registrar\AryanIctcom\Calls;
use AryanIct\DomainsReseller\Registrar\AryanIctcom\Core\Call;

/**
 * Description of RenewDomain
 *
 * @author Abubakr Sediq <support@x.com.af>
 * @link https://x.com.af
 */
class RenewDomain extends Call
{
    public $action = "order/domains/renew";
    
    public $type = parent::TYPE_POST;
}
