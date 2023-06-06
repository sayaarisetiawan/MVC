<?php 
class About {
    public function index($nama= 'Hallo', $kamu= 'Guys')
    {
        echo "$nama World, Great $kamu";
    }
    public function page()
    {
        echo 'about/page';
    }
}