Technical Challenge
-----------------------------------------
Необходимо создать RESTfull API сервис для новостного мобильного приложения.

Данный сервис должен давать возможность показывать статьи всем неавторизованным
пользователям ( с поиском по заголовку/тексту и возможной фильтрацией по определенным
категориям ), а так же должен позволять управлять статьями и категориями администратору
приложения

Структура БД:
-----------------------------------------
### category ( категории )
- id ( integer )
- name ( string ( 255 ) )
- created_at ( datetime )
- updated_at ( datetime )
- deleted_at ( datetime )

### article ( статьи )
- id ( integer )
- title ( string ( 255 ) )
- text ( text )
- created_at ( datetime )
- updated_at ( datetime )
- deleted_at ( datetime )

### article_category ( статьи-категории )
- article_id ( integer )
- category_id ( integer )

Неавторизованный пользователь может:
-----------------------------------------
1) Просматривать список статей
2) Просматривать список категорий
3) Фильтровать статьи по определенным категориям
4) Искать статьи по тексту / названию ( использовать полнотекстовый поиск )

Администратор может:
-----------------------------------------
1) Добавлять / редактировать / удалять категории для статей
2) Добавлять / редактировать / удалять статьи

------------

В случае необходимости Вы можете корректировать схему БД, обосновывая данное решение. Для
реализации используйте фреймворк Symfony 4

## PREPARE FOR DOCKER COMPOSE
> clone repository
```
git clone https://github.com/7binary/news.git
```
> run docker-compose
```
cd news
docker-compose up -d
```

## PREPARE SYMFONY PROJECT
```
cd symfony
composer install --prefer-dist
php bin/console doctrine:schema:update --force
php bin/console doctrine:fixtures:load
```
