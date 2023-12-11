﻿# Passos para executar os arquivos
- Instalar o wsl 2 e o docker nativo na maquina
- Executar o comando docker *compose up -d --build* para criar as imagens
- Acessar o conteiner do app com o comando *docker compose exec app bash*
- Acessar a pasta var/www/application e executar o comando *composer install*
- Após isso roda o comando *php artisan migrate* e pode acessar o http://localhost:8686
