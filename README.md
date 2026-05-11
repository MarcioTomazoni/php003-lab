# 🚀 PHP003 - Ambiente PHP com Docker + NGINX + MVC

Projeto de estudos utilizando:

- Docker Desktop
- Docker Compose
- NGINX
- PHP-FPM
- Estrutura MVC

---

# 📦 Containers

- php003-nginx
- php003-php

---

# 🌐 Acesso

http://localhost:8081

---

# 🚀 Subir ambiente

```bash
docker compose up -d --build
```

# ⛔ Parar ambiente

```bash
docker compose down
```

# 📜 Logs

```bash
docker compose logs -f
```

# 🧪 Entrar no container PHP

```bash
docker exec -it php003-php bash
```