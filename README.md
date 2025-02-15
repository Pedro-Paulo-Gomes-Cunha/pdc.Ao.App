# pdc.Ao.App

# Projeto Laravel para Marcação de Consultas Médicas e Exames
    Este projeto Laravel visa facilitar o agendamento de consultas médicas e exames, além de centralizar o histórico clínico dos pacientes em um único sistema.

# Funcionalidades
# Pacientes:*
    Cadastro e gerenciamento de dados pessoais (nome, CPF, data de nascimento, etc.).
    Agendamento de consultas e exames.
    Acesso ao histórico clínico.
# Médicos:*
    Cadastro e gerenciamento de dados profissionais (especialidade, CRM, etc.).
    Disponibilidade de horários para consultas.
    Visualização de agendamentos.
    Registro do histórico clínico dos pacientes.
# Histórico Clínico:*
    Registro de consultas e exames realizados.
    Informações sobre diagnósticos, tratamentos e medicações.
    Acesso restrito por pacientes e médicos.
# Agendamento:*
    Visualização de horários disponíveis.
    Agendamento de consultas e exames.
    Confirmação e cancelamento de agendamentos.
# Administração:*
    Gerenciamento de usuários (pacientes, médicos e administradores).
    Relatórios e estatísticas sobre agendamentos e atendimentos.
# Tecnologias
    Laravel: Framework PHP para desenvolvimento web.
    Banco de dados: MySQL (sugestão).
    Frontend: HTML, CSS, JavaScript (e framework/biblioteca de preferência, como Vue.js ou React).
    Autenticação: Laravel built-in authentication ou outro sistema de autenticação (OAuth, JWT, etc.).
# Instalação
    1. Clone o repositório: git clone <URL do repositório>
    2. Acesse o diretório do projeto: cd <nome do projeto>
    3. Instale as dependências: composer install
    4. Configure as variáveis de ambiente no arquivo .env (banco de dados, etc.).
    5. Gere a chave da aplicação: php artisan key:generate
    6. Execute as migrations do banco de dados: php artisan migrate
    7. Inicie o servidor de desenvolvimento: php artisan serve
