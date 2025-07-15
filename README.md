# 🎬 AB Filmes

Um aplicativo fullstack desenvolvido em Laravel para gerenciamento de catálogo de filmes com sistema de avaliações.

## 📋 Sobre o Projeto

AB Filmes é uma aplicação web que permite aos usuários criar e gerenciar um catálogo completo de filmes.
O projeto foi desenvolvido com o objetivo de praticar o desenvolvimento web com o framework Laravel através de 
operações CRUD (Create, Read, Update, Delete) de forma simples e eficiente.

### ✨ Funcionalidades

- 📝 **Cadastro de Filmes**: Adicione novos filmes ao catálogo
- ✏️ **Edição de Filmes**: Atualize informações dos filmes existentes
- 🔍 **Busca de Filmes**: Sistema de pesquisa para encontrar filmes rapidamente
- ⭐ **Sistema de Avaliações**: Usuários podem avaliar e comentar sobre os filmes
- 👤 **Autenticação de Usuários**: Sistema de login e registro

## 🚀 Tecnologias Utilizadas

- **Backend**: Laravel 12
- **Linguagem**: PHP 8.3+
- **Frontend**: Blade Templates, TaiwindCSS, JavaScript, Vite
- **Banco de Dados**: PostgreSQL

## 📋 Pré-requisitos

Antes de começar, certifique-se de ter instalado:

- PHP 8.3 ou superior
- Composer
- Node.js e npm
- Git

## 🔧 Instalação

1. **Clone o repositório**
   ```bash
   git clone https://github.com/Tiago0Br/ab-filmes.git
   cd ab-filmes
   ```

2. **Instale as dependências do PHP**
   ```bash
   composer install
   ```

3. **Instale as dependências do Node.js**
   ```bash
   npm install
   ```

4. **Configure o ambiente**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure o banco de dados**
   - Edite o arquivo `.env` com suas configurações de banco de dados
   - Para rodar o Docker compose:
     ```bash
     docker compose up -d
     ```

6. **Execute as migrações**
   ```bash
   php artisan migrate
   ```

7. **Execute os seeders (opcional)**
   ```bash
   php artisan db:seed
   ```

## 🏃‍♂️ Como Executar

### Desenvolvimento

Para iniciar o ambiente de desenvolvimento completo (recomendado):

```bash
composer run dev
```

Este comando inicia simultaneamente:
- Servidor Laravel (porta 8000)
- Queue worker
- Log monitor (Pail)
- Vite dev server (para assets)

### Comandos Individuais

Se preferir executar os serviços separadamente:

```bash
# Servidor web
php artisan serve

# Compilar assets para desenvolvimento
npm run dev

# Compilar assets para produção
npm run build
```

## 📁 Estrutura do Projeto

```
ab-filmes/
├── app/
│   ├── Http/Controllers/    # Controladores da aplicação
│   ├── Models/             # Modelos Eloquent
│   └── ...
├── database/
│   ├── migrations/         # Migrações do banco de dados
│   └── seeders/           # Seeders para popular o banco
├── resources/
│   ├── views/             # Templates Blade
│   ├── css/               # Arquivos CSS
│   └── js/                # Arquivos JavaScript
├── routes/
│   └── web.php            # Rotas da aplicação
└── tests/                 # Testes automatizados
```

## 🎯 Objetivos de Aprendizado

Este projeto foi desenvolvido para praticar:

- ✅ Operações CRUD com Laravel
- ✅ Sistema de autenticação
- ✅ Relacionamentos entre modelos (Eloquent ORM)
- ✅ Validação de formulários
- ✅ Blade templating
- ✅ Migrations e seeders
- ✅ Estruturação de projetos Laravel

## 👨‍💻 Autor

**Tiago Lopes**

- [Meu portfólio](https://www.tiagolopes.bio)
