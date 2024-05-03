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
namespace n2n\spec\dbo;

use n2n\spec\dbo\err\DboException;
use n2n\spec\dbo\meta\structure\MetaManager;
use n2n\spec\dbo\meta\data\SelectStatementBuilder;
use n2n\spec\dbo\meta\data\UpdateStatementBuilder;
use n2n\spec\dbo\meta\data\InsertStatementBuilder;
use n2n\spec\dbo\meta\data\DeleteStatementBuilder;

/**
 * Dbo specifies an abstraction for a database connection like PDO which also provides
 * functionality to build queries independent of the used database engine.
 */
interface Dbo {
	function getDataSourceName(): string;

	/**
	 * @throws DboException
	 */
	function prepare(string $statement): DboStatement;

	/**
	 * @throws DboException
	 */
	function query(string $statement): ?DboStatement;

	/**
	 * @throws DboException
	 */
	function exec(string $statement): false|int;

	/**
	 * @throws DboException
	 * @see \PDO::beginTransaction()
	 */
	function beginTransaction(bool $readOnly = false): void;

	/**
	 * @throws DboException
	 * @see \PDO::commit()
	 */
	function commit(): void;

	/**
	 * @throws DboException
	 * @see \PDO::rollBack()
	 */
	function rollBack(): void;

	/**
	 * @throws DboException
	 */
	function quote(string|int|float|bool|null $value): string|null;

	function createMetaManager(): MetaManager;

	function createSelectStatementBuilder(): SelectStatementBuilder;

	function createUpdateStatementBuilder(): UpdateStatementBuilder;

	function createInsertStatementBuilder(): InsertStatementBuilder;

	function createDeleteStatementBuilder(): DeleteStatementBuilder;
}