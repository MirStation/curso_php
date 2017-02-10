Exercícios de Fixação

1 - Defina uma classe chamada Funcionario para modelar os funcionários de
um banco. Todo funcionário possui nome e salário.

```
Funcionario
	nome
	salario
```

2 - Crie uma classe para cada tipo específico de funcionário herdando da
classe Funcionario. Considere apenas três tipos específicos de
funcionários: gerentes, telefonistas e secretarias. Os gerentes possuem um nome
de usuário e uma senha para acessar o sistema do banco. As telefonistas possuem
um código de estação de trabalho. As secretarias possuem um número de ramal.

```
Gerente extends Funcionario
	usuario
	senha

Telefonista extends Funcionario
	estacaoDeTrabalho

Secretaria extends Funcionario
	private int ramal
```

3 - Teste o funcionamento dos três tipos de funcionários criando um objeto
de cada uma das classes: Gerente, Telefonista e
Secretaria.

```
Gerente
		nome Rafael Cosentino
		salario 2000
		usuario rafael.cosentino
		senha 12345

Telefonista
		nome Carolina Mello
		salario 1000
		estacaoDeTrabalho 13

Secretaria
		nome Tatiane Andrade
		salario 1500
		ramal 198

		imprime GERENTE
		imprime nome
		imprime salario
		imprime usuario
		imprime senha

		imprime TELEFONISTA
		imprime nome
		imprime salario
		imprime estacaoDeTrabalho

		imprime SECRETARIA
		imprime Nome
		imprime salario
		imprime ramal
```
4 - Suponha que todos os funcionários recebam uma bonificação de 10% do salário.
Acrescente um método na classe Funcionario para calcular essa
bonificação.

```
Funcionario
	nome
	salario

  calculaBonificacao
    salario * 0.1
```
5 - Exiba a bonificação de cada funcionário, além dos dados que já foram impressos. Depois, execute o teste
novamente.

```
Gerente
		nome Rafael Cosentino
		salario 2000
		usuario rafael.cosentino
		senha 12345

Telefonista
		nome Carolina Mello
		salario 1000
		estacaoDeTrabalho 13

Secretaria
		nome Tatiane Andrade
		salario 1500
		ramal 198

		imprime GERENTE
		imprime nome
		imprime salario
		imprime usuario
		imprime senha
		imprime calculaBonificacao

		imprime TELEFONISTA
		imprime nome
		imprime salario
		imprime estacaoDeTrabalho
		imprime calculaBonificacao

		imprime SECRETARIA
		imprime Nome
		imprime salario
		imprime ramal
		imprime calculaBonificacao
```

6 - Suponha que os gerentes recebam uma bonificação maior que os outros
funcionários. Reescreva o método calculaBonificacao na classe Gerente.

```
Gerente extends Funcionario
	usuario
	senha

  calculaBonificacao
    salario * 0.6 + 100;
```
7 - Execute novamente e veja os valores das bonificações

  
