Servidor MySQL utilizando o Docker.

## O que está incluso?

- MySQL 5.7
- Adminer

## Como usar

1. Duplique o arquivo .env.sample e renomei-o para .env
2. Configure seu arquivo .env
3. Suba o container

## Configuração do arquivo .env

**Mapeamento de portas**
Você pode mapear as portas do servidor atráves dos seguintes parâmetros:
`MYSQL_PORT` - Porta do servidor MySQL, geralmente 3306.
`ADMINER_PORT` - Porta do Adminer.

**Senha MySQL**
Defina uma senha para o servidor MySQL alterando o parâmetro `MYSQL_PASSWORD`.

## Como conectar ao MySQL

Para conectar ao banco de dados, utilize as seguintes credenciais:

- *Servidor*: mysql
- *Usuário*: root
- *Senha*: a que você definiu no arquivo .env

## Persistência dos dados

**Persistência do MySQL**
Os dados do seus bancos são persistidos em um volume do Docker chamado *mysql_data*. Cuidado pois se você apagar este volume você perderá todos os dados que estão dentro dele.

## Network

Este ambiente cria um network do Docker chamado `mysql-network`. Atráves deste network, você pode linkar este ambiente com um outro ambiente Docker, por exemplo:

**docker-compose.yml**
```
services:
  web:
    networks:
      - mysql-network

networks:
  mysql-network:
    name: mysql-network
    external: true
```