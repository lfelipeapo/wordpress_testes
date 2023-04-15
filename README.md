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

## Teste 1

- Para o teste 1, acesse a conexão do banco de dados mysql e importe o arquivo dump.sql.

- Depois acesse da pasta raiz do projeto, digitando no terminal:
`cd applications/teste1`

Use o acesso via terminal ao arquivo wp-config.php e verifique se a variável DB_NAME está com o mesmo nome que você deu para o banco de dados importado.

Depois, acesse http://localhost:8081/ e verifique a página do desafio 1.

Para editar, qualquer informação da home, acesse /wp-admin com o usuário teste, senha teste.

Depois clique em: APARÊNCIA > TEMA > Custom Theme > Personalizar.

Cada seção da página home possui um hero section referente a si.

## Teste 3

Para testar a API, indica-se o uso do aplicativo Insomnia, clique em Preferências e depois em Data e em import escolha rotas_desafio3.json dentro da pasta json na pasta docker.

Em http://localhost:8083 verifique se a API está funcionando.

Em http://localhost:8083/data se encontram as validações quanto ao desafio.

Utilizado Basic Auth com header ContentType json.

Para autenticação:
usuario/senha
/data só aceita requisição POST conforme solicitado no desafio.

## Teste 4

- Utilizado Axios, Bootstrap e Html simples bem como um css para apenas dar uma certa aparência ao formulário.

- Usado endpoint informado no desafio.

Acessível pela rota: http://localhost:8084.