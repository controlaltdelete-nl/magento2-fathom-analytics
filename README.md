# Fathom Analytics integration for Magento 2

Fathom Analytics is a privacy-focused website analytics platform designed to provide valuable insights without compromising user privacy. Unlike traditional analytics tools, Fathom is compliant with global privacy laws such as GDPR, CCPA, and PECR. It offers fast-loading, cookie-free analytics with an intuitive dashboard, making it an excellent choice for businesses that prioritize user trust.

## Features

- Easy integration of Fathom Analytics tracking code.
- Supports multi-store setups with individual tracking IDs. 
- Complies with GDPR and other privacy regulations.

## Installation

Add the module to your Magento project via Composer:

```bash
composer require controlaltdelete/magento2-fathom-analytics
```

Enable the module:

```bash
bin/magento module:enable ControlAltDelete_FathomAnalytics
```

## Configuration

1. Log in to your Magento Admin Panel.
2. Navigate to Stores > Configuration > Services > Fathom Analytics.
3. Enable the module and enter your Fathom Analytics Site ID(s).
4. Save the configuration.

> [!NOTE]  
> If you want to track different stores with separate Fathom Analytics Site IDs, you need to switch to the store view and configure the Site ID for each store individually.


## Usage

Once configured, the Fathom Analytics tracking code will be automatically added to the frontend of your Magento store. Visit your Fathom Analytics dashboard to monitor traffic and gain insights.
