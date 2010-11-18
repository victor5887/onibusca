CREATE TABLE IF NOT EXISTS `cadastros` (
  `nomeCompleto` varchar(100) NOT NULL,
  `email` char(80) NOT NULL,
  `dataHora` date NOT NULL,
  `curso` varchar(50) NOT NULL,
  `periodoInicial` date NOT NULL,
  `periodoFinal` date NOT NULL,
  `docente` varchar(50) NOT NULL,
  `orgGeral` char(7) default NULL,
  `dias` varchar(7) default NULL,
  `horarios` varchar(7) default NULL,
  `instalacoes` varchar(7) default NULL,
  `recursosDidaticos` varchar(7) default NULL,
  `conteudo` varchar(7) default NULL,
  `docente_opiniao` varchar(7) default NULL,
  `expectativas` varchar(7) default NULL,
  `sugestao` varchar(255) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
