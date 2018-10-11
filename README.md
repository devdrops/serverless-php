# Serverless - PHP

Código fonte da palestra sobre Serverless e PHP (:computer::no_entry_sign: && :elephant:).

## Requisitos do Ambiente

- Conta criada no [IBM Cloud](https://www.ibm.com/cloud/)
  - Crie e configure sua Org e Space corretamente.
- Docker e Docker Compose

## Instruções

### Iniciando o Ambiente

1. Copie o arquivo `.env.dist` para `.env`, neste mesmo diretório.
2. Insira sua API Key (obtida no seu [painel do IBM Cloud](https://console.bluemix.net/openwhisk/learn/api-key)) no arquivo `.env`, da seguinte forma:

```
IBM_APIKEY=InsiraAquiSUaIBMCloudAPIKey
IBM_ORG=InsiraAquiSuaOrgDoIBMCloud
IBM_SPACE=InsiraAquiASpaceDesejadaDoIBMCloud
```

3. Execute o comando para acessar o ambiente:

```sh
docker-compose run --rm env bash
```

4. Uma vez no ambiente, faça seu login na IBM Cloud pelo comando abaixo (será necessário selecionar a região definida na sua conta do IBM Cloud, conforme o prompt do IBM Cloud CLI):

```sh
root@bd1fcdca65a6:/code# ibmcloud login --apikey $IBM_APIKEY

Select an API endpoint:

1. eu-de - https://api.eu-de.bluemix.net
2. au-syd - https://api.au-syd.bluemix.net
3. us-east - https://api.us-east.bluemix.net
4. us-south - https://api.ng.bluemix.net
5. eu-gb - https://api.eu-gb.bluemix.net
6. Enter a different API endpoint
Enter a number> 1
Authenticating...
OK
```

5. Em seguida, é preciso definir para o CLI quais as Org e Space a usar, pelo comando abaixo:

```sh
bx target -o $IBM_ORG -s $IBM_SPACE
```

### Criando sua função Serverless

1. Agora com o ambiente pronto, execute o seguinte comando:

```sh
sls create --template openwhisk-php --path ow-php-hello
```

2. Para editar os arquivos gerados de template do Serverless na sua máquina, fora do ambiente Docker, execute o comando:

```sh
cd ow-php-hello
sudo chmod 666 serverless.yml handler.php
```

3. Para fazer o deploy, no ambiente de Docker, execute o comando:

```
cd ow-php-hello
sls deploy
```

