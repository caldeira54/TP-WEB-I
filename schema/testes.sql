select *
from vendaavista
where idVendaAVista = 7;

select * 
from produtosdavenda
where idVendaAVista = 7;

select idNotaPromissoria, f.nome, preco, dataCompra, dataPagamento
from notapromissoria as np
inner join fornecedor as f on f.idFornecedor = np.idFornecedor;

select idEstoque, f.nome as fornecedor, e.nome, preco, quantidade
from estoque as e
inner join fornecedor as f on f.idFornecedor = e.idFornecedor;

select p.idEstoque, e.nome as estoque, f.nome as produto, p.preco
from produto as p
inner join funcionario as f on f.idFuncionario = p.idFuncionario
inner join estoque as e on e.idEstoque = p.idEstoque;

select idVendasDiarias, f.nome, data, valor
from vendasdiarias as vd
inner join funcionario as f on f.idFuncionario = vd.idFuncionario;

select *
from produtosDaVendaAPrazo
where idVendaAPrazo = 1;

select *
from vendaaprazo
where ativa = 1;

select *
from vendaaprazo
where ativa = 0;

update vendaaprazo
set ativa = 0
where idVendaAPrazo = 2;

select usuario, senha
from funcionario
where usuario = 'admin' and senha = 'admin';

update estoque
set quantidade = quantidade - 1
where idEstoque = 1;

update produtosdavendaaprazo as pvp
inner join vendaAPrazo as va on va.idVendaAPrazo = pvp.idVendaAPrazo
set pvp.quantidade =+ 1, va.valor = va.valor + 4
where pvp.idEstoque = 2 and pvp.idVendaAPrazo = 3;

select * from vendaaprazo where ativa = 1;

select * from produtosdavendaaprazo where idVendaAPrazo = 3;

update produtosdavendaaprazo as pvp
inner join vendaAPrazo as va on va.idVendaAPrazo = pvp.idVendaAPrazo
set pvp.quantidade = pvp.quantidade - 1, va.valor = va.valor - 4
where pvp.idEstoque = 2 and pvp.idVendaAPrazo = 3;

select * from notapromissoria where ativa = 1;

update notapromissoria
set ativa = 0
where idNotaPromissoria = 2;

select * 
from produtosdavendaaprazo
where idvendaAPrazo = 3;

update produtosdavendaaprazo as pvp
inner join vendaAPrazo as va on va.idVendaAPrazo = pvp.idVendaAPrazo
set pvp.quantidade = pvp.quantidade + 1, va.valor = va.valor + 4
where pvp.idEstoque = 2 and pvp.idVendaAPrazo = 6;

select idVendaAPrazo, e.nome, pvp.quantidade, valor
from produtosdavendaaprazo as pvp
inner join estoque as e on e.idEstoque = pvp.idEstoque
where idVendaAPrazo = 6;

select *
from estoque
where idEstoque = 7;

delimiter $
create trigger baixaEstoque after update
on estoque
for each row 
begin
	update estoque
	set quantidade = quantidade - new.quantidade
	where idEstoque = old.idEstoque;
end $
delimiter ;

drop trigger baixaEstoque;

select preco 
from produto
where idEstoque = 5;

select * from estoque order by idEstoque;