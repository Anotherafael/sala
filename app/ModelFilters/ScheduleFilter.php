<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class ScheduleFilter extends ModelFilter
{
    public function status($id) {
        if ($id == 1) {
            return $this;
        }
        return $this->where('status', $id-1);
    }
}