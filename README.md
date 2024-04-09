# 🚀 Começando 
#### toda as dependencias desse serviço sao geradas no container,portanto não precisa de dependencias externas para rodar esse serviço, só precisa garantir que as portas 3306 e 8000 estejam livres para a aplicação
#### Obs: Quando for rodar as migration será necessario mudar o valor da variavel de ambiente "DB_HOST" no .env, mude o valor de "restaurante-db-migrations" para "127.0.0.1" assim as migrations funcionarão, após rodar as migrations e seeds necessárias, volte o valor de "DB_HOST" para "restaurante-db-migrations" para que a aplicação funcione corretamente. Infelizmente isso esta sendo necessário por enquanto.
<ol> <li> <b>Startando api-restaurante =></b>

 -   Após clonar o repositorio rodar <b>compose install</b>, caso tenha problema nesse comando, experimente utilizar a tag <b>--ignore-platform-reqs</b> no comando.

 -   mudar o arquivo <b>.env.example</b> para <b>.env</b> apenas,

 -  Rodar <b>php artisan key:generate</b> para gerar a key aplicação

 -  Rodar migrations, <b>php artisan migrate</b> para criar o banco e as tabelas

 -  Rodar migrations, <b>php artisan migrate:refresh --seed</b> para recriar o banco junto com as seeds
</li> </ol>
<ol> <li> <b>Rodando testes =></b>

 -   Para rodar os testes rode <b>php artisan test</b>, e garanta que os testes de integração estão rodando
</li> </ol>

## Tecnologias usadas

- API REST feita em Laravel => [[Simple, fast routing engine](https://laravel.com/docs/routing).](https://laravel.com/)
- Composer como gerenciador de pacotes => [Composer](https://getcomposer.org/).
- Mysl como DB  [Db]((https://hub.docker.com/_/mysql)).


Laravel is accessible, powerful, and provides tools required for large, robust applications.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
