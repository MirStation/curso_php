Exercícios de Fixação

1 - Faça um teste criando dois objetos da classe Conta. Exiba o valor do
atributo contador depois da criação de cada objeto.

```
conta1
		imprime contador

conta2
		imprime contador
```
2 - Altere a classe Conta. O atributo contador deve ser um
atributo de classe. Então, adicione o modificador static nesse
atributo. Além disso, no construtor, acesse o atributo contador com o
self e não com a variável this.

```
static contador

contrutor
  self contador++
```

3 - Teste a variável static contador. Acesse o atributo contador através do
nome da classe e não através das variáveis locais que armazenam referências de
objetos do tipo Conta. Além disso, exiba o valor do atributo
contador antes dos objetos da classe Conta serem criados.

```
imprime contador

Conta1

imprime contador

Conta2

imprime contador
```

4 - O contador de contas pode ser utilizado para gerar um número único para cada
conta. Acrescente na classe Conta um atributo de instância para guardar
os números das contas. Implemente no construtor a lógica para gerar esses
números de forma única através do contador de contas.

```
Conta
  static int contador;
  int numero;

	construtor
		self contador++
```
5 - Exiba no Console os números das contas.

```

imprime contador

Conta1
imprime numero
imprime contador

Conta2
imprime numero
imprime contador
```
6 - Adicione um método de classe na classe Conta para zerar o contador e
exibir o total de contas anterior.

```
static zeraContador
	imprime contador
	contador 0
```

7 - Utilize o método zeraContador
```
imprime contador

Conta1
  imprime numero

  imprime contador

Conta2
  imprime numero

	imprime contador
  zeraContador
```
