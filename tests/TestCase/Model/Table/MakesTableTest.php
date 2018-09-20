<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MakesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MakesTable Test Case
 */
class MakesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MakesTable
     */
    public $Makes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.makes',
        'app.cars',
        'app.models'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Makes') ? [] : ['className' => MakesTable::class];
        $this->Makes = TableRegistry::getTableLocator()->get('Makes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Makes);

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
