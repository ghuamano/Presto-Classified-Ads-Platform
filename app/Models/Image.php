<?php

namespace App\Models;

use App\Models\Article;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    protected $fillable = [
        'path'
    ];

    public function article() : BelongsTo{
        return $this->belongsTo(Article::class);
    }

    public static function getUrlByFilePath($filePath, $w , $h)
    {
        if (!$w && !$h) {
            return Storage::url($filePath);
        }
        $path = dirname($filePath);
        $filename = basename($filePath);
        $file = "{$path}/crop_{$w}x{$h}_{$filename}";
        return Storage::url($file);
    }

    public function getUrl ($w = null, $h = null)
    {
        
        return self::getUrlByFilePath($this->path, $w, $h);
    }
    
    protected function casts(): array
    {
        return [
            'labels' => 'array',
        ];
    }
}
