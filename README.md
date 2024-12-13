<p align="center">
    <a href="https://www.tirreno.com/" target="_blank">
        <img src="https://avatars.githubusercontent.com/u/171573688?s=64&v=4" alt="TirrenoTechnologies logo" />
    </a>
</p>

*User analytics for sovereign cybersecurity: from insider threats to fraud prevention and beyond.*

---

Tirreno is a free/libre and open-source cybersecurity software focused on user behavior analytics.

Tirreno is a universal security tool designed to protect online platforms, SaaS applications, online communities, intranets, IoT e-commerce websites, and internal web portals from various threats related to user activity. It is effective against external threats associated with partners or customers, as well as internal risks posed by employees or suppliers.

Tirreno is a "low-tech" PHP and PostgreSQL software application that can be downloaded and installed on your own web server. After a straightforward five-minute installation process, you can immediately access real-time analytics.

## Installation

### Requirements

- **PHP**: Version 8.1 or greater
- **PostgreSQL**: Version 12 or greater
- **PHP Extension**: PDO_PGSQL
- **HTTP Web Server**: Any, configured to work with PHP
- **Operating System**: Tirreno is OS independent
- **Minimum Hardware Requirements**:
  - **PostgreSQL**: 512 MB RAM (2 GB recommended)
  - **Application**: 512 MB RAM (1 GB recommended)
  - **Storage**: Approximately 1 GB PostgreSQL storage per 1 million events

### Setup

- Clone the repository:
  - Run `git clone --branch master git@github.com:TirrenoTechnologies/tirreno.git`.
  - `cd tirreno`.
- Install the required packages.
  - Download [Composer](https://getcomposer.org/download/): PHP package manager.
  - Run `composer install --no-dev --optimize-autoloader`.
- Configure your web server to serve Tirreno.
- Launch installer by loading `https://your-domain.example/install/index.php`.
- After the successful installation, delete the `install/` directory and its contents.

## Documentation

See [user manual](http://tirreno-tirreno-docs.readthedocs-hosted.com/en/latest/).

## Optional non-free capabilities

The open-sourced Tirreno code is intended to be used for free as a standalone application. It provides general statistics and an extended audit log of user requests to a monitored system. As is, this tooling may be sufficient for bringing insights about user activity and behavioral patterns in a wide range of use cases, especially as a solution for small and medium-sized platforms.

However, if you are looking to cover more advanced usage scenarios or need to monitor a high-traffic platform, the additional Tirreno API capabilities can be enabled via [monthly-paid subscription](https://www.tirreno.com/pricing/).

## Background

The business behind this project is Tirreno Technologies Sàrl, registered in Switzerland. It is a privately owned, for-profit company with no venture capital involved. The Tirreno project started as a proprietary system in 2021 and was open-sourced in December 2024.

The idea for Tirreno arose from a challenge: an online platform that our business relied on was in pressing need of a fraud prevention tool. We were looking for a product that could work strictly on-premises and would not share user data with third-party vendors. Since the available solutions did not meet all our requirements, we created our own tool.

While building Tirreno, we concentrated on privacy, trust, and true sovereignty. As a result, we have built Tirreno in a secure and independent manner. The project does not have a long list of development dependencies, nor does it rely on heavy frameworks. This approach minimizes the potential attack surface.

### Enrichment API

As the solution we built has proved to be efficient in guarding our platform, over time we have implemented a data enrichment API. The goal was to provide our partners and clients with ethical means in their struggle against malicious actors.

We have built the Tirreno API in-house, eliminating the need to share information with third parties. It operates without collecting or storing user data.

Along with making Tirreno's code publicly available, we provide access to this API on a monthly subscription basis. Depending on the subscription plan, it supplies extended information on any of the following: IP address, email address, domain, and phone number. Enabling all the data enrichment types augments Tirreno into a fully-fledged enterprise solution for an online fraud prevention system.

### Why the name Tirreno?

History suggests the Tyrrhenian people may have lived in Tuscany and eastern Switzerland as far back as the 10th-9th centuries BC. The term "Tyrrhenian” became more commonly associated with the Etruscans, and it is from them that the Tyrrhenian Sea derives its name — a name still in use today. This name is believed to be an exonym, possibly meaning “tower”.

While working on the logo, we conducted our own historical study and traced mentions of 'tirreno' back to the 15th-century printed edition of the Vulgate (the Latin Bible). We kept it lowercase to stay true to the original — quite literally, by the book.

Finally, the "Tirreno" wordmark is cropped at the bottom, creating a horizon line that symbolizes the continuous development cycle of cybersecurity software.

## Reporting a security issue

If you've found a security-related issue with Tirreno, please email security@tirreno.com. Submitting the issue on GitHub exposes the vulnerability to the public, making it easy to exploit. We will publicly disclose the security issue after it has been resolved.

After receiving a report, Tirreno will take the following steps:

- Confirm that the report has been received and is being addressed.
- Attempt to reproduce the problem and confirm the vulnerability.
- Release new versions of all the affected packages.
- Announce the problem prominently in the release notes.
- If requested, give credit to the reporter.

## License

This program is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License (AGPL) as published by the Free Software Foundation version 3.

The name "Tirreno" is a registered trademark of Tirreno Technologies Sàrl, and Tirreno Technologies Sàrl hereby declines to grant a trademark license to "Tirreno" pursuant to the GNU Affero General Public License version 3 Section 7(e), without a separate agreement with Tirreno Technologies Sàrl.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License along with this program. If not, see [GNU Affero General Public License v3](https://www.gnu.org/licenses/agpl-3.0.txt).
