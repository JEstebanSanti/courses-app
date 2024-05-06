<?php

namespace App\Support;

use Spatie\Csp\Directive;
use Spatie\Csp\Keyword;
use Spatie\Csp\Policies\Basic;
use Spatie\Csp\Value;
use Spatie\Csp\Scheme;

class CSP extends Basic
{
    public function configure()
    {
        parent::configure();

        $this
        ->addDirective(Directive::IMG, [
            'https://images.google.com',
        ]);
        $this->addDirective(Directive::DEFAULT, '*.courses-app-production-ea6c.up.railway.app');
        
        $this->addDirective(Directive::DEFAULT, '*.fonts.bunny.net');
    }
}