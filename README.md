# projeto_CRUD
meu primeiro projeto utilizando php e mysql 

# Projeto CRUD com PHP, MySQL e Bootstrap 5
1. Introdução
O projeto consiste em um sistema CRUD (Create, Read, Update, Delete) desenvolvido em PHP, utilizando MySQL como banco de dados e Bootstrap 5 para a interface de usuário. Este sistema permite o cadastro, listagem, edição e exclusão de usuários.

# 2. Requisitos
Servidor web (por exemplo, Apache) com suporte a PHP
Banco de dados MySQL
Bootstrap 5 (arquivos CSS e JS)

# 3. Estrutura de Arquivos
index.php: Página inicial que inclui as diferentes partes do projeto com base na variável page.
config.php: Arquivo de configuração que contém as informações de conexão com o banco de dados.
novo-usuario.php: Formulário para cadastrar um novo usuário.
listar-usuario.php: Página para listar todos os usuários cadastrados.
editar-usuario.php: Formulário para editar um usuário existente.
salvar-usuario.php: Script para processar as operações de cadastro, edição e exclusão.

# 4. Funcionalidades
4.1. Cadastrar Novo Usuário
Acesse a página "Novo Usuário" através do link no menu.
Preencha o formulário com nome, email, senha e data de nascimento.
Clique no botão "Enviar" para cadastrar o novo usuário.
4.2. Listar Usuários
Acesse a página "Listar Usuários" através do link no menu.
A tabela exibirá todos os usuários cadastrados, incluindo nome, email, data de nascimento e ações (editar/excluir).
4.3. Editar Usuário
Na página "Listar Usuários", clique no botão "Editar" ao lado do usuário desejado.
O formulário de edição será carregado com as informações do usuário.
Faça as alterações desejadas e clique no botão "Enviar" para salvar as alterações.
4.4. Excluir Usuário
Na página "Listar Usuários", clique no botão "Excluir" ao lado do usuário desejado.
Será exibida uma confirmação antes da exclusão definitiva do usuário.

# 6. Segurança
Use prepared statements para evitar injeções de SQL.
Utilize o método md5 apenas para fins educacionais; em ambientes de produção, utilize algoritmos mais seguros para o armazenamento de senhas, como bcrypt.

# 7. Considerações Finais
Este projeto fornece uma estrutura básica para um sistema CRUD usando PHP, MySQL e Bootstrap 5. Lembre-se de realizar ajustes conforme necessário para atender aos requisitos específicos do seu projeto.

Nota: Este é um exemplo educacional e deve ser adaptado para ambientes de produção, especialmente em relação à segurança e boas práticas de programação.
