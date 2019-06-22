<?php
require_once(dirname(dirname(__FILE__)) . '/src/t1st3/JSONMin/JSONMin.php');
use t1st3\JSONMin\JSONMin as jsonMin;

class JSONMinTest extends PHPUnit_Framework_TestCase
{
  public function provideJson()
  {
      yield [
          '{"a": "b"}',
          '{"a":"b"}',
      ];
  }

  /**
   * @dataProvider provideJson
   */
  public function testMinifies ($json, $expectedResult) {
    $a = jsonMin::minify($json);
    $this->assertEquals($expectedResult, $a);
  }

}
?>