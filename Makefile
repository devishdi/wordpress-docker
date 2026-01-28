# This file is a part of ISHDI Software Solutions.

include .env
.PHONY: enter-php enter-db enter-server \
        project-start project-stop db\:dump db\:import


yellow = \033[38;5;3m
bold = \033[1m
reset = \033[0m
message = @echo -p "${yellow}${bold}${1}${reset}"

EXTRA_PARAMS ?=
UID = $(shell id -u)

#
# Executes a command in a running container, mainly useful to fix the terminal size on opening a shell session
#
# $(1) the options
#
define enter-shell
	docker-compose exec -e COLUMNS=`tput cols` -e LINES=`tput lines` $(1)
endef

#
# Make sure to run the given command in a container identified by the given service.
#
# $(1) the user with which run the command
# $(2) the Docker Compose service
# $(3) the command to run
#
define run-in-container
	@if [ ! -f /.dockerenv -a "$$(docker-compose ps -q $(2) 2>/dev/null)" ]; then \
		docker-compose exec --user $(1) $(2) /bin/sh -c "$(3)"; \
	elif [ $$(env|grep -c "^CI=") -gt 0 -a $$(env|grep -cw "DOCKER_DRIVER") -eq 1 ]; then \
		docker-compose exec --user $(1) -T $(2) /bin/sh -c "$(3)"; \
	else \
		$(3); \
	fi
endef


enter-php: ## to enter the PHP container
	$(call enter-shell,-u root php bash)

enter-db: ## to enter the database container
	$(call enter-shell,database bash)

enter-server: ## to enter the nginx container
	$(call enter-shell,nginx sh)

project-start: ## to start the project
	$(call message,$(PROJECT_NAME): Starting Clarity Shop...)
	docker-compose up --build -d

project-stop: ## to stop the project
	$(call message,$(PROJECT_NAME): Stopping Clarity Shop...)
	docker-compose stop

#######################
# Database #
#######################

db\:dump: ## to dumb db
	$(call message,$(PROJECT_NAME): DB dump...)
	$(call run-in-container,root,database,mariadb-dump -u root wp_db > db/db-latest.sql)
	$(call message,$(PROJECT_NAME): Done!)

db\:import: ## to import db
	$(call message,$(PROJECT_NAME): Importing DB...)
	$(call run-in-container,root,database,mariadb -u root wp_db < db/db.sql)
	$(call message,$(PROJECT_NAME): Done!)

