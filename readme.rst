# Desafio - César Augusto Pires

<h1 align="center">
    <a href="http://delta-global-teste-php.epizy.com/Dashboard">Acessar a demonstração</a>
</h1>

## Features

- [x] Cadastro de aluno
- [x] Listagem
- [x] Visulizar dados de apenas um aluno
- [x] Editar dados do aluno
- [x] Excluir aluno
- [x] Enviar foto do perfil do aluno
- [x] Editar foto do perfil do aluno
- [x] Integração com a API ViaCEP
- [x] Mostrar no dashboard o número de alunos cadastrados

## Rodando o Projeto

- Rodar os seguintes comando, essa sequência terá como objetivo baixar o projeto e configurar o ambiente e o banco de dados, será necessário ter instalado o xampp e o git anteriormente.

  ```bash
  git clone git@github.com:cesarapires/desafio-php-codeigniter.git
  ```

- Agora você deverá criar com a ajuda do phpMyAdmin o banco de dados. De preferência com o nome crud_aluno_db em seguida para criar as tabelas usadas no projeto, você deverá importar o arquivo .sql que está localizado na pasta application\database com isso o banco estará pronto para uso.
  
- Feito isso, agora você terá que configurar o arquivo data database.php que está localizado na pasta application\config preenchendo com as informações das configurações pessoais do seu servidor os sequintes campos:

  ```bash
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'crud_aluno_db',
  ```

  Com isso, você deverá apenar certificar que no arquivo config.php, também localizado na mesma pasta do database.php está com a configuração abaixo, ou que esteja configurado para o diretorio principal do projeto.

  ```bash
	$config['base_url'] = 'http://localhost/desafio-php-codeigniter/';
  ```
- Por fim, o desáfio estará rodando na URL: `http://localhost/desafio-php-codeigniter/`.

---
