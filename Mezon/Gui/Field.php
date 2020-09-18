<?php
namespace Mezon\Gui;

/**
 * Class Field
 *
 * @package Gui
 * @subpackage Field
 * @author Dodonov A.A.
 * @version v.1.0 (2019/08/20)
 * @copyright Copyright (c) 2019, aeon.org
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
        return $this->namePrefix . $this->name . ($this->required ? 1 : 0) . ($this->custom ? 1 : 0) .
            ($this->batch ? 1 : 0) . ($this->disabled ? 1 : 0) . $this->toggler . $this->toggleValue;
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
     * Method returns of the field required
     *
     * @return bool Is field required
     */
    public function isRequired(): bool
    {
        return $this->required;
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
     * Getting field type
     *
     * @return string Field type
     */
    public function getType(): string
    {
        return $this->type;
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
