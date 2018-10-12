.PHONY: npm-env php-env

npm-env:
	docker-compose run --rm env bash

php-env:
	docker-compose run --rm php bash

