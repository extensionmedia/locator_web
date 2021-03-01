<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceAccountMouvement extends Model{
    use HasFactory;

    public function account(){
        return $this->belongsTo(FinanceAccount::class, 'finance_account_id');
    }

    public function category(){
        return $this->belongsTo(FinanceAccountMouvementCategory::class, 'finance_account_mouvement_category_id');
    }

    public function type(){
        return $this->belongsTo(PaymentType::class, 'payment_type_id');
    }
}
