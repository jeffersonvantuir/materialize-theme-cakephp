<?php
namespace Materialize\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use Materialize\View\Helper\FormHelper;

/**
 * Materialize\View\Helper\FormHelper Test Case
 */
class FormHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Materialize\View\Helper\FormHelper
     */
    public $Form;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Form = new FormHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Form);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
