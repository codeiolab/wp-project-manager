<?php

namespace CPM\Common\Transformers;

use CPM\Common\Models\Board;
use League\Fractal\TransformerAbstract;
use CPM\Common\Traits\Resource_Editors;

class Board_Transformer extends TransformerAbstract {

    use Resource_Editors;

    protected $defaultIncludes = [
        'creator', 'updater'
    ];

    public function transform( Board $item ) {
        return [
            'id'          => (int) $item->id,
            'title'       => $item->title,
            'description' => $item->description,
            'board_type'  => $item->type,
        ];
    }
}