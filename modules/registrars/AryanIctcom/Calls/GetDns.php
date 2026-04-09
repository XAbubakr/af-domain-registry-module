<?php
namespace AryanIct\DomainsReseller\Registrar\AryanIctcom\Calls;
use AryanIct\DomainsReseller\Registrar\AryanIctcom\Core\Call;

/**
 * Description of GetDns
 *
 * @author Abubakr Sediq <support@x.com.af>
 * @link https://x.com.af
 */
class GetDns extends Call
{
    public $action = "domains/:domain/dns";
    
    public $type = parent::TYPE_GET;
}
