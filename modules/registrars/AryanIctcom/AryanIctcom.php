<?php

use AryanIct\DomainsReseller\Registrar\AryanIctcom\Calls;
use AryanIct\DomainsReseller\Registrar\AryanIctcom\Core\Configuration;

/**
 * Registrar module for aryanict.com.
 *
 * @author Abubakr Sediq <support@x.com.af>
 * @link https://x.com.af
 */

//Loader
include_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . "Loader.php";
new \AryanIct\DomainsReseller\Registrar\AryanIctcom\Core\Loader(__DIR__);

/**
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_getConfigArray()
{
    $configarray = [
        "FriendlyName" => [
            "Type"  => "System",
            "Value" => "aryanict.com"
        ],
        "Description"  => [
            "Type"  => "System",
            "Value" => "The Official aryanict.com Domain Registry Module"
        ],
        "Username"    => [
            "FriendlyName" => "API Username",
            "Type"         => "text",
            "Size"         => "40",
            "Description"  => "Enter your Hub Account email"
        ],
        "ApiKey"      => [
            "FriendlyName" => "API Key",
            "Type"         => "text",
            "Size"         => "40",
            "Description"  => "Enter your API key"
        ],
        "ApiEndpoint" => [
            "FriendlyName" => "API Endpoint",
            "Type"         => "text",
            "Size"         => "40",
            "Description"  => "Enter API endpoint",
            "Default"      => "https://hub.aryanict.com/modules/addons/DomainsReseller/api/index.php"
        ],
    ];

    return $configarray;
}

/**
 * Register Domain
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_RegisterDomain($params)
{
    $postfields =
    [
        "domain"        => $params["domainname"],
        "regperiod"     => (int)$params["regperiod"],
        "domainfields"  => base64_encode(serialize($params["additionalfields"])),
        "originalvars"  => $params,
        "addons" =>
        [
            "dnsmanagement"     => $params['dnsmanagement']     ? 1 : 0,
            "emailforwarding"   => $params['emailforwarding']   ? 1 : 0,
            "idprotection"      => $params['idprotection']      ? 1 : 0,
        ],
        "nameservers" =>
        [
            $params["ns1"],
            $params["ns2"],
            $params["ns3"],
            $params["ns4"],
            $params["ns5"],
        ],
        "contacts" =>
        [
            "registrant" =>
            [
                'firstname'     => $params["firstname"],
                'lastname'      => $params["lastname"],
                'fullname'      => $params["firstname"]." ".$params["lastname"],
                'companyname'   => $params["companyname"],
                'email'         => $params["email"],
                'address1'      => $params["address1"],
                'address2'      => $params["address2"],
                'city'          => $params["city"],
                'state'         => $params["state"],
                'zipcode'       => $params["zipcode"],
                'country'       => $params["country"],
                'phonenumber'   => $params["phonenumber"],
            ],

            "tech" =>
            [
                "firstname"     => $params["adminfirstname"],
                "lastname"      => $params["adminlastname"],
                'fullname'      => $params["adminfirstname"]." ".$params["adminlastname"],
                "companyname"   => $params["admincompanyname"],
                "email"         => $params["adminemail"],
                "address1"      => $params["adminaddress1"],
                "address2"      => $params["adminaddress2"],
                "city"          => $params["admincity"],
                "fullstate"     => $params["adminfullstate"],
                "postcode"      => $params["adminpostcode"],
                "phonenumber"   => $params["adminphonenumber"],
                "phonecc"       => $params["adminphonecc"],
                "phonenumber"   => $params["adminfullphonenumber"],
            ],
        ]
    ];

    $call = new Calls\RegisterDomain(Configuration::create($params), $postfields);
    $result = $call->process();
    
    return $result;
}

/**
 * Transfer Domain
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_TransferDomain($params)
{
    $postfields =
    [
        "domain"        => $params["domainname"],
        "regperiod"     => (int)$params["regperiod"],
        "eppcode"       => $params["eppcode"],
        'domainfields'  => base64_encode(serialize($params["additionalfields"])),
        "addons" =>
        [
            "dnsmanagement"     => $params['dnsmanagement']     ? 1 : 0,
            "emailforwarding"   => $params['emailforwarding']   ? 1 : 0,
            "idprotection"      => $params['idprotection']      ? 1 : 0,
        ],
        "nameservers" =>
        [
            $params["ns1"],
            $params["ns2"],
            $params["ns3"],
            $params["ns4"],
            $params["ns5"],
        ],
        "contacts" =>
        [
            "registrant" =>
            [
                'firstname'     => $params["firstname"],
                'lastname'      => $params["lastname"],
                'fullname'      => $params["firstname"]." ".$params["lastname"],
                'companyname'   => $params["companyname"],
                'email'         => $params["email"],
                'address1'      => $params["address1"],
                'address2'      => $params["address2"],
                'city'          => $params["city"],
                'state'         => $params["state"],
                'zipcode'       => $params["zipcode"],
                'country'       => $params["country"],
                'phonenumber'   => $params["phonenumber"],
            ],

            "tech" =>
            [
                "firstname"     => $params["adminfirstname"],
                "lastname"      => $params["adminlastname"],
                'fullname'      => $params["adminfirstname"]." ".$params["adminlastname"],
                "companyname"   => $params["admincompanyname"],
                "email"         => $params["adminemail"],
                "address1"      => $params["adminaddress1"],
                "address2"      => $params["adminaddress2"],
                "city"          => $params["admincity"],
                "fullstate"     => $params["adminfullstate"],
                "postcode"      => $params["adminpostcode"],
                "phonenumber"   => $params["adminphonenumber"],
                "phonecc"       => $params["adminphonecc"],
                "phonenumber"   => $params["adminfullphonenumber"],
            ],
        ]
    ];

    $call = new Calls\TransferDomain(Configuration::create($params), $postfields);
    $result = $call->process();
    
    return $result;
}

/**
 * Renew Domain
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_RenewDomain($params)
{
    $postfields =
    [
        "domain"     => $params["domainname"],
        "regperiod"  => (int)$params["regperiod"],
        "addons" =>
        [
            "dnsmanagement"     => $params['dnsmanagement']     ? 1 : 0,
            "emailforwarding"   => $params['emailforwarding']   ? 1 : 0,
            "idprotection"      => $params['idprotection']      ? 1 : 0,
        ],
    ];

    $call = new Calls\RenewDomain(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Get name servers
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_GetNameservers($params)
{
    $postfields =
    [
        "domain" => $params["domainname"]
    ];

    $call = new Calls\GetNameServers(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Save nameservers
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_SaveNameservers($params)
{
    $postfields =
    [
        "domain" => $params["domainname"],

        "ns1" => $params["ns1"],
        "ns2" => $params["ns2"],
        "ns3" => $params["ns3"],
        "ns4" => $params["ns4"],
        "ns5" => $params["ns5"],
    ];

    $call = new Calls\SaveNameServers(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Release Domain
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_ReleaseDomain($params)
{
    $postfields =
    [
        "domain"        => $params["domainname"],
        "transfertag"   => $params["transfertag"]
    ];

    $call = new Calls\ReleaseDomain(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Get EPP Code
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_GetEPPCode($params)
{
    $postfields =
    [
        "domain" => $params["domainname"],
    ];

    $call = new Calls\GetEppCode(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Get Contact Details
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_GetContactDetails($params)
{
    $postfields =
    [
        "domain" => $params["domainname"],
    ];

    $call = new Calls\GetContactDetails(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Save Contact Details
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_SaveContactDetails($params)
{
    $postfields =
    [
        "domain"            => $params["domainname"],
        "contactdetails"    => $params["contactdetails"]
    ];

    $call = new Calls\SaveContactDetails(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Get Lock Status
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_GetRegistrarLock($params)
{
    $postfields =
    [
        "domain" => $params["domainname"],
    ];

    $call = new Calls\GetRegistrarLock(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Update Lock Status
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_SaveRegistrarLock($params)
{
    $postfields =
    [
        "domain"        => $params["domainname"],
        "lockstatus"    => $params["lockenabled"]
    ];

    $call = new Calls\SaveRegistrarLock(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Get DNS Records
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_GetDNS($params)
{
    $postfields =
    [
        "domain" => $params["domainname"],
    ];

    $call = new Calls\GetDns(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Save DNS Records
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_SaveDNS($params)
{
    $postfields =
    [
        "domain"        => $params["domainname"],
        "dnsrecords"    => $params["dnsrecords"]
    ];

    $call = new Calls\SaveDns(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Register Name Server
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_RegisterNameserver($params)
{
    $postfields =
    [
        "domain" => $params["domainname"],

        "nameserver" => $params["nameserver"],
        "ipaddress"  => $params["ipaddress"],
    ];

    $call = new Calls\RegisterNameServer(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Update Name Server
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_ModifyNameserver($params)
{
    $postfields =
    [
        "domain" => $params["domainname"],

        "nameserver"        => $params["nameserver"],
        "currentipaddress"  => $params["currentipaddress"],
        "newipaddress"      => $params["newipaddress"],
    ];

    $call = new Calls\ModifyNameServer(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Delete Name Server
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_DeleteNameserver($params)
{
    $postfields =
    [
        "domain"        => $params["domainname"],
        "nameserver"    => $params["nameserver"],
    ];

    $call = new Calls\DeleteNameServer(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Delete Domain
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_RequestDelete($params)
{
    $postfields =
    [
        "domain" => $params["domainname"]
    ];

    $call = new Calls\RequestDelete(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Synchronize transfer domain
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_TransferSync($params)
{
    $postfields =
    [
        "domain" => "{$params["sld"]}.{$params["tld"]}"
    ];

    $call = new Calls\TransferSync(Configuration::create($params), $postfields);
    $result = $call->process();
    
    return $result;
}

/**
 * Synchronize Registered Domains
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_Sync($params)
{
    $postfields =
    [
        "domain" => "{$params["sld"]}.{$params["tld"]}"
    ];

    $call = new Calls\Sync(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Get list of emails aliases
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_GetEmailForwarding($params)
{
    $postfields =
    [
        "domain" => $params["domainname"]
    ];

    $call = new Calls\GetEmailForwarding(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * Save list of emails aliases
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_SaveEmailForwarding($params)
{
    $postfields =
    [
        "domain"    => $params["domainname"],
        "prefix"    => $params["prefix"],
        "forwardto" => $params["forwardto"]
    ];

    $call = new Calls\SaveEmailForwarding(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * This function is called when the ID Protection setting is toggled on or off
 * 
 * @param array $params
 * @return array $return
 */
function AryanIctcom_IDProtectionToggle($params)
{
    $postfields =
    [
        "domain" => $params["domainname"],
        "status" => $params["protectenable"]
    ];

    $call = new Calls\ToggleIdProtect(Configuration::create($params), $postfields);
    $result = $call->process();

    return $result;
}

/**
 * This function is called when the ID Protection setting is toggled on or off
 *
 * @param $params
 * @return array
 */
function AryanIctcom_IDProtectToggle($params)
{
    return AryanIctcom_IDProtectionToggle($params);
}


/**
 * Send domain lookup request
 *
 * @param $params
 * @return array|bool|mixed|stdClass|string
 */
function AryanIctcom_CheckAvailability($params)
{
    $postfields =
    [
        "searchTerm"            => $params["searchTerm"],
        "punyCodeSearchTerm"    => $params["punyCodeSearchTerm"],
        "tldsToInclude"         => $params["tldsToInclude"],
        "isIdnDomain"           => $params['isIdnDomain'],
        "premiumEnabled"        => $params['premiumEnabled'],
        "isWhmcs"               => 1
    ];

    $call = new Calls\CheckAvailability(Configuration::create($params), $postfields);
    $result = $call->process();

    return unserialize($result);
}
