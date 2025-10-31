/* Lógico_1: */
CREATE DATABASE db_musica;
go

USE db_musica;
go

CREATE TABLE MUSICA (
    nome_musica VARCHAR(50),
    estilo_musica VARCHAR(50),
    mes_ano_lancto INTEGER,
    cod_musica INTEGER PRIMARY KEY

);

CREATE TABLE CANTOR (
    cod_cantor INTEGER PRIMARY KEY,
    nome_cantor VARCHAR(50),
);

CREATE TABLE COMPOSITOR (
    cod_compositor INTEGER PRIMARY KEY,
    nome_compositor VARCHAR(50),
);

CREATE TABLE CANTOR_MUSICA (
    cod_musica INTEGER,
    cod_cantor INTEGER,
    PRIMARY KEY (cod_musica, cod_cantor)
);

CREATE TABLE COMPOSITOR_MUSICA (
    cod_compositor INTEGER,
    cod_musica INTEGER,
    PRIMARY KEY (cod_compositor, cod_musica)
);
alter table compositor
drop column data_nascimento;

alter table compositor
drop column pais_origem;

alter table musica
alter column nome_musica VARCHAR(50);

alter table musica
alter column estilo_musica VARCHAR(50);
