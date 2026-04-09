# AF Domain Registry Module

A production WHMCS registrar module for `.af` domain operations, including registration, transfers, renewals, DNS management, contact updates, EPP retrieval, nameserver management, and synchronization workflows.

## Developed By

- Abubakr Sediq
- Author, developer, and maintainer
- Website: https://x.com.af

## Overview

This repository contains a registrar integration for WHMCS focused on reliable `.af` domain lifecycle management with a structure that remains compatible with existing deployments.

The internal WHMCS module name remains `AryanIctcom` for compatibility with existing installs and deployments.

## Highlights

- Built for WHMCS registrar integration workflows
- Supports common domain lifecycle actions
- Keeps legacy module naming for safer compatibility
- Clean PHP module structure with autoloaded call classes
- Suitable for maintenance and continued improvement

## Features

- Register domain
- Transfer domain
- Renew domain
- Release domain
- Request domain deletion
- Get and save nameservers
- Register, modify, and delete child nameservers
- Get and save contact details
- Get and save DNS records
- Get EPP code
- Get and save registrar lock
- Email forwarding management
- ID protection toggle
- Availability lookup
- Domain sync and transfer sync

## Repository Structure

```text
modules/
  registrars/
    AryanIctcom/
      AryanIctcom.php
      Core/
      Calls/
      logo.png
```

## Installation

1. Copy `modules/registrars/AryanIctcom` into your WHMCS installation under `modules/registrars/`.
2. In WHMCS admin, go to the domain registrar configuration page.
3. Activate the `aryanict.com` registrar module.
4. Enter your API username, API key, and API endpoint.
5. Save the configuration and test domain operations in a safe environment first.

## Compatibility Notes

- The folder, filename, and function prefix remain `AryanIctcom` to preserve WHMCS compatibility.
- Public authorship in this repository reflects the current development and maintenance attribution.
- The historical WHMCS Marketplace listing may still use older branding until it is updated there.

## Support

Issues, bug reports, and maintenance suggestions are welcome through GitHub.

For contact and project inquiries:

- https://x.com.af

## License Status

No license file is declared in this repository yet. Please contact the maintainer before reusing, redistributing, or commercializing this code outside the intended scope.
