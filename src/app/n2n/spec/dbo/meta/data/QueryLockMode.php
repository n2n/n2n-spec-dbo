<?php

namespace n2n\spec\dbo\meta\data;

enum QueryLockMode {
	case FOR_UPDATE;
	case FOR_UPDATE_NOWAIT;
	case FOR_UPDATE_SKIP_LOCKED;
}