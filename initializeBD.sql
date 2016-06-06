
--
-- Banco de Dados: `sqlstudy`
--

DROP TABLE IF EXISTS `DOADOR`;
DROP TABLE IF EXISTS `ENTIDADE`;
DROP TABLE IF EXISTS `EVENTO`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `DOADOR`
--

CREATE
  TABLE IF NOT EXISTS `DOADOR`
  (
    ID		            INTEGER NOT NULL AUTO_INCREMENT,
    TIPOSANGUE          VARCHAR (2) COLLATE utf8_unicode_ci NOT NULL ,
    RHSANGUE			CHAR (1) COLLATE utf8_unicode_ci NOT NULL ,
    PESO       			BOOLEAN NOT NULL ,
    CIDADE      		VARCHAR (100) COLLATE utf8_unicode_ci NOT NULL ,
    NOME				VARCHAR (100) COLLATE utf8_unicode_ci NOT NULL ,
    IDFACEBOOK			VARCHAR (100) COLLATE utf8_unicode_ci NOT NULL ,
    LINKFACEBOOK			VARCHAR (100) COLLATE utf8_unicode_ci NOT NULL ,
    PRIMARY KEY ( ID )
   ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ENTIDADE`
--

CREATE
  TABLE IF NOT EXISTS `ENTIDADE`
  (
    ID     				INTEGER		  NOT NULL AUTO_INCREMENT,  
    PASSWORD			VARCHAR (100) COLLATE utf8_unicode_ci NOT NULL ,  
    EMAIL			VARCHAR (100) COLLATE utf8_unicode_ci NOT NULL ,
    CIDADE      		VARCHAR (100) COLLATE utf8_unicode_ci NOT NULL ,
    NOME				VARCHAR (100) COLLATE utf8_unicode_ci NOT NULL ,
    IDFACEBOOK			VARCHAR (100) COLLATE utf8_unicode_ci NOT NULL ,
    LINKFACEBOOK		VARCHAR (100) COLLATE utf8_unicode_ci NOT NULL ,
    CNPJ				VARCHAR (18) COLLATE utf8_unicode_ci ,
    DESCRICAO			VARCHAR (500)	COLLATE utf8_unicode_ci  ,
    PRIMARY KEY ( ID )
  ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- --------------------------------------------------------

--
-- Estrutura da tabela `EVENTO`
--

CREATE
  TABLE IF NOT EXISTS `EVENTO`
  (
    ID     				INTEGER		  NOT NULL AUTO_INCREMENT,  
    NOME			VARCHAR (100) COLLATE utf8_unicode_ci NOT NULL ,
    CIDADE      		VARCHAR (100) COLLATE utf8_unicode_ci NOT NULL ,
    RUA				VARCHAR (100) COLLATE utf8_unicode_ci NOT NULL ,
    BAIRRO			VARCHAR (100) COLLATE utf8_unicode_ci NOT NULL ,
    NUMERO				INTEGER		  NOT NULL ,
    COMPLEMENTO			VARCHAR (100) COLLATE utf8_unicode_ci NOT NULL ,
    DESCRICAO			VARCHAR (500)	COLLATE utf8_unicode_ci  ,
    LINKFACEBOOK		VARCHAR (100) COLLATE utf8_unicode_ci NOT NULL ,
    PRIMARY KEY ( ID )
  ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

