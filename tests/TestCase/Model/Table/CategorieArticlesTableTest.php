<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategorieArticlesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategorieArticlesTable Test Case
 */
class CategorieArticlesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategorieArticlesTable
     */
    protected $CategorieArticles;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CategorieArticles',
        'app.Articles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CategorieArticles') ? [] : ['className' => CategorieArticlesTable::class];
        $this->CategorieArticles = TableRegistry::getTableLocator()->get('CategorieArticles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CategorieArticles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
