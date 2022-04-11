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

    /**
     * Testing exception when field name is not set
     */
    public function testExceptionNoName(): void
    {
        // assertions
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(- 1);
        $this->expectExceptionMessage('Name of the field is not defined');

        // setup and test body
        new FieldAttributes([
            'type' => 'common'
        ]);
    }
}
