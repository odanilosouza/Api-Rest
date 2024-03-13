Instalação
Clone o repositório:

git clone https://github.com/odanilosouza/Api-Rest.git
Instale as dependências:

composer install
Copie o arquivo .env.example e renomeie-o para .env:

cp .env.example .env
Configure o arquivo .env com suas credenciais de banco de dados.

Gere uma nova chave de aplicativo:

php artisan key:generate
Execute as migrations para criar a tabela de usuários:

php artisan migrate
Inicie o servidor de desenvolvimento:

php artisan serve

json
{
  "email": "user@example.com",
  "password": "password"
}
A resposta conterá o token de autenticação no campo access_token. Use-o no cabeçalho Authorization da sua próxima requisição:

Authorization: Bearer <access_token>
Agora você pode usar as seguintes rotas para manipular os usuários:

GET /api/users - Listar usuários (paginados)
GET /api/users/{id} - Obter um usuário específico
POST /api/users - Criar um novo usuário
PUT /api/users/{id} - Atualizar um usuário existente
DELETE /api/users/{id} - Excluir um usuário
Para mais detalhes sobre cada rota, consulte a documentação gerada pelo Laravel em http://localhost:8000/api/documentation.

Testes
Para executar os testes, use o comando:

php artisan test
Contribuição
Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue ou enviar um pull request.

Contato
Para contato, envie um email para odanilosouza@gmail.com ou acesse meu perfil no [LinkedIn]([url](https://www.linkedin.com/in/danilolimadesouza/)https://www.linkedin.com/in/danilolimadesouza/).



