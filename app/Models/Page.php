<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Page extends Model
{
    /** @use HasFactory<\Database\Factories\PageFactory> */
    use HasFactory;

    /**
     * Get the project that owns the page.
     *
     * @return BelongsTo<Project, $this>
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * The attributes that should be cast.
     *
     * @return array{bucket: 'datetime', views: 'integer', average_time: 'integer'}
     */
    protected function casts(): array
    {
        return [
            'bucket' => 'datetime',
            'views' => 'integer',
            'average_time' => 'integer',
        ];
    }
}
