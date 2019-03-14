<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class nameTest extends TestCase
{
    public function testCSVFileExists() {

        $this->assertFileExists('names.csv');

    }

    public function testTestDirectory(){

        $this->assertDirectoryExists('test');

    }

    public function testextractCSVFile(){

        echo file_exists('extractCSV');
    }

    public function testIndexFile(){

        echo file_exists('index');

    }

}