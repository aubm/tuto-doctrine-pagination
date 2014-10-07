Installation et usage
=====================

- `git clone https://github.com/aubm/tuto-doctrine-pagination.git`
- `cd tuto-doctrine-pagination`
- `composer install`
- `php app/console doctrine:database:create`
- `php app/console doctrine:schema:create`
- `php app/console doctrine:fixtures:load`
- `php app/console server:run`

---> http://localhost:8000/