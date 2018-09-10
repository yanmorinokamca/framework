<?php

namespace Themosis\Metabox;

use Illuminate\Http\Request;

interface MetaboxManagerInterface
{
    /**
     * Handle metabox initialization.
     * Initialize metabox fields values.
     *
     * @param MetaboxInterface $metabox
     * @param Request          $request
     *
     * @return MetaboxInterface
     */
    public function getFields(MetaboxInterface $metabox, Request $request): MetaboxInterface;

    /**
     * Handle metabox post meta save.
     *
     * @param MetaboxInterface $metabox
     * @param Request          $request
     *
     * @return bool
     */
    public function saveFields(MetaboxInterface $metabox, Request $request): bool;
}
