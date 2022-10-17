<?php

namespace Mageplaza\HelloWorld\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        // Prepares database before install/upgrade
        $installer->startSetup();

        if(!$installer->tableExists('mageplaza_helloworld_post')) {

            $table = $installer->getConnection()->newTable(
                // Gets table name (validated by db adapter) by table placeholder
                $installer->getTable('mageplaza_helloworld_post')
            )->addColumn(
                'post_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                [
                    'indentity' => true,
                    'nullable'  => false,
                    'primary'   => true,
                    'unsigned'  => true
                ],
                'POST_ID'

            )->addColumn(

                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable => false'],
                'Post Name'

            )->addColumn(

                'url_key',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Post URL Key'

            )->addColumn(

                'post_content',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                '64k',
                [],
                'Post Content'

            )->addColumn(

                'tags',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Post Tags'

            )->addColumn(

                'status',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                1,
                [],
                'Post Status'

            )->addColumn(

                'featured_image',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Post Featured Image'

            )->addColumn(

                'created_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                [
                    'nullable' => false,
                    'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT
                ],
                'Created At'

            )->addColumn(

                'updated_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                [
                    'nullable' => false,
                    'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE
                ],
                'Updated At'

            )->setComment('Post Table');

            $installer->getConnection()->createTable($table);

            $installer->getConnection()->addIndex(

                $installer->getTable('mageplaza_helloworld_post'),
                $installer->getIdxName(

                    $installer->getTable('mageplaza_helloworld_post'),
                    ['name', 'url_key', 'post_content', 'tags', 'featured_image',],
                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT

                ),
                ['name', 'url_key', 'post_content', 'tags', 'featured_image',],
                \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT

            );

        }
        $installer->endSetup();
    }

}
