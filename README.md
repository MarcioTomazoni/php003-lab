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
```

---

# 📁 Estrutura do Projeto

```bash
php003/
│
├── app/
│   ├── controllers/
│   ├── core/
│   ├── views/
│   └── index.php
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

---

# 🌐 Acesso da Aplicação

```bash
http://localhost:8081
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

# 🔥 Tecnologias Utilizadas

- Docker Desktop
- Docker Compose
- NGINX
- PHP 8.2 FPM
- Ubuntu MATE
- Git
- GitHub

---

# 📚 Objetivos futuros

- Sistema de rotas avançado
- Integração com MySQL
- CRUD completo
- Autenticação
- Deploy em cloud

---

# 👨‍💻 Autor

Márcio Tomazoni

Projeto criado para fins de estudo, prática e evolução profissional.
