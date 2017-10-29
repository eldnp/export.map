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
 * along with eldnp/export.map.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @see       https://github.com/eldnp/export.map for the canonical source repository
 * @copyright Copyright (c) 2017 Oleg Verevskoy <verevskoy@gmail.com>
 * @license   https://github.com/eldnp/export.map/blob/master/LICENSE GNU GENERAL PUBLIC LICENSE Version 3
 */

namespace Eldnp\Export\Map;

use Eldnp\Export\WriterInterface;

/**
 * Class AbstractMapWriter
 *
 * @package Eldnp\Export\Map
 */
abstract class AbstractMapWriter implements WriterInterface
{
    /**
     * @param array $data
     */
    abstract protected function writeMap(array $data);

    /**
     * @inheritdoc
     */
    final public function write($data)
    {
        $this->writeMap($data);
    }
}
