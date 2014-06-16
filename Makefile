SSH_HOST=salixos.org
SSH_PORT=22
SSH_USER=web
SSH_TARGET_DIR=/srv/www/start.salixos.org

all:
	@echo "Nothing to make."

upload:
	rsync -e "ssh -p $(SSH_PORT)" \
		-avz \
		--exclude ".git" \
		--exclude ".gitignore" \
		--exclude Makefile \
		--delete ./ $(SSH_USER)@$(SSH_HOST):$(SSH_TARGET_DIR)

.PHONY: all upload
