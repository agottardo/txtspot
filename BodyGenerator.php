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
 * Date: 1/14/17
 * Time: 21:02
 */
class BodyGenerator
{

    var $openingBody = "<body>";
    var $closingBody = "</body>";
    var $page;

    function __construct(Page $page)
    {
        $this->page = $page;
    }

    /**
     * @return string
     */
    public function getOpeningBody()
    {
        return $this->openingBody;
    }

    /**
     * @param string $openingBody
     */
    public function setOpeningBody($openingBody)
    {
        $this->openingBody = $openingBody;
    }

    /**
     * @return string
     */
    public function getClosingBody()
    {
        return $this->closingBody;
    }

    /**
     * @param string $closingBody
     */
    public function setClosingBody($closingBody)
    {
        $this->closingBody = $closingBody;
    }

    /**
     * @return string Generates the HTML H1 title tag for a page.
     */
    public function generateH1()
    {
        return "<h1>" . $this->page->getTitle() . "</h1>";
    }

    /**
     * @return string Generates the abstract for a page.
     */
    public function generateAbstract()
    {
        return "<p class=\"abstract\">" . $this->page->getDescription() . "</p>";
    }

    /**
     * @return string Generates the content of a page.
     */
    public function generateContent()
    {
        return "<p class=\"content\">" . $this->page->getContent() . "</p>";
    }


}