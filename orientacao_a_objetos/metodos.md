Exercícios de Fixação

1 - Acrescente alguns métodos na classe Conta para realizar as
operações de deposito, saque, impressão de extrato e consulta do saldo
disponível.

```
Conta
	numero
	saldo
	limite 100
	Agencia agencia


deposita  valor
saca  valor

imprimeExtrato
consultaSaldoDisponivel
```

2 - Teste os métodos da classe Conta
```
conta
		deposita 1000
		imprimeExtrato

		saca 100
		imprimeExtrato

		consultaSaldoDisponivel
		imprime saldoDisponivel
```
3 - Adicione na classe Funcionario dois métodos: um para aumentar o salário
e outro para consultar os dados dos funcionários.

```
Funcionario
	nome
	salario

  aumentaSalario valor
  consultaDados
```
4 - Teste os métodos da classe Funcionario.

```
Funcionario
  nome Rafael Cosentino
  salario 1000

	imprime consultaDados

	aumentaSalario 100

	imprime consultaDados
```
