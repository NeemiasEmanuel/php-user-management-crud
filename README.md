# Sistema de Cadastro e Gerenciamento de Usuários em PHP

Este projeto foi desenvolvido como parte da disciplina de **Programação Web com PHP** da **Universidade Positivo (UP)**. O sistema implementa as operações CRUD (Create, Read, Update, Delete) básicas para gerenciamento de usuários, com conexão a banco de dados MySQL.

## 🎯 Objetivo

Desenvolver um sistema simples de gerenciamento de usuários que permita:
- Cadastrar novos usuários
- Listar os usuários cadastrados
- Excluir usuários

## 🛠️ Tecnologias Utilizadas

- Linguagem: **PHP**
- Banco de dados: **MySQL**
- Estilo: **CSS**
- Servidor: **Apache (XAMPP/WAMP)**
- Arquivo `.htaccess` incluso para configuração de rotas ou redirecionamentos

## 📂 Estrutura de Arquivos

- `index.php`: Página inicial com links para navegação
- `cadastro.php`: Formulário de cadastro de usuário
- `listar.php`: Lista os usuários do banco de dados em uma tabela
- `excluir.php`: Realiza a exclusão de um usuário
- `conexao.php`: Responsável pela conexão com o banco de dados MySQL
- `usuario.php`: Classe que representa o modelo de dados do usuário
- `usuarioController.php`: Controlador com lógica de inserção, listagem e exclusão
- `style.css`: Estilização da interface com foco em tabelas
- `.htaccess`: Arquivo de configuração do Apache
- `teste.php`: (provavelmente para testes locais de conexão ou lógica)

## 🔍 Funcionalidades

- Cadastro com nome, email e senha (ou campos definidos no seu modelo)
- Listagem dinâmica com tabela estilizada
- Exclusão individual de usuários com confirmação
- Estilo responsivo básico com CSS
- Realce de linhas na tabela ao passar o mouse

## 💻 Como Executar Localmente

1. Instale o XAMPP ou WAMP no seu computador.
2. Crie um banco de dados MySQL com o nome e estrutura esperada pelo arquivo `conexao.php`.
3. Coloque todos os arquivos na pasta `htdocs` (XAMPP) ou `www` (WAMP).
4. Acesse via navegador: `http://localhost/nome-da-pasta`
5. Navegue pelas páginas para cadastrar e listar usuários.

## 👨‍🏫 Autoria

Projeto realizado como parte da disciplina de **Desenvolvimento Web**, na instituição **UP-Universidade Positvo**.

