Servidor Apache + PHP.

## O que está incluso?

- Servidor Apache
- PHP 7.3
- Composer
- Laravel Installer
- NVM
- Node

## Como usar

1. Duplique o arquivo .env.sample e renomei-o para .env
2. Configure seu arquivo .env
3. Suba o container

**Mapeamento de portas**
Você pode mapear as portas do servidor atráves dos seguintes parâmetros:

`PORT_80` - Porta HTTP.
`PORT_8000` - Porta HTTP.
`PORT_3000` - Porta HTTP, utilizada geralmente para sistemas de live reloading.

## Como alterar a configuração do PHP

Você pode personalizar as configurações do PHP editando o arquivo `.docker/php.ini`.

## Banco de dados

Este ambiente já vem configurado para ser utilizado juntamente com o ambiente MySQL. Basta subir primeiro o servidor MySQL e depois este ambiente.

## Persistência dos dados

**Persistência dos outros arquivos**
Todos arquivos que você colocar dentro desta pasta será automaticamente injetado dentro da pasta pública do Apache no container.