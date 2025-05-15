# Projeto Laravel 11 com Pacote de Autenticação Laravel/UI

## Preparar Ambiente de Desenvolvimento

### Instalar e Configurar os programas

    • PHP
    • Composer
    • Node.js (NPM)
    • MySQL Server
    • Visual Studio Code
    • Bdeaver
    • Git
    • Criar conta na plataforma GitHub

### Configurações no arquivo `php.ini`

#### Habilitar as extensões:

```
extension=curl
extension=fileinfo
extension=gd
extension=mbstring
extension=mysqli
extension=openssl
extension=pdo_mysql
extension=pdo_pgsql
extension=pdo_sqlite
extension=pgsql
extension=sqlite3
extension=zip
```

#### Habilitar a exibição de erros em tela, o tipo de erro a ser reportado e o registo de logs de erros:

```
display_errors = On
error_reporting = E_ALL & ~E_DEPRECATED
log_errors = On
error_log = /tmp/php_errors.log
```

#### Aumentar o limite de memória (em Mb), bem como o tempo de execução máximo de cada script (em segundos):

```
memory_limit = 256M
max_execution_time = 120
```

#### Permitir o upload de arquivos e aumentar os limites de upload e envio de formulários:

session.gc_maxlifetime = 14000

## Criar Projeto Laravel


Para criar um projeto em Laravel, execute o comando:

```bash
composer create-project laravel/laravel:^11.0 example-app
```

Para executar o servidor web embutido do Laravel, utilize o comando:

```bash
php artisan serve
```

Com o servidor em execução, acesso pelo navegador o link `localhost:8000` ou `127.0.0.1:8000`

## Instalar e configurar o pacote de Autenticação Laravel/UI

Para instalar o pacote de autenticação do Laravel/UI execute os comandos abaixo:

```bash
composer require laravel/ui
php artisan ui vue --auth
npm install
npm run build (ou vite build -watch)
```

## Configurar o idioma em português

### Traduzir manualmente o idioma nos arquivos:

- `resources\views\layouts\app.blade.php`
- `resources\views\auth\login.blade.php`
- `resources\views\auth\register.blade.php`
- `resources\views\auth\passwords.blade.php`
- `resources\views\auth\reset.blade.php`

### Traduzir mensagens de retorno do Laravel para o idioma portugês

1. Fazer o download dos arquivos de tradução pt-pt: 
https://github.com/lucascudo/laravel-pt-BR-localization

2. Executar o comando: `php artisan lang:publish`;
3. Descompactar o arquivo `Laravel_pt-BR.rar`;
4. Copiar a pasta `pt-br`para a pasta `lang`;
5. Modificar no arquivo `.env` o valor das variáveis `APP_LOCALE`e `APP_FALLBACK_LOCALE` para `pt-br`;

```
APP_LOCALE=pt-br
APP_FALLBACK_LOCALE=pt-br
```

## Configuração do fuso horário do Brasil

Modificar no arquivo `.env` o valor da variável `APP_TIMEZONE` para `America/Sao_Paulo`:

```
APP_TIMEZONE=America/Sao_Paulo
```

## Configuração da Redifinição de Senha




