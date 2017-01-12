<?php
/**
 *     This file is part of Txtspot.
 *
 *     Txtspot is free software: you can redistribute it and/or modify
 *     it under the terms of the GNU General Public License as published by
 *     the Free Software Foundation, either version 3 of the License, or
 *     (at your option) any later version.
 *
 *     Txtspot is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *     GNU General Public License for more details.
 *
 *     You should have received a copy of the GNU General Public License
 *     along with Txtspot.  If not, see <http://www.gnu.org/licenses/>.
 */

include "Page.php";
include "PageGenerator.php";
include "HeaderGenerator.php";
include "SiteSettings.php";

$page = new Page("Ciao", "Descrizione", "Questo dovrebbe essere il contenuto.", time(), time());
$settings = new SiteSettings("Sito di Andrea", "en", true, "utf-8");

$headerGenerator = new HeaderGenerator();

$headerGenerator->generateHeader($page, $settings);
?>