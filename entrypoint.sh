#!/bin/bash
# entrypoint.sh для PhpMyAdmin

# Читаем пароль из секрета и экспортируем как переменную окружения
export PMA_PASSWORD=$(cat /run/secrets/mysql_root_password)

# Запускаем оригинальный entrypoint PhpMyAdmin
exec /docker-entrypoint.sh "$@"