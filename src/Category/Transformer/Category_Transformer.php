<?php

namespace CPM\Category\Transformer;

use CPM\Category\Models\Category;
use League\Fractal\TransformerAbstract;
use CPM\Common\Traits\Resource_Editors;

class Category_Transformer extends TransformerAbstract {

    use Resource_Editors;

    protected $defaultIncludes = [
        'creator', 'updater',
    ];

    public function transform( Category $item ) {
        return [
            'id' => (int) $item->id,
            'title' => $item->title,
            'description' => $item->description,
            'categorible_type' => $item->categorible_type,
            'created_at' => format_date( $item->created_at ),
        ];
    }
}