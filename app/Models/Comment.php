<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    /**
     * COMMENT ATTRIBUTES
     *
     * $this->attributes['id']          - int     - contains the comment primary key (id)
     * $this->attributes['description'] - string  - contains the comment description
     * $this->attributes['product_id']  - int     - contains the associated product id
     * $this->product                   - Product - contains the associated Product
     */
    protected $fillable = ['description', 'product_id'];

    // --- ID ---
    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId(int $id): void
    {
        $this->attributes['id'] = $id;
    }

    // --- DESCRIPTION ---
    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    public function setDescription(string $desc): void
    {
        $this->attributes['description'] = $desc;
    }

    // --- PRODUCT ID ---
    public function getProductId(): int
    {
        return $this->attributes['product_id'];
    }

    public function setProductId(int $pId): void
    {
        $this->attributes['product_id'] = $pId;
    }

    // --- RELATION ---
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function setProduct($product): void
    {
        $this->product = $product;
    }
}
