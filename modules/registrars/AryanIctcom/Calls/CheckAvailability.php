<?php
namespace AryanIct\DomainsReseller\Registrar\AryanIctcom\Calls;
use AryanIct\DomainsReseller\Registrar\AryanIctcom\Core\Call;

/**
 * Description of CheckAvailability
 *
 * @author Abubakr Sediq <support@x.com.af>
 * @link https://x.com.af
 */
class CheckAvailability extends Call
{
    public $action = "domains/lookup";
    
    public $type = parent::TYPE_POST;
}
