<?php

namespace Codersgarden\MultiLangMailer\Modal;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = ['identifier'];

    public function translations()
    {
        return $this->hasMany(TemplateTranslation::class);
    }

    public function translation($locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        return $this->translations()->where('locale', $locale)->first();
    }
}
