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

interface ComparisonBuilder {
	const OPERATOR_EQUAL = '=';
	const OPERATOR_NOT_EQUAL = '!=';
	const OPERATOR_LARGER_THAN = '>';
	const OPERATOR_LARGER_THAN_OR_EQUAL_TO = '>=';
	const OPERATOR_SMALLER_THAN = '<';
	const OPERATOR_SMALLER_THAN_OR_EQUAL_TO = '<=';
	const OPERATOR_LIKE = 'LIKE';
	const OPERATOR_NOT_LIKE = 'NOT LIKE';
	const OPERATOR_IS = 'IS';
	const OPERATOR_IS_NOT = 'IS NOT';
	const OPERATOR_IN = 'IN';
	const OPERATOR_NOT_IN = 'NOT IN';
	
	const OPERATOR_EXISTS = 'EXISTS';
	const OPERATOR_NOT_EXISTS = 'NOT EXISTS';
	
	const LIKE_WILDCARD_ONE_CHAR = '_';
	const LIKE_WILDCARD_MANY_CHARS = '%';
	

	function isEmpty(): bool;
	
	function match(QueryItem $queryItem1, $operator, QueryItem $queryItem2, $useAnd = true): static;
	
	function andMatch(QueryItem $queryItem1, $operator, QueryItem $queryItem2): static;
	
	function orMatch(QueryItem $queryItem1, $operator, QueryItem $queryItem2): static;
	
	function test($operator, QueryResult $queryResult, bool $useAnd = true): static;
	
	function andTest($operator, QueryResult $queryResult): static;
	
	function orTest($operator, QueryResult $queryResult): static;
	
	function group(?ComparisonBuilder $queryComparator = null, bool $useAnd = true): ComparisonBuilder;
	
	function andGroup(?ComparisonBuilder $queryComparator = null): ComparisonBuilder;
	
	function orGroup(?ComparisonBuilder $queryComparator = null): ComparisonBuilder;

	function endGroup(): ?ComparisonBuilder;
}
