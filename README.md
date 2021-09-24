Projeto Laravel Endpoit
Este projeto basicamente possui 2 tabelas (Usuarios e Canais) e uma tabela de ligação entre elas que informa qual usuário assistiu qual canal, qual foi o tempo e a data em que ocorreu. Para executar o projeto é necessário ter o Compose instalado.

Para rodar o projeto:
- Clone o Projeto em seu computador;
- Rode o comando 'composer install';
- Altere o arquivo '.env' e com as seguintes informações:
DB_CONNECTION=mysql
DB_HOST=localhost DB_PORT=3306
DB_DATABASE=sysforce
DB_USERNAME=COLOQUE SEU USUARIO MYSQL
MYSQL DB_PASSWORD=COLOQUE SUA SENHA MYSQL

- Rode o comando 'php artisan key:generate'
- Rode o comando 'php artisan migrate --seed'
- Por fim rode o comando 'php artisan serve'

Acesse seu postman e utilize a url 'http://127.0.0.1:8000/api/watchedtime'
Isso irá retornar uma resposta JSON com todas os canais ordenados por mais tempo de exibição e seus respectivos dados:
Lista dos usuários ordenados , tempo assistido, posição e a data em que foi assistido.
