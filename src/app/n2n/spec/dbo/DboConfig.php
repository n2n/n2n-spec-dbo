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

interface DboConfig {
	const TIL_READ_UNCOMMITTED = "READ UNCOMMITTED";
	const TIL_READ_COMMITTED = "READ COMMITTED";
	const TIL_REPEATABLE_READ = "REPEATABLE READ";
	const TIL_SERIALIZABLE = "SERIALIZABLE";


	function getName(): string;

	function getDsnUri(): string;

	function getUser(): string;

	function getPassword(): ?string;

	function getReadWriteTransactionIsolationLevel(): string;

	function getReadOnlyTransactionIsolationLevel(): string;

	function getDialectClassName(): string;

	function isSslVerify(): bool;

	function getSslCaCertificatePath(): ?string;

	function isPersistent(): bool;
}