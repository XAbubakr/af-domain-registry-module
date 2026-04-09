<?php
namespace AryanIct\DomainsReseller\Registrar\AryanIctcom\Calls;
use AryanIct\DomainsReseller\Registrar\AryanIctcom\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author Abubakr Sediq <support@x.com.af>
 * @link https://x.com.af
 */
class TransferDomain extends Call
{
    public $action = "order/domains/transfer";
    
    public $type = parent::TYPE_POST;
}
