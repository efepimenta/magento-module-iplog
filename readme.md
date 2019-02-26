## magento ip logger (magento versão 2.0.18)

#### instalação manual

```
https://github.com/efepimenta/magento-module-iplog/archive/1.0.0.tar.gz
descompacte o arquivo
crie a pasta app/code/Efepimenta
copie a pasta IpLog para dentro de app/code/Efepimenta
bin/magento module:status
- verifique se o módulo está disponível
bin/magento module:enable Efepimenta_IpLog
bin/magento setup:upgrade
rm -rf var/di
bin/magento setup:di:compile
bin/magento cache:flush
```

#### uso

deve aparecer uma mensagem com seu ip na página CMS e uma entrada no arquivo de log, em var/log/ip_log.log  