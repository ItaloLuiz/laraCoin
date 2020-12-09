# EMS Ventura - Tech Challenge


## Como instalar

   Para instalar basta clonar o projeto:
   https://git.heroku.com/coinvel.git e fazer a instação padrão do Laravel (5.6).

### Pacotes instalados

    "nesbot/carbon": "1.32.0 as 1.25.0"
    "guzzlehttp/guzzle": "^7.2"

### Versão do PHP 
    7.1


### O Projeto esta online no endereço
    https://coinvel.herokuapp.com/

### Para alimentar o banco 
    https://coinvel.herokuapp.com/api/alimentarBanco

### Nome do banco Criado (Para rodar Local, usando MYSQL)
    coin

### Nome da Tabela Criada (Para rodar Local, usando MYSQL)
    tbl_coins


### Comandos Criados
    php artisan SeedBd:cron
    php artisan schedule:run

### Rota para API

    /alimentarBanco

    Para inserir informações no banco de dados pode acessar essa rota: api/alimentarBanco
    assim o sistema fara o cadastro das moedas na tabela.

    Ou Pode rodar o comando: php artisan SeedBd:cron

### Rota para Web

    Foram criadas duas rotas:
    A principal que lista as moedas cadastradas no banco (/)
    A de detalhes da moeda escolhida (/moeda/{code})

