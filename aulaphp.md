<h2>Variáveis</h2>
São estruturas salvas dentro do arquivo. Para sua utilização no php, inicia-se com $, exemplo:

$nomedavariavel = "variavel entre aspas";

para utilizá-la, basta replicar o comando $nomedavariavel, exemplo:

echo $nomedavariavel;

** Para concatenar, utiliza-se o ponto "."

abreviação de echo (< ?=$variavel?>)

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

---

### Resumo dos principais conceitos:

- **Booleanos**: `true` (verdadeiro) e `false` (falso).
- **Condicionais**: `if`, `else`, `elseif` e `switch` são usados para controlar o fluxo de execução com base em condições.
- **Operadores de Comparação**: Usados para comparar valores e determinar a execução de blocos de código.
- **Operadores Lógicos**: `&&` (AND), `||` (OR), `!` (NOT) ajudam a combinar várias condições.

Esses conceitos permitem que você escreva código que toma decisões automaticamente com base nas condições que você define!