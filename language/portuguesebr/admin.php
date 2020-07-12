<?php
// $Id: admin.php,v 1.2 2007/05/04 18:56:00 andrew Exp $
//  ------------------------------------------------------------------------ //
//  Author: Andrew Mills                                                     //
//  Email:  ajmills@sirium.net                                               //
//	About:           //
//                                                                           //
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //


/**
* Admin navbar
*/
define("_AM_AMHTERR_GENERALSET",	"Preferencias");
define("_AM_AMHTERR_GOTOMOD",		"Ir para o modulo");
define("_AM_AMHTERR_HELP",			"Ajuda");
define("_AM_AMHTERR_ABOUT",			"Sobre");
define("_AM_AMHTERR_MODULEADMIN",	"admin:");
define("_AM_AMHTERR_INDEX",			"Index");
define("_AM_AMHTERR_ERROR",			"Mensagens de erro");


/**
* Form captions
*/
define("_AM_AMHTERR_FRMTTLCAP",		"Código dos erros:");
define("_AM_AMHTERR_FRMCAPHDRID",	"ID");
define("_AM_AMHTERR_FRMCAPHDRTTL",	"Titulo");
define("_AM_AMHTERR_FRMCAPERRNUM",	"Erro No.");
define("_AM_AMHTERR_FRMCAPNOERRS",	"Nenhum código de erro definido");
define("_AM_AMHTERR_STATUSSHOW",	"Status: Publicado");
define("_AM_AMHTERR_STATUSHIDE",	"Status: Oculto");
define("_AM_AMHTERR_FRMCAPLNKEDT",	"Click para Editar");
define("_AM_AMHTERR_FRMCAPLNKDLT",	"Click para Apagar");
define("_AM_AMHTERR_CAPDSPLY",		"Mostrar:");
define("_AM_AMHTERR_CAPDSPLYTXT",	"&nbsp;Selecione para mostrar.");

define("_AM_AMHTERR_CAPTTL",		"Titulo:");
define("_AM_AMHTERR_CAPERRNUM",		"Erro No:");
define("_AM_AMHTERR_CAPMAINTXT",	"Mensagem:");


/**
* errors.php
*/
define("_AM_AMHTERR_ENTCAPADD",		"Adicionar novo código de erro:");
define("_AM_AMHTERR_ENTCAPEDIT",	"Editar código erro:");
define("_AM_AMHTERR_ENTCAPSAVE",	"Salvar");
define("_AM_AMHTERR_CODEEXISTS",	"Esse código de erro já existe!");


/**
* Misc
*/
define("_AM_AMHTERR_DBUPDATED",		"Banco de Dados atualizado!");
define("_AM_AMHTERR_DBNOUPDATED",	"Banco de Dados não foi atualizado!");
define("_AM_AMHTERR_DBCONFMDEL",	"Tem certeza de que deseja excluir este item?");


/**
* index.php
*/
define("_AM_AMHTERR_INTRO",		"&nbsp;Informação&nbsp;");

define("_AM_AMHTERR_INFO",		"<strong>Apos instalar:</strong> vai em <strong>administração de modulos</strong> e procure o modulo <strong>AM HTError</strong> e em Ordem coloque o nº0(zero) para ele não poder ser visualizado no menu
e salve, depois vei em <strong>Preferencias de Grupos</strong> e de permissão de acesso para os usuários, para eles possam visualizar a pagina de erros quando não estão logados<br><p><strong>Por favor veja que:</strong> Este módulo exige que o servidor suporte arquivos .htaccess. E que você tem que adicionar o codigo, customizando o redirecionamento de mensagens de erro.</p>
");

define("_AM_AMHTERR_FILECHK",		"<b>Verificando a existência do arquivo .htaccess:</b><br />");
define("_AM_AMHTERR_FILEEXISTS",	"<span style=\"color: green; font-weight: bold;\">OK</span>");
define("_AM_AMHTERR_FILENOEXIST",	"<span style=\"color: red; font-weight: bold;\">O arquivo <b>.htaccess</b> não existe - adicione esse arquivo com as seguintes linhas abaixo</span>");
define("_AM_AMHTERR_ADDCODE",		"Você terá que adicionar manualmente as seguintes linhas ao arquivo <b>.htaccess</b> em seu diretório raiz, para que os códigos de erro, trabalhem no seu sistema XOOPS.<br>Caso já possua o arquivo <b>.htaccess</b> em seu servidor, com estes codigos, é só alterar e indicar o caminho para o modulo <b>amhterror</b> como descrito abaixo");
define("_AM_AMHTERR_NOCODE",		"<span style=\"color: red; font-weight: bold;\">No momento não há códigos erro definidos.</span>");


/**
* reports.php
*/
define("_AM_AMHTERR_REPORTS",	"Relatórios");
define("_AM_AMHTERR_REPCAPTTL",	"Relatórios:");
define("_AM_AMHTERR_REPUSER",	"Usuario");
define("_AM_AMHTERR_REPERRCD",	"Código do Erro");
define("_AM_AMHTERR_REPDATE",	"Data");
define("_AM_AMHTERR_REPREFER",	"Referencia");
define("_AM_AMHTERR_REPUAGENT",	"Browser");
define("_AM_AMHTERR_REPADDR",	"IP do Usuário");
define("_AM_AMHTERR_REPREQ",	"Pagina solicitada");


/**
* about.php
*/
define("_AM_AMHTERR_ABOUTABOUT",	"Sobre");

?>
