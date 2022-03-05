<?php
namespace Mezon\Gui;

/**
 * Class Field
 *
 * @package Gui
 * @subpackage Field
 * @author Dodonov A.A.
 * @version v.1.0 (2019/08/20)
 * @copyright Copyright (c) 2019, http://aeon.su
 */

/**
 * Base class for all other fields
 */
class Field extends FieldAttributes
{

    /**
     * Method returns compiled field
     *
     * @return string Compiled field
     */
    public function html(): string
    {
        return $this->namePrefix . $this->getName() . ($this->isRequired() ? 1 : 0) . ($this->isCustom() ? 1 : 0) .
            ($this->isBatch() ? 1 : 0) . ($this->disabled ? 1 : 0) . $this->toggler . $this->toggleValue;
    }

    /**
     * Method returns title
     *
     * @return string Title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Method returns field's visibility
     *
     * @return bool Is field visible
     */
    public function isVisible(): bool
    {
        return $this->visible;
    }

    /**
     * Method returns field's label existence
     *
     * @return bool Has label
     */
    public function hasLabel(): bool
    {
        return $this->hasLabel;
    }

    /**
     * Does control fills all row
     *
     * @return bool Dows field fills hole row
     */
    public function fillAllRow(): bool
    {
        return false;
    }

    /**
     * Method returns name preffix for field
     *
     * @return string name preffix if defined, empty string otherwise
     */
    public function getNamePrefix(): string
    {
        return $this->namePrefix === '' ? '' : $this->namePrefix . '-';
    }
}
