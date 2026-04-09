<?php
namespace AryanIct\DomainsReseller\Registrar\AryanIctcom\Calls;
use AryanIct\DomainsReseller\Registrar\AryanIctcom\Core\Call;

/**
 * Description of DeleteNameServer
 *
 * @author Abubakr Sediq <support@x.com.af>
 * @link https://x.com.af
 */
class DeleteNameServer extends Call
{
    public $action = "domains/:domain/nameservers/delete";
    
    public $type = parent::TYPE_POST;
}
