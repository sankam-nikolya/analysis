<?php
class Analysis_Metric_SecurityEmailPrivacyTest extends PHPUnit_Framework_TestCase
{
    public function testProcess()
    {
        $page = new Analysis\Page();
        $page->setUrl($GLOBALS['TEST_URL']);

        $analyzer = new Analysis\Analyzer();
        $analyzer->setPage($page);

        $metric = new Analysis\Metric\SecurityEmailPrivacy();
        $metric->setAnalyzer($analyzer);
        $metric->setPage($page);
        $metric->process();

        $this->assertEquals($metric->getPassLevel(), 'fail');
    }
}