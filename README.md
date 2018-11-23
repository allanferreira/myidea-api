# myIdea API
> Esse repositório faz parte do projeto myIdea.
> Ele serve a API para os seguintes projetos:
 - [myIdea Client]
 - [myIdea App]
 
### Tecnologias
Requer [PHP] versão 7.2 ou superior
* [Laravel] - Framework PHP
* [Eloquent] - ORM
* [MySQL] - Base de dados Sequel

### Instalação
 myIdea requer [Composer] para instalação das dependências.

```sh
$ git clone https://github.com/allanferreira/myidea-api.git
$ cd myidea-api
$ composer install
```
### Ambiente
Para começar, gere uma chave de aplicação para que todos os componentes funcionem perfeitamente
```sh
$ php artisan key:generate
```
Crie uma base no [MySQL]
```sh
$ mysql -u root
mysql> CREATE DATABASE myidea_db;
mysql> exit
```
Em seguida renomeie o arquivo .env.example
```sh
$ mv .env.example .env
```
Edite os valores das chaves DB_DATABASE, DB_USERNAME e DB_PASSWORD
```sh
...
DB_DATABASE=myidea_db
DB_USERNAME=root
DB_PASSWORD=
...
```
Monte a estrutura de dados com as migrates
```sh
$ php artisan migrate:fresh
```
### Servidor
Execute caso não esteja rodando o projeto em um servidor [Apache] ou [Nginx]
```sh
$ php artisan serve
```
Rode para ver as endpoints disponíveis
```sh
$ php artisan route:list
```
[PHP]: <http://www.php.net/>
[Apache]: <https://www.apache.org/>
[Nginx]: <https://www.nginx.com/>
[Composer]: <https://getcomposer.org/>
[myIdea Client]: <https://github.com/allanferreira/myidea-client>
[myIdea App]: <https://github.com/allanferreira/myidea-app>
[Eloquent]: <https://laravel.com/docs/5.7/eloquent>
[MySQL]: <https://www.mysql.com/>
[Laravel]: <https://laravel.com/>
[Eloquent]: <https://laravel.com/docs/5.7/eloquent>