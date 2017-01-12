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
 * Class Page
 */
class Page {

    /**
     * Page constructor.
     * @param $title
     * @param $description
     * @param $content
     * @param $timestamp_created
     * @param $timestamp_updated
     */
    function __construct($title, $description, $content, $timestamp_created, $timestamp_updated)
    {
        $this->title = $title;
        $this->description = $description;
        $this->content = $content;
        $this->timestamp_created = $timestamp_created;
        $this->timestamp_updated = $timestamp_updated;
    }

    /**
     * @var String The title of the page.
     */
    var $title;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @var String The description of the page.
     */
    var $description;

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @var String The content of the page.
     */
    var $content;

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @var Integer When the page was created, in UNIX timestamp.
     */
    var $timestamp_created;

    /**
     * @return mixed
     */
    public function getTimestampCreated()
    {
        return $this->timestamp_created;
    }

    /**
     * @param mixed $timestamp_created
     */
    public function setTimestampCreated($timestamp_created)
    {
        $this->timestamp_created = $timestamp_created;
    }

    /**
     * @var Integer When the page was last updated, in UNIX timestamp.
     */
    var $timestamp_updated;

    /**
     * @return mixed
     */
    public function getTimestampUpdated()
    {
        return $this->timestamp_updated;
    }

    /**
     * @param mixed $timestamp_updated
     */
    public function setTimestampUpdated($timestamp_updated)
    {
        $this->timestamp_updated = $timestamp_updated;
    }

}