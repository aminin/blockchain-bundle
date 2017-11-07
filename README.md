# AmiBlockchainBundle

[![License](https://poser.pugx.org/aminin/blockchain-bundle/license)](https://packagist.org/packages/aminin/blockchain-bundle)

[Blockchain.info](https://blockchain.info/) integration for Symfony 2/3.
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

## Configuration reference

```yml
ami_blockchain:
    api_key: YOUR-API-KEY
    service_url: SERVICE-URL-FOR-API-V-2

parameters:
  # You may modify these parameter at your own risk
  ami_blockchain.blockchain.class: 'Blockchain\Blockchain'
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
