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
