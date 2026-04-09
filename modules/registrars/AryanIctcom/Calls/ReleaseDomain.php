<?php
namespace AryanIct\DomainsReseller\Registrar\AryanIctcom\Calls;
use AryanIct\DomainsReseller\Registrar\AryanIctcom\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author Abubakr Sediq <support@x.com.af>
 * @link https://x.com.af
 */
class ReleaseDomain extends Call
{
    public $action = "domains/:domain/release";
    
    public $type = parent::TYPE_POST;
}
