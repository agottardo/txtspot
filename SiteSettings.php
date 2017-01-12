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

/**
 * Created by PhpStorm.
 * User: agott
 * Date: 1/9/17
 * Time: 21:08
 */
class SiteSettings
{

    function __construct($name, $lang, $allowIndexing, $charset)
    {
        $this->name = $name;
        $this->lang = $lang;
        $this->allowIndexing = $allowIndexing;
        $this->charset = $charset;
    }

    /**
     * @var string The title of the website.
     */
    var $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @var string The language the website is written in.
     */
    var $lang;

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    /**
     * @var bool Whether search engines should index the website or not.
     */
    var $allowIndexing;

    /**
     * @return mixed
     */
    public function getAllowIndexing()
    {
        return $this->allowIndexing;
    }

    /**
     * @param mixed $allowIndexing
     */
    public function setAllowIndexing($allowIndexing)
    {
        $this->allowIndexing = $allowIndexing;
    }

    /**
     * @var string The HTML charset we will add to all pages.
     */
    var $charset;

    /**
     * @return string
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * @param string $charset
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;
    }

}