# AmiBlockchainBundle

[![License](https://poser.pugx.org/aminin/blockchain-bundle/license)](https://packagist.org/packages/aminin/blockchain-bundle)

[Blockchain.info](https://blockchain.info/) integration for Symfony 2/3/4.
This bundle plugs the [Blockchain API client] into Symfony project.

## Prerequisites

This version of the bundle requires Symfony 2.8+

## Installation

### Step 1: Download AmiBlockchainBundle using composer

Add AmiBlockchainBundle in your composer.json:

```shell
$ composer require aminin/blockchain-bundle
```

### Step 2: Enable the bundle

Enable the bundle in the kernel:

> _Skip if using SF4 and Flex, the bundle will be automatically added for you._

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Ami\BlockchainBundle\AmiBlockchainBundle(),
    );
}
```

### Step 3: Configure the AmiBlockchainBundle

Add the following configuration to your `config.yml` file

```yml
# app/config/config.yml
ami_blockchain:
    api_key: YOUR-API-KEY
    service_url: SERVICE-URL-FOR-API-V-2
```

If using SF4 create the config file for this bundle inside `config/packages`:
```yml
# config/packages/ami_blockchain.yaml
ami_blockchain:
    api_key: YOUR-API-KEY
    service_url: SERVICE-URL-FOR-API-V-2

# If you like to define this values in `.env` file or your server environment variables use:
    api_key: '%env(BLOCKCHAIN_API_KEY)%'
    service_url: '%env(BLOCKCHAIN_SERVICE_URL)%'
```

## Usage

You may access the [Blockchain](https://github.com/blockchain/api-v1-client-php) as `ami_blockchain.blockchain` service

```php
    /** @var ContainerInterface $container */
    $container->get('ami_blockchain.blockchain')->…;
```

## License

This bundle is under the MIT license. See the complete license in the [Resources/meta/LICENSE](Resources/meta/LICENSE)

## References

Blockchain API client: https://github.com/blockchain/api-v1-client-php

[Blockchain API client]: https://github.com/blockchain/api-v1-client-php
