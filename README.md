# Desafio JOKENPO
___

Jokenpo é uma brincadeira japonesa, onde dois jogadores escolhem um dentre três possíveis itens: Pedra, Papel ou Tesoura.

O objetivo é fazer um juiz de Jokenpo que dada a jogada dos dois jogadores informa o resultado da partida.

As regras são as seguintes:

Pedra empata com Pedra e ganha de Tesoura

Tesoura empata com Tesoura e ganha de Papel

Papel empata com Papel e ganha de Pedra

___
## Ambiente

- Docker (PHP 8)

### Configurando ambiente
```
cd .docker/
docker build -t rafaelneris/tdd .
docker-compose up -d --build
```

### Rodando testes
```
docker exec -it tdd composer test
```