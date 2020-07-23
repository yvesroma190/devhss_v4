<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EtatpaiementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EtatpaiementsTable Test Case
 */
class EtatpaiementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EtatpaiementsTable
     */
    protected $Etatpaiements;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Etatpaiements',
        'app.Paiements',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Etatpaiements') ? [] : ['className' => EtatpaiementsTable::class];
        $this->Etatpaiements = TableRegistry::getTableLocator()->get('Etatpaiements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Etatpaiements);

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
