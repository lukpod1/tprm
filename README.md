# Projeto T.P.R.M

Esse sistema web foi desenvolvida para ser avaliado como Projeto de Estágio da Bernhoeft. 

## Tecnologias e Ferramentas Utilizadas

* XAMPP - servidor web para o uso na base de dados MySQL
* VS CODE - editor de código
* PHP - linguagem de programação
* CodeIginiter - framework de desenvolvimento de aplicações em PHP 

## Código

Todo código da aplicação se encontra na pasta application -> controllers, models e views.

![captura de tela 762 _li](https://user-images.githubusercontent.com/30981427/51224397-68d7c900-1924-11e9-9c26-c2c5ec350d32.jpg)

## Requisitos para executar a aplicação

### Baixando o repositorio

Para baixar o projeto, clique no botão Download depois no botão Download ZIP

![captura de tela 753 _li](https://user-images.githubusercontent.com/30981427/51222034-a33c6880-191a-11e9-96c9-3dcc3093cd1b.jpg)

Depois de baixar o ZIP do projeto extraia a pasta tprm-master e renomeia a mesma para tprm.

![captura de tela 755](https://user-images.githubusercontent.com/30981427/51222206-80f71a80-191b-11e9-82d8-3327b2716594.png)

### Configurando o XAMPP

Caso não possua o XAMPP clique [aqui para baixar o XAMPP](https://www.apachefriends.org/pt_br/index.html) e instale.

Depois de baixar e instalar o XAMPP abra a pasta "xampp" onde foi instalado na sua maquina.

![captura de tela 747](https://user-images.githubusercontent.com/30981427/51217825-6ff0de00-1908-11e9-97df-6d771e86c9d5.png)

na minha maquina esta em "C:\xampp"

Dentro da pasta xampp, abra a pasta htdocs, e mova a pasta tprm para a pasta htdocs

![captura de tela 750](https://user-images.githubusercontent.com/30981427/51221718-6d4ab480-1919-11e9-8435-b0558b48a34c.png)

### Rodando a aplicação

Abra o xampp e inicio o servidor Apache e o MySQL

![captura de tela 751](https://user-images.githubusercontent.com/30981427/51221826-dcc0a400-1919-11e9-932c-44ffcbd11c6e.png)

em seu navegador digite na barra de endereço "http://localhost/phpmyadmin/"

![captura de tela 756](https://user-images.githubusercontent.com/30981427/51223578-15b04700-1921-11e9-9d71-0c8993de910a.png)

clique no "New" e digite o nome do banco de dados "tprm"

![captura de tela 758 _li](https://user-images.githubusercontent.com/30981427/51223691-9707d980-1921-11e9-8975-e808d4f83a8d.jpg)

depois de ter criado o banco, clique no tprm e depois na aba SQL

![captura de tela 759](https://user-images.githubusercontent.com/30981427/51223817-2d3bff80-1922-11e9-9b64-8649db3178de.png)

e no campo de comandos execute as seguintes querys

```
create table usuarios(
		id integer AUTO_INCREMENT PRIMARY KEY,
    nome varchar(255),
    email varchar(255),
    senha varchar(255)
);

create table clientes(
		id integer AUTO_INCREMENT PRIMARY KEY,
    nome varchar(255),
    email varchar(255),
    cpf varchar(255),
    telefone varchar(255),
    endereco varchar(255),
    usuario_id integer
);

insert into usuarios VALUES(1, "Admin", "admin@admin.com", "123");

insert into clientes VALUES(1, "João", "joao@gmail.com", "123.456.789-10", "(68)4178-8539", "Rua Maravilha, Nº 256" , 1);
insert into clientes VALUES(2, "Maria", "maria@gmail.com", "583.416.700-18", "(82)2749-6374", "Rua Muito animada, Nº 13", 1);
insert into clientes VALUES(3, "Paulo", "paulo@gmail.com", "023.656.001-59", "(97)6392-6489", "Rua do Sol, Nº 65", 1);
insert into clientes VALUES(4, "Lucas", "lucas@gmail.com", "673.556.643-34", "(81)8746-6388", "Rua 13 de Maio, Nº 7", 1);
insert into clientes VALUES(5, "Roberta", "roberta@gmail.com", "333.456.908-25", "(92)9468-7353", "Rua Massa, Nº 2", 1);
```
abra outra aba no navegador e na barra de endereço digita "localhost/tprm"

![captura de tela 752](https://user-images.githubusercontent.com/30981427/51221906-1ee9e580-191a-11e9-9da9-8497b21e88af.png)

e agora você vera a tela inicial do sistema

![captura de tela 746](https://user-images.githubusercontent.com/30981427/51221918-31641f00-191a-11e9-8f1f-81a855fdc05c.png)

no campo de Email digite:

```
admin@admin.com
```

no campo de senha digite:

```
123
```
e veja a Home do sistema
![captura de tela 760](https://user-images.githubusercontent.com/30981427/51224066-1c3fbe00-1923-11e9-81f4-fd83af9f7e3f.png)
