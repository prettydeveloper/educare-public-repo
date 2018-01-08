<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ObservatorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ObservatorsTable Test Case
 */
class ObservatorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ObservatorsTable
     */
    public $Observators;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.observators'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Observators') ? [] : ['className' => ObservatorsTable::class];
        $this->Observators = TableRegistry::get('Observators', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Observators);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
