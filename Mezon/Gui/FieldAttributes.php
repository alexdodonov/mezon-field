<?php
namespace Mezon\Gui;

/**
 * Class FieldAttributes
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
class FieldAttributes
{

    /**
     * Name of the field
     *
     * @var string
     */
    protected $name;

    /**
     * Is field required
     *
     * @var bool
     */
    protected $required;

    /**
     * CSS class
     *
     * @var string
     */
    protected $class = 'form-control';

    /**
     * Field name's prefix
     *
     * @var string
     */
    protected $namePrefix = '';

    /**
     * Is field custom
     *
     * @var bool
     */
    protected $custom;

    /**
     * Is field batched
     *
     * @var bool
     */
    protected $batch;

    /**
     * Is field disabled
     *
     * @var bool
     */
    protected $disabled;

    /**
     * toggler selector
     *
     * @var string
     */
    protected $toggler;

    /**
     * Toggle value
     *
     * @var string
     */
    protected $toggleValue;

    /**
     * Field value
     *
     * @var string
     */
    protected $value;

    /**
     * Title value
     *
     * @var string
     */
    protected $title = '';

    /**
     * Visible field or not
     *
     * @var bool
     */
    protected $visible = true;

    /**
     * Does field have got label or not
     *
     * @var bool
     */
    protected $hasLabel = false;

    /**
     * FIeld type
     *
     * @var string
     */
    protected $type = '';

    /**
     * Method fetches field name from the description
     *
     * @param array $fieldDescription
     *            Field description
     */
    protected function initName(array $fieldDescription)
    {
        if (isset($fieldDescription['name'])) {
            $this->name = $fieldDescription['name'];
        } else {
            throw (new \Exception('Name of the field is not defined', - 1));
        }
    }

    /**
     * Method fetches field CSS class from the description
     *
     * @param array $fieldDescription
     *            Field description
     */
    protected function initClass(array $fieldDescription)
    {
        if (isset($fieldDescription['class']) !== false) {
            $this->class = $fieldDescription['class'];
        }
    }

    /**
     * Method fetches field required property from the description
     *
     * @param array $fieldDescription
     *            Field description
     */
    protected function initRequired(array $fieldDescription)
    {
        if (isset($fieldDescription['required']) === false) {
            $this->required = false;
        } else {
            $this->required = $fieldDescription['required'] == 1;
        }
    }

    /**
     * Method fetches field custom property from the description
     *
     * @param array $fieldDescription
     *            Field description
     */
    protected function initCustom(array $fieldDescription)
    {
        if (isset($fieldDescription['custom']) === false) {
            $this->custom = false;
        } else {
            $this->custom = $fieldDescription['custom'] == 1;
        }
    }

    /**
     * Method fetches field batch property from the description
     *
     * @param array $fieldDescription
     *            Field description
     */
    protected function initBatch(array $fieldDescription)
    {
        if (isset($fieldDescription['batch']) === false) {
            $this->batch = false;
        } else {
            $this->batch = $fieldDescription['batch'] == 1;
        }
    }

    /**
     * Method fetches field disabled property from the description
     *
     * @param array $fieldDescription
     *            Field description
     */
    protected function initDisabled(array $fieldDescription)
    {
        if (isset($fieldDescription['disabled']) === false) {
            $this->disabled = false;
        } else {
            $this->disabled = $fieldDescription['disabled'] == 1;
        }
    }

    /**
     * Method fetches field toggler property from the description
     *
     * @param array $fieldDescription
     *            Field description
     */
    protected function inittoggler(array $fieldDescription)
    {
        if (isset($fieldDescription['toggler']) === false) {
            $this->toggler = '';
        } else {
            $this->toggler = $fieldDescription['toggler'];
        }
    }

    /**
     * Method fetches field toggle value property from the description
     *
     * @param array $fieldDescription
     *            Field description
     */
    protected function initToggleValue(array $fieldDescription)
    {
        if (isset($fieldDescription['toggle-value']) === false || $this->toggler === '') {
            $this->toggleValue = '';
        } else {
            $this->toggleValue = $fieldDescription['toggle-value'];
        }
    }

    /**
     * Method fetches field title
     *
     * @param array $fieldDescription
     *            Field description
     */
    protected function initTitle(array $fieldDescription)
    {
        if (isset($fieldDescription['title']) === true) {
            $this->title = $fieldDescription['title'];
        }
    }

    /**
     * Method fetches field's visibility
     *
     * @param array $fieldDescription
     *            Field description
     */
    protected function initVisible(array $fieldDescription)
    {
        if (isset($fieldDescription['visible']) === true) {
            $this->visible = $fieldDescription['visible'] == 1;
        }
    }

    /**
     * Method fetches label display
     *
     * @param array $fieldDescription
     *            Field description
     */
    protected function initHasLabel(array $fieldDescription)
    {
        if (isset($fieldDescription['has-label']) === true) {
            $this->hasLabel = $fieldDescription['has-label'] == 1;
        }
    }

    /**
     * Method fetches name prefix
     *
     * @param array $fieldDescription
     *            Field description
     */
    protected function initNamePrefix(array $fieldDescription)
    {
        if (isset($fieldDescription['name-prefix']) === true) {
            $this->namePrefix = $fieldDescription['name-prefix'];
        }
    }

    /**
     * Method fetches field type
     *
     * @param array $fieldDescription
     *            Field description
     */
    protected function initType(array $fieldDescription): void
    {
        if (isset($fieldDescription['type'])) {
            $this->type = $fieldDescription['type'];
        } else {
            throw (new \Exception('Field type must be set', - 2));
        }
    }

    /**
     * Constructor
     *
     * @param array $fieldDescription
     *            Field description
     * @param string $value
     *            Field value
     */
    public function __construct(array $fieldDescription, string $value = '')
    {
        $this->initType($fieldDescription);

        $this->initName($fieldDescription);

        $this->initClass($fieldDescription);

        $this->initRequired($fieldDescription);

        $this->initNamePrefix($fieldDescription);

        $this->initCustom($fieldDescription);

        $this->initBatch($fieldDescription);

        $this->initDisabled($fieldDescription);

        $this->inittoggler($fieldDescription);

        $this->initToggleValue($fieldDescription);

        $this->initTitle($fieldDescription);

        $this->initVisible($fieldDescription);

        $this->initHasLabel($fieldDescription);

        $this->value = $value;
    }
}
