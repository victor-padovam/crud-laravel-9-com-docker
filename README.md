
# Setup Docker Para Projetos Laravel 9 com PHP 8 E Docker

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/homedev-repo/setup_laravel_9-sem-framework-css
```

Crie o Arquivo .env
```sh
cd example-project/
cp .env.example .env
```

Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=ProjetoNomes
#8180 porta que esta no docker-compose.yml do server ngix
APP_URL=http://localhost:8180 

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```
Docker:

Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec homedev-app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


Acesse o projeto
para acessar phpmyadmin no navegador: http://localhost:8899/ e a porta

para acessar nginx(servidor) no navegador: http://localhost:8989/ e a porta

PHPMYADMIN info no file .evn

servidor: mysql

user: root

pass: root
