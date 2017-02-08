Exercícios de Fixação

1 - Defina um vínculo entre os objetos que representam os clientes e os objetos que
representam os cartões de crédito. Para isso, você deve alterar a
classe CartaoDeCredito.

```
CartaoDeCredito
	numero
	dataDeValidade
  Cliente cliente
```
2 - Teste o relacionamento entre clientes e cartões de crédito.

```
nome Rafael Cosentino
codigo 123

numero 111111
dataDeValidade 12/12/18

cartao -> cliente = cliente

imprimir os dados do cliente do cartao  
```

3 - Defina um vínculo entre os objetos que representam as agências e os objetos que
representam os contas.

```
Conta
	numero
	saldo
	limite = 100
  Agencia agencia
```

4 - Teste o relacionamento entre contas e agências.

```
agencia
  numero  178

conta
  numero 123
  saldo 1000.0
  limite 500

conta -> agencia = agencia

imprimir os dados da agencia
```
5 - Defina um vínculo entre os alunos e as turmas, criando na classe Aluno
um atributo do tipo Turma.

```
Aluno
	nome
	rg
	dataNascimento
  Turma turma
```
6 - Teste o relacionamento entre os alunos e as turmas, criando um objeto de cada
classe e alterando os valores dos atributos desses objetos. Exiba na Console os
valores que estão nos atributos da turma através do aluno.

```
turma
  periodo Manha
  serie = 5
  sigla B
  tipoDeEnsino Fundamental

aluno
  nome Rafael Cosentino
  dataNascimento 30/10/1984
  rg 11111111

aluno -> turma = turma

imprimir os dados da turma do aluno
```
