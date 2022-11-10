<?php

declare(strict_types = 1);

namespace Unit\CloudCastle\Tests\XmlGenerator;

use PHPUnit\Framework\TestCase;
use CloudCastle\FileSystem\File;
use CloudCastle\XmlGenerator\Xml;

/**
 * Класс XmlTest
 * @version 0.0.1
 * @package Unit\CloudCastle\Tests\XmlGenerator\XmlTest
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
class XmlTest extends TestCase
{

    public function testCheckXml()
    {
        $xml = new Xml();
        $file = __FILE__ . '.xml';
        $this->assertEmpty($xml->file);
        $this->assertNull($xml->structure);
        $xml->file = $file;
        $this->assertEquals($xml->file, $file);
        $this->assertInstanceOf(Xml::class, $xml->save($file));
        $this->assertTrue(File::delete($file));
    }

}
