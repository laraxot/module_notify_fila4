<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * Modules\Notify\Models\Contact.
 *
 * @property int $id
 * @property string $model_type
 * @property string $model_id
 * @property string|null $contact_type
 * @property string|null $value
 * @property string|null $user_id
 * @property string|null $verified_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $token
 * @property string|null $sms_sent_at
 * @property int|null $sms_count
 * @property string|null $mail_sent_at
 * @property int|null $mail_count
 * @property string|null $survey_pdf_id
 * @property string|null $token
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $attribute_1
 * @property string|null $attribute_2
 * @property string|null $attribute_3
 * @property string|null $attribute_4
 * @property string|null $attribute_5
 * @property string|null $attribute_6
 * @property string|null $attribute_7
 * @property string|null $attribute_8
 * @property string|null $attribute_9
 * @property string|null $attribute_10
 * @property string|null $attribute_11
 * @property string|null $attribute_12
 * @property string|null $attribute_13
 * @property string|null $attribute_14
 * @property string|null $usesleft
 * @property string|null $sms_status_code
 * @property string|null $sms_status_txt
 * @property int|null $duplicate_count
 * @property int|null $order_column
 *
 * @mixin Eloquent
 *
 * @property string|null $email
 * @property string|null $mobile_phone
 * @property MediaCollection<int, Media> $media
 * @property int|null $media_count
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 *
 * @mixin IdeHelperContact
 * @mixin \Eloquent
 */
class Contact extends BaseModel
{
    /** @var list<string> */
    protected $fillable = [
        'model_id',
        'model_type',
        'contact_type',
        'value',
        'verified_at',
        'updated_at',
        'created_at',
        'updated_by',
        'created_by',
        'user_id',
        'token',
    ];

    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
            // 'date_start' => 'datetime:Y-m-d\TH:i',
            // 'date_end' => 'datetime:Y-m-d\TH:i',
            'model_id' => 'string',
            'user_id' => 'string',
        ];
    }
}
