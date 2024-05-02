<?php
/*
 * Copyright (c) 2012-2016, Hofmänner New Media.
 * DO NOT ALTER OR REMOVE COPYRIGHT NOTICES OR THIS FILE HEADER.
 *
 * This file is part of the N2N FRAMEWORK.
 *
 * The N2N FRAMEWORK is free software: you can redistribute it and/or modify it under the terms of
 * the GNU Lesser General Public License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * N2N is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even
 * the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details: http://www.gnu.org/licenses/
 *
 * The following people participated in this project:
 *
 * Andreas von Burg.....: Architect, Lead Developer
 * Bert Hofmänner.......: Idea, Frontend UI, Community Leader, Marketing
 * Thomas Günther.......: Developer, Hangar
 */
namespace n2n\spec\dbo\meta\data;

interface QueryFragmentBuilder {
	public function addTable(string $tableName): void;
	public function addField(string $fieldName, string $fieldAlias = null): void;
	public function addFieldAlias($fieldAlias): void;
	public function addConstant(?string $value): void;
	public function addPlaceMarker(string $name = null): void;
	public function addOperator(string $operator): void;
	public function openGroup(): void;
	public function closeGroup(): void;
	public function addSeparator(): void;
	public function addRawString(string $sqlString): void;
	public function openFunction(string $name): void;
	public function closeFunction(): void;
	public function toSql(): string;
}
