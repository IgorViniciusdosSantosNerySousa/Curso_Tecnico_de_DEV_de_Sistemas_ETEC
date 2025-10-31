use db_musica;
go
--incluir dados na tabela de Cantor--
insert into CANTOR
(cod_cantor, nome_cantor)
values
(123, 'Freddie Mercury'),
(369, 'Tim Maia'),
(147, 'Michael Jackson'),
(148, 'James Hetfield'),
(154, 'Corey Taylor');

--consultar dados--
select*from CANTOR;

insert into COMPOSITOR
(cod_compositor, nome_compositor)
values
(214, 'Prince'),
(235, 'Steve Wonder'),
(420, 'Bob Marley'),
(764, 'John Lennon'),
(864, 'Ice Cube');

select * from COMPOSITOR;

use db_musica

insert into MUSICA
(nome_musica, estilo_musica, mes_ano_lancto, cod_musica)
values
('Faded', 'Eletrônica', 082014, 123);
  
select * from MUSICA;

