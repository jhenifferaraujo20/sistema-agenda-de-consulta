# Agenda de consultas médicas
Sistema com as funcionalidades de uma agenda para consultas médicas.

## Tecnologias
- HTML
- CSS
- Bootstrap
- PHP
- MySql

## Tabelas
```
CREATE TABLE tb_agenda(
nome VARCHAR(80) NOT NULL,
telefone VARCHAR(20) NOT NULL,
idade INT NOT NULL,
sintomas VARCHAR(350) NOT NULL,
datas DATE NOT NULL,
hora TIME NOT NULL,
medico VARCHAR(80) NOT NULL
);

```