<?php

declare(strict_types = 1);

namespace Unit\CloudCastle\Tests\XmlGenerator;

use PHPUnit\Framework\TestCase;
use CloudCastle\XmlGenerator\Xml;
use CloudCastle\XmlGenerator\Config;
use CloudCastle\XmlGenerator\XmlGenerator;
use CloudCastle\FileSystem\Dir;
use CloudCastle\FileSystem\File;

/**
 * Класс XmlGeneratorTest
 * @version 0.0.1
 * @package Unit\CloudCastle\Tests\XmlGenerator\XmlGeneratorTest
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
class XmlGeneratorTest extends TestCase
{

    public function testCheckGenerator()
    {
        $config = new Config();
        $generator = new XmlGenerator($config);
        $file = $config->getFile();
        $this->assertInstanceOf(XmlGenerator::class, $generator);
        $this->assertInstanceOf(XmlGenerator::class, $generator->startDocument());
        $this->assertInstanceOf(XmlGenerator::class, $generator->startElement('test'));
        $this->assertInstanceOf(XmlGenerator::class, $generator->addAttribute('attr', 1));
        $this->assertInstanceOf(XmlGenerator::class, $generator->addElement('tets2', 2));
        $this->assertInstanceOf(XmlGenerator::class, $generator->closeElement());
        $this->assertInstanceOf(Xml::class, $generator->get());
        $this->assertIsString($generator->get()->structure);
        $this->assertIsString($generator->get()->file);
        File::delete($file);
        Dir::delete(dirname($file), true);
    }

}
