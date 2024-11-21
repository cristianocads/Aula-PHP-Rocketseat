<h2>Variáveis</h2>


As variáveis são usadas para armazenar dados que podem ser manipulados ao longo do código. Em PHP, as variáveis começam com o símbolo `$`, seguido pelo nome da variável.



### **1. Definindo uma Variável**
Para criar uma variável, basta atribuir um valor a ela com o operador de atribuição `=`.

**Sintaxe básica:**
```php
$nomeDaVariavel = valor;
```

**Exemplo:**
```php
$nome = "João";
$idade = 25;

echo $nome;   // Exibe: João
echo $idade;  // Exibe: 25
```

---

### **2. Tipos de Dados em PHP**
PHP é uma linguagem de tipagem dinâmica, ou seja, você não precisa declarar o tipo de dado da variável explicitamente. O PHP determina automaticamente o tipo com base no valor atribuído.

#### Tipos comuns de dados:
- **Inteiros**: Números inteiros.
- **Ponto flutuante**: Números com casas decimais.
- **Strings**: Sequência de caracteres.
- **Booleanos**: Valores `true` ou `false`.
- **Arrays**: Coleção de valores.
- **Objetos**: Instâncias de uma classe.

**Exemplo:**
```php
$numeroInteiro = 10;        // Tipo inteiro
$numeroDecimal = 10.5;      // Tipo ponto flutuante
$texto = "Olá, Mundo!";     // Tipo string
$booleano = true;           // Tipo booleano
```

---

### **3. Concatenando Strings**
Em PHP, você pode concatenar strings utilizando o operador `.` (ponto).

**Exemplo:**
```php
$nome = "Maria";
$mensagem = "Olá, " . $nome . "!";
echo $mensagem;  // Exibe: Olá, Maria!
```

Ou você pode usar as chaves `{}` dentro de uma string com aspas duplas para inserir uma variável diretamente na string.

**Exemplo:**
```php
$nome = "João";
echo "Olá, {$nome}!";  // Exibe: Olá, João!
```

---

### **4. Variáveis Globais e Locais**
- **Variáveis locais**: São definidas dentro de uma função e só podem ser acessadas dentro dela.
- **Variáveis globais**: São definidas fora de qualquer função e podem ser acessadas de qualquer lugar no código.

**Exemplo de variável local:**
```php
function minhaFuncao() {
    $nomeLocal = "João";  // Variável local
    echo $nomeLocal;
}

minhaFuncao();  // Exibe: João
// echo $nomeLocal; // Erro! Variável local não está acessível fora da função
```

**Exemplo de variável global:**
```php
$nomeGlobal = "Ana";  // Variável global

function outraFuncao() {
    global $nomeGlobal;  // Usando a variável global dentro da função
    echo $nomeGlobal;
}

outraFuncao();  // Exibe: Ana
```

---

### **5. Variáveis Superglobais**
PHP tem algumas variáveis predefinidas chamadas **superglobais**, que podem ser acessadas de qualquer lugar no código, dentro ou fora de funções.

- **$_GET**: Variáveis passadas pela URL (método GET).
- **$_POST**: Variáveis enviadas pelo formulário (método POST).
- **$_SESSION**: Armazena informações durante a sessão.
- **$_COOKIE**: Armazena dados em cookies.
- **$_FILES**: Informações sobre arquivos carregados.
- **$_SERVER**: Informações sobre o servidor e cabeçalhos HTTP.
- **$_ENV**: Variáveis de ambiente.

**Exemplo com $_GET:**
```php
// URL: http://localhost/index.php?nome=Maria
echo $_GET['nome'];  // Exibe: Maria
```

---

### **6. Alterando o Valor de uma Variável**
Você pode alterar o valor de uma variável a qualquer momento no código.

**Exemplo:**
```php
$numero = 5;
echo $numero;  // Exibe: 5

$numero = 10;
echo $numero;  // Exibe: 10
```

---

### **7. Variáveis de Referência**
Quando você passa uma variável por referência, ao alterar o valor de uma delas, a outra também será alterada.

**Exemplo:**
```php
$valor1 = 10;
$valor2 = &$valor1;  // Passando por referência

$valor2 = 20;
echo $valor1;  // Exibe: 20 (ambas as variáveis apontam para o mesmo valor)
```

---

### **Resumo**
- **Variáveis** armazenam dados e são definidas com o símbolo `$`.
- O tipo da variável é determinado pelo valor atribuído.
- **Variáveis globais** podem ser acessadas de qualquer lugar, e **variáveis locais** são limitadas à função onde são definidas.
- Você pode usar **variáveis superglobais** para acessar informações do formulário, da URL, e mais.

**abreviação de echo (< ?=$variavel?>)**
</br>
</br>
</br>

<h2>Condicionais e Booleanos</h2>
No PHP, **condicionais** e **booleanos** são usados para tomar decisões no código com base em condições específicas. Abaixo, explico como usá-los de forma simples:

### 1. **Booleanos**
Um valor booleano pode ser `true` (verdadeiro) ou `false` (falso). Ele é comumente usado em condicionais para decidir se um bloco de código será executado ou não.

#### Exemplos de booleanos:
```php
$verdadeiro = true;  // variável booleana verdadeira
$falso = false;      // variável booleana falsa
```

### 2. **Operadores Lógicos**
Os operadores lógicos ajudam a combinar múltiplas condições. Os mais comuns são:
- **AND**: `&&` ou `and`
- **OR**: `||` ou `or`
- **NOT**: `!`

#### Exemplos de operadores lógicos:
```php
$condicao1 = true;
$condicao2 = false;

// AND
if ($condicao1 && $condicao2) {
    echo "Ambas as condições são verdadeiras.";
} else {
    echo "Pelo menos uma das condições é falsa.";
}

// OR
if ($condicao1 || $condicao2) {
    echo "Pelo menos uma das condições é verdadeira.";
} else {
    echo "Ambas as condições são falsas.";
}

// NOT
if (!($condicao1 && $condicao2)) {
    echo "Pelo menos uma das condições não é verdadeira.";
}
```

### 3. **Estruturas Condicionais**

#### **if**
A estrutura `if` é a mais básica e é usada para testar uma condição.

```php
$idade = 20;

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
```

#### **if-else**
O `else` permite executar um código alternativo se a condição do `if` não for satisfeita.

```php
$idade = 16;

if ($idade >= 18) {
    echo "Você pode votar.";
} else {
    echo "Você não pode votar.";
}
```

#### **elseif**
O `elseif` permite verificar múltiplas condições. Ele é útil quando você tem várias opções para avaliar.

```php
$nota = 7;

if ($nota >= 9) {
    echo "Excelente!";
} elseif ($nota >= 7) {
    echo "Bom!";
} elseif ($nota >= 5) {
    echo "Satisfatório!";
} else {
    echo "Insuficiente!";
}
```

#### **switch**
O `switch` é uma alternativa ao `if-elseif-else` quando você tem várias condições baseadas no valor de uma única variável.

```php
$cor = "vermelho";

switch ($cor) {
    case "azul":
        echo "A cor é azul!";
        break;
    case "vermelho":
        echo "A cor é vermelha!";
        break;
    case "verde":
        echo "A cor é verde!";
        break;
    default:
        echo "Cor desconhecida!";
        break;
}
```

### 4. **Operadores de Comparação**
Os operadores de comparação são usados para comparar valores em condições.

- **`==`**: Igual
- **`===`**: Igual e de mesmo tipo
- **`!=`**: Diferente
- **`<`**: Menor que
- **`>`**: Maior que
- **`<=`**: Menor ou igual
- **`>=`**: Maior ou igual

#### Exemplo de comparação:
```php
$a = 10;
$b = 5;

if ($a > $b) {
    echo "$a é maior que $b";
} else {
    echo "$a não é maior que $b";
}
```

#### Exemplo de comparação com `===` (estritamente igual):
```php
$x = 10;  // inteiro
$y = "10"; // string

if ($x === $y) {
    echo "São iguais e do mesmo tipo.";
} else {
    echo "Ou são diferentes ou de tipos diferentes.";
}
```

### 5. **Booleanos e Operadores Lógicos Combinados**
Você pode combinar variáveis booleanas com operadores lógicos para criar condições mais complexas.

```php
$temperatura = 30;
$chuva = false;

if ($temperatura > 25 && !$chuva) {
    echo "É um bom dia para ir à praia!";
} else {
    echo "Talvez seja melhor ficar em casa.";
}
```



### Resumo dos principais conceitos:

- **Booleanos**: `true` (verdadeiro) e `false` (falso).
- **Condicionais**: `if`, `else`, `elseif` e `switch` são usados para controlar o fluxo de execução com base em condições.
- **Operadores de Comparação**: Usados para comparar valores e determinar a execução de blocos de código.
- **Operadores Lógicos**: `&&` (AND), `||` (OR), `!` (NOT) ajudam a combinar várias condições.

Esses conceitos permitem que você escreva código que toma decisões automaticamente com base nas condições que você define!

</br>



<h2>Arrays</h2> 

Um **array** em PHP é usado para armazenar múltiplos valores em uma única variável, sendo útil quando você precisa trabalhar com coleções de dados. Você pode criar arrays para listas simples, relacionar chaves e valores ou até mesmo criar tabelas (arrays multidimensionais).  

---

### **1. Como Criar um Array**

#### Array Simples (Indexado)  
É a lista mais básica, onde cada elemento tem um índice numérico automático.  
```php
$frutas = ["maçã", "banana", "laranja"]; // Moderno
```
Serve para armazenar valores ordenados, como uma lista de itens.

---

### **2. Tipos de Arrays**  

#### **a) Array Indexado**  
Útil para listas simples com índices automáticos.  
```php
$frutas = ["maçã", "banana", "laranja"];
echo $frutas[0]; // Exibe "maçã"
```

#### **b) Array Associativo**  
Cada valor é associado a uma chave nomeada.  
Serve para organizar informações como pares de chave-valor.  
```php
$idades = ["João" => 25, "Maria" => 30];
echo $idades["Maria"]; // Exibe "30"
```

#### **c) Array Multidimensional**  
Um array dentro de outro array.  
Usado para organizar dados complexos, como uma tabela.  
```php
$produtos = [
    ["nome" => "Notebook", "preco" => 2500],
    ["nome" => "Mouse", "preco" => 100]
];
echo $produtos[0]["nome"]; // Exibe "Notebook"
```

---

### **3. Operações Básicas**

- **Adicionar elementos ao array:**
  ```php
  $frutas[] = "uva"; // Adiciona "uva" no final
  ```

- **Remover elementos:**
  ```php
  unset($frutas[1]); // Remove "banana"
  ```

- **Contar elementos no array:**
  ```php
  echo count($frutas); // Exibe o número de elementos
  ```

---

### **4. Como Percorrer um Array**

#### Com `foreach` (para listas simples):  
```php
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
```

#### Com `foreach` (para chaves e valores):  
```php
foreach ($idades as $nome => $idade) {
    echo "$nome tem $idade anos.<br>";
}
```

---

### **5. Funções Úteis**

#### Ordenar valores no array:  
Serve para reorganizar os dados.  
```php
sort($frutas); // Ordena em ordem crescente
rsort($frutas); // Ordena em ordem decrescente
```

#### Verificar se um valor está no array:  
Útil para buscas.  
```php
if (in_array("banana", $frutas)) {
    echo "Banana está na lista!";
}
```

#### Obter somente as chaves ou valores de um array associativo:  
```php
$chaves = array_keys($idades);
$valores = array_values($idades);
```  

---

**Dica**: Arrays são versáteis e permitem organizar dados para manipulações rápidas e eficientes em PHP!

<br>




<h2>Funções em PHP</h2> 

As funções em PHP são blocos de código reutilizáveis que realizam tarefas específicas. Elas ajudam a organizar e simplificar o código.



### **1. Criando uma Função**
Para criar uma função, usamos a palavra-chave `function`. 

**Sintaxe básica:**
```php
function nomeDaFuncao() {
    // Código a ser executado
}
```

**Exemplo:**
```php
function digaOla() {
    echo "Olá, mundo!";
}

digaOla(); // Chama a função e exibe: Olá, mundo!
```

---

### **2. Funções com Parâmetros**
Os parâmetros permitem passar valores para a função, tornando-a mais flexível.

**Exemplo:**
```php
function saudacao($nome) {
    echo "Olá, $nome!";
}

saudacao("Maria"); // Exibe: Olá, Maria!
saudacao("João");  // Exibe: Olá, João!
```

---

### **3. Funções com Valor de Retorno**
As funções podem retornar um valor usando a palavra-chave `return`.

**Exemplo:**
```php
function soma($a, $b) {
    return $a + $b;
}

$resultado = soma(5, 3);
echo $resultado; // Exibe: 8
```

---

### **4. Parâmetros com Valor Padrão**
Podemos definir valores padrão para os parâmetros.

**Exemplo:**
```php
function bemVindo($nome = "Visitante") {
    echo "Bem-vindo, $nome!";
}

bemVindo();           // Exibe: Bem-vindo, Visitante!
bemVindo("Ana");      // Exibe: Bem-vindo, Ana!
```

---

### **5. Funções Anônimas**
São funções sem nome que podem ser atribuídas a variáveis.

**Exemplo:**
```php
$minhaFuncao = function($nome) {
    return "Olá, $nome!";
};

echo $minhaFuncao("Pedro"); // Exibe: Olá, Pedro!
```

---

### **6. Funções Recursivas**
Funções que chamam a si mesmas.

**Exemplo:**
```php
function fatorial($numero) {
    if ($numero == 1) {
        return 1;
    }
    return $numero * fatorial($numero - 1);
}

echo fatorial(5); // Exibe: 120
```

---

### **Resumo**
- **Funções ajudam a evitar repetição de código.**
- **Podem receber parâmetros para trabalhar com dados.**
- **Podem retornar valores para reutilização.**
- **Flexíveis e fáceis de implementar.**
</br>
</br>
</br>
