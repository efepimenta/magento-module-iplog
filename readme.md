## magento ip logger (magento versão 2.0.18)

#### instalação automática

```
composer require efepimenta/module-iplog
bin/magento module:status
- verifique se o módulo está disponível
bin/magento module:enable IpLog
```

#### instalação manual

```
https://github.com/efepimenta/magento-ip/archive/0.0.1.tar.gz
descompacte o arquivo e copie a pasta Efepimenta para app/code
```

#### use

deve aparecer uma mensagem com seu ip na página CMS e uma entrada no arquivo de log, em var/log/ip_log.log  