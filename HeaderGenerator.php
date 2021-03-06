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
 * Time: 20:59
 */
class HeaderGenerator
{

    var $openingHead = "<head>";
    var $closingHead = "</head>";
    var $doctype = "<!doctype html>";
    var $closingHtml = "</html>";

    var $page;
    var $siteSettings;

    /**
     * HeaderGenerator constructor.
     * @param Page $page
     * @param SiteSettings $siteSettings
     */
    function __construct(Page $page, SiteSettings $siteSettings)
    {
        $this->page = $page;
        $this->siteSettings = $siteSettings;
    }

    /**
     * @param string $closingHead
     */
    public function setClosingHead($closingHead)
    {
        $this->closingHead = $closingHead;
    }

    /**
     * @param string $doctype
     */
    public function setDoctype($doctype)
    {
        $this->doctype = $doctype;
    }

    /**
     * @param string $openingHead
     */
    public function setOpeningHead($openingHead)
    {
        $this->openingHead = $openingHead;
    }

    /**
     * @return string A HTML title tag.
     */
    public function generateTitleTag()
    {
        return "<title>" . $this->siteSettings->getName() . ": " . $this->page->getTitle() . "</title>";
    }

    /**
     * @return string A HTML meta description tag.
     */
    public function generateMetaDescriptionTag()
    {
        if (!is_null($this->page->getDescription())) {
            return "<meta name=\"description\" content=\"" . $this->page->getDescription() . "\">";
        } else {
            return "<meta name=\"description\" content=\"" . substr($this->page->getContent(), 0, 90) . " [...]\">";
        }
    }

    /**
     * @return string A lang HTML tag.
     */
    public function generateHTMLLangTag()
    {
        return "<html lang=\"" . $this->siteSettings->getLang() . "\">";
    }

    public function generateMetaCharset()
    {
        return "<meta charset=\"" . $this->siteSettings->getCharset() . "\">";
    }

    public function generateStylesheetsLinkHref()
    {
        $stylesheets = $this->siteSettings->stylesheets;
        $cssStrs = "";
        $i = 0;
        foreach ($stylesheets as $stylesheet) {
            $cssStrs = $cssStrs . "<link href=\"resources/css/" . $stylesheet . "\" rel=\"stylesheet\">";
            if ($i == count($stylesheets) - 1) {
                echo "\n";
            }
            $i++;
        }
        return $cssStrs;
    }

}