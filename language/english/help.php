<?php
/**
 * Ghost module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright	The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package	Ghost
 * @since		2.3.0
 * @author 	kris <http://www.xoofoo.org>
 * @version	$Id: help.php 466 2010-12-13 23:58:19Z kris_fr $
**/

define("_AM_GHOST_HELP1" , "<p><strong>Note:</strong>This section helps to create a module will be updated as and when future developments of <span class='bold italic'>\"Ghost\"</span>.</p>");
define("_AM_GHOST_HELP2" , "
<h4>Cloning Module</h4>
<p>Ghost module was designed to make it easy cloning<br />In the proceedings below, we believe that you work in a local environment.</p>
<ol>
	<li>Copy the file <span class='bold italic'>\"clone.php\"</span> found in the <span class='bold italic'>\"extras\"</span> folder at the root of your site</li>
	<li>Edit this file, lines 18-20, replace the word <span class='bold italic'>\"newname\"</span> with the name you want - <u>Think case sensitive!</u></li>
	<li>Save the edited file</li>
	<li>In the address bar of your browser, run: <span class='italic'>http:\\websiteurl\clone.php</span></li>
	<li>Your module has been created cloned!</li>
	<li><u>Delete the file clone.php</u></li>
	<li>If you wish, you can change the image <span class='italic'>\"images/nomdumodule_slogo.png\"</span>. You can file as \"psd\" in the \"docs\" folder of Ghost</li>
	<li>Install the module in XOOPS administration, or start to change.</li>
</ol>
");
define("_AM_GHOST_HELP3" , "
<h4>In \"docs\" folder of this module:</h4>
<ul>
	<li><a class='tooltip' rel='external' href='../docs/creation_module_xoops2_v2_en.pdf' title='Module Creation - Basics Doc'>creation_module_xoops2_v2_en.pdf</a></li>
	<li><a class='tooltip' rel='external' href='../docs/creation_module_xoops2_v2_fr.pdf' title='Module Creation - Basics Doc'>creation_module_xoops2_v2_fr.pdf</a></li>
	<li><a class='tooltip' rel='external' href='../docs/xoops_module_structure_function.pdf' title='Module Function Structure'>xoops_module_structure_function.pdf</a></li>
	<li><a class='tooltip' rel='external' href='../docs/smarty_xoops.pdf' title='Smarty Tags Docs'>smarty_xoops.pdf</a></li>
</ul>
");
define("_AM_GHOST_HELP4" , "<h4>Others documentations</h4>");
define("_AM_GHOST_HELP5" , "
<h3>XOOPS Projet Documentation</h3>
<ul>
	<li><a class='tooltip' rel='external' href='http://xoops.org/modules/mediawiki/index.php/Module_Development_Guide' title='XOOPS Module Development Guide'>XOOP Wiki</a></li>
	<li><a class='tooltip' rel='external' href='http://dev.xoops.org/' title='XOOPS Module Dev Forge'>XOOPS Module Dev Forge</a></li>
	<li><a class='tooltip' rel='external' href='http://sourceforge.net/projects/xoops/files/XOOPS%20Documentation_Development/XOOPS_ModuleDevelopmentGuide/' title='XOOPS Doc Repository on SourceForge'>XOOPS Docs on SourceForge</a></li>
	<li><a class='tooltip' rel='external' href='http://xoops.svn.sourceforge.net/viewvc/xoops/XOOPS_Coding_Standards.html?revision=2554' title='XOOPS Coding Standards'>XOOPS XOOPS Coding Standards</a></li>
</ul>
");
define("_AM_GHOST_HELP6" , "
<h3>XOOPSERS Documentation</h3>
<ul>
	<li><a class='tooltip' rel='external' href='http://www.kaotik.biz' title='Kaotik website'>Kaotik Tutorials</a></li>
	<li><a class='tooltip' rel='external' href='http://mark.boyden.name/smartsection.item.3/xoops-developer-documentation-notes.html' title='Mark Boyden Website'>Mark Boyden Tutorials</a></li>
	<li><a class='tooltip' rel='external' href='http://tv.xoofoo.org/modules/mytube/viewcat.php?cid=40' title='TV XooFoo Website'>Video Tutorials on TV.XooFoo</a></li>
</ul>
");
define("_AM_GHOST_HELP7" , "
<h3>Development Documentation</h3>
<ul>
	<li><a class='tooltip' rel='external' href='http://php.net/docs.php' title='PHP Manual'>PHP</a></li>
	<li><a class='tooltip' rel='external' href='http://dev.mysql.com/doc/refman/5.0/fr/index.html' title='MySQL Manual'>MySQL</a></li>
	<li><a class='tooltip' rel='external' href='http://www.smarty.net/documentation' title='Smarty Documentation'>Smarty</a></li>
	<li><a class='tooltip' rel='external' href='http://www.w3.org/TR/html4/' title='Html W3C Standards'>Html</a></li>
	<li><a class='tooltip' rel='external' href='http://www.w3.org/Style/CSS/' title='Css W3C Standards'>Css</a></li>
	<li><a class='tooltip' rel='external' href='http://docs.jquery.com/Main_Page' title='jQuery Documentation'>jQuery</a></li>
</ul>
");

?>