# 🚀 PHP003 — Ambiente PHP Moderno com Docker + NGINX + MVC

Projeto de estudos e laboratório prático desenvolvido com foco em:

- Docker
- Docker Compose
- NGINX
- PHP-FPM
- Estrutura MVC
- Git e GitHub
- Ambientes modernos de desenvolvimento PHP

---

# 🎯 Objetivo do Projeto

O projeto `php003` foi criado para praticar:

- Containers Docker
- Arquitetura multi-container
- Integração entre NGINX e PHP-FPM
- Estrutura MVC simplificada
- Versionamento com Git
- Documentação técnica
- Preparação para ambientes cloud

---

# 🧱 Arquitetura do Projeto

```text
Browser
   ↓
NGINX Container
   ↓
PHP-FPM Container
   ↓
Aplicação MVC
   ↓
MySQL Container
```

---

# 📁 Estrutura do Projeto

```bash
php003/
│
├── app/
│   ├── assets/
│   │   ├── css/
│   │   ├── js/
│   │   └── img/
│   │
│   ├── controllers/
│   │   └── HomeController.php
│   │
│   ├── core/
│   │   ├── Router.php
│   │   └── Database.php
│   │
│   ├── views/
│   │   ├── templates/
│   │   │   ├── header.php
│   │   │   └── footer.php
│   │   │
│   │   ├── home.php
│   │   ├── sobre.php
│   │   └── contato.php
│   │
│   ├── index.php
│   └── test-db.php
│
├── nginx/
│   └── default.conf
│
├── php/
│   └── Dockerfile
│
├── docker-compose.yml
│
└── README.md
```

---

# 🐳 Containers

| Container | Função |
|---|---|
| php003-nginx | Servidor Web NGINX |
| php003-php | Processamento PHP-FPM |
| php003-mysql | Banco de dados MySQL |
| php003-phpmyadmin | Interface visual phpMyAdmin |

---

# 🔌 Port Mapping

O projeto utiliza portas customizadas para evitar conflitos com serviços locais do sistema operacional.

| Serviço | Porta Host | Porta Container |
|---|---|---|
| NGINX | 8085 | 80 |
| phpMyAdmin | 8086 | 80 |

O MySQL não possui porta publicada externamente, funcionando apenas na rede interna Docker.

---

# 🌐 Acesso da Aplicação

```bash
http://localhost:8085
```

---

# 🚀 Como executar o projeto

## 🔹 Clonar repositório

```bash
git clone https://github.com/MarcioTomazoni/php003-lab
```

---

## 🔹 Entrar na pasta

```bash
cd php003
```

---

## 🔹 Subir containers

```bash
docker compose up -d --build
```

---

# ⛔ Parar ambiente

```bash
docker compose down
```

---

# 🔄 Reiniciar ambiente

```bash
docker compose restart
```

---

# 📜 Visualizar logs

```bash
docker compose logs -f
```

---

# 🧪 Entrar no container PHP

```bash
docker exec -it php003-php bash
```

---

# 🐳 Conceitos Docker praticados

- Containers
- Images
- Build
- Docker Compose
- Volumes
- Networks
- Logs
- Execução isolada
- Comunicação entre containers

---

# 🧠 Estrutura MVC

O projeto utiliza uma estrutura MVC simplificada:

| Camada | Responsabilidade |
|---|---|
| Router | Direciona URLs |
| Controller | Controla lógica |
| View | Exibe HTML |

---

# 🧩 Templates reutilizáveis

O projeto utiliza templates compartilhados para evitar repetição de código HTML.

Estrutura:

```bash
views/
└── templates/
    ├── header.php
    └── footer.php
```

---

# 🎨 Organização de Assets

O projeto utiliza uma estrutura dedicada para arquivos estáticos:

```bash
assets/
├── css/
├── js/
└── img/
```

Atualmente o projeto utiliza:

- CSS externo
- Assets servidos pelo NGINX
- Estrutura preparada para frontend escalável

---

# 🛣️ Sistema de Rotas

O projeto utiliza um sistema de rotas centralizado através da classe `Router`.

Exemplo:

```php
'/sobre' => [
    'controller' => 'HomeController',
    'method' => 'sobre'
]
```

As rotas definem:

- Controller responsável
- Método executado
- URL acessada

---

# 🗄️ Banco de Dados MySQL

O projeto utiliza um container MySQL 8 para armazenamento de dados da aplicação.

Configuração atual:

| Configuração | Valor |
|---|---|
| Banco de dados | php003 |
| Usuário | root |
| Senha | root |
| Container | php003-mysql |

O banco é executado de forma isolada através do Docker Compose.

---

# 🖥️ phpMyAdmin

O projeto utiliza o phpMyAdmin para gerenciamento visual do banco de dados MySQL.

Acesso:

```bash
http://localhost:8086
```

Credenciais:

| Campo | Valor |
|---|---|
| Servidor | mysql |
| Usuário | root |
| Senha | root |

O phpMyAdmin se conecta automaticamente ao container MySQL através da rede interna do Docker.

---

# 💾 Volume Persistente MySQL

O projeto utiliza volume Docker para persistência dos dados do banco.

Estrutura:

```yaml
volumes:
  mysql_data:
```

Isso garante que os dados do MySQL não sejam perdidos ao reiniciar ou remover os containers.

---

# 🔌 Conexão PDO

O projeto utiliza PDO para conexão com o banco MySQL.

Arquivo responsável:

```bash
app/core/Database.php
```

A conexão é realizada utilizando:

- PDO
- pdo_mysql
- Containers Docker interligados em rede interna

Exemplo de host utilizado:

```php
private $host = 'mysql';
```

O nome `mysql` corresponde ao nome do serviço definido no `docker-compose.yml`.

---

# ✅ Teste de Conexão com Banco

O projeto possui um arquivo de teste para validar a conexão PDO com o MySQL containerizado.

Arquivo:

```bash
app/test-db.php
```

Acesso:

```bash
http://localhost:8085/test-db.php
```

Resultado esperado:

```text
🚀 Conexão com MySQL funcionando!
```

Esse teste confirma:

- Comunicação entre containers
- Funcionamento do PDO
- Rede interna Docker
- Integração PHP + MySQL

---

# 🔥 Tecnologias Utilizadas

- Docker Desktop
- Docker Compose
- NGINX
- PHP 8.2 FPM
- MySQL 8
- phpMyAdmin
- PDO
- Ubuntu MATE
- Git
- GitHub

---

# 📚 Objetivos futuros

- Sistema CRUD completo
- Modelos MVC avançados
- Autenticação de usuários
- Middleware
- Upload de arquivos
- Integração com API
- Deploy em cloud
- CI/CD
- Docker Compose avançado

---

# 👨‍💻 Autor

Márcio Tomazoni

Projeto criado para fins de estudo, prática e evolução profissional.
