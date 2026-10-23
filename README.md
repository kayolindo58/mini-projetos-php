# 🐘 Mini Projetos PHP

Repositório de mini projetos e exercícios desenvolvidos durante meus estudos de **desenvolvimento Full Stack na Coude**. O objetivo é colocar em prática os fundamentos do PHP, desenvolver a lógica de programação e aprimorar minhas habilidades como desenvolvedor.

## 📂 Projetos

### 🧮 1. Calculadora Protótipo

**Arquivo:** `calculadora prototipo/indexadas.php`

Protótipo de uma calculadora desenvolvida em PHP, com a proposta de realizar operações matemáticas básicas a partir da escolha do usuário.

**Funcionalidades planejadas:**
- Adição;
- Subtração;
- Multiplicação;
- Divisão;
- Seleção de operações por meio de um menu.

**Conceitos estudados:**
- Funções e parâmetros;
- Operadores aritméticos;
- Estrutura condicional `switch`;
- Entrada e saída de dados.

> **Status:** protótipo em desenvolvimento. A implementação atual precisa de ajustes na leitura das entradas e na execução das operações para funcionar corretamente.

### 💻 2. Desafios de Fundamentos do PHP

**Arquivo:** `demonstração de php desafios/desafioaula6.php`

Conjunto de exercícios práticos para desenvolver conhecimentos essenciais da linguagem PHP.

**Exercícios incluídos:**

- **Desafio 1 — Perfil pessoal:** apresentação de informações como nome, idade, cidade e curso.
- **Desafio 2 — Loja e produtos:** utilização de constantes para representar informações de uma loja, categorias e produtos.
- **Desafio 3 — Compra e desconto:** cálculo do subtotal de uma compra e aplicação de condições relacionadas a preços e descontos.
- **Desafio 4 — Tipos de dados:** demonstração de strings, inteiros, números decimais, conversão de tipos e comparação estrita.
- **Desafio 5 — Entrada de dados:** coleta de informações do usuário, como nome, idade e linguagem de programação favorita.
- **Desafio 6 — Nota e frequência:** utilização de condições para classificar resultados acadêmicos.

**Conceitos estudados:**
- Variáveis e constantes;
- Tipos de dados;
- Operadores aritméticos e relacionais;
- Conversão de tipos;
- Entrada e saída de dados;
- Estruturas condicionais (`if`, `elseif` e `else`).

### 🔄 3. Estruturas de Repetição

**Arquivo:** `for foreach while/index.php`

Exercício dedicado à prática das estruturas de repetição disponíveis no PHP, utilizadas para executar instruções repetidamente.

**Conteúdo:**
- **`for`:** repetição controlada por contador numérico.
- **`foreach`:** iteração sobre os elementos de um array.
- **`while`:** demonstração de uma estrutura de repetição baseada em condição.

**Conceitos estudados:**
- Laços de repetição;
- Arrays;
- Contadores e condições;
- Iteração sobre coleções;
- Controle do fluxo de execução.

> **Observação:** o exemplo com `while` precisa de ajustes na condição ou no controle da repetição, pois pode gerar um loop infinito.

### 🧩 4. Funções e Inclusão de Arquivos

**Pasta:** `php associativo/`

Projeto que demonstra como organizar funções em arquivos separados e reutilizar esse código em outros scripts PHP.

**Arquivos incluídos:**

- **`aula8.php`:** declaração da função `condition($dinheiro)`, que verifica se um valor é maior ou igual a 700 e apresenta uma mensagem correspondente.
- **`panois.php`:** inclusão do arquivo `aula8.php` por meio de `include` e chamada da função com diferentes valores.

**Conceitos estudados:**
- Declaração e chamada de funções;
- Parâmetros;
- Estruturas condicionais;
- Inclusão de arquivos com `include`;
- Reutilização e organização de código.

## 🛠️ Tecnologias utilizadas

- **PHP** — linguagem principal dos exercícios.
- **Terminal** — execução dos scripts e interação com o usuário.
- **Visual Studio Code** — ambiente de desenvolvimento.

## ⚙️ Como executar os projetos

### 1. Instale o PHP

Instale o PHP em seu computador e verifique se ele está disponível no terminal:

```bash
php -v
```

Você pode obter o PHP em [php.net](https://www.php.net/downloads.php).

### 2. Clone o repositório

```bash
git clone https://github.com/kayolindo58/mini-projetos-php.git
```

### 3. Entre na pasta dos projetos

```bash
cd mini-projetos-php
```

Se os exercícios estiverem dentro de uma pasta chamada `php mini projetos`, entre nela:

```bash
cd "php mini projetos"
```

### 4. Execute o arquivo desejado

Exemplo de execução:

```bash
php "for foreach while/index.php"
```

Para executar os outros exercícios:

```bash
php "calculadora prototipo/indexadas.php"
php "demonstração de php desafios/desafioaula6.php"
php "php associativo/panois.php"
```

Os comandos pressupõem que o terminal esteja na pasta que contém os diretórios dos exercícios. Ajuste os caminhos caso a estrutura do repositório seja diferente.

**Importante:** os exemplos que utilizam `readline()` devem ser executados pelo terminal, em um ambiente PHP que ofereça suporte a essa função.

## 🎯 Objetivo do repositório

Este repositório documenta minha evolução no aprendizado de programação, reunindo exercícios práticos que ajudam a consolidar a lógica de programação e os fundamentos do PHP como parte da minha formação em desenvolvimento Full Stack.

## 👨‍💻 Autor

**Kayo Julian**

- GitHub: [@kayolindo58](https://github.com/kayolindo58)
- Formação: Desenvolvimento Full Stack — Coude

---

*Repositório educacional em desenvolvimento contínuo.*
