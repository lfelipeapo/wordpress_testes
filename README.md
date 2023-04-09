# Testes
Cada teste realizado está numa pasta dentro de applications. Docker compose e o dockerfile geram as configurações necessárias para a execução de cada teste.
# Usada Imagem Docker PHP com Nginx pré-configurada
[Ver imagem no Docker Hub](https://hub.docker.com/repository/docker/lfelipeapo/php-nginx-web/general)

## Requisitos
- Ter o Docker instalado em sua máquina. Este passo a passo funciona tanto para ambiente Linux como para Windows e macOS.

- Ter Docker Compose instalado na máquina.

Agora é hora de ajustarmos nossas aplicações dentro do ambiente.

<b>OBS:</b> Para ajustar variaveis de conexão de banco de dados na aplicação veja exemplo: [index.php](./applications/php1/public/index.php).

Acesse o terminal da pasta raiz do projeto e rode o comando sh script-start-docker-compose.sh

Caso a porta da aplicação já esteja sendo utilizada por outra aplicação Docker, utilizar o script script-drop-container.sh para derrubar a aplicação que está usando a porta selecionada.

Para acessar o ambiente digite em seu navegador e acesse:

http://localhost:8081 para teste 1.

http://localhost:8082 para teste 2.

http://localhost:8083 para teste 3.

http://localhost:8084 para teste 4.
