<?php
/*
 * This file is part of eldnp/export.map.
 *
 * Eldnp/export.map is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Eldnp/export.map is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with eldnp/export.map. If not, see <http://www.gnu.org/licenses/>.
 *
 * @see       https://github.com/eldnp/export.map for the canonical source repository
 * @copyright Copyright (c) 2017 Oleg Verevskoy <verevskoy@gmail.com>
 * @license   https://github.com/eldnp/export.map/blob/master/LICENSE GNU GENERAL PUBLIC LICENSE Version 3
 */

namespace EldnpTest\Export\Map\DataSource;

use Eldnp\Export\Map\DataSource\ArrayMapDataSource;
use PHPUnit\Framework\TestCase;

/**
 * Class ArrayMapDataSourceTest
 *
 * @package EldnpTest\Export\Map\DataSource
 */
class ArrayMapDataSourceTest extends TestCase
{
    public function arrayMapDataSourceIteratorDataProvider()
    {
        return array(
            array(
                array(
                    array(
                        'row1-field1' => 'value1',
                        'row1-field2' => 'value2',
                    ),
                    array(
                        'row2-field1' => 'value1',
                        'row2-field2' => 'value2',
                    ),
                ),
            ),
            array(
                array(
                    array(
                        1 => 'value1',
                        2 => 'value2',
                    ),
                    array(
                        3 => 'value1',
                        4 => 'value2',
                    ),
                ),
            ),
        );
    }

    /**
     * @dataProvider arrayMapDataSourceIteratorDataProvider
     * @param array[][] $sourceData
     */
    public function testArrayMapDataSourceIterator($sourceData)
    {
        $iterator = new ArrayMapDataSource($sourceData);
        $iteratedData = array();
        foreach ($iterator as $key => $value) {
            $iteratedData[$key] = $value;
        }
        $this->assertEquals($sourceData, $iteratedData);
    }
}