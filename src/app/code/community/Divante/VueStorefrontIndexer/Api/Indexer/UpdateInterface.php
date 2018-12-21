<?php

/**
 * Interface Divante_VueStorefrontIndexer_Api_Indexer_UpdateInterface
 *
 * @package     Divante
 * @category    VueStoreFrontIndexer
 * @author      Agata Firlejczyk <afirlejczyk@divante.pl
 * @copyright   Copyright (C) 2018 Divante Sp. z o.o.
 * @license     See LICENSE_DIVANTE.txt for license details.
 */
interface Divante_VueStorefrontIndexer_Api_Indexer_UpdateInterface
{

    /**
     * @return string
     */
    public function getTypeName();

    /**
     * @param array $ids Empty array -> reindex all
     *
     * @return void
     */
    public function updateDocuments($storeId = null, array $ids = []);
}
