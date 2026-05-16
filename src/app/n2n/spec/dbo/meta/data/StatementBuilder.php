<?php

namespace n2n\spec\dbo\meta\data;

interface StatementBuilder {
	public function addJoin($joinType, QueryResult $queryResult, ?string $alias = null,
			?ComparisonBuilder $onComparator = null): ComparisonBuilder;

	public function getWhereComparator(): ComparisonBuilder;

	public function toSqlString(): string;
}