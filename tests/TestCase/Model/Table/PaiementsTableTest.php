<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaiementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaiementsTable Test Case
 */
class PaiementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaiementsTable
     */
    protected $Paiements;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Paiements',
        'app.Clients',
        'app.Souscriptions',
        'app.Offres',
        'app.Etatpaiements',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Paiements') ? [] : ['className' => PaiementsTable::class];
        $this->Paiements = TableRegistry::getTableLocator()->get('Paiements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Paiements);

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
