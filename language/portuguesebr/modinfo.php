<?php
// $Id: modinfo.php,v 1.4 2007/05/07 20:21:29 andrew Exp $
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
* xoops_version.php
*/
define("_MI_AM_HTERROR_NAME",	"AM HTError");
define("_MI_AM_HTERROR_DESC",	"Module que gera paginas com codigos de erros.");

// config options
define("_MI_AMHTERR_IGNOREADMIN",		"Ignorar admin.:");
define("_MI_AMHTERR_IGNOREADMINDSC",	"Ignorar relatórios de erro para administradores<br><b>SIM</b> será ignorado<br><b>NÃO</b> não será adicionado");
define("_MI_AMHTERR_REPORTING",			"Desligue relatórios erro:");
define("_MI_AMHTERR_REPORTINGDSC",		"Trabalhando com o Site pode desligar relatório erro, para a página de relatório fica muito grande.");
define("_MI_AMHTERR_PAGETTL",			"Titulo da página:");
define("_MI_AMHTERR_PAGETTLDSC",		"Selecione o título do erro na página do erro");
define("_MI_AMHTERR_PAGETTL1",			"Não colocar");
define("_MI_AMHTERR_PAGETTL2",			"Sim: &lt;nome do modulo&gt; - &lt;erro&gt;");
define("_MI_AMHTERR_PAGETTL3",			"Sim: &lt;erro&gt; - &lt;nome do modulo&gt;");
define("_MI_AMHTERR_DATEFRMT",			"Formato da Data:");
define("_MI_AMHTERR_DATEFRMTDSC",		'Formato da Data no relatórios. Veja <a href="http://www.php.net/date" target="_blank">PHP formato da data</a>, diferentes formatos datas a ser personalizado para você pode usar.</body>');
define("_MI_AMHTERR_NUMREPS",			"Quantidade de relatórios:");
define("_MI_AMHTERR_NUMREPSDSC",		"Quantidade de relatórios a ser mostrado");
define("_MI_AMHTERR_LINEBRKS",			"Mensagem com quebra de linha:");
define("_MI_AMHTERR_LINEBRKSDSC",		"Ligando terá quebra de linhas nas mensagens de erros (pode causar problemas com alguns HTML).");


/**
* Admin navbar
*/
define("_MI_AMHTERR_GENERALSET",	"Preferências");
define("_MI_AMHTERR_GOTOMOD",		"Ir para o modulo");
define("_MI_AMHTERR_HELP",			"Sobre");
define("_MI_AMHTERR_MODULEADMIN",	"admin:");
define("_MI_AMHTERR_INDEX",			"Index");


/**
* Admin menu
*/
define("_MI_AMHTERROR_MENU1",	"Index");
define("_MI_AMHTERROR_MENU2",	"Mensagem de Erro");
define("_MI_AMHTERROR_MENU3",	"Relatórios");


?>
