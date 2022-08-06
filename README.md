## Como funciona nosso repositorio?

1. Faça um FORK desse repositório (nesse caso você irá ter o mesmo repositório, porém em sua conta do github)
2. Faça o clone para a sua máquina do repositório que foi gerado em seu github
3. Na raiz principal do projeto crie um diretório com o seu nome e sobrenome, separados com \_, por exemplo: **alex_pereira**
4. Dentro da pasta com o seu nome crie os seus projetos de acordo com a aula e no final de cada aula crie um Pull Request do seu repositório que foi feito o FORK para o repositório original do professor.

_Após a criação do Pull Request, aguarde a aprovação do professor._

## Configurando o usuário localmente no projeto clonado:

```
git config user.name "Your Name Here"
git config user.email your@email.com
```

DER
https://whimsical.com/UcQ38SU29rEKhsFJ8Xfxh1


# Desafio 01
> Desenvolver um CRUD de estudantes, contendo as seguintes colunas:
- nome (string)
- cpf (string)
- nascimento (date)

# Desafio 02
> Na tabela de ESTUDANTES, precisamos adicionar a coluna sala_id
Ela deve ser do tipo integer e ser feita através de uma nova migration
para a tabela já criada no desafio anterior

#### Dica
- php artisan make:migration create_students_table
- php artisan make:migration update_students_table **algo a mais aqui**

# Comandos do dia a dia no Laravel
- Instalando projeto: **composer create-project laravel/laravel nome_projeto*
- Gerando a key da aplicação: **php artisan key:generate**
- Criando migrations: **php artisan make:migration create_series_table**
- Criando models: **php artisan make:model Serie**
- Subindo o banco: **php artisan migrate**
- Criando controllers: **php artisan make:controller SeriesController -r**

# Passos para desenvolver o projeto 2
### Checklist listagem
- Criar uma controller
- Configurar a primeira rota de listar
- Escrever o código dentro do método index, que seja
capaz de retornar todas as séries
- Na index, incluir o return e mandar para uma view
- No diretório resource criar a pasta series/index.blade.php

### checklist cadastro
- Criar a rota get que retorna a view create
- Adaptar o método create para retornar a view create.blade.php
- Criar na views o create.blade.php
- Criar um formulário com o input nome

- Fazer a rota com o método post, para gravar com o método store
- Adaptar o formulário para quando clicar no botão salvar no banco

# Referencias para o conteúdo de arquitetura
- [In Clean Architecture, where to put validation logic?](https://ikenox.info/blog/where-to-put-validation-in-clean-architecture/#:~:text=Just%20as%20Clean%20Architecture%20splits,differrent%20depending%20on%20its%20context.)
- [REST, GraphQL, Clean Architecture e TypeScript com Rodrigo Manguinho // Live #69](https://www.youtube.com/watch?v=P0gpCCA8ZPs)
- [Uncle Bob](http://cleancoder.com/products)
Loading...

