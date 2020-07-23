<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterielinclusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterielinclusTable Test Case
 */
class MaterielinclusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterielinclusTable
     */
    protected $Materielinclus;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Materielinclus',
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
        $config = TableRegistry::getTableLocator()->exists('Materielinclus') ? [] : ['className' => MaterielinclusTable::class];
        $this->Materielinclus = TableRegistry::getTableLocator()->get('Materielinclus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Materielinclus);

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
