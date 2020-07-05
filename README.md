Este repositório contém ambientes úteis para o desenvolvimento web utilizando Docker. Cada pasta representa um ambiente, escolha o seu e happy coding!

## Como usar
1. Baixe ou clone este repositório.
2. Escolha um ambiente e copie sua pasta para algum lugar do seu computador. 
3. Navegue até esta pasta no terminal.
4. Siga as intruções contidas no README do ambiente escolhido.

## Instalação do Docker
Para poder utilizar os ambientes você precisa ter o Docker instalado em seu computador. Caso não tenha, você pode instalá-lo seguindo um dos tutoriais abaixo:

- [MacOS](https://docs.docker.com/docker-for-mac/install/)
- [Linux](https://docs.docker.com/install/linux/docker-ce/ubuntu/)
- [Windows](https://docs.docker.com/docker-for-windows/install/)

## Comandos úteis do Docker

**Subir um container**
```
$ docker-compose up -d
```

**Subir um containers e buildar novamente as imagens**
```
$ docker-compose up --build -d
```

**Listar todos os containers**
```
$ docker ps -a
```

**Acessar o bash de um container**
```
$ docker container exec -it <nome_do_container> bash
```

**Derrubando um container**
```
$ docker-compose down
```

## Dúvidas sobre o Docker
Se você quer entender melhor como o Docker funciona, recomendo que veja estes dois vídeos:
- [Docker em 20 minutos](https://www.youtube.com/watch?v=Kzcz-EVKBEQ)
- [Docker Compose na prática](https://www.youtube.com/watch?v=HxPz3eLnXZk)