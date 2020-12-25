<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Instalação:

- Postgres (Banco de dados): https://www.postgresql.org/download/
- PGAdmin 4 (Interface para administrar o postgres): https://www.pgadmin.org/download/
- Composer: https://getcomposer.org/download/
- PHP: https://www.php.net/downloads.php
```
    - No caso de windows, clique em "windows downloads" e baixe o arquivo zip de opção Non Thread Safe de acordo com sua arquitetura (x64 ou x86).
    - Crie uma pasta no seu disco local chamada 'PHP' e extraia os arquivos lá.
    - Adicione nas variáveis de ambiente o caminho onde o php foi instalado
    - Va ná pasta do PHP, e renomeie o arquivo 'php.ini-development' para 'php.ini'.
    - Abra o arquivo php.ini em um editor de texto, e descomente as seguintes linhas:
        -> extension=pdo_pgsql
        -> extension=pgsql
    (Para descomentar, basta apagar o ponto e vírgula ';' no começo da linha)

    - Caso prefira, também é possível usar o php do xampp, pois ele já vem configurado, basta apenas adicionar o caminho do php dele nas variáveis de ambiente do sistema.

    - Caso esteja usando Linux, será necessário instalar também o php-xml (sudo apt-get install php-xml)
```
- Laravel: Abrir o terminal e executar o seguinte comando
```cmd
    composer global require laravel/installer
```
- Ao abrir o projeto pela primeira vez, executar:
```cmd
    composer install
```

Configurar o ambiente:

- Na pasta principal do projeto (onde se encontra o arquivo README) crie um arquivo chamado '.env', e copie e cole nele todo o conteúdo do arquivo '.env.example'
- No terminal, execute o seguinte código:
```cmd
    php artisan key:generate
```
- Em seguida execute:
```cmd
    php artisan storage:link
```
- No arquivo '.env' altere a seguinte configuração:
```.env
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=elpis
    DB_USERNAME=(seu usuario do postgres aqui)
    DB_PASSWORD=(sua senha do postgres aqui)
```
- Após alterar o arquivo '.env' **SEMPRE** execute os seguintes comandos:
```cmd
    php artisan cache:clear
    php artisan config:cache
```
- Utilizando o PgAdmin 4, crie um banco de dados chamado 'elpis' (como foi colocado na configuração anterior)
- Dentro do projeto, execute o seguinte comando no terminal para criar as tabelas e inserir os dados de teste:
```cmd
    php artisan migrate --seed
```

Para rodar o servidor:
```cmd
    php artisan serve
```

Documentação Laravel: https://laravel.com/docs/8.x