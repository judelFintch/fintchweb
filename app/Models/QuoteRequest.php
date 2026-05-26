<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    use HasFactory;

    public const STATUS_NEW = 'new';
    public const STATUS_CONTACTED = 'contacted';
    public const STATUS_DISCUSSION = 'discussion';
    public const STATUS_ACCEPTED = 'accepted';
    public const STATUS_REFUSED = 'refused';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'project_type',
        'budget',
        'deadline',
        'needs',
        'status',
        'admin_notes',
        'client_notified_at',
        'admin_notified_at',
        'notification_failed_at',
        'notification_error',
    ];

    protected $casts = [
        'client_notified_at' => 'datetime',
        'admin_notified_at' => 'datetime',
        'notification_failed_at' => 'datetime',
    ];

    public static function statuses(): array
    {
        return [
            self::STATUS_NEW => 'Nouveau',
            self::STATUS_CONTACTED => 'Contacte',
            self::STATUS_DISCUSSION => 'En discussion',
            self::STATUS_ACCEPTED => 'Accepte',
            self::STATUS_REFUSED => 'Refuse',
        ];
    }

    public static function projectTypes(): array
    {
        return [
            'site-vitrine' => 'Site vitrine',
            'e-commerce' => 'Site e-commerce',
            'application-web' => 'Application web',
            'logiciel-metier' => 'Logiciel metier',
            'refonte' => 'Refonte de site',
            'maintenance' => 'Maintenance / support',
            'camera-surveillance' => 'Camera de surveillance',
            'autre' => 'Autre projet',
        ];
    }

    public static function budgets(): array
    {
        return [
            'moins-500' => 'Moins de 500 USD',
            '500-1000' => '500 - 1 000 USD',
            '1000-3000' => '1 000 - 3 000 USD',
            '3000-5000' => '3 000 - 5 000 USD',
            'plus-5000' => 'Plus de 5 000 USD',
            'a-definir' => 'A definir ensemble',
        ];
    }

    public static function deadlines(): array
    {
        return [
            'urgent' => 'Urgent',
            '1-mois' => 'Dans 1 mois',
            '2-3-mois' => 'Dans 2 a 3 mois',
            'flexible' => 'Flexible',
        ];
    }

    public function getStatusLabelAttribute(): string
    {
        return self::statuses()[$this->status] ?? $this->status;
    }

    public function getProjectTypeLabelAttribute(): string
    {
        return self::projectTypes()[$this->project_type] ?? $this->project_type;
    }

    public function getBudgetLabelAttribute(): string
    {
        return self::budgets()[$this->budget] ?? $this->budget;
    }

    public function getDeadlineLabelAttribute(): string
    {
        return self::deadlines()[$this->deadline] ?? $this->deadline;
    }
}
