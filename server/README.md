<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Instalação

**Instalação de dependências**

```shell
    composer install
```

---

## Configuração

**Banco de dados (.env)**

```env
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=agenda
DB_USERNAME=<USUÁRIO>
DB_PASSWORD=<SENHA>
```

**Criar tabelas**
```shell
    php artisan migrate
```

---
### Utilizar API

**Rodar projeto**

```shell
    php artisan serve
```

**Acesso da API**: http://localhost:8000/

---

**Autor**: Renan Torres (@rgrtorres)
