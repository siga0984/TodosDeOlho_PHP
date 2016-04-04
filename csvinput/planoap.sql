use conveniomysql;

select 'Dropando tabela de Plano de Aplicação Detalhado' AS '';

DROP TABLE IF EXISTS PLANOAP;

select 'Criando tabela de Plano de Aplicação Detalhado' AS '';

CREATE TABLE PLANOAP (
TP_DESPESA		varchar(30)	NOT NULL,
TX_NATUREZAAQUISICAO	varchar(30)	NOT NULL,
TX_DESCRICAODESPESA	varchar(255)	NOT NULL,
CD_NATUREZADESPESA	varchar(8)	NOT NULL,
NM_NATUREZADESPESA	varchar(45)	NOT NULL,
QD_NATUREZADESPESA	varchar(17)	NOT NULL,
VL_UNITARIO		float(18,2)	NOT NULL,
VL_TOTAL		float(18,2)	NOT NULL,
TX_UNIDADEFORNECIMENTO	varchar(150)	NOT NULL,
TX_SITUACAODESPESA	varchar(20)	NOT NULL,
ID_CONVENIO		int(6)	NOT NULL,
ID_PROPOSTA		int(7)	NOT NULL
);

