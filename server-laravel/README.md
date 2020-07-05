Servidor Apache + PHP para projetos Laravel.

## O que está incluso?

- Servidor Apache
- PHP 7.3
- Composer
- NVM
- Node

## Como usar

1. Duplique o arquivo .env.sample e renomei-o para .env
2. Configure seu arquivo .env
3. Suba o container

**Mapeamento de portas**
Por padrão este ambiente atribui automaticamente à porta 80 uma porta local aleatória disponível. Caso queira, você pode mapear manualmente esta porta diretamente no `docker-compose.yml`.

Caso queira é possível também habilitar a porta 3000.

## Como alterar a configuração do PHP

Você pode personalizar as configurações do PHP editando o arquivo `.docker/php.ini`.

## Banco de dados

Este ambiente já vem configurado para ser utilizado juntamente com o ambiente MySQL. Basta subir primeiro o servidor MySQL e depois este ambiente.

## Persistência dos dados

**Persistência dos outros arquivos**
Todos arquivos que você colocar dentro desta pasta será automaticamente injetado dentro da pasta pública do Apache no container.