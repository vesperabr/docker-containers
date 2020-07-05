LAMPP utilizando o Docker.

## O que está incluso?

- Servidor Apache
- MySQL 5.7
- PHP 7.3
- PhpMyAdmin
- Adminer
- Composer
- Laravel Installer
- NVM
- Node

## Como usar

1. Duplique o arquivo .env.sample e renomei-o para .env
2. Configure seu arquivo .env
3. Suba o container

## Configuração do arquivo .env

**Mapeamento de portas**
Você pode mapear as portas do servidor atráves dos seguintes parâmetros:

`PORT_80` - Porta HTTP.
`PORT_8000` - Porta HTTP.
`PORT_3000` - Porta HTTP, utilizada geralmente para sistemas de live reloading.
`PORT_3306` - Porta do servidor MySQL.

**Senha MySQL**
Defina uma senha para o servidor MySQL alterando o parâmetro `MYSQL_PASSWORD`.

## Como alterar a configuração do PHP

Você pode personalizar as configurações do PHP editando o arquivo `.docker/php.ini`.

## Como conectar ao MySQL

Para conectar ao banco de dados, utilize as seguintes credenciais:

- *Servidor*: mysql
- *Usuário*: root
- *Senha*: a que você definiu no arquivo .env

## Persistência dos dados

**Persistência do MySQL**
Os dados do seus bancos são persistidos em um volume do Docker chamado *lampp_mysql_data*. Cuidado pois se você apagar este volume você perderá todos os dados que estão dentro dele.

**Persistência dos outros arquivos**
Todos arquivos que você colocar dentro desta pasta será automaticamente injetado dentro da pasta pública do Apache no container.