# Aplicação de Busca de CEP

Este projeto é uma aplicação web que permite aos usuários buscar códigos postais brasileiros (CEPs) usando um frontend em Vue.js e um backend em PHP. A aplicação é conteinerizada usando Docker para fácil implantação.

## Funcionalidades

- Buscar códigos postais brasileiros (CEPs)
- Exibir informações de endereço com base no CEP pesquisado
- Interface de usuário simples e intuitiva
- Conteinerização usando Docker para configuração e implantação fácil

## Tecnologias Utilizadas

- **Frontend:** Vue.js 3
- **Backend:** PHP 8.1 com Apache
- **Conteinerização:** Docker e Docker Compose

## Começando

### Pré-requisitos

Certifique-se de ter o seguinte instalado em seu sistema:

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

### Instalação

1. Clone o repositório:

    ```bash
    git clone https://github.com/lucassantossouza/cep-search-app.git
    cd cep-search-app
    ```

2. Construa e execute os contêineres Docker:

    ```bash
    docker-compose up --build
    ```

3. Acesse a aplicação:

    - Frontend: [http://localhost:8080](http://localhost:8080)
    - Backend: [http://localhost:8000](http://localhost:8000)

## Estrutura do Projeto

```bash
project-root
├── backend
│   ├── controllers
│   │   └── Cep.controller.php
│   ├── services
│   │   └── Cep.service.php
│   ├── dto
│   │   └── CepResponse.dto.php
│   ├── entities
│   │   ├── Cep.entity.php
│   │   └── index.php
│   │   └── Dockerfile
├── frontend
│   ├── src
│   │   ├── components
│   │   │   ├── HomeComponent.vue
│   │   │   └── CepSearch.vue
│   │   ├── router
│   │   │   └── index.js
│   │   ├── store
│   │   │   └── index.js
│   │   ├── views
│   │   │   └── HomeView.vue
│   │   │   └── CepView.vue
│   │   ├── App.vue
│   │   ├── main.js
│   │   ├── public
│   │   ├── package.json
│   │   ├── Dockerfile
├── docker-compose.yml
├── README.md
```

## Uso

- Navegue até a página inicial.
- Digite um código postal brasileiro (CEP) no campo de entrada.
- Clique no botão "Pesquisar" para buscar e exibir as informações do endereço.

## Contribuindo

Contribuições são bem-vindas! Por favor, sinta-se à vontade para enviar um Pull Request.

## Licença

Este projeto está licenciado sob a licença MIT.

---

Sinta-se à vontade para personalizar este arquivo README.md conforme necessário.


