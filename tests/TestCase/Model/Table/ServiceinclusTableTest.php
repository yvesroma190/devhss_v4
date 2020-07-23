<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiceinclusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiceinclusTable Test Case
 */
class ServiceinclusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiceinclusTable
     */
    protected $Serviceinclus;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Serviceinclus',
        'app.Offres',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Serviceinclus') ? [] : ['className' => ServiceinclusTable::class];
        $this->Serviceinclus = TableRegistry::getTableLocator()->get('Serviceinclus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Serviceinclus);

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
