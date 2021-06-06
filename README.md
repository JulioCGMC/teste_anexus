# Teste Anexus

## Introdução
Para o desenvolvimento da proposta de indicações seguindo o padrão de árvore binária foi desenvolvido um sistema básico, ultilizando [Laravel](https://laravel.com/docs/routing) como framework, [Bootstrap](https://getbootstrap.com/) para o auxilio com estilização CSS e [PostgreSQL](https://www.postgresql.org/) para manutenção do banco de dados baseado em migrations.

## Funcionalidade
O sistema tem como tela inicial um formulário para cadastrar um novo usuário ou se logar com algum usuário já existente no sistema. Após o cadastro ou login o usuário é levado à uma tela de demonstração de pontos e usuários cadastrados por meio de sua indicação (formatada de modo à se assimilar a uma estrutura de arvore). Alem disso foi desenvolvida uma tela para verificar todos os usuários cadastrados no sistema e seus pontos, seguindo o padrão de arvore binária, onde cada seção inicia com um usuário cadastrado sem indicação (a raiz), está tela contém a opção de clicar em um nó da arvore que o levará para a tela de visualização do usuário logado.

## Antes de iniciar

Para que o sistema possa rodar é necessário:
-  um ambiente com o composer instalado que aceite laravel 8;
- um banco de dados vazio criado no motor PostgreSQL.
- O ajuste do arquivo .env, localizado na raiz do projeto, trocando os valores: 
`DB_CONNECTION,
DB_HOST,
DB_PORT,
DB_DATABASE,
DB_USERNAME,
DB_PASSWORD` para os adequados
- A execução dos seguintes comandos em um terminal orientado na pasta raiz do projeto: `php artisan migrate --seed`, `php artisan serve` Após o segundo surgirá um link para a visualização do projeto funcionando.

Muito obrigado, Julio CGMC.