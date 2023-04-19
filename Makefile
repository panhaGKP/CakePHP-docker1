build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose stop
up:
	docker-compose up -d
composer-update:
	docker exec cakephp-docker1 bash -c "composer update"
data:
	docker exec cakephp-docker1 bash -c "bin/cake migrations migrate"
	docker exec cakephp-docker1 bash -c "bin/cake migrations seed"