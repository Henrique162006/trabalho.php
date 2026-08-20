# trabalho.php
Explicação da psta "projeto" que o professor pediu na aula passada.

conexao.php: arquivo que estabelece a conexão com o banco MySQL (host, usuário, senha, database) e cria o objeto $mysqli; encerra o script se a conexão falhar.

index.php: página de login — mostra o formulário de email/senha, valida campos, verifica credenciais no banco e cria a sessão do usuário antes de redirecionar para o painel.

logout.php: encerra a sessão atual e redireciona o usuário de volta para a página de login.

painel.php: página privada do painel que inclui a proteção (proteger.php) e exibe uma saudação com o nome do usuário e link para sair.

proteger.php: verificador de acesso — inicia sessão (se necessário) e impede acesso quando não há $_SESSION['id'], mostrando um link para index.php.

README.md: as explicaçoes
