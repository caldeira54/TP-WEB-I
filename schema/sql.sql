set sql_safe_updates = 0;

select * from fornecedor;

select * from notaPromissoria;

select * from estoque;

select * from produto;

select * from vendaavista;

#delete from vendaavista;

select * from produtosDaVenda;

#delete from produtosDaVenda;

select * from vendasdiarias;

select * from vendaaprazo;

select * from produtosdavendaaprazo;

select * from funcionario;

insert into funcionario(nome, usuario, senha) values ('Arthur', 'admin', 'admin');