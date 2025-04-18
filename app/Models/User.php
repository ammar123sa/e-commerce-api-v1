<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Cart;
use App\Models\Order;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * الحقول التي يمكن تعبئتها (Mass Assignable)
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
      //  'role' // إذا كنت تستخدم نظام صلاحيات
    ];

    /**
     * الحقول التي يجب إخفاؤها عند التسلسل
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * تحويل أنواع الحقول
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /***************************/
    /* العلاقات مع الجداول الأخرى */
    /***************************/

    /**
     * علاقة المستخدم مع سلة التسوق (Cart)
     */
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    /**
     * علاقة المستخدم مع الطلبات (Orders)
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * علاقة المستخدم مع المدفوعات (Payments) عبر الطلبات
     */
    public function payments()
    {
        return $this->hasManyThrough(Payment::class, Order::class);
    }
}