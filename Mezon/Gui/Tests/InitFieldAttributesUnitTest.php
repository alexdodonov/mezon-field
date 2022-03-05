<?php
namespace Mezon\Gui\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Gui\FieldAttributes;

/**
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
class InitFieldAttributesUnitTest extends TestCase
{

    /**
     * Testing method init type
     */
    public function testInitFieldAttributes(): void
    {
        // setup and test body
        $fieldAtributes = new FieldAttributes([
            'type' => 'common',
            'name' => 'field name'
        ]);

        // assertions
        $this->assertEquals('common', $fieldAtributes->getType());
        $this->assertEquals('field name', $fieldAtributes->getName());
        $this->assertFalse($fieldAtributes->isRequired());
        $this->assertFalse($fieldAtributes->isCustom());
        $this->assertFalse($fieldAtributes->isBatch());
    }
}
