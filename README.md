# Agenda de consultas médicas
Sistema com as funcionalidades de uma agenda para consultas médicas.

## Tecnologias
- HTML
- CSS
- Bootstrap
- PHP
- MariaDB

## SQL - Banco de dados
### Criação do banco de dados
```sql
CREATE DATABASE db_consultorio;
```

### Criação da tabela agenda
```sql
CREATE TABLE `tb_agenda` (
    `nome` VARCHAR(80) NOT NULL ,
    `telefone` VARCHAR(20) NOT NULL ,
    `idade` INT NOT NULL ,
    `sintomas` VARCHAR(350) NOT NULL ,
    `data` DATE NOT NULL ,
    `hora` TIME NOT NULL ,
    `medico` VARCHAR(80) NOT NULL
);
```