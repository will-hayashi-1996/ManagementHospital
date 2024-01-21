CRUD feito em Laravel para um teste tecnico, foi utilizado Bootstrap no front-end, junto do Laravel blade, de Banco de Dados, utilizei Mysql, utilizei de rotas web para fazer o CRUD.

Versão do PHP utilizada PHP 8.2.12

Versão do Laravel utilizada Laravel Framework 10.41.0

Versão do Composer utilizado Composer version 2.6.6

Passos para instalar o projeto: 

1-Instalar o PHP, o Laravel, o composer e o npm <br>

2-utilize o comando  cd './teste_tecnico_william_junji' para ir na pasta do projeto, caso seja necessário <br>

3-No arquivo .env, faça as alterações que julgar necessário  em DB_USERNAME e  DB_PASSWORD, utilizei Mysql no Banco de dados e o Mysql Workbench, Segue em anexo as linhas 11 ao 16 do código .env<br><br>
        DB_CONNECTION=mysql<br>
        DB_HOST=127.0.0.1<br>
        DB_PORT=3306<br>
        DB_DATABASE=teste_tecnico<br>
        DB_USERNAME=root<br>
        DB_PASSWORD=root <br><br>

4-Crie uma database chamada 'teste_tecnico', utilizando o comando  no Mysqlworkbench 'CREATE DATABASE teste_tecnico;'<br>

<img src="https://i.imgur.com/GUMTpim.png" title="source: imgur.com" /> <br>

5-Utilize o comando php artisan migrate, para realizar a migração e criação das tabelas no MysqlWorkbench

6-Use o comando 'composer require laravel/ui' para instalar o laravel ui, utilize após isso, o comando 'php artisan ui bootstrap --auth' para instalar o bootstrap, depois 'npm install', depois 'npm run dev', para rodar o bootstrap <br>

7-Utilize o comando php artisan serve, para rodar o programa, a página inicial será essa <br>

<img src="https://i.imgur.com/LVdb8TB.png" />

8-Na imagem temos todas as funcionalidades exigidas de um CRUD, inicialmente, não terá nenhum médico, para inserir, clique em "Inserir Médico" na barra de navegação <br>
