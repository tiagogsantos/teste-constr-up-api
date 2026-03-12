# 🛒 Produtos API — Laravel 12

API RESTful para gerenciamento de produtos. Desenvolvida com **Laravel 12** e **MySQL**.

## ✅ Requisitos

- PHP >= 8.2
- Composer
- MySQL >= 8.0

---

## 🚀 Como rodar o projeto

### 1. Clone o repositório

```bash
git clone https://github.com/tiagogsantos/teste-constr-up-api
cd teste-constr-up-api
```

### 2. Instale as dependências PHP

```bash
composer install
```

### 3. Configure o ambiente

```bash
cp .env.example .env
php artisan key:generate
```

Edite o `.env` com as credenciais do seu banco MySQL:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=construp
DB_USERNAME=sail
DB_PASSWORD=password
```

### 4. Crie o banco de dados

```sql
CREATE DATABASE construp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 5. Execute as migrations e seeders

```bash
php artisan migrate
php artisan db:seed
```

### 6. Inicie o servidor

```bash
php artisan serve
```

A API estará disponível em: **`http://localhost`**

---

## 🧪 Rodando os testes

```bash
php artisan test
```

8 testes cobrindo: listagem, criação, validação, exibição, atualização e exclusão.

---

## 📡 Endpoints da API

Base URL: `http://localhost/api`

| Método   | Endpoint           | Descrição                  | Status |
|----------|--------------------|----------------------------|--------|
| `GET`    | `/products`        | Listar produtos (paginado) | `200`  |
| `POST`   | `/products`        | Criar novo produto         | `201`  |
| `GET`    | `/products/{id}`   | Exibir produto             | `200`  |
| `PUT`    | `/products/{id}`   | Atualizar produto          | `200`  |
| `DELETE` | `/products/{id}`   | Remover produto            | `204`  |

---

## 📦 Campos do Produto

| Campo         | Tipo      | Obrigatório | Descrição            |
|---------------|-----------|-------------|----------------------|
| `name`        | `string`  | ✅           | Nome do produto      |
| `description` | `string`  | ✅           | Descrição            |
| `brand`       | `string`  | ✅           | Marca                |
| `price`       | `decimal` | ✅           | Preço (mín. 0)       |
| `stock`       | `integer` | ✅           | Estoque (mín. 0)     |

---

## 📋 Exemplos com cURL

### Listar produtos
```bash
curl http://localhost/api/products
```
---
    
## 🏗️ Estrutura do projeto

```
app/
├── Http/
│   ├── Controllers/
│   │   └── ProductController.php   # CRUD completo
│   └── Requests/
│       └── ProductRequest.php      # Validação store & update
└── Models/
    └── Product.php                 # fillable + casts

database/
├── factories/ProductFactory.php    # Faker para testes
├── migrations/                     # Schema da tabela products
└── seeders/ProductSeeder.php       # 5 produtos de exemplo

routes/api.php                      # Route::apiResource
tests/Feature/ProductTest.php       # 8 testes PHPUnit
```

---

## 🛠️ Tecnologias

- **Laravel 12** + **Eloquent ORM**
- **MySQL** + migrations
- **Form Requests** com validação separada por método HTTP
- **Route Model Binding** automático
- **PHPUnit** com `RefreshDatabase`
