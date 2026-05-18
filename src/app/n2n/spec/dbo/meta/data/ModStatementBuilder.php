<?php

namespace n2n\spec\dbo\meta\data;

interface ModStatementBuilder extends StatementBuilder {

	public function setTable(string $tableName): static;
}