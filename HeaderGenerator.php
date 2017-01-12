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
 * Time: 20:59
 */
class HeaderGenerator
{

    var $openingHead = "<head>";
    var $closingHead = "<head>";
    var $doctype = "<!doctype html>";

    /**
     * @param Page $page
     * @return string A HTML title tag.
     */
    public function generateTitleTag(Page $page)
    {
        return "<title>" . $page->getTitle() . "</title>";
    }

    /**
     * @param Page $page
     * @return string A HTML meta description tag.
     */
    public function generateMetaDescriptionTag(Page $page)
    {
        return is_null($page->getDescription()) ? "" : "<meta name=\"description\" content=\"" . $page->getDescription() . "\">";

    }

    /**
     * @param SiteSettings $siteSettings
     * @return string A lang HTML tag.
     */
    public function generateHTMLLangTag(SiteSettings $siteSettings)
    {
        return "<html lang=\"" . $siteSettings->getLang() . "\">";
    }

    public function generateMetaCharset(SiteSettings $siteSettings) {
        return "<meta charset=\"".$siteSettings->getCharset()."\">";
    }

    // WIP, should move to external index.php file

    public function generateHeader(Page $page, SiteSettings $siteSettings)
    {
        $html = $this->doctype.
                $this->generateHTMLLangTag($siteSettings).
                $this->openingHead.
                $this->generateMetaCharset($siteSettings).
                $this->generateTitleTag($page).
                $this->generateMetaDescriptionTag($page).
                $this->closingHead;
        return $html;
    }

}