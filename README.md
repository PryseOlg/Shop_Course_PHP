## Стек технологий
* PHP 8.1.9
* Laravel 10.4.1
* Bootstrap
* MySQL 8.0
* Composer

## Запуск
```bash
composer install
npm install
npm run build
npm run dev
php artisan migarate
php artisan db:seed
```
Также необходимо переименовать файл ".env.example" в ".env" и выставить необходимую конфигурацию

## Функционал
1. Оформление заказов
2. Просмотр истории заказов
3. Корзина с товарами
4. Личный кабинет для покупателя 
5. Кабинет для админа 


## После выполнения миграции, таблицы в базе данных создаются автоматически

![db-schema](pics/bd.png)


# Внешний вид

### Каталог
![catalog.png](pics/view.png)

### Категории 

![categories.png](pics/categories.png)
### Личный кабинет
![account.png](pics/cab.png)

### Корзина
![cart.png](pics/cart.png)

### Страница не найдена
![unfound.png](pics/unfound.png)

### Админ-панель
![admin.png](pics/admin.png)


