<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'portfolio_category_id'
    ];

    public function portfolios(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Portfolio::class);
    }

    public function parent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(PortfolioCategory::class, 'portfolio_category_id');
    }

    public function getParentName()
    {
        return is_null($this->parent) ? 'ندارد' : $this->parent->name;
    }
}
