<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OffresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OffresTable Test Case
 */
class OffresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OffresTable
     */
    protected $Offres;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Offres',
        'app.Materielinclus',
        'app.Paiements',
        'app.Serviceinclus',
        'app.Souscriptions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Offres') ? [] : ['className' => OffresTable::class];
        $this->Offres = TableRegistry::getTableLocator()->get('Offres', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Offres);

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
}
