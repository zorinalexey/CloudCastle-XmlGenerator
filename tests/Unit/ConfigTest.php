<?php

declare(strict_types = 1);

namespace Unit\CloudCastle\Tests\XmlGenerator;

use PHPUnit\Framework\TestCase;
use CloudCastle\XmlGenerator\Config;

/**
 * Класс ConfigTest
 * @version 0.0.1
 * @package Unit\CloudCastle\Tests\XmlGenerator
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
class ConfigTest extends TestCase
{

    public function testCheckConfig()
    {
        $config = new Config();
        $config->setFile(__FILE__ . '.xml');
        $config->setFlush(false);
        $config->setType('');
        $this->assertFalse($config->getFlush());
        $this->assertEquals($config->getFile(), __FILE__ . '.xml');
        $this->assertEquals($config->getType(), 'memory');
        $config->setFlush(true);
        $config->setType();
        $config->setFile();
        $this->assertTrue($config->getFlush());
        $this->assertEquals($config->getType(), 'filesystem');
        $this->assertNotEquals($config->getFile(), __FILE__);
    }

}
