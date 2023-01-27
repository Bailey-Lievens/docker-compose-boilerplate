# Symfony specific info

## General info:
All commands have to be run in teh container itself. So you should open a session with `docker exec -ti <docker_container_name> /bin/bash`.
After you're free to interact with anything Symfony related.

## Commands:
- `yarn dev` Compile all assets to the public folder
- `yarn watch` Compile all assets upon file change

## Notes:
- No idea how I can setup hot reloading :shrug: