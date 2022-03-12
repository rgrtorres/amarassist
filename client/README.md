# Agenda

## Instalação do projeto
```
npm install
```

### Compilar e usar hot-reload em ambiente de desenvolvimento
```
npm run serve
```

### Compilar e minificar projeto
```
npm run build
```

### Verificar qualidade do código
```
npm run lint
```

### Configurar API a ser consumida (src/services/api.js)
```javascript
const api = axios.create({
    baseURL: "<url da api>"
})
```