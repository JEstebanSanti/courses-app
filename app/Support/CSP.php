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
        $this->addDirective(Directive::DEFAULT, 'https://courses-app-production-ea6c.up.railway.app');
        $this->addDirective(Directive::CONNECT, 'https://courses-app-production-ea6c.up.railway.app');
        $this->addDirective(Directive::STYLE, 'https://courses-app-production-ea6c.up.railway.app');
        $this->addDirective(Directive::BASE, '*.courses-app-production-ea6c.up.railway.app');


        
        $this->addDirective(Directive::FONT, 'https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap');
        $this->addDirective(Directive::CONNECT, 'https://fonts.bunny.net');
        
    }
}