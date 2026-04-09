<?php
namespace AryanIct\DomainsReseller\Registrar\AryanIctcom\Calls;
use AryanIct\DomainsReseller\Registrar\AryanIctcom\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author Abubakr Sediq <support@x.com.af>
 * @link https://x.com.af
 */
class SaveContactDetails extends Call
{
    public $action = "domains/:domain/contact";
    
    public $type = parent::TYPE_POST;
}
